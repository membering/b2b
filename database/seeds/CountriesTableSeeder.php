<?php

use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = storage_path('app/countrycode.csv');
        $excel = Excel::load($file)->get()->toArray();
        foreach ($excel as $value) {
            DB::table('countries')->insert([
                'name' => $value['country_name'],
                'iso2' => $value['iso2'],
                'iso3' => $value['iso3'],
                'e164' => $value['e164']
            ]);
        }
    }
}
