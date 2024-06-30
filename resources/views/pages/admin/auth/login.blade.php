@extends('layouts.authadmin')

@section('content')
<div class="container">
        <form method="POST" action="{{ route('admin.login') }}" autocomplete="off">
        @csrf
        <div class="title">Login</div>
        <div class="input-box underline">
          <input type="email" name="email" placeholder="Email" autocomplete="off" required>
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password" name="password" placeholder="Password" autocomplete="new-password" required>
          <div class="underline"></div>
        </div>
        <p>Belum punya akun? <a href="{{ route('admin.register') }}" class="direct">Sign Up</a></p>
        <div class="input-box button">
          <input type="submit" name="" value="Continue">
        </div>
      </form>
    </div>

@endsection