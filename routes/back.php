<?php

/**
 * -----------------------------------------------------------------------------*
 * COMMONS BACK ROUTES
 * -----------------------------------------------------------------------------*
 * All back routes MUST be called after the 'web' middleware
 * Otherwise, errors, eloquent models... won't be magically displayed
 */

use Eutranet\Be\Http\Controllers\BackendEmailController;

Route::middleware(['web', 'auth::staff'])->name('admin.')->prefix('admin')->group(function () {
	Route::post('send-welcome-email',[BackendEmailController::class, 'sendWelcomeEmail'])->name('send-welcome-email');
	Route::post('send-general-terms',[BackendEmailController::class, 'sendGeneralTerms'])->name('send-general-terms');
	Route::post('send-question-form',[BackendEmailController::class, 'sendQuestionForm'])->name('send-question-form');
	Route::post('send-prepare-documents',[BackendEmailController::class, 'sendPrepareDocuments'])->name('send-prepare-documents');
});