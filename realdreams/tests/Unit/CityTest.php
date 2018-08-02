<?php
/**
 * Created by PhpStorm.
 * User: Valeria
 * Date: 30.07.2018
 * Time: 13:54
 */

namespace Tests\Unit;


use App\Models\City;
use App\Models\CityTranslation;
use App\Models\Country;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class CityTest extends TestCase
{
    use DatabaseMigrations;

    public function testCitiesTable()
    {
        factory(Country::class)->create([
            'order' => 1,
        ]);
        factory(City::class)->create([
            'order' => 1,
            'country_id' => 1
        ]);
        $this->assertDatabaseHas('cities', ['order' => 1]);
    }

    public function testCityTranslationsTable()
    {
        factory(Country::class)->create([
            'order' => 1,
        ]);
        factory(City::class)->create([
            'order' => 1,
            'country_id' => 1
        ]);
        factory(CityTranslation::class)->create([
            'name' => 'Toronto',
            'city_id' => 1,
            'locale' => 'en'
        ]);
        $this->assertDatabaseHas('city_translations', ['name' => 'Toronto']);
    }
}