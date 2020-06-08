<?php

namespace Tests\Unit;

use App\Tenant;
use App\User;
use Tests\TestCase;

class TenantTest extends TestCase
{
    public function test_if_tenant_has_user_relation()
    {
        // create
        $user = factory(User::class)->create();
        $tenant = factory(Tenant::class)->create();
        // attach
        $tenant->users()->attach([$user->id => ['profile_id' => 1]]);
        // assert
        $this->assertInstanceOf('App\User', $tenant->users()->first());
    }
}
