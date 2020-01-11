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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');

    Route::resource('shops','ShopController');
    Route::get('/shops/info','ShopController@info');
});

// тестовый марщрут
Route::get('/test', function () {
   $v= \App\User::findOrFail(1)->name_email;

  $files= Storage::disk('migrate')->allFiles();
  $test='test var';
  $ars=$files;
 return view('test.test', compact('files','test','ars'));

})->name('test');


Route::get('/artisan_create_migrate', function (){
    Artisan::call('make:migration CreateQuestionsTable');
})->name('artisan_create_migrate');


Route::get('/artisan_migrate', function (){
    Artisan::call('migrate');
})->name('artisan_migrate');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
