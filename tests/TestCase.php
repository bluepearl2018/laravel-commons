<?php

namespace Eutranet\Commons\Tests;

use Eutranet\Commons\Providers\CommonsServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
	public function setUp(): void
	{
		parent::setUp();
		// additional setup
	}

	protected function getPackageProviders($app): array
	{
		return [
			CommonsServiceProvider::class,
		];
	}

	protected function getEnvironmentSetUp($app)
	{
		// perform environment setup
	}
}
