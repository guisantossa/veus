<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $this->faker->words(rand(2,5), true),
        'brand' => $this->faker->words(rand(1,5), true),
        'price' => rand(0.50, 100.00),
        'quantity' => rand(0,1000),
        'deleted' => 0,
    ];
});
