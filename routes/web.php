<?php
use App\Http\Controllers\CameraController;
use App\Http\Controllers\CompareController;
use App\Http\Controllers\LensaController;
use App\Http\Controllers\FullkitController;

use Illuminate\Support\Facades\Route;

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
    return view('frontend.pages.index');
});

Route::get('/compare_kamera', function () {
    return view('frontend.pages.compare_kamera');
});
Route::get('/detail', function () {
    return view('frontend.pages.detail');
});


Route::get('/compare/add/{id}', [CompareController::class, 'add'])
    ->name('compare.add');

Route::get('/compare', [CompareController::class, 'compare'])
    ->name('compare');

Route::get('/compare/clear', [CompareController::class, 'clear'])
    ->name('compare.clear');

// Kamera
Route::post('/kamera/search', [CameraController::class, 'search'])->name('cameras.search');
Route::get('/kamera', [CameraController::class, 'index'])->name('cameras.index');
Route::get('/kamera/{id}', [CameraController::class, 'show'])->name('cameras.show');

// Lensa
Route::post('/lensa/search', [LensaController::class, 'search'])->name('lensas.search');
Route::get('/lensa', [LensaController::class, 'index'])->name('lensas.index');
Route::get('/lensa/{id}', [LensaController::class, 'show'])->name('lensas.show');

// Fullkit
Route::post('/fullkit/search', [FullkitController::class, 'search'])->name('fullkits.search');
Route::get('/fullkit', [FullkitController::class, 'index'])->name('fullkits.index');
Route::get('/fullkit/{id}', [FullkitController::class, 'show'])->name('fullkits.show');

// Compare
// Rute untuk menambahkan produk ke perbandingan (compare)
Route::post('/compare/add/{productId}', [CameraController::class, 'addToCompare'])->name('compare.add');
// Route::get('/compare', [CompareController::class, 'showComparePage'])->name('compare');
// Route::post('/cart/add/{productId}', [CompareController::class, 'addToCart'])->name('cart.add');
// Route::delete('/cart/remove/{productId}', [CompareController::class, 'removeFromCart'])->name('cart.remove');