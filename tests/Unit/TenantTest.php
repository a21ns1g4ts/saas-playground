<?php

namespace Tests\Unit;

use App\Events\TenantCreated;
use App\Tenant;
use App\User;
use Illuminate\Support\Facades\Event;
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

    public function created_event_is_dispatched()
    {
        Event::fake([TenantCreated::class]);

        Event::assertNotDispatched(TenantCreated::class);

        factory(Tenant::class)->create();

        Event::assertDispatched(TenantCreated::class);
    }

}
