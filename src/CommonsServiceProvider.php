<?php

namespace Eutranet\Commons;

use Eutranet\Init\PackageServiceProvider;
use Eutranet\Init\Package;
use Eutranet\Commons\View\Composers\CommonsConfigComposer;
use Eutranet\Commons\Console\Commands\EutranetInstallCommonsCommand;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use Eutranet\Setup\Http\Middleware\SetupMigratedMiddleware;
use Eutranet\Commons\Providers\CommonsMenuServiceProvider;

class CommonsServiceProvider extends PackageServiceProvider
{
	public function configurePackage(Package $package): void
	{
		$package
			->name('laravel-commons')
			->hasConfigFile('eutranet-commons') // php artisan vendor:publish --tag=your-laravel-init-name-config
			->hasViews('commons')
			->hasTranslations()
			// ->hasViewComponent('setup', Alert::class)
			->hasViewComposer('*', CommonsConfigComposer::class)
			->hasMigrations([
				'create_marital_statuses_table',
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
			])
			->hasViewComposer('commons::config', CommonsConfigComposer::class)
			->hasCommand(EutranetInstallCommonsCommand::class)
			->hasRoutes(['config', 'web', 'back', 'setup']);
		// ->hasMigration('create_package_tables');
	}

	public function boot()
	{
		parent::boot();

		// ... other things
		$this->registerRoutes();

		$router = $this->app->make(Router::class);
		$router->aliasMiddleware('commons-migrated', SetupMigratedMiddleware::class);
		$router->pushMiddlewareToGroup('web', 'commons-migrated');
	}

	protected function registerRoutes()
	{
		Route::group($this->routeConfiguration(), function () {
			$this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
			$this->loadRoutesFrom(__DIR__ . '/../routes/back.php');
			$this->loadRoutesFrom(__DIR__ . '/../routes/setup.php');
		});
	}

	protected function routeConfiguration(): array
	{
		return [
			'middleware' => config('eutranet-commons.middlewares'),
		];
	}

	public function register()
	{
		parent::register();
		$this->loadMigrationsFrom(app_path('Eutranet/Commons/database/migrations'));
		$this->app->register(CommonsMenuServiceProvider::class);
		$this->app->bind('dropdown-facade', function ($name) {
			return $name;
		});
		$this->app->bind('table-facade', function ($name) {
			return $name;
		});
		$this->app->bind('show-facade', function ($name) {
			return $name;
		});
		$this->app->bind('create-facade', function ($name) {
			return $name;
		});
		$this->app->bind('validation-facade', function ($name) {
			return $name;
		});
		$this->app->bind('edit-facade', function ($name) {
			return $name;
		});
		$this->app->bind('list-facade', function ($name) {
			return $name;
		});
		$this->app->bind('people-facade', function ($name) {
			return $name;
		});
		$this->app->bind('grid-facade', function ($name) {
			return $name;
		});
	}
}