<?php

use App\PropertyType;
use Illuminate\Database\Seeder;

class PropertyTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PropertyType::truncate();
        PropertyType::create(['name' =>'Квартира']);
        PropertyType::create(['name' =>'Отель']);
        PropertyType::create(['name' =>'Дом']);
    }
}
