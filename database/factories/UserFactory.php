<?php

use App\User;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'accountType' => $faker->word,
        'username' => $faker->userName,
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'birthday' => $faker->date,
        'gender' => $faker->word,
        'location' => $faker->word,
        'occupation' => $faker->word,
        'ratePerHour' => $faker->word,
        'specialization1' => $faker->word,
        'specialization2' => $faker->word,
        'specialization3' => $faker->word,
    ];
});

$factory->define(App\Message::class, function (Faker $faker) {


    // to prevent user from sending message to himself
    do{
        $from = rand(1,15);
        $to = rand(1,15);

    } while($from == $to);


    return [
        'from' => $from,
        'to' => $to,
        'text' => $faker->sentence,
    ];
});
