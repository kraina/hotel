<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Add Object</title>
        <link rel="stylesheet" href="/css/font/fonts.css" />
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
        />
        <link
            rel="stylesheet"
            href="http://kenwheeler.github.io/slick/slick/slick-theme.css"
        />
        <link rel="stylesheet" href="/css/dropzone.css" />
        <link rel="stylesheet" href="/css/style.css" />
        <link rel="stylesheet" href="/css/adaptive.css" />
    </head>
    <body>
        <header class="non_mainpage">
            <div class="container">
                <div class="header_wrap">
                    <div class="header_info_wrap">
                        <a href="/">
                            <div class="header_info">
                                <img src="/img/keys.svg" alt="" />
                                <p>
                                    <span> 60-мин.РФ</span>
                                    <span>Отели на час</span>
                                </p>
                            </div>
                        </a>
                        <div class="header_location">
                            <img src="/img/loc.svg" alt="" />
                            <a href="#">Санкт-Петербург</a>
                        </div>
                    </div>
                    <div class="header_nav">
                        <ul>
                            <li>
                                <a href="">ОТЕЛИ</a>
                            </li>
                            <li>
                                <a href="">АППАРТАМЕНТЫ</a>
                            </li>
                            <li>
                                <a href="">ДОМА</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header_object">
                        <a class="add_obj" href="#">Добавить объект</a>
                        <div class="header_account">
                            <a href="#"
                                ><img src="/img/acc.svg" alt="" />ВХОД</a
                            >
                        </div>
                    </div>
                </div>
                <div class="header_mobile">
                    <a href="/">
                        <div class="header_info">
                            <img src="/img/keys.svg" alt="" />
                            <p>
                                <span> 60-мин.РФ</span>
                                <span>Отели на час</span>
                            </p>
                        </div>
                    </a>
                    <div class="mobile-header-toggle">
                        <div class="button_menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="menu_responsive">
                        <div class="mob_menu_header">
                            <a href="/">
                                <div class="header_info">
                                    <img src="/img/reverse-keys.svg" alt="" />
                                    <p>
                                        <span> 60-мин.РФ</span>
                                        <span>Отели на час</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <nav class="main_menu">
                            <ul>
                                <li><a href="#">Отели</a></li>
                                <li><a href="#">Аппартаменты</a></li>
                                <li><a href="#">Дома</a></li>
                            </ul>
                        </nav>
                        <div class="regions">
                            <a href="#" class="active_region"
                                >Санкт-Петербург
                                <img src="/img/arrow.svg" alt=""
                            /></a>
                        </div>
                        <div class="mob_menu_footer">
                            <a href="#">Добавить объект</a>
                            <a href="#">Войти в экстранет</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

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
                            <img src="/img/sub-info-icon.png" alt="" />
                            <p>Все пункты в дальнейшем можно будет поменять</p>
                        </div>
                    </div>
                    <div class="object_step_one object_step">
                        <p class="step_title">
                            1. Укажите название вашего объекта
                        </p>
                        <input
                            class="object_step_input"
                            id="object_step_one_input"
                            type="text"
                            placeholder="Напишите название объекта"
                        />
                    </div>
                    <div class="object_step_two object_step">
                        <p class="step_title">
                            2. Добавьте описание вашего объекта
                        </p>
                        <textarea
                            class="object_step_input"
                            id="object_step_two_input"
                            type="text"
                            placeholder="Составьте краткое описание вашего отеля"
                        ></textarea>
                    </div>
                    <div class="object_step_three object_step">
                        <p class="step_title">
                            3. Укажите адрес вашего объекта
                        </p>
                        <input
                            id="object_step_three_input"
                            class="object_step_input"
                            type="text"
                            placeholder="Напишите адрес вашего объекта"
                        />
                        <p class="input_error">
                            Заполните все обязательные поля!
                        </p>
                    </div>
                    <div
                        class="add_new_object_bottom add_new_object_bottom_in_progress"
                    >
                        <div>
                            <img src="/img/add_object_in_progress.png" alt="" />
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
                                            src="/img/remove-icon.png"
                                            alt=""
                                        />
                                        Удалить категорию
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="add_new_category_content show">
                            <div class="container">
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
                                            src="/img/add_hour_icon.png"
                                            alt=""
                                        />
                                        Добавить часы/стоимость</a
                                    >
                                </div>
                                <div class="category_rooms_photos">
                                    <label for=""
                                        >Прикрепите фотографии номера</label
                                    >
                                    <form
                                        action="/file-upload"
                                        class="category_rooms_photo dropzone"
                                    >
                                        <div class="fallback">
                                            <input
                                                name="file"
                                                type="file"
                                                multiple
                                            />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container add_new_category_button_wrap">
                    <button class="add_new_category_button">
                        + | Добавить категорию номера
                    </button>
                </div>
                <div class="container add_new_object_bottom">
                    <div>
                        <img src="/img/add_object_success.png" alt="" />
                        <p>
                            Поздравляем! <br />
                            Вы заполнили всю заявку.
                        </p>
                    </div>
                    <a href="#" class="add_new_object_next">Далее</a>
                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="footer_top">
                    <div class="footer_info">
                        <div class="header_location">
                            <img src="/img/loc.svg" alt="" />
                            <a href="#">Санкт-Петербург</a>
                        </div>
                    </div>
                    <div class="row footer_links">
                        <div class="col-md-4">
                            <a href="#">Отели</a>
                        </div>
                        <div class="col-md-4">
                            <a href="#">Аппартаменты</a>
                        </div>
                        <div class="col-md-4">
                            <a href="#">Дома</a>
                        </div>
                    </div>
                    <div class="footer_account">
                        <a href="#">Стать партнером</a>
                    </div>
                </div>
                <div class="footer_bottom">
                    <div class="footer_info">
                        <div class="header_info">
                            <img src="/img/keys.svg" alt="" />
                            <p>
                                <span> 60-мин.РФ </span>
                                <span>Отели на час</span>
                            </p>
                        </div>
                    </div>
                    <div class="row footer_links">
                        <div class="col-md-4">
                            <a href="#">Отели в Спб</a>
                            <a href="#">Отели в Москве</a>
                            <a href="#">Отели в Ростове</a>
                        </div>
                        <div class="col-md-4">
                            <a href="#">Аппартаменты в Спб</a>
                            <a href="#">Аппартаменты в Москве</a>
                            <a href="#">Аппартаменты в Ростове</a>
                        </div>
                        <div class="col-md-4">
                            <a href="#">Дома в Спб</a>
                            <a href="#">Дома в Москве</a>
                            <a href="#">Дома в Ростове</a>
                        </div>
                    </div>
                    <div class="footer_account">
                        <a class="add_obj" href="#">Добавить объект</a>

                        <a href="#">Войти в экстранет</a>
                    </div>
                </div>
                <p class="footer_terms">
                    © 2020 Бронирование отелей на час “60-Мин.РФ”
                </p>
            </div>

            <div class="mobile_footer">
                <div class="top_mob_fotoer">
                    <div class="header_location">
                        <img src="/img/loc.svg" alt="" />
                        <a href="#">Санкт-Петербург</a>
                    </div>
                    <div class="footer_account">
                        <a class="add_obj" href="#">Добавить объект</a>
                    </div>
                </div>
                <div class="bottom_mob_fotoer">
                    <a href="/">
                        <div class="header_info">
                            <img src="/img/keys.svg" alt="" />
                            <p>
                                <span> 60-мин.РФ </span>
                                <span>Отели на час</span>
                            </p>
                        </div>
                    </a>
                    <div class="footer_links">
                        <a href="#">Отели</a>
                        <a href="#">Аппартаменты</a>
                        <a href="#">Дома</a>
                    </div>

                    <div class="footer_account">
                        <a href="#">Войти в экстранет</a> <span>|</span>
                        <a href="#">Стать партнером</a>
                    </div>
                    <div class="footer_socs">
                        <a href="#"><img src="/img/inst.svg" alt="" /></a>
                        <a href="#"><img src="/img/vk.svg" alt="" /></a>
                        <a href="#"><img src="/img/fb.svg" alt="" /></a>
                    </div>
                    <p class="footer_terms">
                        © 2020 <br />
                        Бронирование отелей на час “60-Мин.РФ”
                    </p>
                </div>
            </div>
            <p class="generator">
                Разработка сайта
                <a href="http://webgenerator.com.ua/">WebGenerator</a>
            </p>
        </footer>

        <script
            src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"
        ></script>
        <script
            type="text/javascript"
            src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
        ></script>

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
        <script src="/js/dropzone.js"></script>
        <script src="/js/custom.js"></script>
    </body>
</html>
