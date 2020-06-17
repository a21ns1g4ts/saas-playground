<?php

namespace App;

use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;

class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase;

    protected $fillable = [
        'name',
        'data'
    ];

    public function getTenantKey()
    {
        return $this->id;
    }

    public static function getCustomColumns(): array
    {
        return [
            'id',
            'name'
        ];
    }

    public function getIncrementing()
    {
        return true;
    }

    public function users()
    {
        return $this->belongsToMany(User::class , 'profile_user');
    }
}
