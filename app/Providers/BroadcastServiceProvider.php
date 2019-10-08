<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;
=======
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Broadcast;
>>>>>>> 04d672c50e39fa270d202c42991c425ed25d5ae7

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
}
