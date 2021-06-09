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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // // Admin
        
        // Gate::define('isAdmin', function($online) {
        //     return $online->role_id == 1;
        // });

        // // Webmaster (+ Admin)

        // Gate::define('isWebmaster', function($online) {
        //     return $online->role_id == 1 || $online->role_id == 2;
        // });

        // // Writer (+ Admin)

        // Gate::define('isWriter', function($online) {
        //     return $online->role_id == 1 || $online->role_id == 3;
        // });

        // // Member (+ Admin)

        // Gate::define('isMember', function($online) {
        //     return $online->role_id == 1 || $online->role_id == 4;
        // });
    }
}
