<?php

namespace App\Providers;

use App\Policies\RestaurantsPolicy;
use App\User;
use App\Restaurants;
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

        // Gate::define('edit-restaurant', function (User $user, Restaurants $restaurants) {
        //     return $user->id === $restaurants->user_id;
        // });
    }
}
