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

        <div class="account_wrap account_reset_password">
            <div class="container">
                <div class="account_support_content">
                    <div class="acc_support_success_wrap">
                        <img src="/img/success.png" alt="" />
                        <div>
                            <p class="acc_support_success_title">
                                спасибо! мы скоро <br />
                                свяжемся с вами!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
