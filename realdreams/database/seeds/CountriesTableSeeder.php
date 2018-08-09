<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Country::class, 3)->create();
        factory(App\Models\CountryTranslation::class, 12)->create();
    }
}
