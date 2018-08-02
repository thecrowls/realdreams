<?php
/**
 * Created by PhpStorm.
 * User: Valeria
 * Date: 31.07.2018
 * Time: 0:00
 */

namespace Tests\Unit;


use App\Models\City;
use App\Models\Country;
use App\Models\Hotel;
use App\Models\HotelTranslation;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class HotelTest extends TestCase
{
    use DatabaseMigrations;

    public function testHotelsTable()
    {
        factory(Country::class)->create([
            'order' => 1,
        ]);
        factory(City::class)->create([
            'order' => 1,
            'country_id' => 1
        ]);
        factory(Hotel::class)->create([
            'rank' => 4,
            'image' => '/upload/test.jpg',
            'city_id' => 1,
        ]);
        $this->assertDatabaseHas('hotels', ['rank' => 4]);
    }

    public function testHotelTranslationsTable()
    {
        factory(Country::class)->create([
            'order' => 1,
        ]);
        factory(City::class)->create([
            'order' => 1,
            'country_id' => 1
        ]);
        factory(Hotel::class)->create([
            'rank' => 4,
            'image' => '/upload/test.jpg',
            'city_id' => 1,
        ]);
        factory(HotelTranslation::class)->create([
            'name' => 'Hyatt Regency',
            'description' => 'Bla bla bla bla',
            'address' => 'Bla bla bla bla',
            'hotel_id' => 1,
            'locale' => 'en'
        ]);
        $this->assertDatabaseHas('hotel_translations', ['name' => 'Hyatt Regency']);
        $this->assertDatabaseMissing('hotel_translations', ['name' => 'CROWL']);
    }
}