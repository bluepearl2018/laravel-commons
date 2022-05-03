<?php

use Eutranet\Commons\Http\Controllers\AppellativeController;
use Eutranet\Commons\Http\Controllers\CarController;
use Eutranet\Commons\Http\Controllers\CarBrandController;
use Eutranet\Commons\Http\Controllers\CountryController;
use Eutranet\Commons\Http\Controllers\GenderController;
use Eutranet\Commons\Http\Controllers\KinshipController;
use Eutranet\Commons\Http\Controllers\LanguageController;
use Eutranet\Commons\Http\Controllers\MaritalStatusController;
use Eutranet\Commons\Http\Controllers\MatrimonialRegimeController;
use Eutranet\Commons\Http\Controllers\MediaCollectionController;
use Eutranet\Commons\Http\Controllers\StabilityController;
use Eutranet\Commons\Http\Controllers\UserStatusController;
use Eutranet\Commons\Http\Controllers\WorkRegimeController;
use Eutranet\Commons\Http\Controllers\WorkStatusController;
use Eutranet\Commons\Http\Controllers\AssetCategoryController;

/**
 * -----------------------------------------------------------------------------*
 * COMMONS SETUP ROUTES
 * -----------------------------------------------------------------------------*
 * All setuo routes MUST be called after the 'web' middleware
 * Otherwise, errors, eloquent models... won't be magically displayed
 */
Route::middleware(['web'])->group(function () {
    Route::prefix('setup')->name('setup.')->middleware(['role:content-manager', 'auth:admin'])->group(
        function () {
            Route::resource('appellatives', AppellativeController::class)->names('appellatives');
            Route::resource('asset-categories', AssetCategoryController::class)->names('asset-categories');
            Route::resource('cars', CarController::class)->names('cars');
            Route::resource('car-brands', CarBrandController::class)->names('car-brands');
            Route::resource('countries', CountryController::class)->names('countries');
            Route::resource('genders', GenderController::class)->names('genders');
            Route::resource('kinships', KinshipController::class)->names('kinships');
            Route::resource('languages', LanguageController::class)->names('languages');
            Route::resource('marital-statuses', MaritalStatusController::class)->names('marital-statuses');
            Route::resource('matrimonial-regimes', MatrimonialRegimeController::class)->names('matrimonial-regimes');
            Route::resource('media-collections', MediaCollectionController::class)->names('media-collections');
            Route::resource('stabilities', StabilityController::class)->names('stabilities');
            Route::resource('user-statuses', UserStatusController::class)->names('user-statuses');
            Route::resource('work-regimes', WorkRegimeController::class)->names('work-regimes');
            Route::resource('work-statuses', WorkStatusController::class)->names('work-statuses');
        }
    );
});
