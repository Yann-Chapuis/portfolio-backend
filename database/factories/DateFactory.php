<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Date;
use Faker\Generator as Faker;

$factory->define(Date::class, function (Faker $faker) {
    return [
        'date' => $faker->dateTimeBetween('now', '+12 months'),
        'ville' => $faker->city(),
        'cp' => $faker->numberBetween($min = "13000", $max = "98890"),
        'commentaire' => $faker->randomElement($array = array ('Ticket 5€','Ticket 7€')),
        'user_id' => '1',
    ];
});
