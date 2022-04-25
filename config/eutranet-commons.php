<?php
return [
	'name' => 'Eutranet commons',
	'description' => 'The resources contained in this package can be used in other packages. The tables contain resources such as countries, languages, genres... in several languages.',
	'tables' => array(
		/*
		|--------------------------------------------------------------------------
		| Tables
		|--------------------------------------------------------------------------
		|
		| The tables here are Eutranet's commons official migrations.
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
	'models' => array(
		/*
		|--------------------------------------------------------------------------
		| Tables
		|--------------------------------------------------------------------------
		|
		| The tables here are Eutranet's commons official migrations.
		|
		*/
		'Appellative',
		'AssetCategory',
		'CarBrand',
		'Car',
		'Country',
		'Gender',
		'Kinship',
		'Language',
		'MaritalStatus',
		'MatrimonialRegime',
		'MediaCollection',
		'Stability',
		'UserStatus',
		'WorkRegime',
		'WorkStatus'
	),
	'migrations' => array(
		/*
		|--------------------------------------------------------------------------
		| Tables
		|--------------------------------------------------------------------------
		|
		| The tables here are Eutranet's commons official migrations.
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