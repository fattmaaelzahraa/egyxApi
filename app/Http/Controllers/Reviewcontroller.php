<?php
namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Reviewcontroller extends Controller
{
    public function write_review($id): Factory|View|Application
    {
        $product = Product::find($id);
        $reviews = Review::where('product_id', $id)
        ->join('users', 'reviews.user_id', '=', 'users.id')
        ->select('reviews.*', 'users.name as name', 'users.profile_photo_path')
        ->orderBy('reviews.created_at', 'desc')
        ->get();
        return view('Post/reviews', compact('product', 'reviews'));
    }
    public function store_review(Request $request): RedirectResponse
    {
         $userr = Auth::user();
         $user_id = $userr->id;
        $newreview = Review::create([
            'user_id'=> $user_id,
            'product_id'=> $request->product_id,
            'description'=> $request->message,
         ]);
       return redirect()->route('post.review', $request->product_id);
    }
    public function edit_review($id){
        return $id;
    }
    public function delete_review($id){
        $review = Review::find($id);
        $review->delete();
        $product_id = $review->product_id;
        return redirect()->route('post.review',$product_id);
    }
}
