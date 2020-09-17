@extends('layouts.default')

@section('title', 'Добавить Объект')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('style')

@endsection

@section('script')
<!--
    <script type="text/javascript">


        $(document).ready(function() {
           // let new_category = $('.add_new_category_content').attr('id');
           // alert(new_category);
           // console.log(new_category);

            $("form").on("submit", function (event) {
                event.preventDefault();
                let new_category = $('.dz-clickable').attr('data-id');

                /*
                var i;
                for (i = 0; i < photo_set.length; i++) {
                   // photo_set[i].style.backgroundColor = "red";
                    console.log(photo_set[0].id);
                    dropzone_set(photo_set[i].id);
                }
                */
                var photo_set = document.getElementsByClassName("dz-clickable");
                var photo_set0 = photo_set[0].id;
                console.log(photo_set0);

                //alert(new_category);
               // console.log(new_category);
                console.log($(this).serialize());
            });
            let token = $('meta[name="csrf-token"]').attr('content');




        });

    </script>
-->

<script type="text/javascript">

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

/*
    Dropzone.options.dropzone =
        {
            maxFilesize: 10,
            renameFile: function (file) {
                var dt = new Date();
                var time = dt.getTime();
                return time + file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 60000,
            success: function (file, response) {
                console.log(response);
            },
            error: function (file, response) {
                return false;
            }
        };

 */
    </script>
