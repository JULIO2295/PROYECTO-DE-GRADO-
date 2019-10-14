@extends('layouts.app')

@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                    <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                        @csrf
                        <span class="login100-form-title p-b-26">
                        Bienvenido
                        </span>

                         <span class="login100-form-title p-b-48">
                            <img src="{{ asset('rec/images/avtar.png')}}">
                       <!-- <i class="zmdi zmdi-font"></i> -->
                        </span>



                        <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                             <input id="login" type="text"
               class="input100" name="login" value="{{ old('username') ?: old('email') }}" required autofocus>
                                <span class="focus-input100" data-placeholder="Usuario"></span>
                               @if ($errors->has('username') || $errors->has('email'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
            </span>
        @endif
                          </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter password">

                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>

                            
                                <input id="password" type="password" class="input100" name="password" required autocomplete="current-password">
                                <span class="focus-input100" data-placeholder="Contraseña"></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         </div>
                        

                     <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>

                                <button type="submit" class="login100-form-btn">
                                    {{ __('Login') }}
                                </button>

                      
                           </div>
                    </div>
                       





                    </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>>
    
@endsection
