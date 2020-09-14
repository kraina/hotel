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
                    <p class="acc_supp_title">
                        Связататься с технической поддержкой или нашим
                        специалистом
                    </p>
                    <div class="acc_supp_single">
                        <img src=/img/acc_supp_phone.png alt="">
                        <p>
                            Позвоните нам по номеру
                            <a href="tel:+78122739832">+7 (812) 273-98-32</a>,
                            если Ваш вопрос срочный.
                        </p>
                    </div>
                    <div class="acc_supp_single">
                        <img src=/img/acc_supp_mail.png alt="">
                        <p>
                            Если же Ваш вопрос может быть обсужден в письменной
                            форме, напишите ваше сообщение в данном поле.
                        </p>
                    </div>
                    <div class="acc_supp_form">
                        <textarea
                            name=""
                            id=""
                            placeholder="Опишите Вашу проблему"
                        ></textarea>
                        <button>Отправить</button>
                        <a href="{{ route('home.account-support-success') }}" >Success</a>
                    </div>
                </div>
            </div>
        </div>
@endsection
