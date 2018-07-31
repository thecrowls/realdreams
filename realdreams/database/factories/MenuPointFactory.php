<?php
/**
 * Created by PhpStorm.
 * User: Valeria
 * Date: 30.07.2018
 * Time: 22:57
 */

$factory->define(App\Models\MenuPoint::class, function (Faker\Generator $faker) {
    return [
        'order' => $faker->numberBetween(0, 20),
    ];
});

$factory->define(App\Models\MenuPointTranslation::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'menu_point_id' => \App\Models\MenuPoint::all()->random()->id,
        'locale' => $faker->locale
    ];
});