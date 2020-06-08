<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tenants()
    {
        return $this->belongsToMany(Tenant::class, 'profile_user');
    }

    public function profiles()
    {
        return $this->belongsToMany(Profile::class);
    }
}
