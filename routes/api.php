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

//payment callback url
Route::post('rotary/payment/callback', 'Website\CashDonationController@paymentCallback');

//payment callback url
Route::post('rotary/payment/api/callback', 'Website\DonationController@api_response');
