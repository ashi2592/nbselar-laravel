<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

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
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('sendotp', [AuthController::class, 'sendotp']);
Route::post('verifyotp', [AuthController::class, 'verifyotp']);
Route::post('getProfile', [AuthController::class, 'getProfile']);
Route::post('UpdateProfile', [AuthController::class, 'UpdateProfile']);
Route::group(['middleware' => ['auth:api']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});


Route::post('/categories',[App\Http\Controllers\API\CategoryController::class, 'category']);
Route::post('/categoryid',[App\Http\Controllers\API\CategoryController::class, 'categoryid']);
Route::post('/products',[App\Http\Controllers\API\ProductController::class, 'products']);
Route::post('/productsBycat',[App\Http\Controllers\API\ProductController::class, 'productsBycat']);
Route::post('/notice',[App\Http\Controllers\API\NoticeController::class, 'notice']);
Route::post('/company',[App\Http\Controllers\API\CompanydetailsController::class, 'company']);
Route::post('/scancuppoints',[App\Http\Controllers\API\PointController::class, 'scanCupPoints']);
Route::post('/getPoints',[App\Http\Controllers\API\PointController::class, 'getPoints']);
Route::post('/getRetainedPointsHistory',[App\Http\Controllers\API\PointController::class, 'getRetainedPointsHistory']);
Route::post('/saveExchangeDetails',[App\Http\Controllers\API\ExchangeController::class, 'saveExchangeDetails']);
Route::post('/getExchangeDetails',[App\Http\Controllers\API\ExchangeController::class, 'getExchangeDetails']);
Route::post('/savemachineDetails',[App\Http\Controllers\API\MachineController::class, 'savemachineDetails']);
Route::post('/getNearbyStores',[App\Http\Controllers\API\MachineController::class, 'getNearbyStores']);



