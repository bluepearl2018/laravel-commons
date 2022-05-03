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
        | Models
        |--------------------------------------------------------------------------
        |
        | The models available in Eutranet's common package.
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
        | Migrations
        |--------------------------------------------------------------------------
        |
        | The migrations file names.
        |
        */
        'create_appellatives_table',
        'create_asset_categories_table',
        'create_car_brands_table',
        'create_cars_table',
        'create_countries_table',
        'create_genders_table',
        'create_kinships_table',
        'create_languages_table',
        'create_marital_statuses_table',
        'create_matrimonial_regimes_table',
        'create_media_collections_table',
        'create_stabilities_table',
        'create_user_statuses_table',
        'create_work_regimes_table',
        'create_work_statuses_table',
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
