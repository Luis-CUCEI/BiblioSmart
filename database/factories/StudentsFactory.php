<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'fisrtname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'password' => bcrypt($faker->password),
        'email' => $faker->safeEmail,
        'alumnocode' => $faker->randomNumber(8),
        'phonenumber' => $faker->randomNumber(8),
        'confirmedaccount' => 0,
        'gender' => $faker->randomElement($array = array('M','F','O')),
    ];
});
