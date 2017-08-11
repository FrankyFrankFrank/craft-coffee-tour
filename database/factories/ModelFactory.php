<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Timeslot::class, function (Faker\Generator $faker) {
	return [
		'datetime' => $faker->dateTimeBetween('+20 days','+60 days', date_default_timezone_get())
	];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Location::class, function (Faker\Generator $faker) {
    return [
        'shortname' => $faker->company,
        'name' => $faker->company,
        'description' => $faker->sentences(3, true),
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'image' => 'fake-image.jpg',
        'drink' => $faker->catchPhrase,
        'article' => $faker->sentences(8, true),
        'feature_image' => 'fake-feature-image.jpg'
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Podcast::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->text(90),
        'src'=> $faker->url,
    ];
});