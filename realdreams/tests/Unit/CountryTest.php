<?php
/**
 * Created by PhpStorm.
 * User: Valeria
 * Date: 29.07.2018
 * Time: 22:52
 */

namespace Tests\Unit;

use App\Models\CountryTranslation;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Models\Country;

class CountryTest extends TestCase
{
    use DatabaseMigrations;

    public function testCountriesTable()
    {
        factory(Country::class)->create([
            'order' => 1,
        ]);
        $this->assertDatabaseHas('countries', ['order' => 1]);
    }

    public function testCountryTranslationsTable()
    {
        factory(Country::class)->create([
            'order' => 1,
        ]);
        factory(CountryTranslation::class)->create([
            'name' => 'Canada',
            'country_id' => 1,
            'locale' => 'en'
        ]);
        $this->assertDatabaseHas('country_translations', ['name' => 'Canada']);
        $this->assertDatabaseMissing('country_translations', ['name' => 'Iceland']);
    }
}