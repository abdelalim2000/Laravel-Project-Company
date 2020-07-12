<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Employee;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name('male'),
        'last_name'=> $faker->name('male'),
        'email'=> $faker->email(),
        'salary' => $faker->randomNumber(5)
    ];
});
