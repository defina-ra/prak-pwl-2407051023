<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    protected $policies = [];

    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('view-users', function ($user) {
            return $user->hasRole('dosen');
        });

        Gate::define('create-users', function ($user) {
            return $user->hasRole('dosen');
        });

        Gate::define('update-users', function ($user) {
            return $user->hasRole('dosen');
        });

        Gate::define('delete-users', function ($user) {
            return $user->hasRole('dosen');
        });
    }
}