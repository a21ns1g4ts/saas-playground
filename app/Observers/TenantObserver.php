<?php

namespace App\Observers;

use App\Events\TenantCreated;
use App\Jobs\CreateTenantDatabase;
use App\Tenant;

class TenantObserver
{
    public function saved(Tenant $tenant)
    {
        CreateTenantDatabase::dispatch($tenant);
    }
}
