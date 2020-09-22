<?php

use App\Metro;
use Illuminate\Database\Seeder;

class MetrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Metro::truncate();
        $metro1 = Metro::create([
            'city_id' => 2,
            'name' => 'Владимирская'
        ]);
        $metro2 = Metro::create([
            'city_id' => 2,
            'name' => 'Площадь Восстания'
        ]);
        $metro3 = Metro::create([
            'city_id' => 2,
            'name' => 'Удельная'
        ]);
        $metro4 = Metro::create([
            'city_id' => 2,
            'name' => 'Лесная'
        ]);
        $metro5 = Metro::create([
            'city_id' => 2,
            'name' => 'Электросила'
        ]);
        $metro6 = Metro::create([
            'city_id' => 2,
            'name' => 'Нарвская'
        ]);
        $metro7 = Metro::create([
            'city_id' => 2,
            'name' => 'Звёздная'
        ]);
        $metro8 = Metro::create([
            'city_id' => 2,
            'name' => 'Площадь Александра Невского'
        ]);
        $metro9 = Metro::create([
            'city_id' => 2,
            'name' => 'Проспект Просвещения'
        ]);
        $metro10 = Metro::create([
            'city_id' => 2,
            'name' => 'Маяковская'
        ]);
        $metro11 = Metro::create([
            'city_id' => 2,
            'name' => 'Московская'
        ]);
        $metro10 = Metro::create([
            'city_id' => 2,
            'name' => 'Парнас'
        ]);
        $metro12 = Metro::create([
            'city_id' => 1,
            'name' => 'ЗИЛ'
        ]);
        $metro13 = Metro::create([
            'city_id' => 1,
            'name' => 'Тверская'
        ]);
        $metro14 = Metro::create([
            'city_id' => 1,
            'name' => 'Саларьево'
        ]);
        $metro15 = Metro::create([
            'city_id' => 1,
            'name' => 'Боровское шоссе'
        ]);
        $metro16 = Metro::create([
            'city_id' => 1,
            'name' => 'Электрозаводская'
        ]);
        $metro17 = Metro::create([
            'city_id' => 1,
            'name' => 'Комсомольская'
        ]);
        $metro18 = Metro::create([
            'city_id' => 1,
            'name' => 'Сухаревская'
        ]);
        $metro19 = Metro::create([
            'city_id' => 1,
            'name' => 'Шаболовская'
        ]);
        $metro20 = Metro::create([
            'city_id' => 1,
            'name' => 'Спортивная'
        ]);
        $metro21 = Metro::create([
            'city_id' => 1,
            'name' => 'Ростокино'
        ]);
        $metro22 = Metro::create([
            'city_id' => 1,
            'name' => 'Угрешская'
        ]);
        $metro23 = Metro::create([
            'city_id' => 1,
            'name' => 'Планерная'
        ]);
        $metro24 = Metro::create([
            'city_id' => 1,
            'name' => 'Сходненская'
        ]);
    }
}
