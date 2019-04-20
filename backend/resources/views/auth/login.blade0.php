@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<section class="col-xl-12 section-one">
      <div class="col-xl-12 flex center login-container">
          <div class="sign_up log_in  col-xl-3 flex-wrap center">
            <h2 class="col-xl-11">Sign Up</h2>
            <div class="inputs col-xl-11">
              <form action="{{ route('signup') }}" method="post">
                  @csrf
                <p><input type="text" placeholder="username" class="col-xl-12"></p>
                <p><input type="text" placeholder="email" class="col-xl-12"></p>
                <p><input type="password" placeholder="password" class="col-xl-12"></p>
                <div class="col-xl-12 flex center">
                  <input type="button" name="" id="" value="Log In" class="loginb col-xl-6">
                </div>
              </form>
            </div>
            <div class="forgot">
              <a href="#">Already a member?</a>
            </div>
          </div>
        </div>
        
        <div class="col-xl-12 flex center login-container">
          <div class="sign_in log_in hidden col-xl-3 flex-wrap center">
            <h2 class="col-xl-11">Log In</h2>
            <div class="inputs col-xl-11">
              <form action="{{ route('login') }}" method="post">
                <p><input type="text" placeholder="email" class="col-xl-12"></p>
                <p><input type="password" placeholder="password" class="col-xl-12"></p>

                <div class="col-xl-12 flex center">
                  <input type="button" name="" id="" value="Log In" class="loginb col-xl-6">
                </div>
              </form>
            </div>
            <div class="forgot">
              <a href="#">Forgot password ?</a>
              <a href="#" class="sign">Sign-Up</a>
            </div>
          </div>
        </div>
    <div class="flex center">
      <nav class="flex col-xl-11">
        <div href="#" class="nav-link-2 col-xl-4 heading logo"><img src="./assets/images/rag1.png" alt=""></div>
        <div class="nav-link-2 col-xl-4 center-2">
          <a href="#" class="nav-link col-xl-4"> HOME</a>
          <a href="#" class="nav-link col-xl-4"> HOME</a>
          <a href="#" class="nav-link col-xl-4"> HOME</a>
        </div>
        <div class="nav-link col-xl-4 flex right">
          <button class="btn btn-green col-xl-4">SIGN UP</button>
          <button class="btn btn-light col-xl-4 offset-xl-1">LOG IN</button>
        </div>
      </nav>
    </div>
    <div class="flex center">
      <div class="row col-xl-11">
        <div class="flex-wrap col-xl-6 hero-text">
          <div class="heading col-xl-12">
            Tranz is a solution to buying and selling safely using
            cryptocurrency
          </div>
          <p class="col-xl-12 extest">
            Currently accepting Ethereum.
          </p>
          <button class="btn btn-green col-xl-3 center-2">Get Started</button>
        </div>
        <div class="col-xl-6">
          <div href="#" class="nav-link-2 col-xl-4 heading logo-two"><img src="./assets/images/philip request.png"
              alt=""></div>
        </div>

      </div>
    </div>
  </section>   

</body>
</html>