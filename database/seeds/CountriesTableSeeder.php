<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    public function run(
        \App\Modules\Services\Option\CountryService $country
    )
    {
        $country->syncCountries();
    }
}