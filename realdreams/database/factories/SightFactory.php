<?php
/**
 * Created by PhpStorm.
 * User: Valeria
 * Date: 30.07.2018
 * Time: 22:52
 */

$factory->define(App\Models\Sight::class, function (Faker\Generator $faker) {
    return [
        'city_id' => \App\Models\City::all()->random()->id
    ];
});

$factory->define(App\Models\SightTranslation::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'address' => $faker->address,
        'sight_id' => \App\Models\Sight::all()->random()->id,
        'locale' => $faker->locale
    ];
});