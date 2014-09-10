<?php

namespace Modules;

/**
 * Sets every module defined in modules config as package
 */
class ModulesServiceProvider extends \Illuminate\Support\ServiceProvider
{

    public function boot()
    {
        foreach( \Config::get('modules') as $module ){
            $this->package('app/' . $module, $module, app_path() . '/modules/' . $module);

        }
    }

    public function register()
    {
    }

}