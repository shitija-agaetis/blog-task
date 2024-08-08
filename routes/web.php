<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SimpleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\FavoriteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/category/favourite', [FavoriteController::class, 'favourite'])->name('favourite');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/category/{category}/unfavorite', [FavoriteController::class, 'removeFavorite'])->name('category.unfavorite');

    Route::delete('/category/{category}/unfavorite', [FavoriteController::class, 'removeFavorite'])->name('category.unfavorite');
    Route::post('/category/{category}/favorite', [FavoriteController::class, 'addFavorite'])->name('category.favorite');
    Route::delete('/category/{category}/unfavorite', [FavoriteController::class, 'removeFavorite'])->name('category.unfavorite');

    Route::post('/category/{category}/favorite', [FavoriteController::class, 'addFavorite'])->name('category.favorite');
    Route::delete('/category/{category}/unfavorite', [FavoriteController::class, 'removeFavorite'])->name('category.unfavorite');
    
    Route::get('/admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
});

Route::get('/category/blog', [SimpleController::class, 'blog'])->name('blog');
Route::get('/category', [SimpleController::class, 'index'])->name('category.index');
Route::get('/category/create', [SimpleController::class, 'create'])->name('category.create');
Route::post('/category', [SimpleController::class, 'store'])->name('category.store');
Route::get('/category/{category}', [SimpleController::class, 'show'])->name('category.show');
Route::get('/category/{category}/edit', [SimpleController::class, 'edit'])->name('category.edit');
Route::put('/category/{category}', [SimpleController::class, 'update'])->name('category.update');
Route::delete('/category/{category}', [SimpleController::class, 'destroy'])->name('category.destroy');

Route::get('/about-us', [SimpleController::class, 'aboutUs'])->name('about-us');
Route::get('/category/favourite', [FavoriteController::class, 'favourite'])->name('favourite');
Route::get('/category/{id}', [SimpleController::class, 'show'])->name('category.show');
Route::get('/category/{category}', [SimpleController::class, 'show'])->name('category.show');
Route::get('/category/{id}', [SimpleController::class, 'show'])->name('category.show');
Route::get('/category/{id}/readmore', [WeatherController::class, 'readmore'])->name('category.readmore');
require __DIR__.'/auth.php';
