@extends('layouts.auth')

@section('content')

<div class="container-regis">
    <div class="back-link">
        <a href="{{ route('home') }}" class="back-link"> &lt; Kembali ke beranda</a>
        <div class="logo">
            <img src="/frontend/images/image 102.png" width="40px" height="40px">
            <p> G-POINT </p>
        </div>
    </div>
    <div class="title"><b>Register</b></div>
    <div class="direct">Sudah punya akun? 
        <p><a href="{{ route('login') }}" style="text-decoration: none; color: #F25D9C;">Login</a></p>
    </div>
    <div class="content">
        <form method="POST" action="{{ route('register') }}" autocomplete="off">
            @csrf
            <div class="user-details">
                <div class="input-box " style="margin-top: 28px;">
                    <span class="details">Nama Depan</span>
                    <input type="text" name="first_name" autocomplete="off" required>
                </div>
                <div class="input-box" style="margin-top: 28px;">
                    <span class="details">Nama Belakang</span>
                    <input type="text" name="last_name" autocomplete="off" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" name="email" autocomplete="off" required>
                </div>
                <div class="input-box">
                    <span class="details">Nomor Ponsel</span>
                    <input type="number" name="phone" autocomplete="off" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="password" autocomplete="new-password" required>
                </div>
                <div class="input-box">
                    <span class="details">Konfirmasi Password</span>
                    <input type="password" name="password_confirmation" required>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Buat Akun">
            </div>
        </form>
    </div>
</div>

@endsection
