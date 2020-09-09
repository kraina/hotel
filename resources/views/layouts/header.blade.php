<header class="non_mainpage">
    <div class="container">
        <div class="header_wrap">
            <div class="header_info_wrap">
                <a href="/">
                <div class="header_info">
                    <img src="{{asset('/img/keys.svg')}}" alt="" />
                    <p>
                        <span> 60-мин.РФ</span>
                        <span>Отели на час</span>
                    </p>
                </div>
                <div class="header_location">
                    <img src="{{asset('/img/loc.svg')}}" alt="" />
                    <a href="#">Санкт-Петербург</a>


                    <div class="form-group">
                        <select name="vendor" id="vendor" class="form-control input-lg dynamic" >
                            <option value="2">Санкт-Петербург</option>
                            <option value="1">Москва</option>
                        </select>
                    </div>
                    <div class="listings_container" id="listings_container">

                    </div>

                </div>
                </a>
            </div>
            <div class="header_nav">
                <ul>
                    <li>
                        <a href="">ОТЕЛИ</a>
                    </li>
                    <li>
                        <a href="{{ route('listings') }}">АППАРТАМЕНТЫ</a>
                    </li>
                    <li>
                        <a href="">ДОМА</a>
                    </li>
                </ul>
            </div>
            <div class="header_object">
                <a class="add_obj" href="#">Добавить объект</a>
                <div class="header_account">
                    <a href="{{route('home.properties.index')}}"
                    ><img src="{{asset('/img/acc.svg')}}" alt="" />ВХОД</a
                    >
                </div>
            </div>
        </div>
        <div class="header_mobile">
            <a href="/">
            <div class="header_info">
                <img src="{{asset('/img/keys.svg')}}" alt="" />
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
                        <img src="{{asset('/img/reverse-keys.svg')}}" alt="" />
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
                        <li><a href="{{ route('listings') }}">Аппартаменты</a></li>
                        <li><a href="#">Дома</a></li>
                    </ul>
                </nav>
                <div class="regions">
                    <a href="#" class="active_region"
                    >Санкт-Петербург
                        <img src="{{asset('/img/arrow.svg')}}" alt=""
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
