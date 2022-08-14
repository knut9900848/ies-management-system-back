<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Auth\AuthController;
use App\Http\Controllers\Api\V1\CompanyController;
use App\Http\Controllers\Api\V1\FileController;
use App\Http\Controllers\Api\V1\Admin\CategoryController;
use App\Http\Controllers\Api\V1\Admin\SubCategoryController;

/*
|--------------------------------------------------------------------------˜     
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/v1/user', function (Request $request) {
    return $request->user();
});

// Route::get('/v1/user', function(Request $request) {
//     return $request->user();
// });

Route::post('/v1/auth/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/v1/companies', [CompanyController::class, 'index']);
Route::middleware('auth:sanctum')->post('/v1/companies', [CompanyController::class, 'store']);
Route::middleware('auth:sanctum')->put('/v1/companies/{company}', [CompanyController::class, 'update']);

Route::middleware('auth:sanctum')->post('/v1/files', [FileController::class, 'singleImageUpload']);

Route::middleware('auth:sanctum')->get('/v1/admin/categories', [CategoryController::class, 'index']);
Route::middleware('auth:sanctum')->post('/v1/admin/categories', [CategoryController::class, 'store']);
Route::middleware('auth:sanctum')->put('/v1/admin/categories/{category}', [CategoryController::class, 'update']);

Route::middleware('auth:sanctum')->get('/v1/admin/categories/{category}/sub-categories', [SubCategoryController::class, 'index']);
Route::middleware('auth:sanctum')->post('/v1/admin/categories/{category}/sub-categories', [SubCategoryController::class, 'store']);
Route::middleware('auth:sanctum')->put('/v1/admin/categories/{category}/sub-categories/{subCategory}', [SubCategoryController::class, 'update']);

Route::get('/test', function() {
    return 'Test';
});
