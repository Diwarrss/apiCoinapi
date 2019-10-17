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

/* API Key: 7AAE569E-9840-4EE1-8C96-AA66290F0075
https://rest.coinapi.io/v1/exchangerate/BTC
https://rest.coinapi.io/v1/exchangerate/ETH
https://rest.coinapi.io/v1/exchangerate/XRP */

//creamos las Rutas API para consumir con Vuejs
Route::get('/getbtc', 'CoinapiController@getbtc')->name('getbtc');
Route::get('/getetc', 'CoinapiController@getetc')->name('getetc');
Route::get('/getxrp', 'CoinapiController@getxrp')->name('getxrp');
