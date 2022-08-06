<?php

use App\Http\Controllers\CVController;
use App\Http\Controllers\SearchController;
use App\Models\CV;
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


Route::prefix('cv')->group(function() {
    Route::post('/', [CVController::class, 'store'])->name('cv.store');
    Route::post('/edit', [CVController::class, 'update'])->name('cv.update');
    Route::get('/', [CVController::class, 'show'])->name('cv.show');
});

Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::post('/search', [SearchController::class, 'search'])->name('search.results');


require __DIR__.'/auth.php';
