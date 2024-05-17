<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;


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
Route::get('generateClientKey',[ApiController::class,'generateClientKey']);
Route::Post('getAccessToken',[ApiController::class,'accessToken']);
Route::Post('getCountry',[ApiController::class,'countryList']);
Route::Post('getNumberType',[ApiController::class,'numberTypes']);
Route::Post('getAvailableNumber',[ApiController::class,'availableNumber']);
Route::Post('rangelist',[ApiController::class,'rangeList']);
Route::Post('addOrder',[ApiController::class,'addOrder']);
Route::Post('viewOrder',[ApiController::class,'viewOrder']);
