<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    function AddProduct(Request $request): JsonResponse
    {
        $validateUser = Validator::make($request->all(), [
            'Product_name' => 'required|string',
            'path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric'
        ]);

        if ($validateUser->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validateUser->errors()
            ], 422);
        }

        try {
            DB::beginTransaction();
            $user = $request->user();
            if (!$user) {
                return response()->json([
                    'message' => 'User not authenticated'
                ], 401);
            }
            Log::info('User authenticated: ' . $user->id);

            $existedProduct = Product::where('Product_name', $request->Product_name)->first();
            if ($existedProduct) {
                $existedProduct_id = $existedProduct->id;
                if ($request->price < $existedProduct->Avg_price / 4 || $request->price > $existedProduct->Avg_price * 4) {
                    return response()->json([
                        'message' => 'That price is too different from our data! You can add a review about what happened here.'
                    ], 409);
                }
                $existingPost = DB::table('posts')
                    ->where('user_id', $user->id)
                    ->where('product_id', $existedProduct_id)
                    ->exists();

                if ($existingPost) {
                    return response()->json([
                        'message' => 'You have already submitted a price for this product. You can write a review if the price is too different.'
                    ], 409);
                }
                $user->posts_products()->attach($existedProduct_id, ['price' => $request->price]);
                $averagePrice = DB::table('posts')
                    ->where('product_id', $existedProduct_id)
                    ->avg('price');
                $existedProduct->update([
                    'Avg_price' => $averagePrice
                ]);
                DB::commit();
                return response()->json([
                    'message' => 'Added successfully',
                    'Avg_price' => $averagePrice
                ], 200);
            } else {
                if ($request->hasFile('path')) {
                    $file = $request->file('path');
                    $fileName = time() . '_' . $file->getClientOriginalName();
                    $filePath = 'imgs_of_posts/' . $fileName;

                    $file->move(public_path('storage/imgs_of_posts'), $fileName);

                    $newProduct = Product::create([
                        'Product_name' => $request->Product_name,
                        'path' => $filePath,
                        'Avg_price' => $request->price
                    ]);
                    $user->posts_products()->attach($newProduct->id, ['price' => $request->price]);
                    DB::commit();
                    return response()->json([
                        'message' => 'Added successfully',
                        'Avg_price' => $request->price
                    ], 200);
                } else {
                    return response()->json([
                        'message' => 'No file uploaded'
                    ], 400);
                }
            }
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error in AddProduct: ' . $e->getMessage());
            return response()->json([
                'message' => 'An error occurred while processing your request',
                'error' => $e->getMessage()
            ], 500);
        }
    }








    public function ViewPosts(Request $request): JsonResponse
    {
        $user = $request->user();
        if (!$user) {
            return response()->json([
                'message' => 'User not authenticated'
            ], 401);
        }

        $posts = DB::table('posts')
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->join('products', 'posts.product_id', '=', 'products.id')
            ->select('posts.*', 'users.name as user_name', 'products.avg_price', 'products.path as image_path', 'products.Product_name', 'products.created_at')
            ->get();

        foreach ($posts as $post) {
            $post->image_url = url('storage/' . $post->image_path);
        }

        return response()->json([
            'posts' => $posts
        ], 200);
    }



    public function Review(Request $request, int $product_id): JsonResponse
    {
        $request->validate([
            'description' => 'required|string',
        ]);

        $user = $request->user();
        if (!$user) {
            return response()->json([
                'message' => 'User not authenticated'
            ], 401);
        }

        $productExists = DB::table('products')->where('id', $product_id)->exists();

        if (!$productExists) {
            return response()->json([
                'message' => 'Product not found'
            ], 404);
        }
            DB::table('reviews')->insert([
                'user_id' => $user->id,
                'product_id' => $product_id,
                'description' => $request->description,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return response()->json([
                'message'=>'your review has been added',
                'user_id'=>$user->id
            ], 201);

        }



    public function ViewReviews(Request $request, $product_id): JsonResponse
    {
        $user = $request->user();
        if (!$user) {
            return response()->json([
                'message' => 'User not authenticated'
            ], 401);
        }

        if (!$product_id) {
            return response()->json([
                'message' => 'Product ID is required'
            ], 400);
        }

        $reviews = DB::table('reviews')
            ->join('users', 'reviews.user_id', '=', 'users.id')
            ->join('products', 'reviews.product_id', '=', 'products.id')
            ->select(
                'reviews.id',
                'reviews.description',
                'users.name as user_name',
                'users.id as user_id',
                'products.product_name as product_name',
                'reviews.created_at'
            )
            ->where('reviews.product_id', '=', $product_id)
            ->get();

        return response()->json([
            'reviews' => $reviews
        ], 200);
    }




    public function EditReview(Request $request, int $review_id): JsonResponse
    {
        $request->validate([
            'description' => 'string|required',
        ]);

        $user = $request->user();
        if (!$user) {
            return response()->json([
                'message' => 'User not authenticated'
            ], 401);
        }


        $review = DB::table('reviews')->where('id', $review_id)->where('user_id', $user->id)->first();
        if (!$review) {
            return response()->json([
                'message' => 'Review not found or you are unauthorized to edit this review'
            ], 404);
        }
        DB::table('reviews')
            ->where('id', $review_id)
            ->update([
                'description' => $request->description,
            ]);

        return response()->json([
            'message' => 'Your review has been updated',
            'user_id'=>$user->id
        ], 200);
    }



    public function DeleteReview(Request $request, int $review_id): JsonResponse
    {
        $user = $request->user();
        if (!$user) {
            return response()->json([
                'message' => 'User not authenticated'
            ], 401);
        }

        $review = DB::table('reviews')->where('id', $review_id)->where('user_id', $user->id)->first();
        if (!$review) {
            return response()->json([
                'message' => 'Review not found or you are unauthorized to delete this review'
            ], 404);
        }

        DB::table('reviews')->where('id', $review_id)->delete();

        return response()->json([
            'message' => 'Your review has been deleted'
        ], 200);
    }
}



