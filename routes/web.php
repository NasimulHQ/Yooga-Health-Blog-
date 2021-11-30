<?php

use App\Http\Controllers\AnyQueryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Front\PageController;
use App\Http\Controllers\GoodHealthController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\YogaHealthController;
use Illuminate\Support\Facades\Route;
use Mockery\Matcher\Any;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PageController::class, 'homePage'])->name('front.home');
Route::get('/about-Us', [PageController::class, 'aboutUs'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('service');
Route::get('/blogs', [PageController::class, 'blogs'])->name('blog');
Route::get('/contact-Us', [PageController::class, 'contactUs'])->name('contact');
Route::get('/blog-details', [PageController::class, 'blogDetails'])->name('blogdetails');
Route::get('/blog-category/{slug}', [PageController::class, 'blogCategory'])->name('blog-Category');

Route::middleware(['auth'])->group(function () {
    //Yooga Practice for good health
    Route::get('goodhealths', [GoodHealthController::class, 'index']);
    Route::get('add-goodhealth', [GoodHealthController::class, 'create']);
    Route::post('add-goodhealth', [GoodHealthController::class, 'store']);
    Route::get('edit-goodhealth/{id}', [GoodHealthController::class, 'edit']);
    Route::put('update-goodhealth/{id}', [GoodHealthController::class, 'update']);
    Route::get('delete-goodhealth/{id}', [GoodHealthController::class, 'destroy']);

    //Welcome to yooga
    Route::get('welcomes', [WelcomeController::class, 'index']);
    Route::get('add-welcome', [WelcomeController::class, 'create']);
    Route::post('add-welcome', [WelcomeController::class, 'store']);
    Route::get('edit-welcome/{id}', [WelcomeController::class, 'edit']);
    Route::put('update-welcome/{id}', [WelcomeController::class, 'update']);

    // delete way, route num 01
    // (index.blade.php page delete button we can use it also no prblm for delete) Route::get('delete-welcome/{id}', [WelcomeController::class, 'destroy']);

    // delete way, route num 02
    Route::delete('delete-welcome/{id}', [WelcomeController::class, 'destroy']);


    // Expert yoga trainer->name('trainers');
    Route::get('trainers', [TrainerController::class, 'index']);
    Route::get('add-trainer', [TrainerController::class, 'create']);
    Route::post('add-trainer', [TrainerController::class, 'store']);
    Route::get('edit-trainer/{id}', [TrainerController::class, 'edit']);
    Route::put('update-trainer/{id}', [TrainerController::class, 'update']);
    Route::get('delete-trainer/{id}', [TrainerController::class, 'destroy']);

    // Our client say
    Route::get('clients', [ClientController::class, 'index'])->name('client');
    Route::get('add-client', [ClientController::class, 'create']);
    Route::post('add-client', [ClientController::class, 'store']);
    Route::get('edit-client/{id}', [ClientController::class, 'edit']);
    Route::put('update-client/{id}', [ClientController::class, 'update']);
    Route::get('delete-client/{id}', [ClientController::class, 'destroy']);

    //Latest Yoga Articles
    Route::get('articles', [ArticleController::class, 'index']);
    Route::get('add-article', [ArticleController::class, 'create']);
    Route::post('add-article', [ArticleController::class, 'store']);
    Route::get('edit-article/{id}', [ArticleController::class, 'edit']);
    Route::put('update-article/{id}', [ArticleController::class, 'update']);
    Route::get('delete-article/{id}', [ArticleController::class, 'destroy']);

    // Yoga For Health
    Route::get('yogahealths', [YogaHealthController::class, 'index']);
    Route::get('add-yogahealth', [YogaHealthController::class, 'create']);
    Route::post('add-yogahealth', [YogaHealthController::class, 'store']);
    Route::get('edit-yogahealth/{id}', [YogaHealthController::class, 'edit']);
    Route::put('update-yogahealth/{id}', [YogaHealthController::class, 'update']);
    Route::get('delete-yogahealth/{id}', [YogaHealthController::class, 'destroy']);

    // Contact us Any Query
    Route::get('anyquerys', [AnyQueryController::class, 'index']);
    Route::get('add-anyquery', [AnyQueryController::class, 'create']);
    Route::post('add-anyquery', [AnyQueryController::class, 'store']);
    Route::get('edit-anyquery/{id}', [AnyQueryController::class, 'edit']);
    Route::put('update-anyquery/{id}', [AnyQueryController::class, 'update']);
    Route::delete('delete-anyquery/{id}', [AnyQueryController::class, 'destroy']);

    
});
// Contact us form
Route::get('contact-us', [ContactController::class, 'Contact']);
Route::post('send-message', [ContactController::class, 'sendEmail']);

