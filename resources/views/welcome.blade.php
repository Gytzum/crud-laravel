@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

    <div class="welcome">
        <h1 style="padding:15px; margin-top: 50px">Welcome to last sprint <br> "CRUD Application" </h1>
        <h2 style="padding:15px">This project is for learning purpose</h2>
        <p style= "margin:0px">Start using as <Strong style="color:red">Reader</Strong>, register new user</p>
        <p style= "margin:10px">Start using as <Strong style="color:red">Admin</Strong>, login with info given :</p>
        <p style= "margin:0px">E-mail address: <Strong style="color:red">admin@admin.com</Strong> </p>
        <p style= "margin:10px">Password: <Strong style="color:red">admin</Strong> </p>
        <ul class="welcome-ul">
            @if (Route::has('login'))
                <li class="welcome-li">
                    <a class="welcome-btn" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif
            @if (Route::has('register'))
                <li class="welcome-li">
                    <a class="welcome-btn" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
        </ul>
        @endif
    </div>
@endsection
