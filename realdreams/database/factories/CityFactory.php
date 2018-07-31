<?php
/**
 * Created by PhpStorm.
 * User: Valeria
 * Date: 30.07.2018
 * Time: 20:44
 */
use App\Models\City;
use App\Models\Country;

$factory->define(App\Models\City::class, function (Faker\Generator $faker) {
    return [
        'order' => $faker->numberBetween(0, 20),
        'country_id' => Country::all()->random()->id
    ];
});

$factory->define(App\Models\CityTranslation::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'city_id' => City::all()->random()->id,
        'locale' => $faker->locale
    ];
});