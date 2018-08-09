<?php
/**
 * Created by PhpStorm.
 * User: Valeria
 * Date: 30.07.2018
 * Time: 22:56
 */

$factory->define(App\Models\Contact::class, function (Faker\Generator $faker) {
    return [
        'email' => $faker->email,
        'contact_phone' => $faker->phoneNumber,
        'fax' => $faker->phoneNumber
    ];
});

$factory->define(App\Models\ContactTranslation::class, function (Faker\Generator $faker) {
    return [
        'address' => $faker->address,
        'contact_id' => \App\Models\Contact::all()->random()->id,
        'locale' => $faker->locale
    ];
});