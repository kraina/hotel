@extends('layouts.default')

@section('content')

<div class="account_wrap account_reset_password">
            <div class="container">
                <div class="account_support_content">
                    <div class="account_reset_wrap">
                        <div class="acc_reset_title">
                            <p>Войти в личный кабинет</p>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="acc_reset_content">
                            <div>
                                <label for="">Введите E-mail</label>
                                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div>
                                <label for="">Введите пароль</label>
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                  @if (Route::has('password.request'))
                                    <a class="forgot_pass" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                               
                                <br />

                                <label class="remember_me"
                                    >   <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Запомнить
                                    меня</label
                                >
                            </div>

                            <button type="submit" class="submit_reset_pass">
                               {{ __('Login') }}
                            </button>
                        </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
