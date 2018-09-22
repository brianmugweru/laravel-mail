<?php

use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->catchPhrase,
        'price' => $faker->numberBetween(10, 100),
    ];
});
