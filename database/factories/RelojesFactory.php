<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reloj;
use Faker\Generator as Faker;

$factory->define(Reloj::class, function (Faker $faker) {
    return [
        "color" => $faker->colorName(),
        "correa" => $faker->word(),
        "funciones" => $faker->word(),
        "garantia" => '2 años' ,
        "material_caja" => $faker->word(),
        "movimiento" => $faker->word(),
        "material_marco" => $faker->word()
    ];
});
