<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // $this->call(UserSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(DistrictsSeeder::class);
        $this->call(MetrosTableSeeder::class);
        $this->call(PropertyTypeTableSeeder::class);
        $this->call(FeaturesTableSeeder::class);
        $this->call(PropertiesTableSeeder::class);
        $this->call(NumberCategoriesTableSeeder::class);
        $this->call(RentalHoursTableSeeder::class);
        $this->call(NumbersTableSeeder::class);
        $this->call(RentalPricesTableSeeder::class);
        $this->call(PropertiesPhotosTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
