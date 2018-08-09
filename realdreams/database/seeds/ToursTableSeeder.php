<?php

use Illuminate\Database\Seeder;

class ToursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Tour::class, 20)->create();
        factory(App\Models\TourTranslation::class, 80)->create();
    }
}
