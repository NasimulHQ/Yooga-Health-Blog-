<?php

use App\Http\Controllers\Front\PageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PageController::class, 'homePage'])->name('front.home');
Route::get('/about-Us', [PageController::class, 'aboutUs'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('service');
Route::get('/blogs', [PageController::class, 'blogs'])->name('blog');
Route::get('/contact-Us', [PageController::class, 'contactUs'])->name('contact');


                        
