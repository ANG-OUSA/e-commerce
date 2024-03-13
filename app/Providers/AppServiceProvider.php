<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

use \Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
  
    public function register(): void
    {
        
    }

    

    public function boot(): void
    {
        Schema::defaultStringLength(191);
    }
}