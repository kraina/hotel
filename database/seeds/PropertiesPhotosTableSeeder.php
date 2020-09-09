<?php

use App\PropertiesPhoto;
use Illuminate\Database\Seeder;

class PropertiesPhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PropertiesPhoto::truncate();
        $properties_photo1 = PropertiesPhoto::create([
            'name' => 'single_prod.jpg',
            'property_id' => 1
        ]);
        $properties_photo2 = PropertiesPhoto::create([
            'name' => 'single_prod.jpg',
            'property_id' => 2
        ]);
        $properties_photo3 = PropertiesPhoto::create([
            'name' => 'single_prod.jpg',
            'property_id' => 3
        ]);
        $properties_photo4 = PropertiesPhoto::create([
            'name' => 'single_prod.jpg',
            'property_id' => 4
        ]);
        $properties_photo5 = PropertiesPhoto::create([
            'name' => 'single_prod.jpg',
            'property_id' => 5
        ]);
        $properties_photo6 = PropertiesPhoto::create([
            'name' => 'single_prod.jpg',
            'property_id' => 6
        ]);
        $properties_photo7 = PropertiesPhoto::create([
            'name' => 'single_prod.jpg',
            'property_id' => 7
        ]);
        $properties_photo8 = PropertiesPhoto::create([
            'name' => 'single_prod.jpg',
            'property_id' => 8
        ]);
        $properties_photo9 = PropertiesPhoto::create([
            'name' => 'single_prod.jpg',
            'property_id' => 9
        ]);
        $properties_photo10 = PropertiesPhoto::create([
            'name' => 'single_prod.jpg',
            'property_id' => 10
        ]);
        $properties_photo11 = PropertiesPhoto::create([
            'name' => 'single_prod.jpg',
            'property_id' => 11
        ]);
        $properties_photo12 = PropertiesPhoto::create([
            'name' => 'single_prod.jpg',
            'property_id' => 12
        ]);
        $properties_photo13 = PropertiesPhoto::create([
            'name' => 'single_prod.jpg',
            'property_id' => 13
        ]);
        $properties_photo14 = PropertiesPhoto::create([
            'name' => 'single_prod.jpg',
            'property_id' => 14
        ]);
    }
}
