<?php
/**
 * Created by PhpStorm.
 * User: Valeria
 * Date: 30.07.2018
 * Time: 22:37
 */

use App\Models\Article;
use App\Models\ArticleTranslation;

$factory->define(Article::class, function (Faker\Generator $faker) {
    return [
        'order' => $faker->numberBetween(0, 20),
        'image' => $faker->image('upload/', 300, 200),

    ];
});

$factory->define(ArticleTranslation::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->name,
        'description' => $faker->text,
        'text' => $faker->text,
        'article_id' => Article::all()->random()->id,
        'locale' => $faker->locale
    ];
});