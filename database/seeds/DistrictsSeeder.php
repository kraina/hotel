<?php

use App\District;
use Illuminate\Database\Seeder;

class DistrictsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        District::truncate();
        $district1 = District::create([
            'city_id' => 2,
            'name' => 'Центр'
        ]);
        $district2 = District::create([
            'city_id' => 2,
            'name' => 'Приморский район'
        ]);
        $district3 = District::create([
            'city_id' => 2,
            'name' => 'Калининский район'
        ]);
        $district4 = District::create([
            'city_id' => 2,
            'name' => 'Московский район'
        ]);
        $district5 = District::create([
            'city_id' => 2,
            'name' => 'Адмиралтейский район'
        ]);
        $district6 = District::create([
            'city_id' => 2,
            'name' => 'Выборгский район'
        ]);
        $district7 = District::create([
            'city_id' => 2,
            'name' => 'Кировский район'
        ]);
        $district8 = District::create([
            'city_id' => 1,
            'name' => 'Центр'
        ]);
        $district9 = District::create([
            'city_id' => 1,
            'name' => 'Даниловский район'
        ]);
        $district10 = District::create([
            'city_id' => 1,
            'name' => 'Аэропорт Внуково'
        ]);
        $district11 = District::create([
            'city_id' => 1,
            'name' => 'Казанский ж/д вокзал'
        ]);
        $district12 = District::create([
            'city_id' => 1,
            'name' => 'Донской район'
        ]);
        $district13 = District::create([
            'city_id' => 1,
            'name' => 'Район Ростокино'
        ]);
        $district14 = District::create([
            'city_id' => 1,
            'name' => 'Район Печатники'
        ]);
        $district15 = District::create([
            'city_id' => 1,
            'name' => 'Аэропорт Шереметьево'
        ]);
        $district16 = District::create([
            'city_id' => 1,
            'name' => 'Район Северное Тушино'
        ]);
        $district17 = District::create([
            'city_id' => 3,
            'name' => 'Центральный район'
        ]);
        $district18 = District::create([
            'city_id' => 3,
            'name' => 'Хостинский район'
        ]);
        $district19 = District::create([
            'city_id' => 3,
            'name' => 'Адлерский район'
        ]);
        $district17 = District::create([
            'city_id' => 3,
            'name' => 'Лазареский район'
        ]);
    }
}
