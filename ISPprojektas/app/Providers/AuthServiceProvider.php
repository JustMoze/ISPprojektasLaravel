<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('usersManagement', function($user){
            return $user->hasRole('Administratorius');
        });
        Gate::define('User', function($user){
            return $user->hasRole('Vartotojas','Administratorius');
        });
        Gate::define('justUser', function($user){
          return $user->hasRole('Vartotojas');
        });
        //
    }
}
