<?php

use Illuminate\Http\Request;
use App\Config;
use App\House;
use App\Contract;
use App\User;

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


//House api route
Route::get('houses', 'HouseController@index');
Route::get('houses/{house}', 'HouseController@show');
Route::post('houses', 'HouseController@store');
Route::put('houses/{house}', 'HouseController@update');
Route::delete('houses/{house}', 'HouseController@delete');

//Contract api route
Route::get('contracts', 'ContractController@index');
Route::get('contracts/{contract}', 'ContractController@show');
Route::post('contracts', 'ContractController@store');
Route::put('contracts/{contract}', 'ContractController@update');
Route::delete('contracts/{contract}', 'ContractController@delete');

//Config api route
Route::get('configs', 'ConfigController@index');
Route::get('configs/{config}', 'ConfigController@show');
Route::post('configs', 'ConfigController@store');
Route::put('configs/{config}', 'ConfigController@update');
Route::delete('configs/{config}', 'ConfigController@delete');