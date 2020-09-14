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

        <div class="account_wrap add_object_form">
            <div class="container">
                <div class="add_object_form_content">
                    <div class="add_object_form_wrap">
                        <div class="add_object_form_title">
                            <p class="title">
                                Мы получили вашу заявку на регистрацию отеля.
                            </p>
                            <p class="subtitle">
                                Уважаемые коллеги, мы получили заявку на
                                регистрацию вашего отеля в нашей сети.
                                Пожалуйста, Оставьте свои контактные данные,
                                чтобы мы могли связаться с вами.
                            </p>
                        </div>
                        <div class="acc_reset_content add_form_content">
                            <div>
                                <label for="">Ваше имя</label>
                                <input type="text" />
                            </div>
                            <div>
                                <label for="">Ваш номер телефона</label>
                                <input type="text" />
                            </div>
                            <div>
                                <label for="">Ваш E-mail</label>
                                <input type="text" />
                            </div>
                            <a href="#" class="submit_reset_pass">Отправить</a>
                            <center><a href="{{ route('home.properties.create3') }}" >ДАЛЕЕ...............</a></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
