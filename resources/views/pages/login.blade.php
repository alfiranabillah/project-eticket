{{-- untuk ngasitau letak file tujuan --}}
@extends('layouts.auth')

{{-- untuk memanggil isi dari yeild --}}
@section('content')

<div class="container">
    <div class="back-link">
        <a href="{{ route('home') }}" class="back-link"> &lt; Kembali ke beranda</a>
        <div class="logo-login">
            <img src="/frontend/images/image 102.png" width="40px" height="40px">
            <p> K-EVENTS </p>
        </div>
    </div>
    <div class="title"><b>Login</b></div>
    <div class="content-login">
        <form method="POST" action="{{ route('login') }}" autocomplete="off">
            @csrf
            <div class="user-details">
                <div class="input-box-login">
                    <span class="details">Email</span>
                    <input type="email" name="email" autocomplete="off" required autofocus>
                </div>
                
                <div class="input-box-login">
                    <span class="details">Password</span>
                    <input type="password" name="password" autocomplete="new-password" required>
                </div>
            </div>
            <div class="btn-userlogin">
                <div class="button">
                    <input type="submit" value="Login">
                </div>
                <div class="direct fs-6" style="margin-top: -15px;">Belum punya akun? 
                    <p><a href="{{ route('register') }}" style="text-decoration: none; color: #F25D9C;">Register</a></p>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
