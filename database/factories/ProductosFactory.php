<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        "marca_id" => $faker->numberBetween(1, 6),
        "categoria_id" => 1,
        "modelo" => $faker->word(),
        "descripcion" => $faker->sentence(6) ,
        "precio" => $faker->numberBetween(10000, 99999),
        "stock" => $faker->numberBetween(0, 99),
        "origen" => $faker->country(),
        "nombre_imagen_1" => "2.jpg",
        "nombre_imagen_2" => "3.jpg",
        "nombre_imagen_3" => "1.jpg"
    ];
});
