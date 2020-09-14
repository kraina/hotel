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
        $moscowCity = City::where('city', "Москва")->first();
        $spbCity = City::where('city', "Санкт-Петербург")->first();
        $sochiCity = City::where('city', "Сочи")->first();

        $property1 = Property::create([
            'title' => 'SPB Hotel',
            'user_id' => 1,
            'city' => "Санкт-Петербург",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'ул. Марата, д. 61, кв. 13 (в арку направо)',
            'location' => '',
            'description' => 'SPB Hotel — гостевые комнаты в историческом здании в центре Петербурга.'
        ]);

        $property2 = Property::create([
            'title' => 'Евро-комнаты на Лиговcком, 65',
            'user_id' => 2,
            'city' => "Санкт-Петербург",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Лиговский пр., д. 65',
            'location' => '',
            'description' => 'Евро-комнаты на Лиговcком 65 расположены в самом центре Петербурга в пределах десяти минут пешком от пяти станций метро.'
        ]);

        $property3 = Property::create([
            'title' => 'Хостел «А+»',
            'user_id' => 3,
            'city' => "Санкт-Петербург",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'ул. Аккуратова, д. 13',
            'location' => '',
            'description' => 'Новый приятный хостел «А+» приглашает остановиться на несколько часов или на несколько дней неподалеку от станции метро Удельная'
        ]);
        $property4 = Property::create([
            'title' => 'Отель «Полюстрово»',
            'user_id' => 1,
            'city' => "Санкт-Петербург",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'пр. Металлистов, д. 115',
            'location' => '',
            'description' => 'Добро пожаловать в отель «Полюстрово», который открывает свои двери для всех, кто предпочитает комфортный отдых в крупной современной гостинице.'
        ]);
        $property5 = Property::create([
            'title' => 'Сауна-отель «Гагаринские бани»',
            'user_id' => 2,
            'city' => "Санкт-Петербург",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'пр. Юрия Гагарина, д. 1',
            'location' => '',
            'description' => 'Добро пожаловать в Сауну-отель «Гагаринские бани», расположенную на проспекте Юрия Гагарина 1 недалеко от станции метро «Электросила».'
        ]);
        $property6 = Property::create([
            'title' => 'Евро Комнаты на Нарвской',
            'user_id' => 3,
            'city' => "Санкт-Петербург",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Нарвский пр., д. 9',
            'location' => '',
            'description' => 'Евро Комнаты на Нарвской с новым стильным ремонтом имеют отличное расположение и удобную транспортную развязку, а до станции метро «Нарвская» всего 3 минуты пешим ходом.'
        ]);
        $property7 = Property::create([
            'title' => 'Квартира на ул. Пулковской, 8',
            'user_id' => 1,
            'city' => "Санкт-Петербург",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'ул. Пулковская, д. 8',
            'location' => '',
            'description' => 'Добро пожаловать в уютную и светлую квартиру, расположенную в шаговой доступности всего в 5 минутах от станции метро «Звездная».'
        ]);
        $property8 = Property::create([
            'title' => 'Квартира в центре на Кременчугской',
            'user_id' => 2,
            'city' => "Санкт-Петербург",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'ул. Кременчугская, д. 19, корп. 3',
            'location' => '',
            'description' => 'Просторная квартира на Кременчугской приглашает романтические пары, путешественников и деловых людей остановиться в самом центре Петербурга.'
        ]);
        $property9 = Property::create([
            'title' => 'Однокомнатная квартира на Хошимина',
            'user_id' => 3,
            'city' => "Санкт-Петербург",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'ул. Хошимина, д. 13, корп. 2',
            'location' => '',
            'description' => 'Уютная однокомнатная квартира расположена всего в трех минутах ходьбы от метро «Проспект просвещения».'
        ]);
        $property10 = Property::create([
            'title' => 'Квартира в ЖК Жизнь',
            'user_id' => 1,
            'city' => "Санкт-Петербург",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Среднерогатская ул., 16, корп. 5',
            'location' => '',
            'description' => 'Современная квартира в новом ЖК Жизнь расположена на Среднерогатской улице, что в 16 минутах пешком от станции метро Звездная.'
        ]);
        $property11 = Property::create([
            'title' => 'Отель «Екатерингоф»',
            'user_id' => 2,
            'city' => "Санкт-Петербург",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'ул. Ивана Черных, д. 10А',
            'location' => '',
            'description' => 'Рядом с Нарвскими Триумфальными воротами и одноименной станцией метро расположился современный комфортабельный отель «Екатерингоф».'
        ]);
        $property12 = Property::create([
            'title' => 'Гостевые комнаты на Марата, 8',
            'user_id' => 3,
            'city' => "Санкт-Петербург",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'ул. Марата, д. 8, кв. 5',
            'location' => '',
            'description' => 'Вход в гостевые комнаты осуществляется со стороны пешеходного перехода, слева от арки железная дверь, домофон 5, 4 этаж.'
        ]);
        $property13 = Property::create([
            'title' => 'Квартира-студия на Пулковском, 14',
            'user_id' => 1,
            'city' => "Санкт-Петербург",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Пулковское ш., д. 14, лит. Е',
            'location' => '',
            'description' => 'Панорамная студия с видом на Пулковские широты расположилась в современном комплексе Московского района.'
        ]);
        $property14 = Property::create([
            'title' => 'Мини-отель «Форт Р»',
            'user_id' => 2,
            'city' => "Санкт-Петербург",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'пос. Парголово, ул. Шишкина, д. 64',
            'location' => '',
            'description' => '«Форт Р» — это современный оригинальный мини-отель с большими и светлыми комнатами.'
        ]);

        $property15 = Property::create([
            'title' => 'Апартаменты Nice flats на Автозаводской',
            'user_id' => 1,
            'city' => "Москва",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Автозаводская ул., д. 23, корп. 7',
            'location' => '',
            'description' => 'Апартаменты Nice flats на Автозаводской расположены Даниловском районе с развитой инфраструктурой.'
        ]);

        $property16 = Property::create([
            'title' => '«Отель-бутик Макс»',
            'user_id' => 2,
            'city' => "Москва",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Козицкий пер., д. 1А',
            'location' => '',
            'description' => '«Отель-Бутик Макс» располагается в историческом центре Москвы на Пушкинской площади.'
        ]);

        $property17 = Property::create([
            'title' => 'Парк-отель «Внуково-Картмазово»',
            'user_id' => 3,
            'city' => "Москва",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'дер. Картмазово, ул. Киевская, д. 4',
            'location' => '',
            'description' => '«Внуково-Картмазово» – это уникальный парк-отель, расположенный всего в четырех км. от Москвы и в пешей доступности от Киевского шоссе.'
        ]);
        $property18 = Property::create([
            'title' => 'Мини-отель «Такт»',
            'user_id' => 1,
            'city' => "Москва",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'с. Юдино, Можайское шоссе, д. 55, лит. Б, стр. 1',
            'location' => '',
            'description' => 'Небольшой уютный мини-отель «Такт» с радостью примет вас в ближайшем пригороде Москвы — г. Одинцово.'
        ]);
        $property19 = Property::create([
            'title' => 'Мини-хостел Антресоль 26',
            'user_id' => 2,
            'city' => "Москва",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'ул. Бакунинская, д. 69, стр. 1',
            'location' => '',
            'description' => 'Мини-хостел Антресоль 26 — необычное место с камерной творческой атмосферой. '
        ]);
        $property20 = Property::create([
            'title' => 'Мини-отель «Клубничка»',
            'user_id' => 3,
            'city' => "Москва",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'ул. Новорязанская, д. 16/11, стр. 1',
            'location' => '',
            'description' => 'Мини-отель «Клубничка» расположен в самом центре Москвы.'
        ]);
        $property21 = Property::create([
            'title' => 'Отель «Hanzer»',
            'user_id' => 1,
            'city' => "Москва",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Большой Головин пер., д. 25',
            'location' => '',
            'description' => 'Трехзвездочный отель Hanzer, расположившийся в тихом переулке Большой Головин, находится в центре стролицы — между Садовым кольцом и Бульварным, недалеко от Сретенки.'
        ]);
        $property22 = Property::create([
            'title' => 'Отель «Зодиак»',
            'user_id' => 2,
            'city' => "Москва",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Ленинский пр., д. 15',
            'location' => '',
            'description' => 'В самом центре столицы на Ленинском проспекте среди городской суеты, гости и жители города, могут отдохнуть в эксклюзивном отеле «Зодиак», где царит тишина и комфорт.'
        ]);
        $property23 = Property::create([
            'title' => '«Блюз Отель»',
            'user_id' => 3,
            'city' => "Москва",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'ул. Доватора, д. 8',
            'location' => '',
            'description' => '«Блюз-Отель» находится практически в самом центре Москвы, всего в сотне шагов от станции метро «Спортивная».'
        ]);
        $property24 = Property::create([
            'title' => 'Отель «Кипарис»',
            'user_id' => 1,
            'city' => "Москва",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Будайский пр-д , д. 8, стр. 1',
            'location' => '',
            'description' => 'Отель «Кипарис», расположенный на ВДНХ, предлагает своим гостям удобные и комфортабельные номера, в которых предусмотрены все мелочи для удобства проживающих.'
        ]);
        $property25 = Property::create([
            'title' => 'Гостиничный комплекс «Фонда»',
            'user_id' => 2,
            'city' => "Москва",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'ул. Угрешская, д. 2, стр. 90',
            'location' => '',
            'description' => 'Можно ли совместить преимущества большого города и тишину сельской местности? Конечно, если задаться подобной целью и правильно выбрать гостиницу.'
        ]);
        $property26 = Property::create([
            'title' => 'Отель «SkyPoint»',
            'user_id' => 3,
            'city' => "Москва",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Международное ш., д. 28, лит. Б, стр. 3',
            'location' => '',
            'description' => '«SkyPoint» — это ультрасовременный 3-звездочный отель, включающий в себя 225 номеров различных категорий.'
        ]);
        $property27 = Property::create([
            'title' => 'Мини-хостел Freya на Сходненской',
            'user_id' => 1,
            'city' => "Москва",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'ул. Героев Панфиловцев, д. 1, корп. 3',
            'location' => '',
            'description' => 'Вблизи метро Сходненская расположился небольшой уютной хостел Freya, предлагающий своим гостям размещение как в обычных номерах, так и в номерах категории Люкс.'
        ]);
        $property28 = Property::create([
            'title' => 'Парк-отель «Внуково-Картмазово»',
            'user_id' => 2,
            'city' => "Москва",
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'дер. Картмазово, ул. Киевская, д. 4',
            'location' => '',
            'description' => '«Внуково-Картмазово» – это уникальный парк-отель, расположенный всего в четырех км. от Москвы и в пешей доступности от Киевского шоссе.'
        ]);

        $property29 = Property::create([
            'title' => 'Квартира на Альпийской',
            'user_id' => 1,
            'city' => 'Сочи',
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Альпийская улица, 90/4',
            'location' => '',
            'description' => 'Светлая, уютная квартира, оборудована всем необходимым, для комфортного проживания.'
        ]);

        $property30 = Property::create([
            'title' => 'Аренда шикарного коттеджа у моря',
            'user_id' => 2,
            'city' => 'Сочи',
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Курортный проспект, 91/11',
            'location' => '',
            'description' => 'Сдается в аренду великолепный коттедж в самом сердце города Сочи в непосредственной близости от моря.'
        ]);

        $property31 = Property::create([
            'title' => 'Дом Шале в самом центре Эсто-Садо',
            'user_id' => 3,
            'city' => 'Сочи',
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Омеловая улица, 22',
            'location' => '',
            'description' => 'Сдаётся красивый, комфортабельный и  самое главное новый коттедж 240 кв/м, стоящий на 4 сотках земли.  Был сдан в 2020 году!'
        ]);
        $property32 = Property::create([
            'title' => 'Квартира на Рахманинова',
            'user_id' => 1,
            'city' => 'Сочи',
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'переулок Рахманинова, 39/1',
            'location' => '',
            'description' => 'Клубный дом на  10 хозяев, парковка на одну машину, место для барбекю, плавательный бассейн 8х4, территория 10 соток вокруг дома, в пяти минутах от храма святого князя Владимира, элитная гимназия в двух шагах.'
        ]);
        $property33 = Property::create([
            'title' => '1 ком квартира с видом на море',
            'user_id' => 2,
            'city' => 'Сочи',
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Высокогорная улица, 11/5',
            'location' => '',
            'description' => 'Видовая квартира в новом доме, с новым ремонтом, с хорошей мебелью, оборудованной кухней, хорошие, тихие соседи.'
        ]);
        $property34 = Property::create([
            'title' => '1 комн. Квартира на Рахманинова',
            'user_id' => 3,
            'city' => 'Сочи',
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'переулок Рахманинова, 36/10',
            'location' => '',
            'description' => 'Новая. светлая 1-ком квартира в клубном доме.Полностью укомплектованная для жизни. Очень удобная локация, море в пешей доступности.'
        ]);
        $property35 = Property::create([
            'title' => '2 комн. Квартира 74кв.м.Новый Сочи',
            'user_id' => 1,
            'city' => 'Сочи',
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Калужская улица, 23А',
            'location' => '',
            'description' => 'Большая 2х комнатная квартира, вся инфроструктура рядом,море в пешей доступности,в квартире есть всё для длительного проживания. Очень тихое место.'
        ]);
        $property36 = Property::create([
            'title' => 'Аренда посуточная коттеджа в Красной поляне',
            'user_id' => 2,
            'city' => 'Сочи',
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Листопадная улица, 7',
            'location' => '',
            'description' => 'Внутренняя отделка наших деревянных коттеджей производилась по дизайнерскому проекту и полностью отвечает требованиям к эко-жилищу.'
        ]);
        $property37 = Property::create([
            'title' => 'Сдам уютную студию рядом Зимний театр',
            'user_id' => 3,
            'city' => 'Сочи',
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Комсомольская улица, 31',
            'location' => '',
            'description' => 'Сдаётся благоустроенная студия Кондиционер, стиральная машина , холодильник имеется все для комфортной жизни, до Зимнего театра 5-7 минут,Предоплата за месяц.'
        ]);
        $property38 = Property::create([
            'title' => 'Сдам студию в центре Сочи',
            'user_id' => 1,
            'city' => 'Сочи',
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Комсомольская улица, 29',
            'location' => '',
            'description' => 'Сдаётся благоустроенная студия.Кондиционер, стиральная машина , холодильник, микровалновая печь- всё это есть. Рядом остановка, рынок, детский сад, школы. 1-2человека. Предоплата за месяц.'
        ]);
        $property39 = Property::create([
            'title' => 'аренда апартаментов в центре 3 комнаты',
            'user_id' => 2,
            'city' => 'Сочи',
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'улица Войкова, 31',
            'location' => '',
            'description' => 'Сдается квартира с 1 сентября 2020 после ремонта.'
        ]);
        $property40 = Property::create([
            'title' => 'Сдаётся квартира в центре Сочи',
            'user_id' => 3,
            'city' => 'Сочи',
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'улица Горького, 87',
            'location' => '',
            'description' => 'Сдаётся квартира в центре Сочи 55 кв.м. с видом на море, на длительный срок, без детей и животных.'
        ]);
        $property41 = Property::create([
            'title' => 'Сдается 3х-этажная Вилла в Дагомысе',
            'user_id' => 1,
            'city' => 'Сочи',
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Армавирская улица, 53',
            'location' => '',
            'description' => ' Сдаётся для проживания роскошная вилла в стиле барокко в закрытом элитном коттеджном посёлке с шикарной подъездной дорогой.'
        ]);
        $property42 = Property::create([
            'title' => 'Комфортный дом с бассейном рядом с морем',
            'user_id' => 2,
            'city' => 'Сочи',
            'beds' => '1',
            'indoorSquare'=> '25',
            'address' => 'Армавирская улица, 54',
            'location' => '',
            'description' => 'Дом в 15 мин.до моря'
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
        $property29->features()->attach($wifiFeature);
        $property30->features()->attach($privateParkingFeature);
        $property31->features()->attach($kettleFeature);
        $property32->features()->attach($wifiFeature);
        $property33->features()->attach($privateParkingFeature);
        $property34->features()->attach($kettleFeature);
        $property35->features()->attach($wifiFeature);
        $property36->features()->attach($privateParkingFeature);
        $property37->features()->attach($kettleFeature);
        $property38->features()->attach($wifiFeature);
        $property39->features()->attach($privateParkingFeature);
        $property40->features()->attach($kettleFeature);
        $property41->features()->attach($wifiFeature);
        $property42->features()->attach($privateParkingFeature);

    }
}
