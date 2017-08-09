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
        'shortname' => 'propeller',
        'name' => 'Propeller Coffee Co.',
        'description' => '“We look for unique coffees, and obviously really high scoring, high quality and with no defects. But we’re looking for unique coffees.”',
        'address' => '50 Wade Ave Toronto, ON M6H 2Z3',
        'phone' => '(416) 479-3771',
        'image' => 'img-overview-propeller.jpg',
        'drink' => 'Single-Origin Pourover (or Single Origin Espresso)'
    ];
});