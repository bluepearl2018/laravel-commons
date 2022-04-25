<?php

Route::middleware(['web', 'auth:admin'])->get('/setup/commons/config', function(){
	return view('commons::config');
})->name('setup.commons.config');