@extends('layouts.auth')

@section('content')
    <div class="sign_in log_in col-xl-3 flex-wrap center">
        <h2 class="col-xl-11">Log In</h2>
        <div class="inputs col-xl-11">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <p><input type="text" placeholder="email" name="email" value="{{old('email')}}" class="col-xl-12"></p>
                <p><input type="password" placeholder="password" name="password" class="col-xl-12"></p>
                <div class="col-xl-12 flex center">
                    <input type="submit" name="" id="" value="Log In" class="btn btn-green2 col-xl-6">
                </div>
            </form>
        </div>
        <div class="forgot">
            <a href="#">Forgot password ?</a>
            <a href="#" class="sign">Sign-Up</a>
        </div>
    </div>
@endsection
