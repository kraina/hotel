@extends('layouts.default')

@section('title', 'Добавить Объект')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
    <link rel="stylesheet" href="{{asset('css/upload.css')}}" />

@endsection

@section('script')

<script type="text/javascript">

   Dropzone.options.myDropzone = false;
    Dropzone.autoDiscover = false;

   // jQuery(document).ready(function() {
         var myDropzone = new Dropzone("div#myDropzone", {
       // $("div#myDropzone").dropzone({
        //Dropzone.options.myDropzone= {
            url: "{{ route('home.properties.img-dropzone-upload') }}",
           // autoProcessQueue: false,
          //  uploadMultiple: true,
            //clickable: true,
          //  parallelUploads: 5,
          //  paramName: "photo_id",
            //maxFiles: 5,
            //maxFilesize: 1,
           // acceptedFiles: 'image/*',
          //  addRemoveLinks: true,
           // clickable: ".category_rooms_photo",
            //headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         /*   init: function () {

                myDropzone = this; // Makes sure that 'this' is understood inside the functions below.
                // for Dropzone to process the queue (instead of default form behavior):
                document.getElementById("submit-all").addEventListener("click", function (e) {
                    // Make sure that the form isn't actually being sent.
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });
                //send all the form data along with the files:
                this.on("sendingmultiple", function (data, xhr, formData) {
                    formData.append("title", jQuery("#title").val());
                    formData.append("city", jQuery("#city").val());
                    formData.append("address", jQuery("#address").val());
                    formData.append("description", jQuery("#description").val());
                    formData.append("_token", jQuery('meta[name="csrf-token"]').attr('content'));

                });
            }*/
        });
 //   });

    </script>
@endsection
@section('content')

        <!--    {\!! Form::open(['action' => 'PropertyController@store', 'method' => 'POST', 'multiple'=>'multiple', 'enctype' => 'multipart/form-data',  'files' => true, 'id' => 'dropzone']) !!} -->
        <form action="{{ route('home.properties.img-dropzone-upload') }}" enctype="multipart/form-data" method="POST" class="" id="" >

            @include('layouts.add-object-include')

            @csrf
           <!--- {\{ Form::submit('Далее', ['class' => 'add_new_object_next', 'id'=>"submit-all", 'form'=>"formdropzone"]) }} -->
            <button type="submit" id="submit-all" class="add_new_object_next">Далее</button>

        {!! Form::close() !!}


@endsection
