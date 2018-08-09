<?php

use Illuminate\Database\Seeder;

class SightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Sight::class, 20)->create();
        factory(App\Models\SightTranslation::class, 80)->create();
    }
}
