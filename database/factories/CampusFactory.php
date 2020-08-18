<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */

use App\Campus;
use Faker\Generator as Faker;
use App\Bar;


$factory->define(Campus::class, function (Faker $faker) {
    return [
        'nombre' => $faker->text,
        'direccion' => $faker->text,
        //bar HasMany Bar id
    ];
});
