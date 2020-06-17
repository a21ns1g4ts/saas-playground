<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Tenant;

$factory->define(Tenant::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});
