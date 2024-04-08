<?php

use App\Http\Controllers\Admin\Blog\BlogCategoriesControllers;
use App\Http\Controllers\Admin\Blog\BlogCommentsController;
use App\Http\Controllers\Admin\Blog\BlogPostsController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\ScreenShotController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\AppsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GlobalSeoController;

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

Route::group(['prefix'=>'admin', 'middleware'=>['auth']],function (){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin/dashboard');
    Route::group(['as' => 'admin.'], function(){
        // Feature
        Route::resource('feature', FeatureController::class);
        // screenshot
        Route::resource('screenshot', ScreenShotController::class);
        // faq
        Route::resource('faq', FaqController::class);
        // media
        Route::resource('media', \App\Http\Controllers\Admin\MediaController::class);
        // apps
        Route::resource('apps', AppsController::class);

        Route::resource('seo', GlobalSeoController::class);

        Route::prefix('page')->name('page.')->group(function(){
            Route::controller(\App\Http\Controllers\Admin\HomePageController::class)->prefix('home')->name('home.')->group(function() {
                Route::get('/', 'index')->name('index');
                Route::get('/main-section', 'mainSection')->name('main-section');
                Route::get('/about-section', 'aboutSection')->name('about-section');
                Route::get('/feature-section', 'featureSection')->name('feature-section');
                Route::get('/download-section', 'downloadSection')->name('download-section');
                Route::get('/install-section', 'installSection')->name('install-section');
                Route::get('/working-screenshot', 'workingSection')->name('working-section');
                Route::get('/screenshot-section', 'screenshotSection')->name('screenshot-section');

                Route::put('/main-section/{sectionName}', 'homePageUpdate')->name('section.update');
            });
            Route::controller(\App\Http\Controllers\Admin\DownloadPageController::class)->prefix('download')->name('download.')->group(function (){
                Route::get('/', 'index')->name('index');
                Route::get('/main', 'main')->name('main');
                Route::get('/installation', 'installation')->name('installation');
                Route::get('/additional-content', 'additionalContent')->name('additional-content');
                Route::get('/seo', 'seo')->name('seo');

                Route::put('/update/{sectionName}', 'update')->name('update');
            });
        });
        Route::controller(\App\Http\Controllers\Admin\PageController::class)->prefix('page')->name('page.')->group(function() {
            Route::get('/about-us', 'aboutUsMainSection')->name('about-us');
            Route::get('/about-us/main-section', 'aboutUsMainSection')->name('about-us.main-section');
            Route::get('/about-us/seo', 'aboutUsSeo')->name('about-us.seo');

            Route::get('/disclaimer', 'disclaimer')->name('disclaimer');
            Route::get('/disclaimer/seo', 'disclaimerSeo')->name('disclaimer.seo');

            Route::get('/privacy-policy', 'privacyPolicy')->name('privacy-policy');
            Route::get('/privacy-policy/seo', 'privacyPolicySeo')->name('privacy-policy.seo');

            Route::get('/terms-conditions', 'termsConditions')->name('terms-conditions');
            Route::get('/terms-conditions/seo', 'termsConditionsSeo')->name('terms-conditions.seo');

            Route::put('/update/{slug}', 'update')->name('seo.update');

        });
        Route::controller(\App\Http\Controllers\SiteMapController::class)->prefix('sitemap')->name('sitemap.')->group(function (){
            Route::get('/update', 'index')->name('update');
        });
        Route::controller(ContactMessageController::class)->prefix('contact-message')->name('contact-message.')->group(function (){
            Route::get('/', 'index')->name('index');
        });
        Route::controller(\App\Http\Controllers\Admin\ExecuteCommandController::class)->group(function(){
            Route::get('/execute-command', 'index')->name('execute');
            Route::post('/execute-command', 'execute')->name('execute');
        });
        Route::controller(\App\Http\Controllers\Admin\ThemeStyleController::class)->name('theme.')->group(function(){
            Route::get('/theme', 'index')->name('index');
            Route::post('/theme/update', 'update')->name('update');
        });
    });

    Route::controller(ProfileController::class)->prefix('profile')->group(function (){
        Route::get('/change-password', 'changePassword')->name('admin/profile/changePassword');
        Route::post('/store-change-password', 'storeChangePassword')->name('admin/profile/storeChangePassword');
    });

    //Blogs Routes
    Route::group(['prefix' => 'blog-post'], function (){

        Route::controller(BlogPostsController::class)->group(function (){
            Route::get('/index', 'index')->name('admin/blog/post/index');
            Route::get('/create', 'create')->name('admin/blog/post/create');
            Route::post('/store', 'store')->name('admin/blog/post/store');
            Route::get('/edit/{id}', 'edit')->name('admin/blog/post/edit');
            Route::post('/update/{id}', 'update')->name('admin/blog/post/update');
            Route::delete('/delete/{id}', 'destroy')->name('admin/blog/post/destroy');
        });

        Route::controller(BlogCategoriesControllers::class)->prefix('/categories')->group(function (){
            Route::get('/index', 'index')->name('admin/blog/category/index');
            Route::get('/create', 'create')->name('admin/blog/category/create');
            Route::post('/store', 'store')->name('admin/blog/category/store');
            Route::get('/edit/{id}', 'edit')->name('admin/blog/category/edit');
            Route::post('/update/{id}', 'update')->name('admin/blog/category/update');
            Route::delete('/delete/{id}', 'destroy')->name('admin/blog/category/destroy');
        });

        Route::controller(BlogCommentsController::class)->prefix('/comments')->group(function (){
            Route::get('/', 'index')->name('admin/blog/comments/index');
            Route::get('/approve-toggle/{id}', 'toggleApprove')->name('admin/blog/comments/toggleApprove');
            Route::delete('/destroy/{id}', 'destroy')->name('admin/blog/comments/destroy');
        });
    });

});
