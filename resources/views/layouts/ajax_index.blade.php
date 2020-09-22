
<div id="city_index" >
    <div id="section1">

        <div class="section1_content">
            <p class="sec1_title">
                @if($current_city === 'Москва')
                    Подобрать отель на час в Москве
                @elseif($current_city === 'Санкт-Петербург')
                    Подобрать отель на час в Санкт-Петербурге
                    @elseif($current_city === 'Сочи')
                    Подобрать отель на час в Сочи
                @endif
            </p>
            <div class="sec1_filter">
                <div class="select_wrap">
                    <select name="" id="">
                        <option value="Тип заведения">Тип заведения</option>
                        <option value="Тип заведения">Тип заведения</option>
                        <option value="Тип заведения">Тип заведения</option>
                    </select>
                </div>
                <div class="select_wrap">
                    <select name="" id="">
                        <option value="Срок аренды">Срок аренды</option>
                        <option value="Срок аренды">Срок аренды</option>
                        <option value="Срок аренды">Срок аренды</option>
                    </select>
                </div>
                <div class="select_wrap">
                    <select name="" id="" class="location_select">
                        <option value="Месторасположение">
                            Месторасположение
                        </option>
                        <option value="Месторасположение">
                            Месторасположение
                        </option>
                        <option value="Месторасположение">
                            Месторасположение
                        </option>
                    </select>
                </div>
                <button>Найти <img src="{{asset('/img/zoom.svg')}}" alt="" /></button>
            </div>
            <div class="sec1_filter_tags">
                <a href="#">до 1000 руб</a>
                <a class="active_tag" href="#">до 1500 руб</a>
                <a href="#">до 2000 руб</a>
                <a href="#">до 3000 руб</a>
            </div>
            <div class="mobile_hidden_mob_location">
                <ul
                    class="nav hidden_location_tabs_title"
                    id="myTab"
                    role="tablist"
                >
                    <li class="nav-item">
                        <a
                            class="nav-link active"
                            id="metro-tab"
                            data-toggle="tab"
                            href="#metro"
                            role="tab"
                            aria-controls="metro"
                            aria-selected="true"
                        >Метро</a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            id="region-tab"
                            data-toggle="tab"
                            href="#region"
                            role="tab"
                            aria-controls="region"
                            aria-selected="false"
                        >Район</a
                        >
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div
                        class="tab-pane fade show active location_single_tab"
                        id="metro"
                        role="tabpanel"
                        aria-labelledby="metro-tab"
                    >
                        <div class="select_wrap">
                            <select>
                                <option value="" selected disabled hidden>
                                    Выберите метро
                                </option>
                                <option value="Метро 1">Метро 1</option>
                                <option value="Метро 2">Метро 2</option>
                                <option value="Метро 3">Метро 3</option>
                                <option value="Метро 4">Метро 4</option>
                            </select>
                        </div>
                        <button>Применить</button>
                    </div>
                    <div
                        class="tab-pane fade location_single_tab"
                        id="region"
                        role="tabpanel"
                        aria-labelledby="region-tab"
                    >
                        <div class="select_wrap">
                            <select>
                                <option value="" selected disabled hidden>
                                    Выберите район
                                </option>
                                <option value="Район 1">Район 1</option>
                                <option value="Район 2">Район 2</option>
                                <option value="Район 3">Район 3</option>
                                <option value="Район 4">Район 4</option>
                            </select>
                        </div>
                        <button>Применить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section2">
        <div class="container">
            <div class="sec2_content">
                <p class="section_title">
                    @if($current_city === 'Москва')
                    Лучшие варианты в Москве
                    @elseif($current_city === 'Санкт-Петербург')
                    Лучшие варианты в Санкт-Петербурге
                    @elseif($current_city === 'Сочи')
                    Лучшие варианты в Сочи
                    @endif
                </p>

                <div class="sec2_catalog">
                    <div class="large_prods_wrap row">
                        @foreach($properties1 as $property1)
                        <div class="col-md-4">



                            <div class="single_prod large_prod">
                                @if(!is_null($property1->properties_photo_cover()))
                                <div
                                    class="image"
                                    style="
                                        background: url({{asset('storage/properties_images/'.$property1->properties_photo_cover()->name) }});
                                        "
                                ></div>
                                @endif
                                <div class="single_prod_info">
                                    <p class="title">
                                        {{$property1->title}}
                                    </p>
                                    <div>
                                        <div>
                                            <img
                                                src="{{asset('/img/prod_place.svg')}}"
                                                alt=""
                                            />
                                            <p>{{ $current_city }}, {{ $property1->address }}</p>
                                        </div>
                                        <div>
                                            <img
                                                src="{{asset('/img/prod_metro.svg')}}"
                                                alt=""
                                            />
                                            <p>Маяковская</p>
                                        </div>
                                        <div>
                                            <img
                                                src="{{asset('/img/prod_clock.svg')}}"
                                                alt=""
                                            />
                                            <p>от 2х часов</p>
                                        </div>
                                    </div>
                                    <div class="bottom_buttons">
                                        <p class="price">
                                            от <span>1,000</span> руб
                                        </p>
                                        <a href="{{route('property', $property1->id)}}" class="details">
                                            ПОДРОБНЕЕ
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                            @endforeach
                    </div>
                    <div class="row small_prods_wrap">

                        @foreach($properties2 as $property2)
                        <div class="col-md-3">
                            <div class="single_prod small_prod">
                                @if(!is_null($property1->properties_photo_cover()))
                                <div
                                    class="image"
                                    style="
                                        background: url({{asset('storage/properties_images/'.$property2->properties_photo_cover()->name)}});
                                        "
                                ></div>
                                @endif
                                <div class="single_prod_info">
                                    <p class="title">
                                        {{ $property2->title }}
                                    </p>
                                    <div>
                                        <div>
                                            <img
                                                src="{{asset('/img/prod_place.svg')}}"
                                                alt=""
                                            />
                                            <p>{{ $current_city }}, {{ $property2->address }}</p>
                                        </div>
                                        <div>
                                            <img
                                                src="{{asset('/img/prod_metro.svg')}}"
                                                alt=""
                                            />
                                            <p>Маяковская</p>
                                        </div>
                                        <div>
                                            <img
                                                src="{{asset('/img/prod_clock.svg')}}"
                                                alt=""
                                            />
                                            <p>от 2х часов</p>
                                        </div>
                                    </div>
                                    <div class="bottom_buttons">
                                        <p class="price">
                                            от <span>1,000</span> руб
                                        </p>
                                        <a href="{{route('property', $property1->id)}}" class="details">
                                            ПОДРОБНЕЕ
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="mobile_prods_wrap row">
                        @foreach($properties_mob as $property_mob)
                        <div class="col-12 col-sm-6">
                            <div class="single_prod large_prod">
                                <div
                                    class="image"
                                    style="
                                        background: url({{asset('storage/properties_images/'.$property_mob->properties_photo_cover()->name)}});
                                        "
                                ></div>
                                <div class="single_prod_info">
                                    <p class="title">
                                        {{ $property_mob->title }}
                                    </p>
                                    <div>
                                        <div>
                                            <img
                                                src="{{asset('/img/prod_place.svg')}}"
                                                alt=""
                                            />
                                            <p>{{ $current_city }}, {{ $property_mob->address }}</p>
                                        </div>
                                        <div>
                                            <img
                                                src="{{asset('/img/prod_metro.svg')}}"
                                                alt=""
                                            />
                                            <p>Маяковская</p>
                                        </div>
                                        <div>
                                            <img
                                                src="{{asset('/img/prod_clock.svg')}}"
                                                alt=""
                                            />
                                            <p>от 2х часов</p>
                                        </div>
                                    </div>
                                    <div class="bottom_buttons">
                                        <p class="price">
                                            от <span>1,000</span> руб
                                        </p>
                                        <a href="{{route('property', $property_mob->id)}}" class="details">
                                            ПОДРОБНЕЕ
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="sec2_show_more">
                        <a href="#">Показать еще</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section3">
        <div class="container">
            <div class="sec3_content">
                <p class="section_title">
                    Более 200 000 человек ищут почасовое жилье на 60-мин.РФ
                </p>
                <p class="section_subtitle">
                    Люди ищут почасовые отели и аппартаменты на нашем сайте
                    для следующих поводов
                </p>
                <div class="row">
                    <div class="col-6 col-lg-3">
                        <div
                            class="sec3_single_item"
                            style="background: url({{asset('/img/sec3_item.jpg')}})"
                        >
                            <p>Романтическое свидание</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div
                            class="sec3_single_item"
                            style="background: url({{asset('/img/sec3_item.jpg')}})"
                        >
                            <p>Романтическое свидание</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div
                            class="sec3_single_item"
                            style="background: url({{asset('/img/sec3_item.jpg')}})"
                        >
                            <p>Романтическое свидание</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div
                            class="sec3_single_item"
                            style="background: url({{asset('/img/sec3_item.jpg')}})"
                        >
                            <p>Романтическое свидание</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div
                            class="sec3_single_item"
                            style="background: url({{asset('/img/sec3_item.jpg')}})"
                        >
                            <p>Романтическое свидание</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div
                            class="sec3_single_item"
                            style="background: url({{asset('/img/sec3_item.jpg')}})"
                        >
                            <p>Романтическое свидание</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div
                            class="sec3_single_item"
                            style="background: url({{asset('/img/sec3_item.jpg')}})"
                        >
                            <p>Романтическое свидание</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div
                            class="sec3_single_item"
                            style="background: url({{asset('/img/sec3_item.jpg')}})"
                        >
                            <p>Романтическое свидание</p>
                        </div>
                    </div>
                </div>
                <div class="sec3_text">
                    <p>
                        «НаЧас.ру» — это наиболее полный в Москве и
                        Санкт-Петербурге каталог, где представлены почасовые
                        квартиры, гостиницы с почасовой оплатой и почасовые
                        отели СПб.
                    </p>
                    <p>
                        Недорогие мини-отели Санкт-Петербурга,
                        представленные на нашем сайте, работают без
                        посредников, поэтому цены на проживание остаются
                        минимальными. Если вас интересует почасовая аренда
                        квартир и номеров в Петербурге, то вы попали по
                        адресу, мы обязательно поможем вам! Квартира на час
                        или мини-отель с почасовой оплатой — выбор, где
                        поселиться в СПб, только за вами.
                    </p>
                    <p>
                        Мини-отели эконом класса предлагают свои услуги не
                        только туристам и командировочным, снять квартиру на
                        час может любой желающий. Если вы приехали большой
                        компанией, то можете снять весь мини-отель на час, а
                        также арендовать в нем номер на час или на 3 часа —
                        чем больше срок аренды, тем меньше оплата по часам.
                        Мини-отели Санкт-Петербурга эконом-класса вы найдете
                        в спальных районах, тогда как в Центре Питера вас
                        встретят мини отели с джакузи и роскошным
                        интерьером, расположенные недалеко от вокзалов. На
                        сайте наЧас.ру вы найдете недорогие мини-гостиницы
                        Санкт-Петербурга с почасовой оплатой, квартиры на
                        час и почасовые мини-отели и с актуальными ценами,
                        фотографиями и условиями пребывания. Теперь вам
                        совсем не обязательно искать сайт мини-отеля, чтобы
                        сравнить условия проживания, фотографии и цены. Мы
                        постарались собрать гостиницы на час в одном месте,
                        чтобы вы могли получить всю необходимую информацию,
                        а также сэкономить время и деньги.
                    </p>
                    <p>
                        Кроме того, у вас есть возможность выбора объекта на
                        карте города в нужном районе.
                    </p>
                    <p>Приятного вам отдыха и комфортного проживания!</p>
                </div>
            </div>
        </div>
    </div>
</div>
