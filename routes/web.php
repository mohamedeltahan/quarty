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
Route::get('portfolio',"App\Http\Controllers\Projects\ProjectController@portfolio")->name("portfolio.index");

Route::get('portfolio/{id}',"App\Http\Controllers\Projects\ProjectController@show")->name("portfolio.show");

Route::resource('board/categories',"App\Http\Controllers\Categories\CategoryController");
Route::resource('board/projects',"App\Http\Controllers\Projects\ProjectController");
Route::get('board/categories_search',"App\Http\Controllers\Categories\CategoryController@Search")->name("categories.search");
Route::get('board/projects_search',"App\Http\Controllers\Projects\ProjectController@Search")->name("projects.search");
Route::post('board/projectphoto/delete',"App\Http\Controllers\Projects\ProjectController@DeleteProjectPhoto")->name("projectphoto.delete");



Route::get('/categories',"App\Http\Controllers\Categories\CategoryController@Search")->name("categories.search");

Route::resource('/clients',"App\Http\Controllers\Clients\ClientsController");
Route::resource('/services',"App\Http\Controllers\Services\ServicesController");
Route::resource('/contactus',"App\Http\Controllers\Contact\ContactUsController");
Route::get('/contact',"App\Http\Controllers\Contact\ContactUsController@create")->name("contact");

Route::get('/about', "App\Http\Controllers\HomeController@index")->name('about.index');
Route::post('/about', "App\Http\Controllers\HomeController@store")->name('about.store');
Route::put('/about/{id}', "App\Http\Controllers\HomeController@update")->name('about.update');


Route::get('/getphotos/{folder_name}', "App\Http\Controllers\HomeController@GetPhotos")->name('photos.index');
Route::post('/storephoto', "App\Http\Controllers\HomeController@StorePhoto")->name('photos.store');
Route::get("logout","App\Http\Controllers\Auth\LoginController@logout")->name("logout");


Route::delete('deletephotos', "App\Http\Controllers\HomeController@DestroyPhoto")->name('photos.destroy');
Auth::routes();

Route::get('/home', "App\Http\Controllers\HomeController@index")->name('home');
