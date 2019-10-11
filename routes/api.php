<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/migrations','ApiController@migrations')->name('migrations');
Route::get('/migration/{name}','ApiController@migration')->name('migration');



//    $files = Storage::disk('migrate')->allFiles();
//    return json_encode($files);


//
//Route::get('/migrations/{name}', function () {
//    $files = Storage::disk('migrate')->get();
//    return json_encode($files);
//})->name('migration');
