<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\UserService;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(UserService::class, function ($app) {
            $users = [
                [
                    'id' => 1,
                    'name' => 'Joshua Bernardino',
                    'gender' => 'Male',
                    'age' => '21'
                ], 
                [
                    'id' => 2,
                    'name' => 'Renzo Toledo',
                    'gender' => 'Female',
                    'age' => '20'
                ]                           
            ];
            return new UserService($users);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
