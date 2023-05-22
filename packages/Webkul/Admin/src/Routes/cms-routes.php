<?php

use Illuminate\Support\Facades\Route;
use Webkul\CMS\Http\Controllers\Admin\PageController;

/**
 * CMS routes.
 */
Route::group(['middleware' => ['web', 'admin', 'admin_locale'], 'prefix' => config('app.admin_url')], function () {
    Route::prefix('cms')->group(function () {
        Route::get('/', [PageController::class, 'index'])->defaults('_config', [
            'view' => 'admin::cms.index',
        ])->name('admin.cms.index');

        Route::get('create', [PageController::class, 'create'])->defaults('_config', [
            'view' => 'admin::cms.create',
        ])->name('admin.cms.create');

        Route::post('create', [PageController::class, 'store'])->defaults('_config', [
            'redirect' => 'admin.cms.index',
        ])->name('admin.cms.store');

        Route::get('edit/{id}', [PageController::class, 'edit'])->defaults('_config', [
            'view' => 'admin::cms.edit',
        ])->name('admin.cms.edit');

        Route::post('edit/{id}', [PageController::class, 'update'])->defaults('_config', [
            'redirect' => 'admin.cms.index',
        ])->name('admin.cms.update');

        Route::post('/delete/{id}', [PageController::class, 'delete'])->defaults('_config', [
            'redirect' => 'admin.cms.index',
        ])->name('admin.cms.delete');

        Route::post('/massdelete', [PageController::class, 'massDelete'])->defaults('_config', [
            'redirect' => 'admin.cms.index',
        ])->name('admin.cms.mass-delete');
    });


    // RATING SECTION ENDS------------

//    Route::get('/ratings/datatables', [PageController::class,'reviewDatatables'])->name('admin-rating-datatables'); //JSON REQUEST
//
//    Route::get('reviews', [PageController::class, 'reviewIndex'])->defaults('_config', [
//        'view' => 'admin::review.index',
//    ])->name('admin.review.index');
//
////    Route::get('/reviews', [PageController::class,'reviewIndex'])->name('admin-rating-index'); //JSON REQUEST
//    Route::get('/ratings/delete/{id}', [PageController::class,'reviewDestroy'])->name('admin-rating-delete'); //JSON REQUEST
//    Route::get('/ratings/show/{id}', [PageController::class,'reviewShow'])->name('admin-rating-show'); //JSON REQUEST
//    Route::get('/reviews', 'Admin\RatingController@index')->name('admin-rating-index');
//    Route::delete('/ratings/delete/{id}', 'Admin\RatingController@destroy')->name('admin-rating-delete');
//    Route::get('/ratings/show/{id}', 'Admin\RatingController@show')->name('admin-rating-show');

    // RATING SECTION ENDS------------

});