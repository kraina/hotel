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
        City::create(['city' =>'Москва']);
        City::create(['city' =>'Санкт-Петербург']);
        City::create(['city' =>'Сочи']);
    }
}
