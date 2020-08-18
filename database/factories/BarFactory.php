<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */

use App\Bar;
use Faker\Generator as Faker;
use App\Campus;
use App\Buzon;
use App\Menu;
use App\Snack;


$factory->define(Bar::class, function (Faker $faker) {
    return [
        'campus_id' => $faker->optional()->randomDigit,
        'nombre' => $faker->text,
        'abierto' => $faker->boolean,
        //campus BelongsTo Campus campus_id
        //buzon HasMany Buzon id
        //menu HasMany Menu id
        //snack HasMany Snack id
    ];
});
