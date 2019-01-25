<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'id'=>$faker->uuid,
        'name' => $faker->randomElement(['Food', 'Drugs','Drinks']),
        'description'=> $faker->text,
        'price' => $faker->randomNumber,
        'category_name' => factory('App\Category')->create()->name,

    ];
});
