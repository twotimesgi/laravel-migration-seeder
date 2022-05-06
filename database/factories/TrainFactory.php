<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Train;
use Faker\Generator as Faker;

$factory->define(Train::class, function (Faker $faker) {
    return [
        'azienda' => $faker->word(),
        'stazione_partenza' => $faker->word(),
        'stazione_arrivo' => $faker->word(),
        'orario_partenza' => $faker->date(),
        'orario_arrivo' => $faker->date(),
        'id_treno' => $faker->bothify('?????#####'),
        'n_carrozze' => $faker->numberBetween(5,15),
        'ritardo' => $faker->boolean(),
        'cancellato' => $faker->boolean(),
        'created_at' => $faker->dateTimeInInterval('-1 week', '+3 days'),
        'updated_at' => $faker->dateTimeInInterval('-1 week', '+3 days')
    ];
});
