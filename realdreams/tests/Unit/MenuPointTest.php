<?php
/**
 * Created by PhpStorm.
 * User: Valeria
 * Date: 31.07.2018
 * Time: 0:01
 */

namespace Tests\Unit;


use App\Models\MenuPoint;
use App\Models\MenuPointTranslation;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class MenuPointTest extends TestCase
{
    use DatabaseMigrations;

    public function testMenuPointsTable()
    {
        factory(MenuPoint::class)->create([
            'order' => 1
        ]);
        $this->assertDatabaseHas('menu_points', ['order' => 1]);
    }

    public function testMenuPointTranslationsTable()
    {
        factory(MenuPoint::class)->create([
            'order' => 1
        ]);
        factory(MenuPointTranslation::class)->create([
            'name' => 'Contacts',
            'menu_point_id' => 1,
            'locale' => 'en'
        ]);
        $this->assertDatabaseHas('menu_point_translations', ['name' => 'Contacts']);
    }
}