<?php

namespace Eutranet\Commons\View\Composers;

use Illuminate\View\View;

class CommonsConfigComposer
{
    public function __construct()
    {
        $this->config = config('eutranet-commons');
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view
            ->with('package_name', $this->config['name'])
            ->with('package_description', $this->config['description'])
            ->with('package_tables', $this->config['tables'])
            ->with('package_migrations', $this->config['migrations'])
        ;
    }
}
