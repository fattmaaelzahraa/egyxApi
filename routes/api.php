<?php

use App\Http\Controllers\Api\DetectController;
use App\Http\Controllers\Api\emailVerificationController;
use App\Http\Controllers\Api\ForgetPasswordController;
use App\Http\Controllers\Api\PlaceController;
use App\Http\Controllers\Api\PlanController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ResetPasswordController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\VisitController;
use App\Models\User;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


 Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/auth/register',[UserController::class,'createUser']);
Route::post('/auth/login',[UserController::class,'LoginUser']);

Route::post('password/forgot-password', [ForgetPasswordController::class, 'forgotPassword']);
Route::post('password/reset', [ResetPasswordController::class, 'passwordReset']);

Route::middleware('auth:sanctum')->group(function ()
{
    Route::post('/user/ProfilePhoto',[UserController::class,'uploadProfilePicture']);
    Route::post('/user/updateProfilePhoto',[UserController::class,'updateProfilePicture']);
    Route::delete('/user/deleteProfilePhoto',[UserController::class,'deleteProfilePicture']);
    Route::post('/user/{id}/updateUserData',[UserController::class,'updateUserData']);
    Route::delete('/user/destroy/{id}', [UserController::class, 'destroyAccount']);
    Route::get('user/userdata/{id}',[UserController::class, 'GetUserData']);

    Route::post('/places/{place_id}/like-unlike',[App\Http\Controllers\Api\VisitController::class,'store']);
    Route::get('/user/Liked-places',[App\Http\Controllers\Api\VisitController::class, 'LikedPlaces']);
    Route::post('/places/{place_id}/rate', [App\Http\Controllers\Api\VisitController::class, 'rate']);

    Route::post('/Monuments/{monument_id}/ReadLater', [DetectController::class, 'ReadLater']);
    Route::get('/user/ViewReadLater', [DetectController::class, 'ViewReadLater']);

    Route::post('/products/AddProduct', [App\Http\Controllers\Api\ProductController::class, 'AddProduct']);
    Route::get('/products/ViewProducts', [App\Http\Controllers\Api\ProductController::class, 'ViewPosts']);

    Route::post('/products/{product_id}/review', [ProductController::class, 'Review']);
    Route::get('/products/ViewReviews/{product_id}', [ProductController::class, 'ViewReviews']);
    Route::post('/products/{review_id}/EditReview', [ProductController::class, 'EditReview']);
    Route::delete('/products/{review_id}/DeleteReview', [ProductController::class, 'DeleteReview']);

    Route::get('/select', [PlaceController::class, 'select'])->name('places.select');
    Route::post('/store-filter-request', [PlaceController::class, 'FilterRequest']);
    Route::get('/get-filtered-places/{id}', [PlaceController::class, 'getFilteredPlaces']);
    Route::get('/place/show/{id}',[PlaceController::class,'show'])->name('places.show');
    Route::get('/places', [PlaceController::class, 'ViewAllPlaces']);

    Route::post('/plan/CreateTravelPlan',[PlanController::class, 'CreateTravelPlan']);
    Route::get('/plan/getFilteredPlacesForPlan/{plan_id}',[PlanController::class, 'getFilteredPlacesForPlan']);
    Route::post('/plan/SelectPlacesForPlan/{plan_id}',[PlanController::class, 'SelectPlacesForTrip']);

    Route::post('/plan/addToWishlist/{plan_id}',[PlaceController::class, 'addToWishlist']);
    Route::get('/plan/GetWishlist',[PlanController::class, 'getUserWishlist']);

    Route::get('/plan/selectforAiPlan',[PlaceController::class, 'AiPlan']);
    Route::post('/plan/FilerRequestForAiPlan',[PlaceController::class, 'FilterRequestForAiPlan']);
    Route::get('/plan/getAiPlan/{plan_id}', [PlaceController::class, 'getAiPlan']);

    Route::post('/auth/logout', [UserController::class, 'logout']);
    Route::post('/email-verification', [EmailVerificationController::class,'email_verification']);
    Route::get('/email-verification', [EmailVerificationController::class,'sendEmailVerification']);
});
