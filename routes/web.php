<?php

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

Route::get('/blog', 'HomeController@page');
Route::get('/{slug}', 'PostController@show');
Route::get('/category/{name}', 'HomeController@category');

Route::get('/search/title', 'HomeController@searchByTitle');
Route::get('/search/{id}', 'HomeController@show');

Route::get('/blog/tag/{name}', 'TagController@postTag');






Route::get('/welcome/a', function () {
    return view('manaPosts.post');
});
// Route::get('/master', function () {
// 	// $mobile = \App\User::find(1)->phone->mobile;


// 	//phone= function phone trong user
// 	// dd($mobile);

// 	// $post = \App\Comment::find(1)->Post->toArray();

// 	// $post = \App\User::find(2)->posts->toArray();
// 	// $a = \App\User::with('posts')->find(2);	
// 	// dd($a->posts->toArray());
//     return view('layouts.master');
// });






Route::prefix('admin')->group(function () {

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
      
Route::get('/post', 'AdminPostController@PostsAdmin')->name('post.PostsAdmin');

Route::get('/create', 'AdminPostController@createPostAdmin');
Route::post('/store', 'AdminPostController@storePost')->name('post.store');

Route::delete('/delete/{id}', 'AdminPostController@destroy')->name('del.destroy');
Route::get('/detail/{id}','AdminPostController@detail')->name('detail.show');

Route::get('/edit/{id}', 'AdminPostController@edit')->name('post.edit');
Route::post('/update/{id}', 'AdminPostController@update')->name('post.update');



Route::resource('/tag','AdminTagController'); 
Route::resource('/category','AdminCategoryController');   

Route::get('/a/tag/{id}', 'AdminTagController@destroy');

Route::get('/profile', 'HomeController@profile');

});


