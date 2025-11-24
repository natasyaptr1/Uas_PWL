@extends('layouts.app')
@section('title', 'Daftar Member')

@section('content')

<div class="auth-container">

    {{-- KOLOM KIRI: PANEL INFO GRADIENT (TAMPILAN REGISTRASI) --}}
    <div class="auth-gradient-panel" style="background: linear-gradient(135deg, #0C8D9A, #2B3A7B);">
        <h2 style="font-size: 30px; margin-bottom: 10px;">Hello, Welcome!</h2>
        <p style="opacity: 0.9; margin-bottom: 20px;">
            Sudah punya akun? Masuk sekarang.
        </p>

        <a href="{{ route('login') }}" class="btn-secondary-light">
            Login
        </a>
    </div>

    {{-- KOLOM KANAN: FORM REGISTRASI --}}
    <div class="auth-form-panel">
        <h2 class="auth-title">REGISTRASI</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            {{-- INPUT NAMA/USERNAME --}}
            <div class="input-group">
                <label for="username">Nama</label>
                <i class="bi bi-person input-icon"></i>
                <input type="text" name="username" id="username" placeholder="Username" class="auth-input" required>
            </div>

            {{-- INPUT EMAIL --}}
            <div class="input-group">
                <label for="email">Email</label>
                <i class="bi bi-envelope input-icon"></i>
                <input type="email" name="email" id="email" placeholder="Email" class="auth-input" required>
            </div>

            {{-- INPUT PASSWORD --}}
            <div class="input-group">
                <label for="password">Password</label>
                <i class="bi bi-lock input-icon"></i>
                <input type="password" name="password" id="password" placeholder="Password" class="auth-input" required>
            </div>

            {{-- INPUT KONFIRMASI PASSWORD --}}
            <div class="input-group">
                <label for="password_confirmation">Konfirmasi Password</label>
                <i class="bi bi-lock input-icon"></i>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Reinsert Password" class="auth-input" required>
            </div>

            <button type="submit" class="auth-button">
                Registrasi
            </button>
        </form>
    </div>

</div>

@endsection
