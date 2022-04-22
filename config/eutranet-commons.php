<?php
return [
	'name' => 'Eutranet commons',
	'tables' => array(
		/*
		|--------------------------------------------------------------------------
		| Tables
		|--------------------------------------------------------------------------
		|
		| The tables here are Eutranet's commmons official migrations.
		|
		*/
		'appellatives',
		'asset_categories',
		'car_brands',
		'cars',
		'countries',
		'genders',
		'kinships',
		'languages',
		'marital_statuses',
		'matrimonial_regimes',
		'media_collections',
		'stabilities',
		'user_statuses',
		'work_regimes',
		'work_statuses'
	),
	/*
	|--------------------------------------------------------------------------
	| Media collections
	|--------------------------------------------------------------------------
	|
	| Media collections to be created in the media_collections
	|
	*/
	'media_collection' => array(
		'eutranet'
	),
	/*
	|--------------------------------------------------------------------------
	| Middlewares
	|--------------------------------------------------------------------------
	|
	| Commons Migrated ?
	|
	*/
	'middlewares' => array(
		'web',
		'commons-migrated',
		// 'role:super-admin'
	),
];