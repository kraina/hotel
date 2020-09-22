<?php

use App\NumberCategory;
use Illuminate\Database\Seeder;

class NumberCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NumberCategory::truncate();
        NumberCategory::create(['name' =>'Стандарт']);
        NumberCategory::create(['name' =>'Полулюкс']);
        NumberCategory::create(['name' =>'Люкс']);
        NumberCategory::create(['name' =>'Супер Люкс']);

    }
}
