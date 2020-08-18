<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;


$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'email_verified_at' => $faker->optional()->dateTime(),
        'password' => $faker->bcrypt($faker->password),
        'remember_token' => $faker->optional()->md5,
    ];
});
