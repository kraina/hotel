@extends('layouts.default')
@section('title', 'Document')
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
                //alert($("#city_session").val());
                // var property_type = $('#property_type').val().toLowerCase();
                // var rooms = $('#rooms').val();
                // var location = $('#location').val();
                var property_type, rooms, location;
                var city = $("#city_session").val();
                //console.log(city);
                var _token = $('meta[name="csrf-token"]').attr('content');
                //alert("rooms: " + rooms);
                //alert(_token);
                /*
                if(property_type === '')
                    property_type = 'ALL';
                if(rooms === '')
                    rooms = 'ALL';
                if(location === '')
                    location = 'ALL';
*/
                // console.log(rooms);
                $.ajax({
                    type: 'get',
                    /*headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},*/
                    dataType: 'html',
                    url: "{{route('ajax_index')}}",
                    ifModified: true,
                    cache: false,
                    data: {property_type: property_type, rooms: rooms, location: location, city: city, _token: _token},
                    _token: _token,
                    success: function(response){
                        $('#city_index').replaceWith(response);
                    }
                });
            }
            /*
            $("#property_type").on("change", search_property);
            $("#rooms").on("change", search_property);
            $("#location").on("change", search_property);

            $('#property_type').tokenfield({
                autocomplete: {
                    source: function (request, response) {
                        jQuery.get("{\{route('ajax_filter_input_property_type')}}", {
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
                        jQuery.get("{\{route('ajax_filter_input_rooms')}}", {
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
                        jQuery.get("{\{route('ajax_filter_input_location')}}", {
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

             */
            $("#city_session").change(function() {
                search_property();
            })
        });
    </script>

@endsection
@section('content')
@include('layouts.ajax_index')
@endsection
