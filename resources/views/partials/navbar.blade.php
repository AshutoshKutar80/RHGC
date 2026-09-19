<nav class="navbar navbar-expand-lg sticky-top bg-white shadow-sm ">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2 fw-bold text-dark fs-4" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="RHGC Logo" style="height: 55px; width: 120px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto gap-lg-3 fw-medium">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active text-primary fw-bold' : '' }}"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active text-primary fw-bold' : '' }}"
                        href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('services') ? 'active text-primary fw-bold' : '' }}"
                        href="{{ route('services') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contracts') ? 'active text-primary fw-bold' : '' }}"
                        href="{{ route('contracts') }}">Contracts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active text-primary fw-bold' : '' }}"
                        href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
            <a href="{{ route('contact') }}" class="btn btn-gold ms-lg-3 px-4 rounded-pill">Get Enquire</a>
        </div>
    </div>
</nav>
