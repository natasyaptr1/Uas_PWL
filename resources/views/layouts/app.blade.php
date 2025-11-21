<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') - Pearl Gymnastic</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #d9f1f5;
        }

        /* HEADER */
        .top-header {
            width: 100%;
            min-height: 80px;
            background: #e3f7fb;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 40px;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
            border-bottom: 1px solid #b8dfe8;
            box-sizing: border-box;
        }

        .logo-area {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo-area img {
            height: 45px;
        }

        .logo-title {
            font-size: 22px;
            font-weight: bold;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .nav-menu a {
            text-decoration: none;
            color: #000;
            font-size: 14px;
            padding-bottom: 5px; /* supaya garis pas */
            transition: 0.3s;
        }

        .nav-menu a:hover {
            border-bottom: 2px solid #1e90ff; /* biru saat hover */
        }

        .nav-menu a.active {
            border-bottom: 2px solid #1e90ff; /* biru saat halaman sedang aktif */
        }


        .btn-login {
            padding: 8px 20px;
            background: #b0c4df;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        /* CONTENT */
        .content {
            margin-top: 110px;
            padding: 20px 40px;
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <div class="top-header">
        <div class="logo-area">
            <img src="{{ asset('images/logo_pearl.png') }}" alt="Logo">
            <span class="logo-title">Pearl Artistic Gymnastic</span>
        </div>

        <div class="nav-menu">
            <a href="/halaman_home" class="{{ request()->is('halaman_home') ? 'active' : '' }}">Home</a>

            <a href="/tentang" class="{{ request()->is('tentang') ? 'active' : '' }}">Tentang</a>

            <a href="/daftar" class="{{ request()->is('daftar') ? 'active' : '' }}">Daftar</a>

            <button class="btn-login">Login</button>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">
        @yield('content')
    </div>

</body>
</html>
