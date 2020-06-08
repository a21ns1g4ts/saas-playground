<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name' , 'client_id'
    ];

    public function tenant()
    {
        return $this->hasOne(Tenant::class);
    }
}
