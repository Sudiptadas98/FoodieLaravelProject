<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Restaurants;
use Faker\Generator as Faker;

$factory->define(Restaurants::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class),
        'restoname' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->address
    ];
});
