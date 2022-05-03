<?php

/**
 * -----------------------------------------------------------------------------*
 * EUTRANT COMMONS CONFIG ROUTES
 * -----------------------------------------------------------------------------*
 * Routes that should be made available to main administrators
 * Todo check this
 */
Route::middleware(['web'])->group(function () {
    Route::get('commons', function () {
        return view('commons::index');
    })->name('commons');
});
