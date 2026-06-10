
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tugu Mas Pemadam')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/teststyle.css') }}">

    @stack('styles')
</head>
<body>

<!-- ================= HEADER ================= -->
<header class="header">
    <a href="{{ url('/') }}" class="logo">
        <img src="{{ asset('assets/img/logo-no-name.png') }}" alt="Logo Tugu Mas">
        Tugu Mas
    </a>

    <nav class="navbar">
        <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
        <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About Us</a>
        <a href="{{ url('/product') }}" class="{{ request()->is('product') ? 'active' : '' }}">Product</a>
        <a href="{{ url('/services') }}" class="{{ request()->is('services') ? 'active' : '' }}">Services</a>
        <a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>
    </nav>
</header>

<!-- ================= CONTENT ================= -->
<main>
    @yield('content')
</main>
</body>
<footer class="footer">
    <div class="footer-container">
        <div class="footer-brand">
            <h2>TUGU MAS</h2>
            <p>since 2001</p>
        </div>
        <div class="footer-contact">
            <div class="contact-item location">
                <img src="assets/img/MapPin.svg" alt="" style="margin-right: 5px">
                <span>JL. PUSPANJOLO BARAT III NO. 11, SEMARANG 50141</span>
            </div>
            <div class="contact-item">
                <h4>Call :</h4>
                <p>0821-3492-5965</p>
            </div>
            <div class="contact-item">
                <h4>E-mail :</h4>
                <p>tugu_mastm@yahoo.com</p>
            </div>
        </div>
    </div>
</footer>
</html>
