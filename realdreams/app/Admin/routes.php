<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
//    $router->get('/country', 'CountryController@index');
//    $router->get('/country/create', 'CountryController@create');
//    $router->get('/country/translation', 'CountryTranslationController@index');
//    $router->get('/country/translation/create', 'CountryTranslationController');

    $router->resources([
        'countries' => CountryController::class,
        'articles' => ArticleController::class,
        'tours' => TourController::class,
        'cities' => CityController::class
    ]);
});
