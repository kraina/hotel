<?php

use App\RentalHour;
use Illuminate\Database\Seeder;

class RentalHoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RentalHour::truncate();
        RentalHour::create(['name' =>'1 час']);
        RentalHour::create(['name' =>'2 часа']);
        RentalHour::create(['name' =>'3-5 часов']);
        RentalHour::create(['name' =>'6-12 часов']);
        RentalHour::create(['name' =>'На ночь']);
        RentalHour::create(['name' =>'На сутки']);
    }
}
