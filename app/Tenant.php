<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $fillable = [
        'name', 'db_connection', 'db_host', 'db_password', 'db_host', 'db_port'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class , 'profile_user');
    }
}
