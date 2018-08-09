<?php
/**
 * Created by PhpStorm.
 * User: Valeria
 * Date: 28.07.2018
 * Time: 19:49
 */

use App\Models\Country;

$factory->define(App\Models\Country::class, function (Faker\Generator $faker) {
    return [
        'order' => $faker->numberBetween(0, 20)
    ];
});

$factory->define(App\Models\CountryTranslation::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->country,
        'country_id' => Country::all()->random()->id,
        'locale' => $faker->locale
    ];
});