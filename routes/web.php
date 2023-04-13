<?php

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

use App\Http\Controllers\TempController;
use Illuminate\Support\Facades\Route;

//Route::get('update-categories', [TempController::class, 'updateCategories'])->name('temp');

//Route::get('update-products', [TempController::class, 'updateProducts'])->name('temp');

//sanitize product category fields
Route::get('sanitize', function () {
    sanitize_product_category_fields();
})->name('sanitize');