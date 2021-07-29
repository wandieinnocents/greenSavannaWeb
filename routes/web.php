<?php

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

Route::get('/', function () {
    return view('welcome');
});

// FRONT END ROUTES
// about us 
Route::get('/about' , 'App\Http\Controllers\PagesController@about');
Route::get('/team' , 'App\Http\Controllers\PagesController@team');
Route::get('/service' , 'App\Http\Controllers\PagesController@our_services');
Route::get('/pictorial' , 'App\Http\Controllers\PagesController@pictorial');
Route::get('/pricing' , 'App\Http\Controllers\PagesController@pricing');
// projects
Route::get('/project' , 'App\Http\Controllers\PagesController@project');
// contact
Route::resource('/contacts' , 'App\Http\Controllers\ContactController');
// orders
Route::resource('/orders' , 'App\Http\Controllers\OrderController');







// BACKEND ROUTES
// image upload
// Route::resource('/imagess','App\Http\Controllers\ImageUploadController');
//multiple image upload
// Route::resource('/multipleimages','App\Http\Controllers\MultipleImageUploadController')->mi  ddleware('auth');

Route::get('/users' , 'App\Http\Controllers\PagesController@users')->middleware('auth');
// dashboard
Route::get('/dashboard' , 'App\Http\Controllers\AdminPagesController@dashboard')->middleware('auth');
// orders
// Route::get('/orders' , 'App\Http\Controllers\AdminPagesController@view_orders')->middleware('auth');
// quotes
// Route::get('/quotes' , 'App\Http\Controllers\AdminPagesController@quotes')->middleware('auth');
// add product 
Route::resource('/products','App\Http\Controllers\ProductController')->middleware('auth');
// add product Category
Route::resource('/product_categories','App\Http\Controllers\ProductCategoryController');
Route::resource('/categories','App\Http\Controllers\CategoryController');
// project categories
Route::resource('/project_categories','App\Http\Controllers\ProjectCategoryController')->middleware('auth');
// projects
Route::resource('/projects','App\Http\Controllers\ProjectController');
// team
// Route::resource('/teams','App\Http\Controllers\TeamController');
//about
// Route::resource('/abouts','App\Http\Controllers\AboutController');
//service
Route::resource('/services','App\Http\Controllers\ServiceController');
//gallery category
Route::resource('/gallery_categories','App\Http\  Controllers\GalleryCategoryController')->middleware('auth');
//gallery
Route::resource('/galleries','App\Http\Controllers\GalleryController')->middleware('auth');


// Auth::routes();
// disable register route
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// logout
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


