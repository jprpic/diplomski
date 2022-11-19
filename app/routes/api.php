<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SearchController;
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

Route::get('/search', [SearchController::class, 'apiSearch']);

Route::get('/users', [DashboardController::class, 'getUsers']);
Route::get('/cvs', [DashboardController::class, 'getCVs']);
Route::get('/org-cvs', [DashboardController::class, 'getOrgCVs']);
Route::get('/job-ads', [DashboardController::class, 'getJobAds']);

Route::get('/applications', [DashboardController::class, 'getApplications']);

Route::prefix('/application')->group(function() {
    Route::get('/', [ApplicationController::class,'index'])->name('application.index');
    Route::get('/{id}', [ApplicationController::class,'applicantsIndex'])->name('application.applicantsIndex');
});

