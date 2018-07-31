<?php
/**
 * Created by PhpStorm.
 * User: Valeria
 * Date: 31.07.2018
 * Time: 0:01
 */

namespace Tests\Unit;


use App\Models\City;
use App\Models\Country;
use App\Models\Restaurant;
use App\Models\RestaurantTranslation;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class RestaurantTest extends TestCase
{
    use DatabaseMigrations;

    public function testRestaurantsTable()
    {
        factory(Country::class)->create([
            'order' => 1,
        ]);
        factory(City::class)->create([
            'order' => 1,
            'country_id' => 1
        ]);
        factory(Restaurant::class)->create([
            'rank' => 1,
            'city_id' => 1
        ]);
        $this->assertDatabaseHas('restaurants', ['rank' => 1]);
    }

    public function testRestaurantTranslationsTable()
    {
        factory(Country::class)->create([
            'order' => 1,
        ]);
        factory(City::class)->create([
            'order' => 1,
            'country_id' => 1
        ]);
        factory(Restaurant::class)->create([
            'rank' => 1,
            'city_id' => 1
        ]);
        factory(RestaurantTranslation::class)->create([
            'name' => 'Hell Kitchen',
            'description' => 'Heeeeelllllllll',
            'restaurant_id' => 1,
            'locale' => 'en'
        ]);
        $this->assertDatabaseHas('restaurant_translations', ['name' => 'Hell Kitchen']);
    }
}