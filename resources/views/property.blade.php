@extends('layouts.default')
@section('title', 'Catalog')
@section('meta')
   <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('style')

@endsection

@section('script')
@endsection
@section('content')
        <div id="single_hotel_wrap">
            <div class="container single_hotel_container">
                <div class="breacrumbs">
                    <a href="#">Каталог отелей</a>
                    <span><img src="{{asset('img/bread_arrow.svg')}}" alt="" /></span>
                    <a href="#">Отели в Москве</a>
                    <span><img src="{{asset('img/bread_arrow.svg')}}" alt="" /></span>
                    <a href="#">{{ $property->title }}</a>
                </div>
                <div class="hotel_top">
                    <div class="row">
                        <div class="col-lg-7 hotel_photos">
                            <p class="hotel_mobile_title">
                                {{ $property->title }}
                            </p>
                            <div class="hotel_main_photo">

                                @foreach($property->properties_photo()->get() as $propertyPhoto )
                                    <div>
                                <img src="{{ asset('storage/properties_images/'.$propertyPhoto->name) }}" alt="">
                                    </div>
                                @endforeach
                            </div>
                            <div class="hotel_sub_photos">
                                @foreach($property->properties_photo()->get() as $propertyPhoto )
                                <div
                                    class="sub_photo"
                                    style="
                                        background: url({{ asset('storage/properties_images/'.$propertyPhoto->name) }});
                                    "
                                >
                                    <div></div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-5 hotel_info">
                            <p class="hotel_title">{{ $property->title }}</p>
                            <div class="single_prod_info">
                                <div>
                                    <div>
                                        <img
                                            src="{{asset('/img/hotel_place.svg')}}"
                                            alt=""
                                        />

                                        <p>{{ $property->city }}, {{ $property->address }}</p>

                                    </div>
                                    <div>
                                        <img
                                            src="{{asset('/img/hotel_metro.svg')}}"
                                            alt=""
                                        />
                                        <p>Маяковская</p>
                                    </div>
                                    <div class="hotel_walk">
                                        <img src="{{asset('/img/hotel_man.svg')}}" alt="" />
                                        <p>2 мин</p>
                                    </div>
                                    <div>
                                        <img
                                            src="{{asset('/img/hotel_clock.svg')}}"
                                            alt=""
                                        />
                                        <p>от 2х часов до 1 суток</p>
                                    </div>
                                </div>
                            </div>
                            <div class="hotel_description">
                                <p>
                                    {{ $property->description}}
                                </p>
                            </div>
                            <div class="hotel_rooms">
                                <div>
                                    <img src="{{asset('/img/room_bed.svg')}}" alt="" />
                                    <p>1 номер категории "Люкс"</p>
                                </div>
                                <div>
                                    <img src="{{asset('/img/room_bed.svg')}}" alt="" />
                                    <p>1 номер категории "Полулюкс"</p>
                                </div>
                                <div>
                                    <img src="{{asset('/img/room_bed.svg')}}" alt="" />
                                    <p>
                                        1 номер категории "Двухместный стандарт"
                                    </p>
                                </div>
                            </div>
                            <button class="book_room">
                                Забронировать номер
                            </button>
                        </div>
                    </div>
                </div>
                <div class="hotel_main">
                    <div class="row">
                        <div class="col-lg-9 main_hotel_descriptionn">
                            <p class="description_title">Описание</p>
                            <p>
                                {{ $property->description }}
                            </p>
                            <div id="hidden_description">
                                <p>
                                    Мини-отель «На Большевиков» — это гостиница
                                    эконом-класса, удобная для размещения
                                    приехавшим, как на один день или выходные,
                                    так и на продолжительное время: каникулы,
                                    работу, учебу или лечение.
                                </p>
                                <p>
                                    Наш мини-отель предлагает вашему вниманию 5
                                    номеров, интерьер каждого из которых
                                    выполнен в современном стильном дизайне.
                                    Наши пять номеров разделены на категории для
                                    удобства выбора: «Стандарт», «Комфорт» и
                                    «Полулюкс», в которых есть все необходимое,
                                    как для краткосрочного, так и для
                                    длительного проживания.
                                </p>
                            </div>
                            <a
                                href="#"
                                class="hidden_description_trigger"
                                data-toggle="collapse"
                                data-target="#hidden_description"
                                aria-expanded="true"
                                aria-controls="hidden_description"
                                >Развернуть описание
                                <img src="{{asset('/img/descr_arr.svg')}}" alt=""
                            /></a>
                        </div>
                        <div class="col-lg-3 main_hotel_rec">
                            <p class="recs_title">Отель подходит для:</p>
                            <div
                                class="sec3_single_item"
                                style="background: url({{asset('img/sec3_item.jpg')}})"
                            >
                                <p>Романтических свиданий</p>
                            </div>
                            <div
                                class="sec3_single_item"
                                style="background: url({{asset('img/sec3_item.jpg')}})"
                            >
                                <p>Отдохнуть или поспать</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hotel_rooms_wrap">
                    <p class="description_title rooms_title">Номера</p>
                    <div class="single_hotel_room">
                        <div
                            class="image"
                            style="background: url({{asset('img/single-room.jpg')}})"
                        >
                            <p class="count">5 фото</p>
                        </div>
                        <div class="info">
                            <p class="title">Двухместный Стандарт</p>
                            <div>
                                <div>
                                    <img src="{{asset('img/single_wifi.png')}}" alt="" />
                                    <p>Бесплатный Wi-Fi</p>
                                </div>
                                <div>
                                    <img src="{{asset('/img/single_check.png')}}" alt="" />
                                    <p>Отопление</p>
                                </div>
                                <div>
                                    <img src="{{asset('/img/single_tv.png')}}" alt="" />
                                    <p>Телевидение</p>
                                </div>
                                <div>
                                    <img src="{{asset('/img/single-tea.png')}}" alt="" />
                                    <p>Чай в номере</p>
                                </div>
                                <div>
                                    <img src="{{asset('/img/single-shover.png')}}" alt="" />
                                    <p>Собственная ванная комната</p>
                                </div>
                            </div>
                        </div>
                        <div class="price_wrap">
                            <div class="active">
                                <p class="time">2 часа</p>
                                <p class="price">1100 р</p>
                            </div>
                            <div>
                                <p class="time">2 часа</p>
                                <p class="price">1100 р</p>
                            </div>
                            <div>
                                <p class="time">2 часа</p>
                                <p class="price">1100 р</p>
                            </div>
                            <div>
                                <p class="time">2 часа</p>
                                <p class="price">1100 р</p>
                            </div>
                            <div>
                                <p class="time">2 часа</p>
                                <p class="price">1100 р</p>
                            </div>
                        </div>
                        <div>
                            <button class="book_room">Забронировать</button>
                        </div>
                    </div>
                    <div class="single_hotel_room">
                        <div
                            class="image"
                            style="background: url({{asset('/img/single-room.jpg')}})"
                        >
                            <p class="count">5 фото</p>
                        </div>
                        <div class="info">
                            <p class="title">Двухместный Стандарт</p>
                            <div>
                                <div>
                                    <img src="{{asset('/img/single_wifi.png')}}" alt="" />
                                    <p>Бесплатный Wi-Fi</p>
                                </div>
                                <div>
                                    <img src="{{asset('/img/single_check.png')}}" alt="" />
                                    <p>Отопление</p>
                                </div>
                                <div>
                                    <img src="{{asset('/img/single_tv.png')}}" alt="" />
                                    <p>Телевидение</p>
                                </div>
                                <div>
                                    <img src="{{asset('/img/single-tea.png')}}" alt="" />
                                    <p>Чай в номере</p>
                                </div>
                                <div>
                                    <img src="{{asset('/img/single-shover.png')}}" alt="" />
                                    <p>Собственная ванная комната</p>
                                </div>
                            </div>
                        </div>
                        <div class="price_wrap">
                            <div class="active">
                                <p class="time">2 часа</p>
                                <p class="price">1100 р</p>
                            </div>
                            <div>
                                <p class="time">2 часа</p>
                                <p class="price">1100 р</p>
                            </div>
                            <div>
                                <p class="time">2 часа</p>
                                <p class="price">1100 р</p>
                            </div>
                            <div>
                                <p class="time">2 часа</p>
                                <p class="price">1100 р</p>
                            </div>
                            <div>
                                <p class="time">2 часа</p>
                                <p class="price">1100 р</p>
                            </div>
                        </div>
                        <div>
                            <button class="book_room">Забронировать</button>
                        </div>
                    </div>
                    <div class="single_hotel_room">
                        <div
                            class="image"
                            style="background: url({{asset('/img/single-room.jpg')}})"
                        >
                            <p class="count">5 фото</p>
                        </div>
                        <div class="info">
                            <p class="title">Двухместный Стандарт</p>
                            <div>
                                <div>
                                    <img src="{{asset('/img/single_wifi.png')}}" alt="" />
                                    <p>Бесплатный Wi-Fi</p>
                                </div>
                                <div>
                                    <img src="{{asset('/img/single_check.png')}}" alt="" />
                                    <p>Отопление</p>
                                </div>
                                <div>
                                    <img src="{{asset('/img/single_tv.png')}}" alt="" />
                                    <p>Телевидение</p>
                                </div>
                                <div>
                                    <img src="{{asset('/img/single-tea.png')}}" alt="" />
                                    <p>Чай в номере</p>
                                </div>
                                <div>
                                    <img src="{{asset('/img/single-shover.png')}}" alt="" />
                                    <p>Собственная ванная комната</p>
                                </div>
                            </div>
                        </div>
                        <div class="price_wrap">
                            <div class="active">
                                <p class="time">2 часа</p>
                                <p class="price">1100 р</p>
                            </div>
                            <div>
                                <p class="time">2 часа</p>
                                <p class="price">1100 р</p>
                            </div>
                            <div>
                                <p class="time">2 часа</p>
                                <p class="price">1100 р</p>
                            </div>
                            <div>
                                <p class="time">2 часа</p>
                                <p class="price">1100 р</p>
                            </div>
                            <div>
                                <p class="time">2 часа</p>
                                <p class="price">1100 р</p>
                            </div>
                        </div>
                        <div>
                            <button class="book_room">Забронировать</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hotel_reviews">
                <div class="container">
                    <div class="hotel_reviews_top">
                        <div>
                            <p class="description_title">Отзывы</p>
                            <p class="reviews_rating">Средняя оценка: 4,2</p>
                        </div>
                        <button class="leave_review">
                            <img src="{{asset('/img/leave_review.png')}}" alt="" /> Оставить
                            отзыв
                        </button>
                    </div>
                    <div class="hotel_reviews_wrap row">
                        <div class="col-md-4">
                            <div class="single_hotel_review">
                                <div class="positive">
                                    <img src="{{asset('/img/plus.svg')}}" alt="" />
                                    <p>
                                        Понравилось то, что наш номер был
                                        зеркальным. Это было хорошо. 100%
                                        вернемся сюда снова.
                                    </p>
                                </div>
                                <div class="negative">
                                    <img src="{{asset('/img/minus.svg')}}" alt="" />

                                    <p>Все понравилось.</p>
                                </div>
                                <div class="author">
                                    <p class="name">Анна</p>
                                    <p class="date">
                                        Дата отзыва: февраль 2020
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single_hotel_review">
                                <div class="positive">
                                    <img src="{{asset('/img/plus.svg')}}" alt="" />
                                    <p>
                                        Понравилось то, что наш номер был
                                        зеркальным. Это было хорошо. 100%
                                        вернемся сюда снова.
                                    </p>
                                </div>
                                <div class="negative">
                                    <img src="{{asset('/img/minus.svg')}}" alt="" />

                                    <p>Все понравилось.</p>
                                </div>
                                <div class="author">
                                    <p class="name">Анна</p>
                                    <p class="date">
                                        Дата отзыва: февраль 2020
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single_hotel_review">
                                <div class="positive">
                                    <img src="{{asset('/img/plus.svg')}}" alt="" />
                                    <p>
                                        Понравилось то, что наш номер был
                                        зеркальным. Это было хорошо. 100%
                                        вернемся сюда снова.
                                    </p>
                                </div>
                                <div class="negative">
                                    <img src="{{asset('/img/minus.svg')}}" alt="" />

                                    <p>Все понравилось.</p>
                                </div>
                                <div class="author">
                                    <p class="name">Анна</p>
                                    <p class="date">
                                        Дата отзыва: февраль 2020
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 show_more_reviews">
                            <a href="#" class=""
                                >Еще больше отзывов
                                <img src="{{asset('/img/down_arr.svg')}}" alt=""
                            /></a>
                        </div>
                    </div>
                    <button class="leave_review mob_leave_review">
                        <img src="{{asset('/img/leave_review.png')}}" alt="" /> Оставить
                        отзыв
                    </button>
                </div>
            </div>
            <div class="recent_hotels">
                <div class="container">
                    <p class="description_title">Похожие варианты размещения</p>
                    <div class="recent_hotels_slider_wrap">
                        <div class="recent_hotels_slider">
                            <div class="single_prod large_prod">
                                <div
                                    class="image"
                                    style="
                                        background: url({{asset('/img/single_prod.jpg')}});
                                    "
                                ></div>
                                <div class="single_prod_info">
                                    <p class="title">Отель “невский форум”</p>
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
                            <div class="single_prod large_prod">
                                <div
                                    class="image"
                                    style="
                                        background: url({{asset('/img/single_prod.jpg')}});
                                    "
                                ></div>
                                <div class="single_prod_info">
                                    <p class="title">Отель “невский форум”</p>
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
                            <div class="single_prod large_prod">
                                <div
                                    class="image"
                                    style="
                                        background: url({{asset('/img/single_prod.jpg')}});
                                    "
                                ></div>
                                <div class="single_prod_info">
                                    <p class="title">Отель “невский форум”</p>
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
                            <div class="single_prod large_prod">
                                <div
                                    class="image"
                                    style="
                                        background: url({{asset('/img/single_prod.jpg')}});
                                    "
                                ></div>
                                <div class="single_prod_info">
                                    <p class="title">Отель “невский форум”</p>
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
                            <div class="single_prod large_prod">
                                <div
                                    class="image"
                                    style="
                                        background: url({{asset('/img/single_prod.jpg')}});
                                    "
                                ></div>
                                <div class="single_prod_info">
                                    <p class="title">Отель “невский форум”</p>
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
                        <a href="#" class="prev_arr"
                            ><img src="{{asset('/img/slider_prev.png')}}" alt=""
                        /></a>
                        <a href="#" class="next_arr"
                            ><img src="{{asset('/img/slider_next.png')}}" alt=""
                        /></a>
                        <a href="#" class="mob_prev_arr"
                            ><img src="{{asset('/img/mob_prev_arr.png')}}" alt=""
                        /></a>
                        <a href="#" class="mob_next_arr"
                            ><img src="{{asset('/img/mob_next_arr.png')}}" alt=""
                        /></a>
                    </div>
                </div>
            </div>
        </div>
@endsection
