<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Pearl Gymnastic</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        /* RESET DAN FONT DASAR */
        body {
            margin: 0;
            font-family: 'Poppins', Arial, sans-serif; /* Menggunakan font yang umum untuk tampilan modern */
            background: #d9f1f5;
            overflow-x: hidden;
        }

        /* HEADER */
        /* HEADER */
        .top-header {
            width: 100%;
            height: 70px;
            background: #ffffff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* GANTI padding: 0 35px; */
            padding: 0 20px; /* Kurangi padding samping sedikit */
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
            box-shadow: 0 2px 5px rgba(0,0,0,0.08);
        }

        /* LOGO */
        .logo-area {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-area img {
            height: 40px;
        }

        .logo-title {
            font-size: 18px;
            font-weight: 700;
            white-space: nowrap;
        }

        /* NAV MENU */
        .nav-menu {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .nav-menu a {
            text-decoration: none;
            color: #000;
            font-size: 15px;
            padding-bottom: 4px;
            transition: color 0.3s;
        }

        /* GARIS BIRU */
        .active-link {
            font-weight: 600;
            border-bottom: 3px solid #1e90ff;
        }

        /* LOGIN BUTTON (TIDAK TERPOTONG) */
        .btn-login-link {
            padding: 8px 20px;
            background: #1e90ff;
            color: white !important; /* !important agar override nav-menu a */
            border-radius: 6px;
            font-size: 14px;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 36px;
            box-sizing: border-box;
            transition: background 0.3s;
        }

        .btn-login-link:hover {
            background: #1878d0;
        }


        /* ======================================= */
        /* TATA LETAK UTAMA KONTEN (PERBAIKAN HOME) */
        /* ======================================= */
        .content {
            margin-top: 70px; /* Jarak dari header */
            padding: 0; /* Hapus padding default di sini */
            min-height: calc(100vh - 70px);
        }

        /* Terapkan Flexbox dan penengahan hanya untuk halaman Login/Register */
        .content:has(.auth-container) {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px; /* Tambahkan sedikit padding saat mode flex aktif */
        }
        /* ==================================== */

        /* STYLING KHUSUS LOGIN/REGISTER CARD */
        /* ==================================== */

        .auth-container {
            display: grid;
            grid-template-columns: 1fr 1fr; /* Dua kolom */
            width: 90%;
            max-width: 950px; /* Ukuran max container */
            min-height: 500px;
            margin: 40px auto;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-radius: 25px; /* Sudut utama container */
            overflow: hidden;
            background-color: white; /* Default background untuk kolom putih */
        }

        .auth-gradient-panel {
            background: linear-gradient(135deg, #2B3A7B, #53047A); /* Gradien Biru-Ungu */
            color: white;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .auth-form-panel {
            padding: 40px 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .auth-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 30px;
            color: #333;
        }

        .auth-title-login {
            color: #333;
        }

        /* STYLING INPUT */
        .input-group {
            position: relative;
            margin-bottom: 25px;
        }

        .input-group label {
            display: none; /* Kita sembunyikan label karena kita pakai placeholder/ikon */
        }

        .auth-input {
            width: 100%;
            padding: 12px 15px 12px 45px; /* Ruang untuk ikon */
            border: none;
            border-radius: 8px;
            background: #f0f0f5; /* Latar belakang input abu-abu muda */
            box-shadow: inset 0 1px 3px rgba(0,0,0,0.05);
            font-size: 16px;
            box-sizing: border-box;
        }

        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-size: 18px;
        }

        /* STYLING TOMBOL */
        .auth-button {
            width: 100%;
            background: #2B3A7B; /* Warna utama (biru tua) */
            padding: 12px;
            color: white;
            border: none;
            border-radius: 25px; /* Bentuk pil */
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 15px;
            transition: background 0.3s;
        }

        .auth-button:hover {
            background: #1e2954;
        }

        /* Tombol sekunder (Register/Login dari panel gradien) */
        .btn-secondary-light {
            background: white;
            color: #2B3A7B;
            border: 2px solid white;
            margin-top: 20px;
            padding: 10px 30px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
        }


        /* RESPONSIVE MODE */
        @media (max-width: 900px) {
            .auth-container {
                grid-template-columns: 1fr; /* Satu kolom */
                max-width: 500px;
            }
            .auth-gradient-panel {
                order: -1; /* Pindahkan panel gradien ke atas pada mobile */
                min-height: 200px;
            }
            .auth-form-panel {
                padding: 40px 30px;
            }
        }

        @media (max-width: 600px) {
            .top-header {
                padding: 0 20px;
            }
            .logo-title {
                font-size: 15px;
            }
            .nav-menu {
                gap: 7px;
            }
            .nav-menu a {
                font-size: 13px;
            }
            .btn-login {
                padding: 7px 16px;
                font-size: 12px;
            }
        }
    </style>

</head>
<body>

    <div class="top-header">

        <div class="logo-area">
            <img src="{{ asset('images/logo_pearl.png') }}" alt="Logo">
            <span class="logo-title">Pearl Artistic Gymnastic</span>
        </div>

        <div class="nav-menu">

            <a href="{{ route('halaman_home') }}"
                class="{{ request()->is('halaman_home') && !str_contains(request()->fullUrl(), '#tentang-kami') ? 'active-link' : '' }}">
                Home
            </a>

            <a href="{{ route('tentang') }}"
                class="{{ request()->is('tentang') ? 'active-link' : '' }}">
                    Tentang
            </a>

            <a href="{{ route('register') }}"
               class="{{ request()->is('register') ? 'active-link' : '' }}">
                Daftar
            </a>

            <a href="{{ route('login') }}" class="btn-login-link">
                Login
            </a>

        </div>
    </div>

    <div class="content">
        @yield('content')
    </div>

</body>
</html>
