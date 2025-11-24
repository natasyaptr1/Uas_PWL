@extends('layouts.app')

@section('title', 'Home')

@section('content')

<style>
    html, body {
        overflow-x: hidden;   /* 🔒 kunci agar tidak bisa digeser ke samping */
    }
</style>

{{-- HERO BANNER --}}
<div class="container-fluid p-0">

    <div class="position-relative text-white"
          style="
             height: 420px;
             background-image: url('{{ asset('images/gymnastic.png') }}');
             background-size: cover;
             background-position: center;
             background-repeat: no-repeat;
             text-shadow: 1px 1px 8px rgba(0,0,0,0.7);
           ">

        <div style="
             position: absolute;
             top: 50%;
             left: 50%;
             transform: translate(-50%, -50%);
             width: 90%;
             max-width: 900px;
             text-align: center;
        ">

            <h2 class="fw-bold"
                 style="color:white; font-size:32px; margin-bottom:15px;">
                Gold medals aren't really made of gold.
            </h2>

            <h5 style="color:white; font-size:20px; margin-bottom:20px;">
                They are made of sweat, determination,<br>
                and a hard-to-find alloy called guts.
            </h5>

            <a href="/training"
               style="
                       display: inline-block;
                       padding: 12px 32px;
                       font-size: 17px;
                       font-weight: 600;
                       margin-top: 25px;
                       color: #ffffff;
                       text-decoration: none;
                       background: linear-gradient(90deg, #5275B0, #3C5071);
                       border-radius: 20px;
                       border: 1px solid rgba(255,255,255,0.3);
                       box-shadow: inset 0 2px 4px rgba(255,255,255,0.3),
                                   inset 0 -2px 4px rgba(0,0,0,0.2);
               ">
                Mulai Trial 1 Hari Gratis
            </a>
        </div>
    </div>
</div>

<br>

<div style="display: flex; align-items: center; gap: 40px; justify-content: center;">

    {{-- TEXT CONTAINER --}}
    <div class="container mt-5" style="width: 50%; margin-left: -380px;">
        <div class="row align-items-center">

            <div class="text-center text-md-start">

                <h2 class="fw-bold mb-3"
                    style="letter-spacing: 2px; text-align:center; margin-right: 4%; font-size: 35px">
                    GYMNASTIC
                </h2>

                <p style="
                    font-size: 20px;
                    line-height: 1.9;
                    max-width: 450px;
                    text-align: center;
                    margin-left: 13%;
                    margin-right: auto;
                ">
                    Program pelatihan senam modern yang dirancang
                    untuk membantu anak, remaja, dan dewasa
                    mengembangkan kekuatan, kelenturan, dan
                    keseimbangan melalui gerakan senam yang
                    menyenangkan dan aman.
                </p>

                <a href="/daftar"
                style="
                    display: block;
                    margin-top: 20px;
                    padding: 8px 28px;
                    font-size: 14px;
                    font-weight: 600;
                    text-decoration: none;
                    color: #ffffff;
                    background: linear-gradient(90deg, #5275B0, #3C5071);
                    border-radius: 20px;
                    box-shadow: inset 0 2px 4px rgba(255,255,255,0.3),
                                 inset 0 -2px 4px rgba(0,0,0,0.2);

                    width: fit-content;
                    margin-left: 35%;
                    margin-right: auto;
                ">
                    Daftar Sekarang
                </a>

            </div>
        </div>
    </div>

    {{-- IMAGE CONTAINER --}}
    <div class="container mt-5" style="width: 50%; margin-right: -580px;">

        <div class="d-flex justify-content-center">
            <div style="
                width: 510px;
                background: linear-gradient(180deg, #0C8D9A, #2F538C, #51197E);
                border-radius: 22px;
                padding: 8px 20px 8px 8px;
                position: relative;
                overflow: visible;
            ">
                <img src="{{ asset('images/ritmik_bola.png') }}"
                      style="
                          width: 330px;
                          border-radius: 18px;
                          position: relative;
                          left: -38px;
                          top: 0;
                      ">
            </div>
        </div>

    </div>

</div>

{{-- FOOTER --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<footer id="tentang-kami" class="mt-5 py-5"
    style="
        background: linear-gradient(135deg, #152245, #1C2C5B, #243B78);
        color:white;
        border-top: 2px solid rgba(255,255,255,0.2);
    ">

    <div class="container">

        <h4 class="fw-bold text-center mb-4"
            style="font-size: 26px; letter-spacing: 1px;">
            PEARL ARTISTIC GYMNASTIC
        </h4>

        <hr style="border-color: rgba(255,255,255,0.3); margin-bottom: 35px;">

        <div class="row text-center text-md-start">

            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3" style="font-size: 20px;">TENTANG</h5>

                <p class="mb-2 d-flex align-items-center gap-2">
                    <i class="bi bi-chevron-right"></i> Program Training
                </p>

                <p class="mb-2 d-flex align-items-center gap-2">
                    <i class="bi bi-chevron-right"></i> Event
                </p>
            </div>

            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3" style="font-size: 20px;">KANTOR</h5>

                <p class="mb-2 d-flex align-items-center gap-2">
                    <i class="bi bi-geo-alt-fill"></i> Gedung Serba Guna Perum Mojoroto Indah
                </p>

                <p class="mb-2 d-flex align-items-center gap-2">
                    <i class="bi bi-geo-alt-fill"></i> Kota Kediri
                </p>
            </div>

            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3" style="font-size: 20px;">KONTAK</h5>

                <p class="mb-2 d-flex align-items-center gap-2">
                    <i class="bi bi-whatsapp"></i> +62 815-1533-4081 (Coach Listiani)
                </p>

                <p class="mb-2 d-flex align-items-center gap-2">
                    <i class="bi bi-envelope-fill"></i> blablabla@gmail.com
                </p>
            </div>

        </div>

        <hr style="border-color: rgba(255,255,255,0.2); margin-top: 35px;">

        <p class="text-center mt-3" style="font-size: 14px; opacity: 0.8;">
            © 2025 Pearl Artistic Gymnastic — All Rights Reserved
        </p>

    </div>
</footer>

@endsection
