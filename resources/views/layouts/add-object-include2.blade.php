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
                    id="title2"
                    name="title2"
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
                            id = 'city2'
                            name="city2"
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
                        id = "address2"
                        name="address2"
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



                    <div class="category_rooms_photos">
                        <label for=""
                        >Прикрепите фотографии номера</label
                        >

                        <div class="category_rooms_photo dropzone2" id="myDropzone2">
                            <div class="fallback">
                                <input id="photo_id2" name="photo_id2" type="file" multiple="multiple" />
                            </div>
                        </div>

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
                        <!--
                        <div class="category_title">
                            <label for=""
                            >Укажите название категории</label
                            >
                            <input
                                type="text"
                                placeholder="Например, “Стандарт” или “Полулюкс”"
                            />
                        </div>
                        <div class="category_rooms_count">
                            <label for=""
                            >Количество номеров в категории</label
                            >
                            <input
                                type="number"
                                placeholder="5"
                                min="0"
                            />
                        </div>

                        -->
                        <!--
                        <div class="category_price_per_room">
                            <label for="">Цены за номер</label>
                            <div class="edit_price_per_room">
                                <select name="" id="">
                                    <option value="">1 час</option>
                                    <option value="">2 час</option>
                                    <option value="">3 час</option>
                                    <option value="">4 час</option>
                                </select>
                                <input
                                    type="number"
                                    min="0"
                                    placeholder="Стоимость"
                                />
                            </div>
                            <a href="#" class="add_price_per_hour"
                            ><img
                                    src="{\{asset('/img/add_hour_icon.png')}}"
                                    alt=""
                                />
                                Добавить часы/стоимость</a
                            >
                        </div>


                        -->
                        <div class="category_rooms_photos">
                            <label for=""
                            >Прикрепите фотографии номера</label
                            >

                            <div class="category_rooms_photo dropzone" id="myDropzone">
                                <div class="fallback">
                                    <input id="photo_id" name="photo_id" type="file" multiple="multiple" />
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--
        <div class="container add_new_category_button_wrap">
            <button class="add_new_category_button" form="false">
                + | Добавить категорию номера
            </button>
        </div>
        -->

        <div class="container add_new_object_bottom">
            <div>
                <img src="{{asset('/img/add_object_success.png')}}" alt="" />
                <p>
                    Поздравляем! <br />
                    Вы заполнили всю заявку.
                </p>
            </div>
            <!-- <a href="#" class="add_new_object_next">Далее</a> -->

            <!--  @\csrf -->
            <!-- {\{ Form::submit('Далее', ['class' => 'add_new_object_next', 'id'=>"submit-all", 'form'=>"formdropzone"]) }} -->
        </div>
    </div>
</div>
