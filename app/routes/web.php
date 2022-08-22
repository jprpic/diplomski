<?php

use App\Http\Controllers\CVController;
use App\Http\Controllers\JobAdController;
use App\Http\Controllers\OrgCVController;
use App\Http\Controllers\SearchController;
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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('/cv')->middleware(['auth','employee'])->group(function() {
    Route::post('/', [CVController::class, 'store'])->name('cv.store');
    Route::post('/edit', [CVController::class, 'update'])->name('cv.update');
    Route::get('/create', [CVController::class, 'create'])->name('cv.create');
});
Route::get('/cv/{id}', [CVController::class, 'show'])->name('cv.show');

Route::prefix('/job-ad')->middleware(['auth', 'organization', 'hasOrgCv'])->group(function() {
    Route::get('/create', [JobAdController::class, 'create'])->name('job.create');
    Route::post('/', [JobAdController::class, 'store'])->name('job.store');
    Route::get('/', [JobAdController::class, 'index'])->name('job.index');
    Route::get('/{id}',[JobAdController::class, 'show'])->name('job.show');
});

Route::prefix('/org-cv')->middleware(['auth', 'organization'])->group(function(){
    Route::get('/create', [OrgCVController::class, 'create'])->name('org-cv.create');
    Route::post('/', [OrgCVController::class, 'store'])->name('org-cv.store');
    Route::post('/edit', [OrgCVController::class, 'update'])->name('org-cv.update');
});


Route::middleware(['auth'])->group(function() {
    Route::get('/search', [SearchController::class, 'index'])->name('search');
    Route::post('/search', [SearchController::class, 'search'])->name('search.results');
});




require __DIR__.'/auth.php';
