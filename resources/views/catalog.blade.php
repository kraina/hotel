@extends('layouts.default')
@section('title', 'Catalog')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('style')

@endsection

@section('script')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>


    <script>
        $(document).ready(function(){
            function search_property(){
                var property_type = $('#property_type').val().toLowerCase();
                var rooms = $('#rooms').val();
                var location = $('#location').val();
                var _token = $('meta[name="csrf-token"]').attr('content');
                //alert("rooms: " + rooms);
                //alert(_token);
                if(property_type === '')
                    property_type = 'ALL';
                if(rooms === '')
                    rooms = 'ALL';
                if(location === '')
                    location = 'ALL';

                // console.log(rooms);
                $.ajax({
                    type: 'get',
                    /*headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},*/
                    dataType: 'html',
                    url: "{{route('ajax_listings')}}",
                    ifModified: true,
                    cache: false,
                    data: {property_type: property_type, rooms: rooms, location: location, _token: _token},
                    _token: _token,
                    success: function(response){
                        $.getScript("{{asset('js/listings.js')}}");
                        $('#listings_container').replaceWith(response);
                    }
                });
            }
            $("#property_type").on("change", search_property);
            $("#rooms").on("change", search_property);
            $("#location").on("change", search_property);

            $('#property_type').tokenfield({
                autocomplete: {
                    source: function (request, response) {
                        jQuery.get("{{route('ajax_filter_input_property_type')}}", {
                            rooms: request.term
                        }, function (data) {
                            data = JSON.parse(data);
                            console.log(data);
                            response(data);
                        });
                    },
                    delay: 100
                },
                showAutocompleteOnFocus: true
            });

            $('#rooms').tokenfield({
                autocomplete: {
                    source: function (request, response) {
                        jQuery.get("{{route('ajax_filter_input_rooms')}}", {
                            rooms: request.term
                        }, function (data) {
                            data = JSON.parse(data);
                            console.log(data);
                            response(data);
                        });
                    },
                    delay: 100
                },
                showAutocompleteOnFocus: true
            });
            $('#location').tokenfield({
                autocomplete: {
                    source: function (request, response) {
                        jQuery.get("{{route('ajax_filter_input_location')}}", {
                            rooms: request.term
                        }, function (data) {
                            data = JSON.parse(data);
                            console.log(data);
                            response(data);
                        });
                    },
                    delay: 100
                },
                showAutocompleteOnFocus: true
            });
            $("#parent_input").keypress(function (e) {
                $("#property_type").parent("#parent_input")
                    .on('keydown keypress', function (e) {
                        var key=e.keyCode || e.which;
                        if (key === 13) {
                            e.preventDefault();
                        }
                    });

                search_property_rooms();
            });

            $("#parent_input").keypress(function (e) {
                $("#rooms").parent("#parent_input")
                    .on('keydown keypress', function (e) {
                        var key=e.keyCode || e.which;
                        if (key === 13) {
                            e.preventDefault();
                        }
                    });

                search_property();
            });
            $("#parent_input").keypress(function (e) {
                $("#location").parent("#parent_input")
                    .on('keydown keypress', function (e) {
                        var key=e.keyCode || e.which;
                        if (key === 13) {
                            e.preventDefault();
                        }
                    });

                search_property_rooms();
            });

            $('#search_button').click(function(){
                search_property();
            });
            function close() {
                $('.close').on('click', function(){
                    search_property();
                });
                $(document).on('click', 'a.close', function(){
                    //alert('delete');
                    search_property();
                });
            }
            $('input').change(function() {
                close();
            })
        });
    </script>

@endsection

@section('content')
        <div id="catalog_wrap">
            <div class="container">
                <div class="before_catalog">
                    <div class="catalog_title">
                        <a href="#" class="catalog_selected_region"
                        >Санкт-Петербург
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
                <div class="catalog">
                    @include('layouts.ajax_listing')
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
@endsection
