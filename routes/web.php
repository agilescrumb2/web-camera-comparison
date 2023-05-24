<?php
use App\Http\Controllers\CameraController;
use App\Http\Controllers\CompareController;
use App\Http\Controllers\CompareLensaController;
use App\Http\Controllers\CompareFullkitController;
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
Route::get('/compare', function () {
    return view('frontend.pages.compare');
});
Route::get('/compare_kamera', function () {
    return view('frontend.pages.compare_kamera');
});
Route::get('/compare_lensa', function () {
    return view('frontend.pages.compare_lensa');
});
Route::get('/compare_fullkit', function () {
    return view('frontend.pages.compare_fullkit');
});

Route::get('/about', function () {
    return view('frontend.pages.about');
});
Route::get('/compareKamera', [CompareController::class, 'compare'])->name('compare');
Route::get('/compareKamera/add/{id}', [CompareController::class, 'add'])->name('compare.add');
Route::get('/compareKamera/remove/{id}', [CompareController::class, 'remove'])->name('compare.remove');
Route::get('/compareKamera/clear', [CompareController::class, 'clear'])->name('compare.clear');

Route::get('/compareFullkit', [CompareFullkitController::class, 'compareFullkit'])->name('compareFullkit');
Route::get('/comparefullkit/addFullkit/{id}', [CompareFullkitController::class, 'addFullkit'])->name('compareFullkit.add');
Route::get('/comparefullkit/removeFullkit/{id}', [CompareFullkitController::class, 'removeFullkit'])->name('compareFullkit.remove');
Route::get('/comparefullkit/clearFullkit', [CompareFullkitController::class, 'clearFullkit'])->name('compareFullkit.clear');

Route::get('/compareLens', [CompareLensaController::class, 'compareLens'])->name('compareLens');
Route::get('/comparelensa/addLens/{id}', [CompareLensaController::class, 'addLens'])->name('compareLens.add');
Route::get('/comparelensa/removeLens/{id}', [CompareLensaController::class, 'removeLens'])->name('compareLens.remove');
Route::get('/comparelensa/clearLens', [CompareLensaController::class, 'clearLens'])->name('compareLens.clear');

// Kamera
Route::get('search', [CameraController::class, 'search'])->name('search');
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