<?php
/**
 * Created by PhpStorm.
 * User: Valeria
 * Date: 30.07.2018
 * Time: 22:56
 */

$factory->define(App\Models\Hotel::class, function (Faker\Generator $faker) {
    return [
        'rank' => $faker->numberBetween(1, 5),
        'image' => $faker->image('upload/', 300, 200),
        'city_id' => \App\Models\City::all()->random()->id,

    ];
});

$factory->define(App\Models\HotelTranslation::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'address' => $faker->text,
        'hotel_id' => \App\Models\Hotel::all()->random()->id,
        'locale' => $faker->locale
    ];
});