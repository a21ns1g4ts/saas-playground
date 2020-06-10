<?php

namespace App\Events;

use App\Tenant;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TenantCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $tenant;

    public function __construct(Tenant $tenant)
    {
        $this->tenant = $tenant;
    }

    public function broadcastOn()
    {
        return new PrivateChannel(`created-tenant-{$this->tenant->id}`);
    }
}
