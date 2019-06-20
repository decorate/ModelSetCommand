<?php

namespace Decorate\Providers;

use Decorate\Commands\ModelSetCommand;
use Illuminate\Support\ServiceProvider;

class ModelSetCommandServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            //Artisanコマンド　登録
            $this->commands([
                ModelSetCommand::class
            ]);
        }
    }
}
