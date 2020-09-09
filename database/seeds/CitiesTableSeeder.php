<?php

use App\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::truncate();
        City::create(['name' =>'Москва']);
        City::create(['name' =>'Санкт-Петербург']);
    }
}
