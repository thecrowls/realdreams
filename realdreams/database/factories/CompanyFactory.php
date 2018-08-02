<?php
/**
 * Created by PhpStorm.
 * User: Valeria
 * Date: 30.07.2018
 * Time: 22:57
 */

$factory->define(App\Models\Company::class, function (Faker\Generator $faker) {
    return [
        'image' => $faker->image('upload/', 300, 200),
    ];
});

$factory->define(App\Models\CompanyTranslation::class, function (Faker\Generator $faker) {
    return [
        'text' => $faker->text,
        'company_id' => \App\Models\Company::all()->random()->id,
        'locale' => $faker->locale
    ];
});