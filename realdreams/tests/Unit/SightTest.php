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
use App\Models\Sight;
use App\Models\SightTranslation;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class SightTest extends TestCase
{
    use DatabaseMigrations;

    public function testSightsTable()
    {
        factory(Country::class)->create([
            'order' => 1,
        ]);
        factory(City::class)->create([
            'order' => 1,
            'country_id' => 1
        ]);
        factory(Sight::class)->create([
            'city_id' => 1
        ]);
        $this->assertDatabaseHas('sights', ['city_id' => 1]);
    }

    public function testSightTranslationsTable()
    {
        factory(Country::class)->create([
            'order' => 1,
        ]);
        factory(City::class)->create([
            'order' => 1,
            'country_id' => 1
        ]);
        factory(Sight::class)->create([
            'city_id' => 1
        ]);
        factory(SightTranslation::class)->create([
            'name' => 'Friend Memorial',
            'description' => 'la la la la',
            'address' => 'Toronto, Neverland street',
            'sight_id' => 1,
            'locale' => 'en'
        ]);
        $this->assertDatabaseHas('sight_translations', ['name' => 'Friend Memorial']);
    }
}