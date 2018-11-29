<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'tittle' => $faker->sentence(3),
        'n_system' => $faker->randomNumber(9),
        'isbn' => $faker->isbn13,
        'pages' => $faker->randomNumber(3),
        'author' => $faker->name,
        'theme' => $faker->sentence(3),
        'copies' => $faker->randomNumber(2),
        'bar_code' => $faker->ean8,
        'classification' => '000.00 AAA 0000',
        'division_id' => $faker->numberBetween(1,3),
        'degree_id' => $faker->numberBetween(1,18),
    ];
});
