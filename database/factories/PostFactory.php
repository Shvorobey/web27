<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker){
    return [
        'autors_id' => $faker->randomDigitNotNull,
        'title' => $faker->text(30),
        'body' => $faker->text(999),
        'img' => $faker->imageUrl(750, 300),
    ];
});
