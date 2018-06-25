<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\User;
use Mail;
use App\Events\UserRegistered;

class EloquentEventServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
