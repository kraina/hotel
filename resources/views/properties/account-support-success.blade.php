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
                    <div class="acc_support_success_wrap">
                        <img src="/img/success.png" alt="" />
                        <div>
                            <p class="acc_support_success_title">
                                мы получили ваше письмо!
                            </p>
                            <p>Мы ответим на него как можно быстрее</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
