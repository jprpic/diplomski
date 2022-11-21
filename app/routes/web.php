<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobAdController;
use App\Http\Controllers\OrgCVController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return redirect('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('/cv')->middleware(['auth','employee'])->group(function() {
    Route::post('/', [CVController::class, 'store'])->name('cv.store');
    Route::get('/create', [CVController::class, 'create'])->name('cv.create');
});
Route::get('/cv/{id}', [CVController::class, 'show'])->name('cv.show');
Route::post('/cv/edit', [CVController::class, 'update'])->name('cv.update');

Route::middleware(['auth','admin'])->group(function() {
    Route::get('/cv/{id}/edit', [CVController::class, 'edit'])->name('cv.edit');
    Route::delete('/admin/cv/{id}', [CVController::class, 'remove'])->name('cv.remove');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/{id}/edit', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/{id}', [UserController::class, 'remove'])->name('user.remove');
});

Route::prefix('/job-ad')->middleware(['auth', 'organization', 'hasOrgCv'])->group(function() {
    Route::get('/create', [JobAdController::class, 'create'])->name('job-ad.create');
    Route::post('/', [JobAdController::class, 'store'])->name('job-ad.store');
    Route::get('/', [JobAdController::class, 'index'])->name('job-ad.index');
    Route::get('/{id}',[JobAdController::class, 'show'])->name('job-ad.show');
    Route::get('/{id}/edit',[JobAdController::class, 'edit'])->name('job-ad.edit');
    Route::delete('/{id}',[JobAdController::class, 'remove'])->name('job-ad.remove');
});
Route::prefix('/admin/job-ad')->middleware(['auth','admin'])->group(function() {
    Route::get('/{id}/edit',[JobAdController::class, 'edit'])->name('job-ad.edit.admin');
    Route::delete('/{id}',[JobAdController::class, 'removeAdmin'])->name('job-ad.remove.admin');
});
Route::post('/job-ad/{id}/edit',[JobAdController::class, 'update'])->name('job-ad.update');
Route::get('/job-ad/{id}/details', [JobAdController::class, 'details'])->name('job-ad.details');

Route::prefix('/org-cv')->middleware(['auth', 'organization'])->group(function(){
    Route::get('/create', [OrgCVController::class, 'create'])->name('org-cv.create');
    Route::post('/', [OrgCVController::class, 'store'])->name('org-cv.store');
});
Route::get('/org-cv/{id}/edit', [OrgCVController::class, 'edit'])->name('org-cv.edit')->middleware(['auth']);
Route::get('/org-cv/{id}', [OrgCVController::class, 'show'])->name('org-cv.show');
Route::post('/org-cv/{id}/edit', [OrgCVController::class, 'update'])->name('org-cv.update')->middleware(['auth']);
Route::delete('/org-cv/{id}', [OrgCVController::class, 'delete'])->name('org-cv.delete')->middleware(['auth','admin']);

Route::middleware(['auth'])->group(function() {
    Route::get('/search', [SearchController::class, 'index'])->name('search');
    Route::post('/search', [SearchController::class, 'search'])->name('search.results');
    Route::get('/applications', [ApplicationController::class, 'userIndex'])->name('user.applications');
    Route::post('/application/', [ApplicationController::class,'store'])->name('application.store');
    Route::post('/application/response', [ApplicationController::class ,'respondApplication'])->name('application.response');
});









require __DIR__.'/auth.php';
