<div id="catalog_wrap">
<div class="container">
    <div class="before_catalog">
        <div class="catalog_title">
            <a href="#" class="catalog_selected_region"
            >
                <img src="/img/catalog-arr.svg" alt=""
                /></a>
            <p>ОТЕЛИ НА ЧАС</p>
        </div>

        <!--
                            <div id="parent_input" class="search_inputs d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">

                                <input type="text" name="property_type" id="property_type" class="search_input" placeholder="@/lang('pages.property_type')" />

                                <input type="text" name="rooms" id="rooms" class="search_input" placeholder="@/lang('pages.no_rooms')">

                                <input type="text" name="location" id="location" class="search_input" placeholder="@/lang('pages.location')">

                            </div>
                            <button class="search_button" id="search_button">@/lang('menu.submit_listing')</button>
        -->


        <div class="catalog_filter">
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
            <button>Найти</button>
        </div>
    </div>
    <div class="catalog" >

<div class="large_prods_wrap row city" id="city1">
    @foreach($properties1 as $property1)
        <div class="col-md-6 col-lg-4">
            <div class="single_prod large_prod">
            @if(!is_null($property1->properties_photo_cover()))
                <div class="image" style="background: url({{asset('storage/properties_images/'.$property1->properties_photo_cover()->name) }});"></div>
                @endif
                <div class="single_prod_info">
                    <p class="title">{{ $property1->title }}</p>
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

<div class="row small_prods_wrap city" id="city2">
    @foreach($properties2 as $property2)
        <div class="col-md-3">
            <div class="single_prod small_prod">
                @if(!is_null($property1->properties_photo_cover()))
                <div class="image" style="background: url({{asset('storage/properties_images/'.$property2->properties_photo_cover()->name)}});"></div>
                @endif
                <div class="single_prod_info">
                    <p class="title">{{ $property2->title }}</p>
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


<div class="catalog_pagination">
    <div class="custom_pagination">
        <a href="#" class="prev"
        ><img src="{{asset('/img/prev.svg')}}" alt=""
            /></a>
        <div class="pagi_numbers">
            <a href="#" class="current_page">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <span>...</span>
            <a href="#">15</a>
        </div>
        <a href="#" class="next"
        ><img src="{{asset('/img/next.svg')}}" alt=""
            /></a>
    </div>
</div>
</div>
<div class="mob_text">
    <p>
        «НаЧас.ру» — это наиболее полный в Москве и
        Санкт-Петербурге каталог, где представлены почасовые
        квартиры, гостиницы с почасовой оплатой и почасовые
        отели СПб.
    </p>
    <p>
        Недорогие мини-отели Санкт-Петербурга, представленные на
        нашем сайте, работают без посредников, поэтому цены на
        проживание остаются минимальными. Если вас интересует
        почасовая аренда квартир и номеров в Петербурге, то вы
        попали по адресу, мы обязательно поможем вам! Квартира
        на час или мини-отель с почасовой оплатой — выбор, где
        поселиться в СПб, только за вами.
    </p>
</div>
</div>
</div>




