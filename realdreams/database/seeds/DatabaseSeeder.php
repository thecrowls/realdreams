<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('CountriesTableSeeder');
        $this->call('CitiesTableSeeder');
        $this->call('ArticlesTableSeeder');
        $this->call('CompaniesTableSeeder');
        $this->call('ContactsTableSeeder');
        $this->call('HotelsTableSeeder');
        $this->call('MenuPointsTableSeeder');
        $this->call('QuotesTableSeeder');
        $this->call('RestaurantsTableSeeder');
        $this->call('SightsTableSeeder');
        $this->call('ToursTableSeeder');
        $this->call('VisasTableSeeder');
    }
}
