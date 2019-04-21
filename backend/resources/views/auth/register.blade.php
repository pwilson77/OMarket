@extends('layouts.auth')

@section('content')
    <div class="sign_in log_in col-xl-3 flex-wrap center">
        <h2 class="col-xl-11">Log In</h2>
        @if($errors->any())
            <h4>{{$errors->first()}}</h4>
        @endif
        <div class="inputs col-xl-11">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <p><input type="text" placeholder="name" name="name" value="{{old('name')}}" class="col-xl-12"></p>
                <p><input type="email" placeholder="email" name="email" value="{{old('email')}}" class="col-xl-12"></p>
                <p><input type="password" placeholder="password" name="password" class="col-xl-12"></p>
                <p><input type="password" placeholder="password" name="password_confirmation" class="col-xl-12"></p>
                <div class="col-xl-12 flex center">
                    <input type="submit" name="" id="" value="Sign Up" class="btn btn-green2 col-xl-6">
                </div>
            </form>
        </div>
        <div class="forgot">
            <a href="#">Forgot password ?</a>
            <a href="#" class="sign">Sign-Up</a>
        </div>
    </div>
@endsection