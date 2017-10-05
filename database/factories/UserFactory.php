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

$factory->define(
    \App\Models\User::class, function (Faker $faker) {
    static $password;

    $profilePicture = public_path('storage/img/profile-picture/dummy-avatar.png');
    if (!file_exists($profilePicture)) {

        if(!file_exists(dirname($profilePicture))) {
            \File::makeDirectory(dirname($profilePicture), 0775, true);
        }

        \File::copy(resource_path('assets/img/dummy-avatar.png'), $profilePicture);
    }

    return [
        'name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'password'       => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),

        'username'        => $faker->userName,
        'bio'             => $faker->paragraph(),
        'website'         => $faker->url,
        'phone'           => $faker->phoneNumber,
        'sex'             => $faker->randomElement(['M', 'F', 'O']),
        'profile_picture' => 'dummy-avatar.png',
    ];
}
);
