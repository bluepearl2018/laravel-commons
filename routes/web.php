<?php
Route::middleware(['web'])->group(function () {
	Route::get('commons', function () {
		return view('commons::index');
	})->name('commons');
});