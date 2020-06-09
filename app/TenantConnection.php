<?php

namespace App;

trait TenantConnection
{
    /**
     * @return string
     */
    public function getConnectionName(): string
    {
        return 'tenant_test';
    }
}
