<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Reviews;
use Faker\Generator as Faker;

$factory->define(Reviews::class, function (Faker $faker) {
    return [
        'product_id' => function(){
            return \App\Model\Product::all()->random();
        },
        'customer' => $faker->name,
        'review' => $faker->paragraph(2, true),
        'star' => $faker->randomFloat(1, 0, 5),
    ];
});
