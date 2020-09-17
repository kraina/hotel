<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>@yield('title')</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')
    <link rel="stylesheet" href="{{asset('css/font/fonts.css')}}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="http://kenwheeler.github.io/slick/slick/slick-theme.css" />
    <link rel="stylesheet" href="{{asset('/css/dropzone.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/adaptive.css')}}" />
    @yield('style')
</head>
<body>
    @include('layouts.header')
    @yield('content')
    @include("layouts.footer")

<script
    src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"
></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" ></script>
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
    <script src="{{asset('/js/dropzone.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<input type="hidden" value="{{url()->current()}}" id="url" name="url">
    <script>
        $(document).ready(function() {
            $('.header_location').click(function () {
                var city = $('.current_location').text();
                var city_id = $('.current_location').attr('data-id');
                console.log('city_id = ' + city_id);
                var page = $("#url").val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    type: "get",
                    dataType: 'html',
                    url: "{{route('ajax_city')}}",
                    ifModified: true,
                    cache: false,
                    data: {city: city, page: page, _token: _token},
                    _token: _token,
                    success: function (response) {
                        //alert(response);
                        $('#city_index').replaceWith(response);
                        $('#catalog_wrap').replaceWith(response);
                        //window.location.href=window.location.href;
                    }
                });
            });
    });
        </script>

@yield('script')

</body>
</html>
