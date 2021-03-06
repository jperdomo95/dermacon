<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'username' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'created_at' => $faker->dateTimeThisDecade,
        'updated_at' => $faker->dateTimeThisDecade,
    ];
});

$factory->define(App\Doctor::class, function (Faker $faker) {
  return [
    'name' => $faker->name,
    'ci' => $faker->unique()->randomNumber($nbDigits = 8, $strict = false),
    'email' => $faker->unique()->safeEmail,
    'description' => $faker->realText(random_int(20, 160)),
    'created_at' => $faker->dateTimeThisDecade,
    'updated_at' => $faker->dateTimeThisDecade,
  ];
});

$factory->define(App\Patient::class, function (Faker $faker) {
  return [
    'name' => $faker->name,
    'ci' => $faker->unique()->randomNumber($nbDgits = 8, $strict = false),
    'email' => $faker->unique()->safeEmail,
    'local_phone' => $faker->e164PhoneNumber(),
    'personal_phone' => $faker->e164PhoneNumber(),
    'address' => $faker->streetAddress(),
  ];
});
