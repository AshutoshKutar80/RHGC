<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'RHGC - Construction & Contracting Services')</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/fevi.png') }}" type="image/x-icon">

    <style>
        :root {
            --bs-primary: #0F172A;
            --bs-secondary: #1E40AF;
            --accent-gold: #F59E0B;
            --soft-bg: #F8FAFC;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--soft-bg);
            color: #0F172A;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .navbar-brand {
            font-family: 'Plus Jakarta Sans', sans-serif;
            letter-spacing: -0.02em;
        }

        .btn-gold {
            background: linear-gradient(135deg, #F59E0B 0%, #FBBF24 100%);
            color: #0F172A;
            font-weight: 700;
            border: none;
        }

        .btn-gold:hover {
            background: linear-gradient(135deg, #D97706 0%, #F59E0B 100%);
            color: #fff;
        }

        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 1rem;
        }

        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(30, 64, 175, 0.15);
            border-color: var(--accent-gold) !important;
        }

        body {
            padding-top: 75px;
        }

        /* Mobile Dropdown Layout Styling */
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background-color: #ffffff;
                padding: 1rem;
                border-radius: 0 0 1rem 1rem;
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
                max-height: 80vh;
                overflow-y: auto;
            }
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

    @include('partials.preloader')
    @include('partials.navbar')

    <main class="flex-grow-1">
        @yield('content')
    </main>

    @include('partials.cta-banner')
    @include('partials.footer')

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true
        });
        window.addEventListener('load', () => {
            const preloader = document.getElementById('preloader');
            if (preloader) preloader.style.display = 'none';
        });
    </script>
</body>

</html>
