<?php
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\BundleController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\TransactionController;
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

Route::get('/networks',[NetworkController::class,'index']);
Route::post('/networks',[NetworkController::class,'store']);
Route::get('/networks/{id}',[NetworkController::class,'show']);
Route::put('/networks/{id}',[NetworkController::class,'update']);
Route::delete('/networks/{id}',[NetworkController::class,'destroy']);

Route::get('/bundles',[BundleController::class,'index']);
Route::post('/bundles',[BundleController::class,'store']);
Route::get('/bundles/{id}',[BundleController::class,'show']);
Route::put('/bundles/{id}',[BundleController::class,'update']);
Route::delete('/bundles/{id}',[BundleController::class,'destroy']);

Route::get('/packages',[PackageController::class,'index']);
Route::post('/packages',[PackageController::class,'store']);
Route::get('/packages/{id}',[PackageController::class,'show']);
Route::put('/packages/{id}',[PackageController::class,'update']);
Route::delete('/packages/{id}',[PackageController::class,'destroy']);



