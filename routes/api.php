<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('products', 'ProductController@count_status');

// route to fetch data according to case 1
Route::get('case/1', 'Productcase1Controller@fetch');
// roue to fetch data according to case 2
Route::get('case/2', 'Productcase2Controller@fetch');
// roue to fetch data according to case 3
Route::get('case/3', 'Productcase3Controller@fetch');

