<?php

use App\Feature;
use Illuminate\Database\Seeder;

class FeaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feature::truncate();
        Feature::create(['name' =>'Wi-Fi']);
        Feature::create(['name' =>'Собственная парковка']);
        Feature::create(['name' =>'Чайник']);
    }
}
