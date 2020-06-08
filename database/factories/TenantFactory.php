<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Tenant;

$factory->define(Tenant::class, function (Faker $faker) {
    return [
        'name' => $faker->name ,
        'db_connection' => $faker->slug('2'),
        'db_password' => $faker->password(24) ,
        'db_host' => $faker->ipv4
    ];
});
