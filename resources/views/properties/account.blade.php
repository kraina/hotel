@extends('layouts.default')

@section('title', 'Catalog')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('style')

@endsection

@section('script')
@endsection
@section('content')
        <div class="account_wrap">
            <div class="container">
                <div class="account_content">
                    <p class="account_main_title">
                        Добро пожаловать в Экстранет!
                    </p>
                    <div class="row">
                        <a
                            href="#"
                            class="account_left_section account_single_section account_small_section col-md-6"
                        >
                            <div>
                                <p class="account_sec_title">
                                    Поменять пароль от личного кабинета
                                </p>
                                <img src="{{ asset('img/account_lock.png')}}" alt="" />
                            </div>
                        </a>
                        <a
                            href="#"
                            class="account_single_section account_small_section col-md-6"
                        >
                            <div>
                                <img src="{{ asset('/img/account_clock.png')}}" alt="" />
                                <div>
                                    <p class="account_sec_title">
                                        Продлить подписку
                                    </p>
                                    <p>
                                        до истечения срока подписки осталось 13
                                        дней
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a
                            href="#"
                            class="account_left_section account_single_section account_small_section col-md-6"
                        >
                            <div>
                                <p class="account_sec_title">Мои объявления</p>
                                <img src="{{ asset('img/account_bed.png')}}" alt="" />
                            </div>
                        </a>
                        <a
                            href="#"
                            class="account_single_section account_small_section col-md-6"
                        >
                            <div>
                                <img src="{{ asset('/img/account_plus.png')}}" alt="" />
                                <p class="account_sec_title">
                                    Добавить новый объект
                                </p>
                            </div>
                        </a>
                        <a
                            href="#"
                            class="account_single_section account_large_section col-md-12"
                        >
                            <div>
                                <img src="{{ asset('/img/account_face.png')}}" alt="" />
                                <p class="account_sec_title">
                                    Связаться с технической поддержкой или нашим
                                    специалистом
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
@endsection
