<?php

use Illuminate\Support\Facades\Route;
use Illuminate\support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    'verified',
    config('jetstream.auth_session')
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/posts',[\App\Http\Controllers\Postcontroller::class,'index']);
    Route::get('/posts/add',[\App\Http\Controllers\Postcontroller::class,'add']);
    Route::post('/posts/store',[\App\Http\Controllers\Postcontroller::class,'store'])->name('post.store');
    Route::get( '/posts/search',[\App\Http\Controllers\Postcontroller::class, 'search'])->name('posts.search');
    Route::get('/posts/reviews/{id}',[\App\Http\Controllers\Reviewcontroller::class,'write_review'])->name('post.review');
    Route::post('/posts/reviews/store',[\App\Http\Controllers\Reviewcontroller::class,'store_review'])->name('store.review');
    Route::get('/posts/reviews/edit/{id}',[\App\Http\Controllers\Reviewcontroller::class,'edit_review'])->name('review.edit');
    Route::get('/posts/reviews/delete/{id}',[\App\Http\Controllers\Reviewcontroller::class,'delete_review'])->name('review.delete');

});

Route::get('/CustomizePlan',[\App\Http\Controllers\UserController::class,'index']);
Route::get('/Emergency',[\App\Http\Controllers\EmergencyController::class,'index']);
Route::get('/Scan',[\App\Http\Controllers\ScanController::class,'index']);
Route::post('Storeimg',[\App\Http\Controllers\ScanController::class,'store'])->name('image.save');
Route::get('/Destinations',[\App\Http\Controllers\UserController::class,'destination']);
Route::get('/AboutUs',[\App\Http\Controllers\UserController::class,'AboutUs']);
Route::get('/Testimonial',[\App\Http\Controllers\UserController::class,'Testimonial']);
Route::get('/ContactUs',[\App\Http\Controllers\UserController::class,'ContactUs']);
Route::get('/Interests',[\App\Http\Controllers\UserController::class,'Interests']);



Route::get('/send', function(){

    Mail::to('heia582001@gmail.com')->send(new \App\Mail\testmail);
    return response('sending');

});

