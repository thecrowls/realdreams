<?php

use Illuminate\Database\Seeder;

class MenuPointsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\MenuPoint::class, 5)->create();
        factory(App\Models\MenuPointTranslation::class, 20)->create();
    }
}
