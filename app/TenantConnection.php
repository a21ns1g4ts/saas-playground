<?php

namespace App;

trait TenantConnection
{
    public function getConnectionName(): string
    {
        return 'tenant_01';
    }
}