@endsection
@section('content')


            {!! Form::open(['action' => 'PropertyController@store', 'method' => 'POST', 'multiple'=>'multiple', 'enctype' => 'multipart/form-data',  'files' => true, 'id' => 'dropzone']) !!}
            <div class="add_object">
            <div class="container">
                <div class="add_object_content">
                    <div class="add_object_title">
                        <p class="title">Добавьте свой отель в каталог</p>
                        <p class="subtitle">
                            Добавление займет меньше 10 минут. 10 минут и ваше
                            объявление видят тысячи клиентов.
                        </p>
                        <!-- <form action="/" class="dropzone">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </form> -->
                        <div class="sub_info">
                            <img src="{{asset('/img/sub-info-icon.png')}}" alt="" />
                            <p>Все пункты в дальнейшем можно будет поменять</p>
                        </div>
                    </div>

                    <div class="object_step_one object_step">
                        <p class="step_title">
                            1. Укажите название вашего объекта
                        </p>
                        <input
                            class="object_step_input"
                            id="title"
                            name="title"
                            type="text"
                            data-id = 'object_step_one_input'
                            placeholder="Напишите название объекта"
                        />
                    </div>
                    <div class="object_step_two object_step">
                        <p class="step_title">
                            2. Добавьте описание вашего объекта
                        </p>
                        <textarea
                            class="object_step_input"
                            id="description"
                            name="description"
                            type="text"
                            data-id = 'object_step_two_input'
                            placeholder="Составьте краткое описание вашего отеля"
                        ></textarea>
                    </div>

                    <div class="object_step_three object_step">
                        <p class="step_title">
                            3. Укажите адрес вашего объекта
                        </p>
                        <div>
                            <div class="select_wrap">
                                <select
                                    id = 'city'
                                    name="city"
                                    data-id="object_step_three_city"
                                    class="object_step_input object_step_select"
                                >
                                    <option value="" selected disabled hidden>
                                        Ваш город
                                    </option>
                                    @foreach($cities as $city)
                                    <option value="{{$city->city}}" >{{$city->city}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input
                                id = "address"
                                name="address"
                                type="text"
                                data-id="object_step_three_input"
                                class="object_step_input"
                                type="text"
                                placeholder="Напишите адрес вашего объекта"
                            />
                        </div>
                        <div>
                            <div class="select_wrap">
                                <select
                                    id="metro"
                                    name="metro"
                                    data-id="object_step_three_metro"
                                    class="object_step_input object_step_select"
                                >
                                    <option value="" selected disabled hidden>
                                        Выберите станцию метро
                                    </option>
                                    <option value="Метро 1">Метро 1</option>
                                    <option value="Метро 2">Метро 2</option>
                                    <option value="Метро 3">Метро 3</option>
                                    <option value="Метро 4">Метро 4</option>
                                </select>
                            </div>
                            <div class="select_wrap">
                                <select
                                    id="district"
                                    name="district"
                                    data-id="object_step_three_region"
                                    class="object_step_input object_step_select"

                                >
                                    <option value="" selected disabled hidden>
                                        Выберите район
                                    </option>
                                    <option value="Район 1">Район 1</option>
                                    <option value="Район 2">Район 2</option>
                                    <option value="Район 3">Район 3</option>
                                    <option value="Район 4">Район 4</option>
                                </select>
                            </div>
                        </div>
                        <p class="input_error">
                            Заполните все обязательные поля!
                        </p>
                    </div>


                    <div
                        class="add_new_object_bottom add_new_object_bottom_in_progress"
                    >
                        <div>
                            <img src="{{asset('/img/add_object_in_progress.png')}}" alt="" />
                            <p>50% заполнено</p>
                            <a
                                id="step1_trigger"
                                href="#"
                                class="add_new_object_next add_new_object_in_progress"
                            >Далее</a
                            >
                        </div>
                    </div>

                   <!-- {\!! Form::close() !!} -->

                </div>
            </div>
            <div class="add_object_content_2">
                <div class="container">
                    <div class="object_step_four object_step">
                        <p class="step_title">4. Укажите категории номеров</p>

                        <!-- <button class="add_new_category_button">
                            + | Добавить категорию номера
                        </button> -->
                    </div>
                </div>


                <div class="add_new_category_block_wrap">
                    <div
                        class="add_new_category_block add_new_category_block_pattern"
                    >
                        <div class="container">
                            <div class="object_single_category_wrap">
                                <div class="object_single_category">
                                    <p
                                        class="title object_single_category_title"
                                        data-toggle="collapse"
                                        aria-expanded="true"
                                        aria-controls="hidden_description"
                                    >
                                        Новая категория
                                    </p>
                                    <a href="#" class="remove_category">
                                        <img
                                            src="{{asset('/img/remove-icon.png')}}"
                                            alt=""
                                        />
                                        Удалить категорию
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="add_new_category_content show">
                            <div class="container">
                                <form>
                                <div class="category_title">
                                    <label for=""
                                        >Укажите название категории</label
                                    >
                                    <input
                                        type="text"
                                        name="cat"
                                        placeholder="Например, “Стандарт” или “Полулюкс”"
                                    />
                                </div>
                                <div class="category_rooms_count">
                                    <label for=""
                                        >Количество номеров в категории</label
                                    >
                                    <input
                                        type="number"
                                        name="cat_num"
                                        class="cat_num"
                                        placeholder="5"
                                        min="0"
                                    />
                                </div>
                                <div class="category_price_per_room">
                                    <label for="">Цены за номер</label>
                                    <div class="edit_price_per_room">
                                        <select name="per_hour[]" id="">
                                            <option value="">1 час</option>
                                            <option value="">2 час</option>
                                            <option value="">3 час</option>
                                            <option value="">4 час</option>
                                        </select>
                                        <input
                                            type="number"
                                            name="price"
                                            min="0"
                                            placeholder="Стоимость"
                                        />
                                    </div>
                                    <a href="#" class="add_price_per_hour"
                                        ><img
                                            src="{{asset('/img/add_hour_icon.png')}}"
                                            alt=""
                                        />
                                        Добавить часы/стоимость</a
                                    >
                                </div>
                                <div class="category_rooms_photos">
                                    <label for=""
                                        >Прикрепите фотографии номера</label
                                    >
                                 <!--   <form
                                        action="/file-upload"
                                        class="category_rooms_photo dropzone"
                                    >
                                    -->
                                    <input
                                        multiple = "multiple"
                                        name="photo_id[]"
                                        type="file"
                                        id="photo_id"

                                    />
                                    <div class="category_rooms_photo dropzone" >
                                        <div class="fallback" >


                                            <input
                                                multiple = "multiple"
                                                name="photo_id2[]"
                                                type="file"
                                                    id="photo_id2"

                                            />
                                            </div>
                                        </div>

                                   <!-- </form> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container add_new_category_button_wrap">
                    <button form='' class="add_new_category_button">
                        + | Добавить категорию номера
                    </button>
                </div>
                <div class="container add_new_object_bottom">
                    <div>
                        <img src="{{asset('/img/add_object_success.png')}}" alt="" />
                        <p>
                            Поздравляем! <br />
                            Вы заполнили всю заявку.
                        </p>
                    </div>




                   <!--- <a href="#" class="add_new_object_next">Далее</a> -->
                    {{ Form::submit('Далее', ['class' => 'add_new_object_next', 'id'=>"submit-all", 'form'=>"dropzone"]) }}

                </div>
            </div>


        </div>
        {!! Form::close() !!}


@endsection
