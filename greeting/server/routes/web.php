<?php

use App\Http\Controllers\commentController;
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

// Route::<HTTPメソッド>('<アドレス>', '<コントローラー名@アクション名>');
Route::get('comments/{msg}', 'commentController@show');
Route::get('comments/{msg}/{comment}', 'commentController@show');