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
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\AfterBirthPost::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'post' => $faker->paragraph(3, true),
        'created_at' => $faker->dateTime('now', date_default_timezone_get()),
        'updated_at' => $faker->dateTime('now', date_default_timezone_get()),
    ];
});

$factory->define(App\AbComment::class, function (Faker $faker) {

    return [
        'user_id' => $faker->numberBetween(1,11),
        'after_birth_post_id' => $faker->numberBetween(1,25),
        'comment' => $faker->paragraph(3, true),
        'created_at' => $faker->dateTime('now', date_default_timezone_get()),
        'updated_at' => $faker->dateTime('now', date_default_timezone_get()),
    ];
});
