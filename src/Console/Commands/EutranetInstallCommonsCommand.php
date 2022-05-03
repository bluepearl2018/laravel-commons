<?php

namespace Eutranet\Commons\Console\Commands;

use Eutranet\Init\Console\Commands\InstallPackageCommand;

class EutranetInstallCommonsCommand extends InstallPackageCommand
{
    public function __construct()
    {
        $this->signature = 'eutranet:install-commons';
        parent::__construct('commons', $this->signature);
    }
}
