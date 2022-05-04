<?php

/**
 * -----------------------------------------------------------------------------*
 * EUTRANT COMMONS CONFIG ROUTES
 * -----------------------------------------------------------------------------*
 * Routes that should be made available to main administrators
 * Todo check this
 */

Route::middleware(['web'])->get('/setup/commons/config', function () {
    return view('commons::config');
})->name('setup.commons.config');
