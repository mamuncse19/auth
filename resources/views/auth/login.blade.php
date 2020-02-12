@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
         <div class="row-fluid">
                <div class="login-box">
                    <div class="icons">
                        <a href="index.html"><i class="halflings-icon home"></i></a>
                        <a href="#"><i class="halflings-icon cog"></i></a>
                    </div>
                    <h2>Login to your account</h2>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                           @csrf
                        <fieldset>
                            <div class="input-prepend">
                                <span class="add-on"><i class="halflings-icon user"></i></span>
                                <input type="email" class="input-large span10 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="clearfix"></div>
                            <div class="input-prepend">
                                <span class="add-on"><i class="halflings-icon lock"></i></span>
                                <input type="password" class="input-large span10 @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password" />
                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="clearfix"></div>

                            <label class="remember" for="remember"><input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />{{ __('Remember Me') }}</label>
                            <div class="button-login">  
                                <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                            </div>
                            <div class="clearfix"></div>
                    </form>
                    <hr>
                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif 
                </div><!--/span-->
            </div><!--/row-->
    </div>
</div>

@endsection
