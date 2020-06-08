<?php

use App\Profile;
use Illuminate\Database\Seeder;

class ProfilesSeed extends Seeder
{
    public function run()
    {
        Profile::create(['name' => 'Admin']);
        Profile::create(['name' => 'Member']);
    }
}
