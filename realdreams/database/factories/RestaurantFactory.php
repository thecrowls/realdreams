<?php
/**
 * Created by PhpStorm.
 * User: Valeria
 * Date: 30.07.2018
 * Time: 22:58
 */

$factory->define(App\Models\Restaurant::class, function (Faker\Generator $faker) {
    return [
        'rank' => $faker->numberBetween(0, 5),
        'city_id' => \App\Models\City::all()->random()->id
    ];
});

$factory->define(App\Models\RestaurantTranslation::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'restaurant_id' => \App\Models\Restaurant::all()->random()->id,
        'locale' => $faker->locale
    ];
});