<?php
/**
 * Created by PhpStorm.
 * User: Valeria
 * Date: 31.07.2018
 * Time: 0:00
 */

namespace Tests\Unit;


use App\Models\Tour;
use App\Models\TourTranslation;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class TourTest extends TestCase
{
    use DatabaseMigrations;

    public function testToursTable()
    {
        factory(Tour::class)->create([
            'order' => 1,
            'number_of_days' => 7,
            'price' => 150.70
        ]);
        $this->assertDatabaseHas('tours', ['order' => 1]);
    }

    public function testTourTranslationsTable()
    {
        factory(Tour::class)->create([
            'order' => 1,
            'number_of_days' => 7,
            'price' => 150.70
        ]);
        factory(TourTranslation::class)->create([
            'name' => 'Sun tour',
            'tour_id' => 1,
            'locale' => 'en'
        ]);
        $this->assertDatabaseHas('tour_translations', ['name' => 'Sun tour']);
    }
}