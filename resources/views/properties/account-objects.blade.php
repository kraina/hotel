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
        <div class="account_wrap account_support_wrap">
            <div class="container">
                <div class="account_support_content">
                    <div class="account_breadcrumbs">
                        <a href="#"
                            ><img src="/img/acc_bread_arr.png" alt="" />назад в
                            личный кабинет</a
                        >
                    </div>
                    <div class="account_objects_wrap">
                        <p class="acc_objects_title">Мои объекты</p>
                        <div class="acc_objects_content">
                            <div class="objects_wrap">
                                <div class="acc_single_object">
                                    <div
                                        class="image"
                                        style="
                                            background: url('/img/single_prod.jpg');
                                        "
                                    ></div>
                                    <div class="info">
                                        <p class="title">Отель невский авеню</p>
                                        <div>
                                            <span class="icon_wrap">
                                                <img
                                                    src="/img/acc_sign.png"
                                                    alt=""
                                            /></span>
                                            <p>
                                                Объявление не оплачено за
                                                сентябрь 2020 г.
                                            </p>
                                        </div>
                                        <a href="#">
                                            <span class="icon_wrap"
                                                ><img
                                                    src="/img/acc_pen.png"
                                                    alt="" /></span
                                            >Редактировать объявление</a
                                        >
                                        <a href="#"
                                            ><span class="icon_wrap"
                                                ><img
                                                    src="/img/acc_graph.png"
                                                    alt="" /></span
                                            >Статистика объекта за август 2020
                                            г.</a
                                        >
                                        <a href="#"
                                            ><span class="icon_wrap"
                                                ><img
                                                    src="/img/acc_thoughts.png"
                                                    alt="" /></span
                                            >Отзывы об объекте</a
                                        >
                                    </div>
                                </div>
                                <div class="acc_single_object">
                                    <div
                                        class="image"
                                        style="
                                            background: url('/img/single_prod.jpg');
                                        "
                                    ></div>
                                    <div class="info">
                                        <p class="title">Отель невский авеню</p>
                                        <div>
                                            <span class="icon_wrap">
                                                <img
                                                    src="/img/acc_check.png"
                                                    alt=""
                                            /></span>
                                            <p>
                                                Объявление оплачено за сентябрь
                                                2020 г.
                                            </p>
                                        </div>
                                        <a href="#">
                                            <span class="icon_wrap"
                                                ><img
                                                    src="/img/acc_pen.png"
                                                    alt="" /></span
                                            >Редактировать объявление</a
                                        >
                                        <a href="#"
                                            ><span class="icon_wrap"
                                                ><img
                                                    src="/img/acc_graph.png"
                                                    alt="" /></span
                                            >Статистика объекта за август 2020
                                            г.</a
                                        >
                                        <a href="#"
                                            ><span class="icon_wrap"
                                                ><img
                                                    src="/img/acc_thoughts.png"
                                                    alt="" /></span
                                            >Отзывы об объекте</a
                                        >
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="non_payed">
                                    <div>
                                        <img
                                            src="/img/non_payed_icon.png"
                                            alt=""
                                        />
                                        <div>
                                            <p class="non_payed_title">
                                                За сентябрь 2020 г. размещение
                                                не оплачено
                                            </p>
                                            <p>
                                                Пожалуйста, оплатите размещение
                                                до 25 августа
                                            </p>
                                        </div>
                                    </div>
                                    <a href="#">Оплатить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
