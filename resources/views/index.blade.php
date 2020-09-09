@extends('layouts.default')
@section('title', 'Document')
@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('style')

@endsection

@section('script')
@endsection
@section('content')
        <div id="section1">
            <div class="section1_content">
                <p class="sec1_title">
                    Подобрать отель на час в санкт-петербурге
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
            </div>
        </div>
        <div id="section2">
            <div class="container">
                <div class="sec2_content">
                    <p class="section_title">
                        Лучшие варианты в санкт-петербурге
                    </p>
                    <div class="sec2_catalog">
                        <div class="large_prods_wrap row">
                            <div class="col-md-4">
                                <div class="single_prod large_prod">
                                    <div
                                        class="image"
                                        style="
                                            background: url({{asset('/img/single_prod.jpg')}});
                                        "
                                    ></div>
                                    <div class="single_prod_info">
                                        <p class="title">
                                            Отель “невский форум”
                                        </p>
                                        <div>
                                            <div>
                                                <img
                                                    src="{{asset('/img/prod_place.svg')}}"
                                                    alt=""
                                                />
                                                <p>ул. Марата, д. 73</p>
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
                                            <a href="#" class="details">
                                                ПОДРОБНЕЕ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single_prod large_prod">
                                    <div
                                        class="image"
                                        style="
                                            background: url({{asset('/img/single_prod.jpg')}});
                                        "
                                    ></div>
                                    <div class="single_prod_info">
                                        <p class="title">
                                            Отель “невский форум”
                                        </p>
                                        <div>
                                            <div>
                                                <img
                                                    src="{{asset('/img/prod_place.svg')}}"
                                                    alt=""
                                                />
                                                <p>ул. Марата, д. 73</p>
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
                                            <a href="#" class="details">
                                                ПОДРОБНЕЕ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single_prod large_prod">
                                    <div
                                        class="image"
                                        style="
                                            background: url({{asset('/img/single_prod.jpg')}});
                                        "
                                    ></div>
                                    <div class="single_prod_info">
                                        <p class="title">
                                            Отель “невский форум”
                                        </p>
                                        <div>
                                            <div>
                                                <img
                                                    src="{{asset('/img/prod_place.svg')}}"
                                                    alt=""
                                                />
                                                <p>ул. Марата, д. 73</p>
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
                                                от <span>1,000 </span>руб
                                            </p>
                                            <a href="#" class="details">
                                                ПОДРОБНЕЕ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row small_prods_wrap">
                            <div class="col-md-3">
                                <div class="single_prod small_prod">
                                    <div
                                        class="image"
                                        style="
                                            background: url({{asset('/img/single_prod.jpg')}});
                                        "
                                    ></div>
                                    <div class="single_prod_info">
                                        <p class="title">
                                            Отель “невский форум”
                                        </p>
                                        <div>
                                            <div>
                                                <img
                                                    src="{{asset('/img/prod_place.svg')}}"
                                                    alt=""
                                                />
                                                <p>ул. Марата, д. 73</p>
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
                                            <a href="#" class="details">
                                                ПОДРОБНЕЕ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single_prod small_prod">
                                    <div
                                        class="image"
                                        style="
                                            background: url({{asset('/img/single_prod.jpg')}});
                                        "
                                    ></div>
                                    <div class="single_prod_info">
                                        <p class="title">
                                            Отель “невский форум”
                                        </p>
                                        <div>
                                            <div>
                                                <img
                                                    src="{{asset('/img/prod_place.svg')}}"
                                                    alt=""
                                                />
                                                <p>ул. Марата, д. 73</p>
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
                                            <a href="#" class="details">
                                                ПОДРОБНЕЕ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single_prod small_prod">
                                    <div
                                        class="image"
                                        style="
                                            background: url({{asset('/img/single_prod.jpg')}});
                                        "
                                    ></div>
                                    <div class="single_prod_info">
                                        <p class="title">
                                            Отель “невский форум”
                                        </p>
                                        <div>
                                            <div>
                                                <img
                                                    src="{{asset('/img/prod_place.svg')}}"
                                                    alt=""
                                                />
                                                <p>ул. Марата, д. 73</p>
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
                                            <a href="#" class="details">
                                                ПОДРОБНЕЕ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single_prod small_prod">
                                    <div
                                        class="image"
                                        style="
                                            background: url({{asset('/img/single_prod.jpg')}});
                                        "
                                    ></div>
                                    <div class="single_prod_info">
                                        <p class="title">
                                            Отель “невский форум”
                                        </p>
                                        <div>
                                            <div>
                                                <img
                                                    src="{{asset('/img/prod_place.svg')}}"
                                                    alt=""
                                                />
                                                <p>ул. Марата, д. 73</p>
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
                                            <a href="#" class="details">
                                                ПОДРОБНЕЕ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mobile_prods_wrap row">
                            <div class="col-12 col-sm-6">
                                <div class="single_prod large_prod">
                                    <div
                                        class="image"
                                        style="
                                            background: url({{asset('/img/single_prod.jpg')}});
                                        "
                                    ></div>
                                    <div class="single_prod_info">
                                        <p class="title">
                                            Отель “невский форум”
                                        </p>
                                        <div>
                                            <div>
                                                <img
                                                    src="{{asset('/img/prod_place.svg')}}"
                                                    alt=""
                                                />
                                                <p>ул. Марата, д. 73</p>
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
                                            <a href="#" class="details">
                                                ПОДРОБНЕЕ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="single_prod large_prod">
                                    <div
                                        class="image"
                                        style="
                                            background: url({{asset('/img/single_prod.jpg')}});
                                        "
                                    ></div>
                                    <div class="single_prod_info">
                                        <p class="title">
                                            Отель “невский форум”
                                        </p>
                                        <div>
                                            <div>
                                                <img
                                                    src="{{asset('/img/prod_place.svg')}}"
                                                    alt=""
                                                />
                                                <p>ул. Марата, д. 73</p>
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
                                            <a href="#" class="details">
                                                ПОДРОБНЕЕ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="single_prod large_prod">
                                    <div
                                        class="image"
                                        style="
                                            background: url({{asset('/img/single_prod.jpg')}});
                                        "
                                    ></div>
                                    <div class="single_prod_info">
                                        <p class="title">
                                            Отель “невский форум”
                                        </p>
                                        <div>
                                            <div>
                                                <img
                                                    src="{{asset('/img/prod_place.svg')}}"
                                                    alt=""
                                                />
                                                <p>ул. Марата, д. 73</p>
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
                                                от <span>1,000 </span>руб
                                            </p>
                                            <a href="#" class="details">
                                                ПОДРОБНЕЕ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="single_prod large_prod">
                                    <div
                                        class="image"
                                        style="
                                            background: url({{asset('/img/single_prod.jpg')}});
                                        "
                                    ></div>
                                    <div class="single_prod_info">
                                        <p class="title">
                                            Отель “невский форум”
                                        </p>
                                        <div>
                                            <div>
                                                <img
                                                    src="{{asset('/img/prod_place.svg')}}"
                                                    alt=""
                                                />
                                                <p>ул. Марата, д. 73</p>
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
                                                от <span>1,000 </span>руб
                                            </p>
                                            <a href="#" class="details">
                                                ПОДРОБНЕЕ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
@endsection
