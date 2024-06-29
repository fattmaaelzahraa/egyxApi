<?php

namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class Postcontroller extends Controller
{
    public function index()
    {
        $products = Product::orderBy("id")->paginate(4);
        return view("Post/Posts", compact("products"));

    }

    public function add()
    {

        return view('Post/Add_post');
    }



    public function search(Request $request){

        $query = $request->input('query');

        $products = Product::where('Product_name', 'like', '%' . $query . '%')->paginate(4);

        return view('Post/Posts', compact('products','query'));

    }



    // public function write_review($id){
    //     $product = Product::find($id);

    //     $reviews = Review::where('product_id', $id)
    //     ->join('users', 'reviews.user_id', '=', 'users.id')
    //     ->select('reviews.*', 'users.name as name', 'users.profile_photo_path', 'users.id')
    //     ->get();
        
      
    
    //     return view('Post/reviews', compact('product', 'reviews'));
    // }

    

    // public function store_review(Request $request){

    //      $userr = Auth::user();
    //      $user_id = $userr->id;
        

    //     $newreview = Review::create([

    //         'user_id'=> $user_id,
    //         'product_id'=> $request->product_id,
    //         'description'=> $request->message,

    //      ]);
        

    //      return redirect('/posts')->with('message', 'added successfully');

    // }





    public function store(Request $request)
    {
        //  check if it exists in the database

        $exists = Product::where('Product_name', $request->product_name)->exists();

        if ($exists) {

            //  if it exists in the database

            $existing_product = Product::where('Product_name', $request->product_name)->first();
            $existing_product_id =  $existing_product->id;


            // check if the price payed is too absured

            $product_to_update = Product::findorfail($existing_product_id);
            if ($request->price < $product_to_update->Avg_price / 4 || $request->price > $product_to_update->Avg_price*4) {

              return redirect('/posts')->with('message', 'that price is too different from our data! you can add a review about what happened here');
             
          } else {

                    //  inserting into the pivot table
                        try {
                            $userr = Auth::user();
                            $user_id = $userr->id;

                            $user = User::find($user_id);
                            //  $product = Product::find($product_id);

                            $user->posts_products()->attach($existing_product_id, ['price' => $request->price]);
                        } catch (\Exception $e) {

                            return redirect('/posts')->with('message', 'you have already submitted a price of this product you can write a review if the price is too different');
                        }

                    //calc avg price

                            $averageprice = DB::table('posts')
                                ->where('product_id', $existing_product_id)
                                ->avg('price');

                        

                        //update the products table

                            
                            $product_to_update->update([

                                'Avg_price' => $averageprice,

                        ]);

                        return redirect('/posts')->with('message', 'added successfully');
                   }

        }  
        
        else {
            //  Does not exist in the database

            $image = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('imgs_of_posts', $image, 'public');


            $newproduct = Product::create([
                'Product_name' => $request->product_name,
                'path' => $path,
                'Avg_price' => $request->price
        ]);
            $product_id = $newproduct->id;
            $userr = Auth::user();
            $user_id = $userr->id;

            $user = User::find($user_id);
            //  $product = Product::find($product_id);

            $user->posts_products()->attach($product_id, ['price' => $request->price]);

            return redirect('/posts')->with('message', 'added successfully');

        }

    }
}