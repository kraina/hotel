<?php

use App\City;
use App\Feature;
use App\Property;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Property::truncate();
        DB::table('feature_property')->truncate();
        $wifiFeature = Feature::where('name', 'Wi-Fi')->first();
        $privateParkingFeature = Feature::where('name', 'Собственная парковка')->first();
        $kettleFeature = Feature::where('name', 'Чайник')->first();
        $moscowCity = City::where('name', "Москва")->first();
        $spbCity = City::where('name', "Санкт-Петербург")->first();

        $property1 = Property::create([
            'title' => 'SPB Hotel',
            'user_id' => 1,
            'city_id' => 2,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'ул. Марата, д. 61, кв. 13 (в арку направо)',
            'location' => '',
            'description' => 'SPB Hotel — гостевые комнаты в историческом здании в центре Петербурга.'
        ]);

        $property2 = Property::create([
            'title' => 'Евро-комнаты на Лиговcком, 65',
            'user_id' => 2,
            'city_id' => 2,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Лиговский пр., д. 65',
            'location' => '',
            'description' => 'Евро-комнаты на Лиговcком 65 расположены в самом центре Петербурга в пределах десяти минут пешком от пяти станций метро.'
        ]);

        $property3 = Property::create([
            'title' => 'Хостел «А+»',
            'user_id' => 3,
            'city_id' => 2,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'ул. Аккуратова, д. 13',
            'location' => '',
            'description' => 'Новый приятный хостел «А+» приглашает остановиться на несколько часов или на несколько дней неподалеку от станции метро Удельная'
        ]);
        $property4 = Property::create([
            'title' => 'Отель «Полюстрово»',
            'user_id' => 1,
            'city_id' => 2,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'пр. Металлистов, д. 115',
            'location' => '',
            'description' => 'Добро пожаловать в отель «Полюстрово», который открывает свои двери для всех, кто предпочитает комфортный отдых в крупной современной гостинице.'
        ]);
        $property5 = Property::create([
            'title' => 'Сауна-отель «Гагаринские бани»',
            'user_id' => 2,
            'city_id' => 2,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'пр. Юрия Гагарина, д. 1',
            'location' => '',
            'description' => 'Добро пожаловать в Сауну-отель «Гагаринские бани», расположенную на проспекте Юрия Гагарина 1 недалеко от станции метро «Электросила».'
        ]);
        $property6 = Property::create([
            'title' => 'Евро Комнаты на Нарвской',
            'user_id' => 3,
            'city_id' => 2,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Нарвский пр., д. 9',
            'location' => '',
            'description' => 'Евро Комнаты на Нарвской с новым стильным ремонтом имеют отличное расположение и удобную транспортную развязку, а до станции метро «Нарвская» всего 3 минуты пешим ходом.'
        ]);
        $property7 = Property::create([
            'title' => 'Квартира на ул. Пулковской, 8',
            'user_id' => 1,
            'city_id' => 2,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'ул. Пулковская, д. 8',
            'location' => '',
            'description' => 'Добро пожаловать в уютную и светлую квартиру, расположенную в шаговой доступности всего в 5 минутах от станции метро «Звездная».'
        ]);
        $property8 = Property::create([
            'title' => 'Квартира в центре на Кременчугской',
            'user_id' => 2,
            'city_id' => 2,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'ул. Кременчугская, д. 19, корп. 3',
            'location' => '',
            'description' => 'Просторная квартира на Кременчугской приглашает романтические пары, путешественников и деловых людей остановиться в самом центре Петербурга.'
        ]);
        $property9 = Property::create([
            'title' => 'Однокомнатная квартира на Хошимина',
            'user_id' => 3,
            'city_id' => 2,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'ул. Хошимина, д. 13, корп. 2',
            'location' => '',
            'description' => 'Уютная однокомнатная квартира расположена всего в трех минутах ходьбы от метро «Проспект просвещения».'
        ]);
        $property10 = Property::create([
            'title' => 'Квартира в ЖК Жизнь',
            'user_id' => 1,
            'city_id' => 2,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Среднерогатская ул., 16, корп. 5',
            'location' => '',
            'description' => 'Современная квартира в новом ЖК Жизнь расположена на Среднерогатской улице, что в 16 минутах пешком от станции метро Звездная.'
        ]);
        $property11 = Property::create([
            'title' => 'Отель «Екатерингоф»',
            'user_id' => 2,
            'city_id' => 2,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'ул. Ивана Черных, д. 10А',
            'location' => '',
            'description' => 'Рядом с Нарвскими Триумфальными воротами и одноименной станцией метро расположился современный комфортабельный отель «Екатерингоф».'
        ]);
        $property12 = Property::create([
            'title' => 'Гостевые комнаты на Марата, 8',
            'user_id' => 3,
            'city_id' => 2,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'ул. Марата, д. 8, кв. 5',
            'location' => '',
            'description' => 'Вход в гостевые комнаты осуществляется со стороны пешеходного перехода, слева от арки железная дверь, домофон 5, 4 этаж.'
        ]);
        $property13 = Property::create([
            'title' => 'Квартира-студия на Пулковском, 14',
            'user_id' => 1,
            'city_id' => 2,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Пулковское ш., д. 14, лит. Е',
            'location' => '',
            'description' => 'Панорамная студия с видом на Пулковские широты расположилась в современном комплексе Московского района.'
        ]);
        $property14 = Property::create([
            'title' => 'Мини-отель «Форт Р»',
            'user_id' => 2,
            'city_id' => 2,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'пос. Парголово, ул. Шишкина, д. 64',
            'location' => '',
            'description' => '«Форт Р» — это современный оригинальный мини-отель с большими и светлыми комнатами.'
        ]);

        $property15 = Property::create([
            'title' => 'Апартаменты Nice flats на Автозаводской',
            'user_id' => 1,
            'city_id' => 1,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Автозаводская ул., д. 23, корп. 7',
            'location' => '',
            'description' => 'Апартаменты Nice flats на Автозаводской расположены Даниловском районе с развитой инфраструктурой.'
        ]);

        $property16 = Property::create([
            'title' => '«Отель-бутик Макс»',
            'user_id' => 2,
            'city_id' => 1,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Козицкий пер., д. 1А',
            'location' => '',
            'description' => '«Отель-Бутик Макс» располагается в историческом центре Москвы на Пушкинской площади.'
        ]);

        $property17 = Property::create([
            'title' => 'Парк-отель «Внуково-Картмазово»',
            'user_id' => 3,
            'city_id' => 1,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'дер. Картмазово, ул. Киевская, д. 4',
            'location' => '',
            'description' => '«Внуково-Картмазово» – это уникальный парк-отель, расположенный всего в четырех км. от Москвы и в пешей доступности от Киевского шоссе.'
        ]);
        $property18 = Property::create([
            'title' => 'Мини-отель «Такт»',
            'user_id' => 1,
            'city_id' => 1,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'с. Юдино, Можайское шоссе, д. 55, лит. Б, стр. 1',
            'location' => '',
            'description' => 'Небольшой уютный мини-отель «Такт» с радостью примет вас в ближайшем пригороде Москвы — г. Одинцово.'
        ]);
        $property19 = Property::create([
            'title' => 'Мини-хостел Антресоль 26',
            'user_id' => 2,
            'city_id' => 1,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'ул. Бакунинская, д. 69, стр. 1',
            'location' => '',
            'description' => 'Мини-хостел Антресоль 26 — необычное место с камерной творческой атмосферой. '
        ]);
        $property20 = Property::create([
            'title' => 'Мини-отель «Клубничка»',
            'user_id' => 3,
            'city_id' => 1,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'ул. Новорязанская, д. 16/11, стр. 1',
            'location' => '',
            'description' => 'Мини-отель «Клубничка» расположен в самом центре Москвы.'
        ]);
        $property21 = Property::create([
            'title' => 'Отель «Hanzer»',
            'user_id' => 1,
            'city_id' => 1,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Большой Головин пер., д. 25',
            'location' => '',
            'description' => 'Трехзвездочный отель Hanzer, расположившийся в тихом переулке Большой Головин, находится в центре стролицы — между Садовым кольцом и Бульварным, недалеко от Сретенки.'
        ]);
        $property22 = Property::create([
            'title' => 'Отель «Зодиак»',
            'user_id' => 2,
            'city_id' => 1,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Ленинский пр., д. 15',
            'location' => '',
            'description' => 'В самом центре столицы на Ленинском проспекте среди городской суеты, гости и жители города, могут отдохнуть в эксклюзивном отеле «Зодиак», где царит тишина и комфорт.'
        ]);
        $property23 = Property::create([
            'title' => '«Блюз Отель»',
            'user_id' => 3,
            'city_id' => 1,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'ул. Доватора, д. 8',
            'location' => '',
            'description' => '«Блюз-Отель» находится практически в самом центре Москвы, всего в сотне шагов от станции метро «Спортивная».'
        ]);
        $property24 = Property::create([
            'title' => 'Отель «Кипарис»',
            'user_id' => 1,
            'city_id' => 1,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Будайский пр-д , д. 8, стр. 1',
            'location' => '',
            'description' => 'Отель «Кипарис», расположенный на ВДНХ, предлагает своим гостям удобные и комфортабельные номера, в которых предусмотрены все мелочи для удобства проживающих.'
        ]);
        $property25 = Property::create([
            'title' => 'Гостиничный комплекс «Фонда»',
            'user_id' => 2,
            'city_id' => 1,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'ул. Угрешская, д. 2, стр. 90',
            'location' => '',
            'description' => 'Можно ли совместить преимущества большого города и тишину сельской местности? Конечно, если задаться подобной целью и правильно выбрать гостиницу.'
        ]);
        $property26 = Property::create([
            'title' => 'Отель «SkyPoint»',
            'user_id' => 3,
            'city_id' => 1,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Международное ш., д. 28, лит. Б, стр. 3',
            'location' => '',
            'description' => '«SkyPoint» — это ультрасовременный 3-звездочный отель, включающий в себя 225 номеров различных категорий.'
        ]);
        $property27 = Property::create([
            'title' => 'Мини-хостел Freya на Сходненской',
            'user_id' => 1,
            'city_id' => 1,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'ул. Героев Панфиловцев, д. 1, корп. 3',
            'location' => '',
            'description' => 'Вблизи метро Сходненская расположился небольшой уютной хостел Freya, предлагающий своим гостям размещение как в обычных номерах, так и в номерах категории Люкс.'
        ]);
        $property28 = Property::create([
            'title' => 'Парк-отель «Внуково-Картмазово»',
            'user_id' => 2,
            'city_id' => 1,
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'дер. Картмазово, ул. Киевская, д. 4',
            'location' => '',
            'description' => '«Внуково-Картмазово» – это уникальный парк-отель, расположенный всего в четырех км. от Москвы и в пешей доступности от Киевского шоссе.'
        ]);

        $property1->features()->attach($wifiFeature);
        $property2->features()->attach($privateParkingFeature);
        $property3->features()->attach($kettleFeature);
        $property4->features()->attach($wifiFeature);
        $property5->features()->attach($privateParkingFeature);
        $property6->features()->attach($kettleFeature);
        $property7->features()->attach($wifiFeature);
        $property8->features()->attach($privateParkingFeature);
        $property9->features()->attach($kettleFeature);
        $property10->features()->attach($wifiFeature);
        $property11->features()->attach($privateParkingFeature);
        $property12->features()->attach($kettleFeature);
        $property13->features()->attach($wifiFeature);
        $property14->features()->attach($privateParkingFeature);
        $property15->features()->attach($wifiFeature);
        $property16->features()->attach($privateParkingFeature);
        $property17->features()->attach($kettleFeature);
        $property18->features()->attach($wifiFeature);
        $property19->features()->attach($privateParkingFeature);
        $property20->features()->attach($kettleFeature);
        $property21->features()->attach($wifiFeature);
        $property22->features()->attach($privateParkingFeature);
        $property23->features()->attach($kettleFeature);
        $property24->features()->attach($wifiFeature);
        $property25->features()->attach($privateParkingFeature);
        $property26->features()->attach($kettleFeature);
        $property27->features()->attach($wifiFeature);
        $property28->features()->attach($privateParkingFeature);

    }
}
