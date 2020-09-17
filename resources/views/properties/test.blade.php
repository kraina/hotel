@extends('layouts.default')

@section('title', 'Добавить Объект')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('style')

@endsection

@section('script')

    <script type="text/javascript">
/*
        Dropzone.autoDiscover = true;

        Dropzone.options.dropzone = {
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


        $(document).ready(function() {
            function create_object(){
                let title = $('#title').val();
                let city = $('#city').val();
                let address = $('#address').val();
                let _token = $('input[name="_token"]').val();
                //alert(photo);
                $.ajax({
                    url: "{{ route('home.properties.text_request') }}",
                    type: "get",
                    dataType: 'html',
                    ifModified: true,
                    cache: false,
                    data: {
                        title: title,
                        city: city,
                        address: address,
                        _token: _token
                    },
                    success: function (result) {
                        //alert(result);
                    }
                    });
            }

// Переменная куда будут располагаться данные файлов

            var files;


// Вешаем функцию на событие
// Получим данные файлов и добавим их в переменную




            $('input[type="file"]').change(function(){
                //alert('hello');
                files = this.files;
                //alert(files);
            });

// Вешаем функцию ан событие click и отправляем AJAX запрос с данными файлов

            $('#submit-all1').click(function( event ){
                event.stopPropagation(); // Остановка происходящего
                event.preventDefault();  // Полная остановка происходящего

// Создадим данные формы и добавим в них данные файлов из files
                var form_data = new FormData();
                var totalfiles = document.getElementById('photo_id').files.length;
                for (var index = 0; index < totalfiles; index++) {
                    form_data.append("files[]", document.getElementById('photo_id').files[index]);
                }
                console.log(form_data[0]);
                for (var pairs of form_data.entries()) {
                    console.log(pairs[0]+ ', ' + pairs[1]);
                }
                var data = new FormData();

                data.append('key', 'value');
               $.each( files, function( photo_id, value ){
                    data.append( 'photo_id', $('input[type="file"]').val() );
                   for (var pair of data.entries()) {
                       //console.log(pair[0]+ ', ' + pair[1]);
                   }
                });




                data.append('image', $('input[type=file]')[0].files[0]);
                let title = $('#title').val();
                let city = $('#city').val();
                let address = $('#address').val();
                let _token = $('input[name="_token"]').val();

                data.append('title', title);
                data.append('city', city);
                data.append('address', address);
                data.append('_token', _token);
                console.log(data);
                var myString = JSON.stringify(data);
                document.getElementById("demo").innerHTML = myString;

                // Create a test FormData object
                var formData = new FormData();
                formData.append('key1', 'value1');
                formData.append('key2', 'value2');

// Display the key/value pairs
                for (var pair of formData.entries()) {
                   // console.log(pair[0]+ ', ' + pair[1]);
                }

// Отправляем запрос
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    //url: "{\{ route('home.properties.text_request') }}",
                    type: 'POST',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Не обрабатываем файлы (Don't process the files)
                    contentType: false, // Так jQuery скажет серверу что это строковой запрос
                    success: function( respond, textStatus, jqXHR ){
alert(respond);
                        // Если все ОК

                      /*  if( typeof respond.error === 'undefined' ){
                            // Файлы успешно загружены, делаем что нибудь здесь

                            // выведем пути к загруженным файлам в блок '.ajax-respond'

                            var files_path = respond.files;
                            var html = '';
                            $.each( files_path, function( key, val ){ html += val +'<br>'; } )
                            $('.ajax-respond').html( html );
                        }
                        else{
                            console.log('ОШИБКИ ОТВЕТА сервера: ' + respond.error );
                        }*/
                    },
                    error: function( jqXHR, textStatus, errorThrown ){
                        console.log('ОШИБКИ AJAX запроса: ' + textStatus );
                    }

                });

            });


           // $('#submit-all').click(function(){
                //create_object();
               // uploadFile();
           // });


        });
Dropzone.options.myDropzone= {
    url: 'upload.php',
    autoProcessQueue: false,
    uploadMultiple: true,
    parallelUploads: 5,
    maxFiles: 5,
    maxFilesize: 1,
    acceptedFiles: 'image/*',
    addRemoveLinks: true,
    init: function() {
        dzClosure = this; // Makes sure that 'this' is understood inside the functions below.

        // for Dropzone to process the queue (instead of default form behavior):
        document.getElementById("submit-all").addEventListener("click", function(e) {
            // Make sure that the form isn't actually being sent.
            e.preventDefault();
            e.stopPropagation();
            dzClosure.processQueue();
        });

        //send all the form data along with the files:
        this.on("sendingmultiple", function(data, xhr, formData) {
            formData.append("firstname", jQuery("#firstname").val());
            formData.append("lastname", jQuery("#lastname").val());
        });
    }
}
        </script>

@endsection

@section('content')

    <br><br><br><br><br><br><br>

    <p id="demo"></p>
    <!--
    <input id="title" type="text" name="title">
    <input id="city" type="text" name="city" >
    <input id="address" type="text" name="address" >
            <form id="dropzone" name="dropzone" method="POST" action="{{ route('home.properties.img-dropzone-upload') }}" class="category_rooms_photo dropzone">



                    <input id="photo_id" name="photo_id" type="file" multiple="multiple" />


                @method('PUT')
                @csrf
            </form>
            <div align="center">
               <button type="button" class="add_new_object_next" id="submit-all">Далее</button>
            </div>
-->
    <form action="upload.php" enctype="multipart/form-data" method="POST">
        <input type="text" id ="firstname" name ="firstname" />
        <input type="text" id ="lastname" name ="lastname" />
        <div class="dropzone" id="myDropzone"></div>
        <button type="submit" id="submit-all"> upload </button>
    </form>


          <!--  <button type="button" class="btn btn-info" id="submit-all">Upload</button> -->


@endsection
