<header class="non_mainpage">
    <div class="container">
        <div class="header_wrap">
            <div class="header_info_wrap">
                <a href="{{ route('index') }}">
                <div class="header_info">
                    <img src="{{asset('/img/keys.svg')}}" alt="" />
                    <p>
                        <span> 60-мин.РФ</span>
                        <span>Отели на час</span>
                    </p>
                </div>
                    <div class="header_location">
                        <img src="{{asset('/img/loc.svg')}}" alt="" />
                        <a class="current_location" id="current_location" href="#"
                        >{{ $current_city }}</a
                        >
                        <ul class="sub-menu">
                            @foreach($cities as $city)
                                @if($city->city !== $current_city)
                                <li><a href="#">{{$city->city}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </a>
            </div>
            <div class="header_nav">
                <ul>
                    <li>
                        <a href="{{ route('listings') }}">ОТЕЛИ</a>
                    </li>
                    <li>
                        <a href="#">АППАРТАМЕНТЫ</a>
                    </li>
                    <li>
                        <a href="">ДОМА</a>
                    </li>
                </ul>
            </div>
            <div class="header_object">
                <a class="add_obj" href="#">Добавить объект</a>
                <div class="header_account">
                @guest
                    <a class=""
                    ><img src="{{asset('/img/acc.svg')}}" alt="" />ВХОД</a
                    >
                    <ul class="sub-menu account-sub-menu">
                        <li><a href="{{route('home.properties.index')}}">Вход</a></li>
                        <li><a href="{{route('register')}}">Регистрация</a></li>
                    </ul>
                @else
                    <a href="{{route('home.properties.index')}}" class="account_enter"
                    ><img src="{{asset('/img/acc.svg')}}" alt="" />ВХОД</a
                    > <ul class="sub-menu account-sub-menu">
                        <li><a href="{{route('home.properties.index')}}">ВХОД</a></li>
                        <li><a href="#">Выйти</a></li>
                    </ul>
                @endguest
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
                        <li><a href="{{ route('listings') }}">Отели</a></li>
                        <li><a href="#">Аппартаменты</a></li>
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
