<?php
/**
 * Created by PhpStorm.
 * User: Valeria
 * Date: 30.07.2018
 * Time: 22:58
 */

$factory->define(App\Models\Quote::class, function (Faker\Generator $faker) {
    return [
        'author' => $faker->name,
        'text' => $faker->text,
        'article_id' => \App\Models\Article::all()->random()->id
    ];
});