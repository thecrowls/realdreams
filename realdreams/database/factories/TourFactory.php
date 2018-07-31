<?php
/**
 * Created by PhpStorm.
 * User: Valeria
 * Date: 30.07.2018
 * Time: 22:52
 */

$factory->define(App\Models\Tour::class, function (Faker\Generator $faker) {
    return [
        'order' => $faker->numberBetween(0, 20),
        'number_of_days' => $faker->numberBetween(0, 20),
        'price' => $faker->randomFloat(3, 0),
    ];
});

$factory->define(App\Models\TourTranslation::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'tour_id' => \App\Models\Tour::all()->random()->id,
        'locale' => $faker->locale
    ];
});