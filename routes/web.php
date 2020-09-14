<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
/*
Route::get('/', function () {
    return view('index');
});
*/
/*
Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog');
*/
Route::get('/hotel', function () {
    return view('hotel');
});

Route::get('/', 'MenuPagesController@ajax_index2')->name('index');
Route::get('/blog', 'MenuPagesController@blog')->name('blog');
Route::get('/contact', 'MenuPagesController@contact')->name('contact');
Route::get('/about', 'MenuPagesController@about')->name('about');
Route::get('/catalog', 'MenuPagesController@ajax_listings2')->name('listings');
Route::get('/single', 'MenuPagesController@single')->name('single');
Route::get('/property/{property}', 'MenuPagesController@property')->name('property');
Route::get('/categories', 'MenuPagesController@categories')->name('categories');
Route::get('/category/{category}', 'MenuPagesController@category')->name('category');

//Route::get('/layouts/ajax_index', 'MenuPagesController@ajax_index')->name('ajax_index');
Route::get('/layouts/ajax_listings', 'MenuPagesController@ajax_listings')->name('ajax_listings');

Route::get('/layouts/ajax_city', 'MenuPagesController@ajax_city')->name('ajax_city');
Route::get('/ajax_filter_input_property_type', 'MenuPagesController@ajaxFilterInputPropertyType')->name('ajax_filter_input_property_type');
Route::get('/ajax_filter_input_rooms', 'MenuPagesController@ajaxFilterInputRooms')->name('ajax_filter_input_rooms');
Route::get('/ajax_filter_input_location', 'MenuPagesController@ajaxFilterInputLocation')->name('ajax_filter_input_location');




Auth::routes();
Route::group([
    'middleware' => ['auth'],
    'prefix' => 'home',
    'as' => 'home.',
],
    function () {

        Route::resource('/', 'HomeController');

        Route::resource('/properties', 'PropertyController', ['names' => [
            'img-dropzone-fetch' => 'home.properties.img-dropzone-fetch',
            'img-dropzone-delete' => 'home.properties.{id?}.img-dropzone-delete',
            'img-dropzone-upload' => 'home.properties.{id}.img-dropzone-upload',
        ]]);


    });

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function () {
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
    Route::resource('/', 'UsersController', ['except' => ['show', 'create', 'store']]);
});
