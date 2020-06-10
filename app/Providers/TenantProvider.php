<?php

namespace App\Providers;

use App\Observers\TenantObserver;
use App\Tenant;
use Illuminate\Support\ServiceProvider;

class TenantProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        Tenant::observe(new TenantObserver);
    }
}
