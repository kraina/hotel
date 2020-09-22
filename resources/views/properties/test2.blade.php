@extends('layouts.default')

@section('title', 'Добавить Объект')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
@endsection

@section('script')

    <script type="text/javascript">
/*
        Dropzone.autoDiscover = false;

        Dropzone.options.myDropzone = {
            autoProcessQueue : false,
            acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",

            init:function(){
                var submitButton = document.querySelector("#submit-all");
                myDropzone = this;

                submitButton.addEventListener('click', function(){
                    myDropzone.processQueue();
                });

                this.on("complete", function(){
                    if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
                    {
                        var _this = this;
                        _this.removeAllFiles();
                    }
                   // load_images();
                });

            }

        };

*/
Dropzone.options.myDropzone = false;
Dropzone.autoDiscover = false;

jQuery(document).ready(function() {
   // var myDropzone = new Dropzone("div#myDropzone", {
    //$("div#myDropzone").dropzone({
Dropzone.options.myDropzone= {
        url: "{{ route('home.properties.img-dropzone-upload') }}",
        autoProcessQueue: false,
        uploadMultiple: true,
    method: 'POST',
        //clickable: true,
        parallelUploads: 5,

        paramName: "photo_id",
        //maxFiles: 5,
        //maxFilesize: 1,
        acceptedFiles: 'image/*',
        addRemoveLinks: true,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        init: function () {

            myDropzone7 = this; // Makes sure that 'this' is understood inside the functions below.
            // for Dropzone to process the queue (instead of default form behavior):
            document.getElementById("submit-all").addEventListener("click", function (e) {
                // Make sure that the form isn't actually being sent.
                e.preventDefault();
                e.stopPropagation();
                myDropzone7.processQueue();
            });
/*
                    this.on("complete", function(){
                        if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
                        {
                            var _this = this;
                            _this.removeAllFiles();
                        }
                    });
*/

            //send all the form data along with the files:
            this.on("sendingmultiple", function (data, xhr, formData) {
                formData.append("title", jQuery("#title").val());
                formData.append("city", jQuery("#city").val());
                formData.append("address", jQuery("#address").val());
                formData.append("_token", jQuery('meta[name="csrf-token"]').attr('content'));

            });
            /*
                    this.on('error', function(file, errorMessage) {
                        if (file.accepted) {
                            var mypreview = document.getElementsByClassName('dz-error');
                            mypreview = mypreview[mypreview.length - 1];
                            mypreview.classList.toggle('dz-error');
                            mypreview.classList.toggle('dz-success');
                        }
                    });
                    */

        }
}
   // });
});

        </script>

@endsection

@section('content')

    <br><br><br><br><br><br><br>

    <p id="demo"></p>
    <!--
    <input id="title" type="text" name="title">
    <input id="city" type="text" name="city" >
    <input id="address" type="text" name="address" >
            <form id="dropzone" name="dropzone" method="POST" action="{\{ route('home.properties.img-dropzone-upload') }}" class="category_rooms_photo dropzone">



                    <input id="photo_id" name="photo_id" type="file" multiple="multiple" />


                @\method('PUT')
                @\csrf
            </form>
            <div align="center">
               <button type="button" class="add_new_object_next" id="submit-all">Далее</button>
            </div>
-->
    <form action="{{ route('home.properties.img-dropzone-upload') }}" enctype="multipart/form-data" method="POST">
        <input id="title" type="text" name="title">
        <input id="city" type="text" name="city" >
        <input id="address" type="text" name="address" >

        <div class="dropzone" id="myDropzone">
           <div class="fallback">
        <input id="photo_id" name="photo_id" type="file" multiple="multiple" />
         </div>
            </div>
        @csrf
        <button type="submit" id="submit-all"> upload </button>
    </form>
    <div class="dz-error"></div>
    <div class=""></div>


          <!--  <button type="button" class="btn btn-info" id="submit-all">Upload</button> -->


@endsection
