<?php

use App\Http\Controllers\AjaxRequestsController;
use App\Http\Controllers\Frontend\BlogsController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/register', function(){
    return redirect()->route('home');
});
Route::get('dynamic-css', '\App\Http\Controllers\DynamicCssController@index')->name('dynamic-css');
Route::controller(HomeController::class)->group(function (){
    Route::get('/', 'index')->name('home');
    Route::get('/disclaimer', 'disclaimer')->name('front.disclaimer');
    Route::get('/terms-conditions', 'termsConditions')->name('front.termsConditions');
    Route::get('/privacy-policy', 'privacyPolicy')->name('front.privacyPolicy');
});

//Pages Route
Route::controller(PagesController::class)->group(function (){
    Route::get('/download', 'downloadApp')->name('frontend/download');
    Route::post('/download-by-link', 'downloadByLink')->name('frontend/downloadByLink');
    Route::get('/about-us', 'about')->name('frontend/about');
    Route::get('/contact', 'contact')->name('frontend/contact');
    Route::post('/contact-store', 'contactStore')->name('frontend/contact/sent');
    Route::get('/terms-and-conditions', 'termsAndConditions')->name('frontend/termsAndConditions');
});

//Blogs Route
Route::controller(BlogsController::class)->group(function (){
    Route::get('/blog', 'posts')->name('frontend/posts');
    Route::get('/blog/{slug}', 'postDetails')->name('frontend/posts/details');
    Route::get('/blog/categories/{slug}', 'blogByCaregory')->name('frontend/posts/category');
    Route::post('/blog/comment/store', 'storeComment')->name('frontend/posts/details/comment');
});

//Ajax request
//Route::controller(AjaxRequestsController::class)->group(function (){
//    Route::post('/common-content', 'commonContent')->name('ajaxRequest/CommonContent');
//});

