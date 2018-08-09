<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Hotel::class, 10)->create();
        factory(App\Models\HotelTranslation::class, 40)->create();
    }
}
