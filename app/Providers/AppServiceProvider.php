<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('access-admin-panel', function(User $user){
            return (bool) $user->is_admin;
        });

        Gate::define('update-post', function(User $user, Post $post){
            return (bool) $user->is_admin;
        });

        Gate::define('create-post', function(User $user, Category $category){
            return (bool) $user->is_admin;
        });
    }
}
