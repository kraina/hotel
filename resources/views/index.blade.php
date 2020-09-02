<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="{{asset('/css/font/fonts.css')}}" />
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="{{asset('/css/style.css')}}" />
        <link rel="stylesheet" href="{{asset('/css/adaptive.css')}}" />
    </head>
    <body>
        <header>
            <div class="container">
                <div class="header_wrap">
                    <div class="header_info_wrap">
                        <div class="header_info">
                            <img src="{{asset('/img/keys.svg')}}" alt="" />
                            <p>
                                <span> 60-мин.РФ</span>
                                <span>Отели на час</span>
                            </p>
                        </div>
                        <div class="header_location">
                            <img src="{{asset('/img/loc.svg')}}" alt="" />
                            <a href="#">Санкт-Петербург</a>
                        </div>
                    </div>
                    <div class="header_nav">
                        <ul>
                            <li>
                                <a href="/catalog.html">ОТЕЛИ</a>
                            </li>
                            <li>
                                <a href="/catalog.html">АППАРТАМЕНТЫ</a>
                            </li>
                            <li>
                                <a href="/catalog.html">ДОМА</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header_object">
                        <a class="add_obj" href="#">Добавить объект</a>
                        <div class="header_account">
                            <a href="#"
                                ><img src="{{asset('/img/acc.svg')}}" alt="" />ВХОД</a
                            >
                        </div>
                    </div>
                </div>
                <div class="header_mobile">
                    <div class="header_info">
                        <img src="{{asset('/img/keys.svg')}}" alt="" />
                        <p>
                            <span> 60-мин.РФ</span>
                            <span>Отели на час</span>
                        </p>
                    </div>
                    <div class="mobile-header-toggle">
                        <div class="button_menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="menu_responsive">
                        <div class="mob_menu_header">
                            <div class="header_info">
                                <img src="{{asset('/img/reverse-keys.svg')}}" alt="" />
                                <p>
                                    <span> 60-мин.РФ</span>
                                    <span>Отели на час</span>
                                </p>
                            </div>
                        </div>
                        <nav class="main_menu">
                            <ul>
                                <li><a href="#">Отели</a></li>
                                <li><a href="#">Аппартаменты</a></li>
                                <li><a href="#">Дома</a></li>
                            </ul>
                        </nav>
                        <div class="regions">
                            <a href="#" class="active_region"
                                >Санкт-Петербург
                                <img src="{{asset('/img/arrow.svg')}}" alt=""
                            /></a>
                        </div>
                        <div class="mob_menu_footer">
                            <a href="#">Добавить объект</a>
                            <a href="#">Войти в экстранет</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

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

        <footer>
            <div class="container">
                <div class="footer_top">
                    <div class="footer_info">
                        <div class="header_location">
                            <img src="{{asset('/img/loc.svg')}}" alt="" />
                            <a href="#">Санкт-Петербург</a>
                        </div>
                    </div>
                    <div class="row footer_links">
                        <div class="col-md-4">
                            <a href="#">Отели</a>
                        </div>
                        <div class="col-md-4">
                            <a href="#">Аппартаменты</a>
                        </div>
                        <div class="col-md-4">
                            <a href="#">Дома</a>
                        </div>
                    </div>
                    <div class="footer_account">
                        <a href="#">Стать партнером</a>
                    </div>
                </div>
                <div class="footer_bottom">
                    <div class="footer_info">
                        <div class="header_info">
                            <img src="{{asset('/img/keys.svg')}}" alt="" />
                            <p>
                                <span> 60-мин.РФ </span>
                                <span>Отели на час</span>
                            </p>
                        </div>
                    </div>
                    <div class="row footer_links">
                        <div class="col-md-4">
                            <a href="#">Отели в Спб</a>
                            <a href="#">Отели в Москве</a>
                            <a href="#">Отели в Ростове</a>
                        </div>
                        <div class="col-md-4">
                            <a href="#">Аппартаменты в Спб</a>
                            <a href="#">Аппартаменты в Москве</a>
                            <a href="#">Аппартаменты в Ростове</a>
                        </div>
                        <div class="col-md-4">
                            <a href="#">Дома в Спб</a>
                            <a href="#">Дома в Москве</a>
                            <a href="#">Дома в Ростове</a>
                        </div>
                    </div>
                    <div class="footer_account">
                        <a class="add_obj" href="#">Добавить объект</a>

                        <a href="#">Войти в экстранет</a>
                    </div>
                </div>
                <p class="footer_terms">
                    © 2020 Бронирование отелей на час “60-Мин.РФ”
                </p>
            </div>

            <div class="mobile_footer">
                <div class="top_mob_fotoer">
                    <div class="header_location">
                        <img src="{{asset('/img/loc.svg')}}" alt="" />
                        <a href="#">Санкт-Петербург</a>
                    </div>
                    <div class="footer_account">
                        <a class="add_obj" href="#">Добавить объект</a>
                    </div>
                </div>
                <div class="bottom_mob_fotoer">
                    <div class="header_info">
                        <img src="{{asset('/img/keys.svg')}}" alt="" />
                        <p>
                            <span> 60-мин.РФ </span>
                            <span>Отели на час</span>
                        </p>
                    </div>
                    <div class="footer_links">
                        <a href="#">Отели</a>
                        <a href="#">Аппартаменты</a>
                        <a href="#">Дома</a>
                    </div>

                    <div class="footer_account">
                        <a href="#">Войти в экстранет</a> <span>|</span>
                        <a href="#">Стать партнером</a>
                    </div>
                    <div class="footer_socs">
                        <a href="#"><img src="{{asset('/img/inst.svg')}}" alt="" /></a>
                        <a href="#"><img src="{{asset('/img/vk.svg')}}" alt="" /></a>
                        <a href="#"><img src="{{asset('/img/fb.svg')}}" alt="" /></a>
                    </div>
                    <p class="footer_terms">
                        © 2020 <br />
                        Бронирование отелей на час “60-Мин.РФ”
                    </p>
                </div>
            </div>
        </footer>

        <script
            src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"
        ></script>
        <script src="{{asset('/js/custom.js')}}"></script>
    </body>
</html>
