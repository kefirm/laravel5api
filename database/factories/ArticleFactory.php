<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(2),
        'body' => $faker->paragraph(200)
    ];
});
