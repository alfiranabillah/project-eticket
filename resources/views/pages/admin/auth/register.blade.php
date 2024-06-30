@extends('layouts.authadmin')

@section('content')
<div class="container">
        <form method="POST" action="{{ route('admin.register') }}" autocomplete="off">
        @csrf
        <div class="title">Sign Up</div>
        <div class="input-box underline">
          <input type="text" name="name" placeholder="Name"autocomplete="off" required>
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="email" name="email" placeholder="Email" autocomplete="off" required>
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password" name="password" placeholder="Password" autocomplete="new-password" required>
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password" name="password_confirmation" placeholder="Confirmation Password" autocomplete="new-password" required>
          <div class="underline"></div>
        </div>
        <p>Sudah punya akun? <a href="{{ route('admin.login') }}" class="direct">Login</a></p>
        <div class="input-box button">
          <input type="submit" name="" value="Continue">
        </div>
      </form>
    </div>

@endsection