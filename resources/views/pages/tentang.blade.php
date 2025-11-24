@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')

{{-- ========================================= --}}
{{-- HERO SLIDER (sesuai desain) --}}
{{-- ========================================= --}}
<div style="margin-top: 70px;">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <div style="
                    width: 100%;
                    height: 380px;
                    background: url('{{ asset('images/hero1.jpg') }}') center/cover no-repeat;
                    position: relative;
                ">
                    <div style="
                        position: absolute;
                        top: 0; left: 0; right: 0; bottom: 0;
                        background: rgba(0,0,0,0.45);
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;
                        text-align: center;
                        padding: 20px;
                        color: white;
                    ">
                        <h2 style="max-width: 700px; font-size: 26px; font-weight: 600;">
                            Gold medals aren’t really made of gold. They are made of sweat, determination,
                            and a hard-to-find alloy called guts
                        </h2>

                        <a href="#tentang-bawah"
                           style="
                                margin-top: 20px;
                                background: white;
                                color: #2B3A7B;
                                padding: 10px 25px;
                                border-radius: 25px;
                                text-decoration: none;
                                font-weight: 600;
                           ">
                            Make Their Heart Quotes
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



{{-- ========================================= --}}
{{-- PROGRAM & LAYANAN (background biru muda) --}}
{{-- ========================================= --}}
<section style="background: #e6f4f7; padding: 60px 20px;">
    <div class="container" style="max-width: 1050px;">

        <h2 class="text-center fw-bold" style="color: #152245; font-size: 30px;">Program & Layanan Gymnastics</h2>

        <p class="text-center mx-auto mb-5"
           style="max-width: 700px; line-height: 1.6; font-size: 15px; color: #333;">
            Qymnastics menyediakan berbagai program pelatihan senam yang dirancang untuk
            semua usia dan tingkat kemampuan. Setiap program difokuskan pada pembentukan
            kekuatan, kelenturan, disiplin, dan rasa percaya diri melalui metode
            pelatihan yang aman dan menyenangkan.
        </p>

    </div>
</section>



{{-- ========================================= --}}
{{-- OUR CLASSES - FULL GRADIENT (persis desain) --}}
{{-- ========================================= --}}
<section style="
    background: linear-gradient(135deg, #2B3A7B, #53047A);
    padding: 60px 20px;
    color: white;
">
    <div class="container" style="max-width: 1100px;">

        <h2 class="fw-bold" style="font-size: 32px;">Our classes</h2>

        <div class="row mt-4">

            {{-- CLASS 01 --}}
            <div class="col-md-6 mb-4">
                <div class="d-flex">
                    <div>
                        <h1 style="font-size: 45px; opacity: 0.8;">01</h1>
                    </div>
                    <div class="ms-3">
                        <h5 class="fw-bold">Class Rekreasi/Pemula</h5>
                        <p style="font-size: 14px;">
                            Untuk usia 2,5 – 5 Tahun. Kami akan memantau potensi si kecil
                            untuk merekomendasikan kelas lanjutan yang paling cocok sesuai bakat alaminya.
                        </p>
                    </div>
                </div>
            </div>

            {{-- CLASS 02 --}}
            <div class="col-md-6 mb-4">
                <div class="d-flex">
                    <div>
                        <h1 style="font-size: 45px; opacity: 0.8;">02</h1>
                    </div>
                    <div class="ms-3">
                        <h5 class="fw-bold">Class Reguler</h5>
                        <p style="font-size: 14px;">
                            Untuk usia 6 - 8 Tahun. Fokus pembangunan teknik yang benar,
                            kedisiplinan, serta peningkatan kelenturan secara bertahap.
                        </p>
                    </div>
                </div>
            </div>

            {{-- CLASS 03 --}}
            <div class="col-md-6 mb-4">
                <div class="d-flex">
                    <div>
                        <h1 style="font-size: 45px; opacity: 0.8;">03</h1>
                    </div>
                    <div class="ms-3">
                        <h5 class="fw-bold">Class Prestasi</h5>
                        <p style="font-size: 14px;">
                            Untuk remaja hingga dewasa. Program intensif untuk mencetak
                            atlet siap tanding, fokus teknik lanjutan dan mental juara.
                        </p>
                    </div>
                </div>
            </div>

            {{-- CLASS 04 --}}
            <div class="col-md-6 mb-4">
                <div class="d-flex">
                    <div>
                        <h1 style="font-size: 45px; opacity: 0.8;">04</h1>
                    </div>
                    <div class="ms-3">
                        <h5 class="fw-bold">Class Private</h5>
                        <p style="font-size: 14px;">
                            Maksimal 3 anak per pertemuan. Pendampingan personalisasi
                            dengan materi yang disesuaikan kebutuhan siswa.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>



{{-- ========================================= --}}
{{-- FOOTER --}}
{{-- ========================================= --}}
<footer id="tentang-bawah" class="mt-0 py-5"
    style="background: linear-gradient(135deg, #152245, #1C2C5B, #243B78); color:white;">

    <div class="container">
        <h4 class="fw-bold text-center mb-4" style="font-size: 26px;">
            PEARL ARTISTIC GYMNASTIC
        </h4>
        <hr style="border-color: rgba(255,255,255,0.3);">

        <div class="row text-center text-md-start mt-4">

            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3">TENTANG</h5>
                <p class="mb-2">Program Training</p>
                <p class="mb-2">Event</p>
            </div>

            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3">KANTOR</h5>
                <p class="mb-2">Gedung Serba Guna Perum Mojoroto Indah</p>
                <p class="mb-2">Kota Kediri</p>
            </div>

            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3">KONTAK</h5>
                <p class="mb-2">+62 815-1533-4081 (Coach Listiani)</p>
                <p class="mb-2">blablabla@gmail.com</p>
            </div>

        </div>

        <hr style="border-color: rgba(255,255,255,0.2);">
        <p class="text-center mt-3" style="font-size: 14px; opacity: 0.8;">
            © 2025 Pearl Artistic Gymnastic — All Rights Reserved
        </p>
    </div>
</footer>

@endsection
