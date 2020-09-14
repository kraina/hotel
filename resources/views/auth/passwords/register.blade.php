@extends('layouts.default')

@section('content')
   <div class="account_wrap add_object_form">
            <div class="container">
                <div class="add_object_form_content">
                    <div class="add_object_form_wrap">
                        <div class="add_object_form_title">
                            <p class="title">
                                 {{ __('Register') }}
                            </p>
                           <!--  <p class="subtitle">
                                Уважаемые коллеги, мы получили заявку на
                                регистрацию вашего отеля в нашей сети.
                                Пожалуйста, Оставьте свои контактные данные,
                                чтобы мы могли связаться с вами.
                            </p> -->
                        </div>
                         <form method="POST" action="{{ route('register') }}">
                        <div class="acc_reset_content add_form_content">
                            
                            @csrf
                            <div>
                                <label for="">{{ __('Name') }}</label>
                                 <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div>
                                <label for="">Ваш номер телефона</label>
                                <input type="text" />
                            </div>
                            <div>
                                <label for="">{{ __('E-Mail Address') }}</label>
                                  <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             <div>
                            <label for="password">{{ __('Password') }}</label>

                          
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div>
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>

                            
                                <input id="password-confirm" type="password"  name="password_confirmation" required autocomplete="new-password">
                            
                        </div>
                            
                                <button type="submit" class="submit_reset_pass">
                                    {{ __('Register') }}
                                </button>
                          
                           
                        </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
