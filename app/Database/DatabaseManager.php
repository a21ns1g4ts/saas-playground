<?php

namespace App\Database;

use Illuminate\Support\Facades\DB;

class DatabaseManager
{
    public function create($name)
    {
        return DB::statement("CREATE DATABASE $name");
    }

    public function drop($name)
    {
        return DB::statement("DROP DATABASE $name");
    }
}
