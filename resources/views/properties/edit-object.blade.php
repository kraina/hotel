@extends('layouts.default')

@section('title', 'Добавить Объект')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
    <link rel="stylesheet" href="{{asset('css/upload.css')}}" />
    <style>
        .add_new_category_button2 {
            font-style: normal;
            font-weight: normal;
            font-size: 24px;
            line-height: 31px;
            letter-spacing: 0.02em;
            color: #ffffff;
            background: #3ba00b;
            border: none;
            padding: 15px 20px;
            transition: 0.3s;
        }
        .add_new_category_content2{
            padding: 40px 0 30px;
            background: #eceef2;
            margin-top: 30px;
        }
    </style>
@endsection

@section('script')

<script type="text/javascript">
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


                    this.on("complete", function(){
                        if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
                        {
                            var _this = this;
                            _this.removeAllFiles();
                        }
                        load_images();
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


                    this.on("complete", function(){
                        if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
                        {
                            var _this = this;
                            _this.removeAllFiles();
                        }
                        load_images();
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
            load_images();

            function load_images()
            {

                $.ajax({
                    url:"{{ route('home.properties.img-dropzone-fetch', $property->id) }}",
                    success:function(data)
                    {
                        $('#uploaded_image').html(data);
                    }
                })

            }

            $(document).on('click', '.remove_image', function(){
                var name = $(this).attr('id');
                $.ajax({
                    url:"{{ route('home.properties.{id?}.img-dropzone-delete', $property->id) }}",
                    data:{name : name},
                    success:function(data){
                        load_images();
                    }
                })
            });

        });
    });
</script>
@endsection
@section('content')

        <!--    {\!! Form::open(['action' => 'PropertyController@store', 'method' => 'POST', 'multiple'=>'multiple', 'enctype' => 'multipart/form-data',  'files' => true, 'id' => 'dropzone']) !!} -->
        <form action="{{ route('home.properties.img-dropzone-upload') }}" enctype="multipart/form-data" method="POST" class="" id="" >

            @include('layouts.add-object-include3')

            @csrf
           <!--- {\{ Form::submit('Далее', ['class' => 'add_new_object_next', 'id'=>"submit-all", 'form'=>"formdropzone"]) }} -->
            <button type="submit" id="submit-all" class="add_new_object_next">Далее</button>

        {!! Form::close() !!}


@endsection
