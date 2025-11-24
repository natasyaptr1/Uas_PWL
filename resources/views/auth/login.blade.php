@extends('layouts.app')
@section('title', 'Login')

@section('content')

<div class="auth-container">

    {{-- KOLOM KIRI: FORM LOGIN --}}
    <div class="auth-form-panel">
        <h2 class="auth-title auth-title-login">LOGIN</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            {{-- INPUT USERNAME/EMAIL --}}
            <div class="input-group">
                <label for="email">Email</label>
                <i class="bi bi-person input-icon"></i>
                <input type="email" name="email" id="email" placeholder="Username" class="auth-input" required>
            </div>

            {{-- INPUT PASSWORD --}}
            <div class="input-group">
                <label for="password">Password</label>
                <i class="bi bi-eye input-icon"></i>
                <input type="password" name="password" id="password" placeholder="Password" class="auth-input" required>
            </div>

            <a href="#" style="text-align: right; display: block; font-size: 13px; color: #53047A; margin-bottom: 20px;">
                Forgot Password?
            </a>

            <button type="submit" class="auth-button">
                Masuk
            </button>
        </form>
    </div>

    {{-- KOLOM KANAN: PANEL INFO GRADIENT --}}
    <div class="auth-gradient-panel">
        <h2 style="font-size: 30px; margin-bottom: 10px;">Hello, Welcome!</h2>
        <p style="opacity: 0.9; margin-bottom: 20px;">
            Masukkan akun Anda untuk melanjutkan.
        </p>

        <a href="{{ route('register') }}" class="btn-secondary-light">
            Register
        </a>
    </div>

</div>

@endsection
