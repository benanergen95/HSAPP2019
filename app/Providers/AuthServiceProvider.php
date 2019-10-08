<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
=======
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
>>>>>>> 04d672c50e39fa270d202c42991c425ed25d5ae7

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
<<<<<<< HEAD
        // 'App\Model' => 'App\Policies\ModelPolicy',
=======
        'App\Model' => 'App\Policies\ModelPolicy',
>>>>>>> 04d672c50e39fa270d202c42991c425ed25d5ae7
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
