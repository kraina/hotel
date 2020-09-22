@extends('layouts.default')

@section('title', 'Добавить Объект')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <link rel="stylesheet" href="{{asset('css/upload.css')}}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
@endsection

@section('script')

    <script>
         jQuery(document).ready(function() {
        $(function(){
          //  Dropzone.options.myDropzone = false;
            Dropzone.autoDiscover = false;
            //Dropzone.options.myDropzone= {
            var myDropzone1 = new Dropzone("div#myDropzone1", {
                url: "{{ route('home.properties.img-dropzone-upload') }}",
                autoProcessQueue: false,
                //acceptedFiles: 'image/*',
                acceptedFiles: '.jpeg, .jpg, .png',
                uploadMultiple: true,
                //clickable: true,
               // parallelUploads: 5,
                  paramName: "photo_id",
                maxFiles: 5,
                maxFilesize: 2048,
                // acceptedFiles: 'image/*',
                addRemoveLinks: true,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                init: function (){
                    $(this.element).html(this.options.dictDefaultMessage);

                    myDropzone1 = this;
                   document.getElementById("submit-all").addEventListener("click", function (e) {
                        // Make sure that the form isn't actually being sent.
                        e.preventDefault();
                        //e.stopPropagation();
                        myDropzone1.processQueue();
                    });


                    this.on("sendingmultiple", function (data, xhr, formData) {
                        //alert(jQuery("#title").val());
                        formData.append("title", jQuery("#title").val());
                        formData.append("city", jQuery("#city").val());
                        formData.append("address", jQuery("#address").val());
                        formData.append("description", jQuery("#description").val());
                        formData.append("_token", jQuery('meta[name="csrf-token"]').attr('content'));
                    });


                },
                dictDefaultMessage: '<div class="dz-message">Нажмите здесь и перетащите сюда файлы для загрузки </div>',

                success(file, response){
                    //console.log(response);
                    //alert(response);
                    /*
                    this.defaultOptions.success(file);
                    console.log(file);
                    console.log(response);
                    let url = file.dataURL,
                        res = response;
                    $('.preview').html('<img src="'+ url +'" >');
                    */

                },


            });
            var myDropzone2 = new Dropzone("div#myDropzone2", {
                url: "{{ route('home.properties.img-dropzone-upload') }}",
                autoProcessQueue: false,
                //acceptedFiles: 'image/*',
                acceptedFiles: '.jpeg, .jpg, .png',
                uploadMultiple: true,
                //clickable: true,
                // parallelUploads: 5,
                paramName: "photo_id",
                maxFiles: 5,
                maxFilesize: 2048,
                // acceptedFiles: 'image/*',
                addRemoveLinks: true,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                init: function (){
                    $(this.element).html(this.options.dictDefaultMessage);

                    myDropzone2 = this;
                    document.getElementById("submit-all").addEventListener("click", function (e) {
                        // Make sure that the form isn't actually being sent.
                        e.preventDefault();
                        //e.stopPropagation();
                        myDropzone2.processQueue();
                    });


                    this.on("sendingmultiple", function (data, xhr, formData) {
                        //alert(jQuery("#title").val());
                        formData.append("title", jQuery("#title").val());
                        formData.append("city", jQuery("#city").val());
                        formData.append("address", jQuery("#address").val());
                        formData.append("description", jQuery("#description").val());
                        formData.append("_token", jQuery('meta[name="csrf-token"]').attr('content'));
                    });


                },
                dictDefaultMessage: '<div class="dz-message">Нажмите здесь и перетащите сюда файлы для загрузки </div>',

                success(file, response){
                    //console.log(response);
                    //alert(response);
                    /*
                    this.defaultOptions.success(file);
                    console.log(file);
                    console.log(response);
                    let url = file.dataURL,
                        res = response;
                    $('.preview').html('<img src="'+ url +'" >');
                    */

                },


            });
            /*
        $('#dropzone2').on('submit', function(){
           // alert(123);
            //return false;
        });
             */

        });
        });
    </script>
@endsection

@section('content')

    <br><br><br><br><br><br><br>

    <p id="demo"></p>
   <form action="{{ route('home.properties.img-dropzone-upload') }}" enctype="multipart/form-data" method="POST">
   <!-- {\!! Form::open(['action' => 'PropertyController@store', 'method' => 'POST', 'multiple'=>'multiple', 'enctype' => 'multipart/form-data',  'files' => true, 'id' => 'dropzone2']) !!} -->
        <input id="title" type="text" name="title">
        <input id="city" type="text" name="city" >
        <input id="address" type="text" name="address" >
        <br><br><br><br><br><br><br>
        <!--
        <div class="dropzone2" id="myDropzone2">
           <div class="fallback">
        <input id="photo_id" name="photo_id" type="file" multiple="multiple" />
         </div>
            </div>
            -->
     <!--   <div class="dropzone dz-clickable" style="border: 1px solid red" id="myDropzone"> -->
        <div class="">
            <div class="upload" style="border: 1px solid red"  id="myDropzone1">
              <input id="photo_id1"  name="photo_id1" type="file" multiple="multiple" />
            </div>
        </div>
      <!-- <input type="text" > -->

       <div class="">
           <div class="upload" style="border: 1px solid red"  id="myDropzone2">
               <input id="photo_id2"  name="photo_id2" type="file" multiple="multiple" />
           </div>
       </div>

        @csrf
      <!--  <button type="submit" id="submit-all"> upload </button> -->
    <input type="submit" id="submit-all" value="submit">
    {!! Form::close() !!}
    <div class="preview"></div>

          <!--  <button type="button" class="btn btn-info" id="submit-all">Upload</button> -->


@endsection
