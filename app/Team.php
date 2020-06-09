<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use TenantConnection;

    protected $fillable = [
        'name'
    ];
}
