@extends('layouts.app')

@section('title', 'About Us - RHGC Construction')

@section('content')
    <!-- ================= HERO ================= -->
    <section class="bg-primary text-white py-5" style="background: linear-gradient(135deg, #0F172A 0%, #1E40AF 100%);">
        <div class="container text-center py-3">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-3">
                <i class="bi bi-buildings-fill"></i> Est. 2009
            </span>
            <h1 class="display-5 fw-bold">About RHGC</h1>
            <p class="lead text-light opacity-75">Building National Infrastructure Since 2009</p>
        </div>
    </section>

    <!-- ================= STATS ================= -->
    <section class="py-4 bg-dark text-white">
        <div class="container">
            <div class="row g-4 text-center">
                @php
                    $stats = [
                        ['number' => '15+', 'label' => 'Years of Excellence', 'icon' => 'bi-calendar-check'],
                        ['number' => '50+', 'label' => 'Projects Delivered', 'icon' => 'bi-buildings-fill'],
                        ['number' => '20+', 'label' => 'PSU & Govt Clients', 'icon' => 'bi-briefcase-fill'],
                        ['number' => '500+', 'label' => 'Skilled Workforce', 'icon' => 'bi-people-fill'],
                    ];
                @endphp
                @foreach ($stats as $s)
                    <div class="col-6 col-lg-3" data-aos="zoom-in">
                        <i class="bi {{ $s['icon'] }} text-warning fs-2"></i>
                        <h3 class="fw-bold mt-2 mb-0">{{ $s['number'] }}</h3>
                        <small class="text-secondary">{{ $s['label'] }}</small>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ================= LEGACY & MISSION ================= -->
    <section class="py-5">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-bold mb-3">
                        <i class="bi bi-flag-fill"></i> Our Legacy
                    </span>
                    <h2 class="fw-bold mb-3">Building Trust, Delivering Excellence</h2>
                    <p class="text-secondary fs-5">
                        RHGC Contracting Services has established itself as an indispensable execution partner for
                        Public Sector Undertakings (PSUs), Defense Establishments, and Large Private Infrastructure
                        Conglomerates.
                    </p>
                    <p class="text-muted mb-4">
                        Since our foundation in 2009, we have specialized in turnkey civil construction, high-voltage
                        electrical grid works, defense sector housing quarters, and heavy logistics setup across India.
                        Our commitment to compliance, quality, and on-time delivery has made us a trusted name in
                        the industry.
                    </p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-success-subtle text-success border border-success px-3 py-2 rounded-pill">
                            <i class="bi bi-patch-check-fill"></i> ISO 9001:2015
                        </span>
                        <span class="badge bg-primary-subtle text-primary border border-primary px-3 py-2 rounded-pill">
                            <i class="bi bi-shield-check"></i> Class-A Contractor
                        </span>
                        <span class="badge bg-warning-subtle text-dark border border-warning px-3 py-2 rounded-pill">
                            <i class="bi bi-star-fill"></i> MSME Registered
                        </span>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="bg-white p-4 rounded-4 shadow-sm border">
                        <h4 class="fw-bold mb-4 text-primary">
                            <i class="bi bi-signpost-split-fill me-2"></i>Milestone Timeline
                        </h4>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-4 border-start border-3 border-warning ps-3">
                                <strong class="d-block fs-5">2009</strong>
                                <span class="text-muted">Company Foundation & Initial Civil Contracts</span>
                            </li>
                            <li class="mb-4 border-start border-3 border-info ps-3">
                                <strong class="d-block fs-5">2013</strong>
                                <span class="text-muted">First PSU Contract with CPWD & NHAI Projects</span>
                            </li>
                            <li class="mb-4 border-start border-3 border-primary ps-3">
                                <strong class="d-block fs-5">2015</strong>
                                <span class="text-muted">First Defense Contract award with Ordnance Factory</span>
                            </li>
                            <li class="mb-4 border-start border-3 border-success ps-3">
                                <strong class="d-block fs-5">2020</strong>
                                <span class="text-muted">Crossed 20+ Tier-1 PSU Client Registrations</span>
                            </li>
                            <li class="border-start border-3 border-dark ps-3">
                                <strong class="d-block fs-5">2024</strong>
                                <span class="text-muted">50+ Projects delivered with 100% compliance</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= MISSION / VISION / VALUES ================= -->
    <section class="py-5 bg-white border-top">
        <div class="container py-4">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-2">
                    <i class="bi bi-compass-fill"></i> What Drives Us
                </span>
                <h2 class="fw-bold mb-2">Mission, Vision & Core Values</h2>
                <p class="text-muted">The principles behind every project we execute</p>
            </div>
            <div class="row g-4">
                @php
                    $mvv = [
                        [
                            'icon' => 'bi-bullseye',
                            'title' => 'Our Mission',
                            'desc' =>
                                'To deliver critical infrastructure projects with uncompromising quality, safety, and compliance — empowering India\'s defense, PSU, and industrial growth.',
                            'color' => 'primary',
                        ],
                        [
                            'icon' => 'bi-eye-fill',
                            'title' => 'Our Vision',
                            'desc' =>
                                'To be India\'s most trusted contracting partner for government and defense infrastructure, known for on-time execution and engineering excellence.',
                            'color' => 'warning',
                        ],
                        [
                            'icon' => 'bi-heart-fill',
                            'title' => 'Our Values',
                            'desc' =>
                                'Integrity, transparency, safety-first culture, and respect for every stakeholder — from our workforce to our clients and the communities we serve.',
                            'color' => 'success',
                        ],
                    ];
                @endphp
                @foreach ($mvv as $index => $m)
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="{{ $index * 120 }}">
                        <div class="card h-100 card-hover bg-white border p-4">
                            <div class="bg-{{ $m['color'] }}-subtle text-{{ $m['color'] }} rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                style="width: 70px; height: 70px;">
                                <i class="bi {{ $m['icon'] }} fs-2"></i>
                            </div>
                            <h5 class="fw-bold mb-2">{{ $m['title'] }}</h5>
                            <p class="text-muted small mb-0">{{ $m['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ================= LEADERSHIP TEAM ================= -->
    <section class="py-5">
        <div class="container py-4">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-bold mb-2">
                    <i class="bi bi-people-fill"></i> Leadership
                </span>
                <h2 class="fw-bold mb-2">Meet Our Core Team</h2>
                <p class="text-muted">Experienced professionals driving RHGC's vision forward</p>
            </div>
            <div class="row g-4 justify-content-center">
                @php
                    $team = [
                        [
                            'name' => 'Rajesh Kumar Sharma',
                            'role' => 'Founder & Managing Director',
                            'exp' => '25+ Years in Civil Contracting',
                            'initials' => 'RS',
                        ],
                        [
                            'name' => 'Anil Verma',
                            'role' => 'Director - Projects',
                            'exp' => '18+ Years in Defense Infrastructure',
                            'initials' => 'AV',
                        ],
                        [
                            'name' => 'Priya Nair',
                            'role' => 'Head - Tender & Compliance',
                            'exp' => '12+ Years in Govt Tendering',
                            'initials' => 'PN',
                        ],
                        [
                            'name' => 'Suresh Patel',
                            'role' => 'Head - Electrical & MEP',
                            'exp' => '20+ Years in High-Voltage Works',
                            'initials' => 'SP',
                        ],
                    ];
                @endphp
                @foreach ($team as $index => $t)
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <div class="card h-100 card-hover bg-white border p-4 text-center">
                            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mx-auto mb-3 fw-bold fs-3"
                                style="width: 80px; height: 80px;">
                                {{ $t['initials'] }}
                            </div>
                            <h6 class="fw-bold mb-1">{{ $t['name'] }}</h6>
                            <p class="text-primary small fw-semibold mb-2">{{ $t['role'] }}</p>
                            <p class="text-muted small mb-0">{{ $t['exp'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ================= CERTIFICATIONS & REGISTRATIONS ================= -->
    <section class="py-5 bg-white border-top">
        <div class="container py-4">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill fw-bold mb-2">
                    <i class="bi bi-patch-check-fill"></i> Certifications
                </span>
                <h2 class="fw-bold mb-2">Registrations & Compliance</h2>
                <p class="text-muted">Fully verified and compliant for government & defense tenders</p>
            </div>
            <div class="row g-3">
                @php
                    $certs = [
                        ['icon' => 'bi-award-fill', 'title' => 'Class-A Contractor', 'sub' => 'CPWD / State PWD'],
                        ['icon' => 'bi-patch-check-fill', 'title' => 'ISO 9001:2015', 'sub' => 'Quality Management'],
                        ['icon' => 'bi-shield-lock-fill', 'title' => 'MSME / Udyam', 'sub' => 'UDYAM-DL-01-0012345'],
                        [
                            'icon' => 'bi-file-earmark-text-fill',
                            'title' => 'GST Registered',
                            'sub' => '07AAACR1234A1Z5',
                        ],
                        ['icon' => 'bi-building-fill', 'title' => 'PAN India Presence', 'sub' => '4 Regional Offices'],
                        ['icon' => 'bi-truck', 'title' => 'EPF & ESIC', 'sub' => 'Workforce Compliant'],
                    ];
                @endphp
                @foreach ($certs as $index => $c)
                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="{{ ($index % 3) * 80 }}">
                        <div class="bg-light border rounded-4 p-3 d-flex align-items-center gap-3">
                            <i class="bi {{ $c['icon'] }} text-warning fs-3"></i>
                            <div>
                                <h6 class="fw-bold mb-0">{{ $c['title'] }}</h6>
                                <small class="text-muted">{{ $c['sub'] }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ================= WHY CHOOSE US ================= -->
    <section class="py-5">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-5" data-aos="fade-right">
                    <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-bold mb-3">
                        <i class="bi bi-award-fill"></i> Why RHGC
                    </span>
                    <h2 class="fw-bold mb-3">The RHGC Advantage</h2>
                    <p class="text-muted mb-4">
                        What sets us apart in a competitive contracting landscape — our people, process, and
                        commitment to compliance.
                    </p>
                    <a href="{{ route('contracts') }}" class="btn btn-gold px-4 rounded-pill">
                        View Our Contracts <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="row g-3">
                        @php
                            $whyUs = [
                                [
                                    'icon' => 'bi-patch-check-fill',
                                    'title' => 'Class-A Registered',
                                    'desc' => 'Central & state tenders',
                                ],
                                [
                                    'icon' => 'bi-clock-history',
                                    'title' => 'On-Time Delivery',
                                    'desc' => '100% schedule compliance',
                                ],
                                [
                                    'icon' => 'bi-shield-lock-fill',
                                    'title' => 'Defense Cleared',
                                    'desc' => 'High-security sites',
                                ],
                                [
                                    'icon' => 'bi-people-fill',
                                    'title' => 'In-House Team',
                                    'desc' => '500+ skilled workforce',
                                ],
                                [
                                    'icon' => 'bi-cash-coin',
                                    'title' => 'Transparent Pricing',
                                    'desc' => 'Clear BOQ, no hidden cost',
                                ],
                                [
                                    'icon' => 'bi-headset',
                                    'title' => '24/7 Support',
                                    'desc' => 'Dedicated project manager',
                                ],
                            ];
                        @endphp
                        @foreach ($whyUs as $w)
                            <div class="col-md-6">
                                <div class="bg-white p-3 rounded-4 h-100 border">
                                    <i class="bi {{ $w['icon'] }} text-warning fs-4"></i>
                                    <h6 class="fw-bold mt-2 mb-1">{{ $w['title'] }}</h6>
                                    <p class="text-muted small mb-0">{{ $w['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= CTA ================= -->
    <section class="py-5 bg-white border-top">
        <div class="container py-4 text-center" data-aos="zoom-in">
            <h3 class="fw-bold mb-3">Ready to Partner with RHGC?</h3>
            <p class="text-muted mb-4 mx-auto" style="max-width: 550px;">
                Whether you have a tender, a project, or want to explore a long-term partnership — we'd love to hear from
                you.
            </p>
            <div class="d-flex flex-wrap gap-3 justify-content-center">
                <a href="{{ route('contact') }}" class="btn btn-gold btn-lg px-4 rounded-pill">
                    <i class="bi bi-chat-dots me-2"></i>Contact Us
                </a>
                <a href="{{ route('services') }}" class="btn btn-outline-primary btn-lg px-4 rounded-pill">
                    <i class="bi bi-gear me-2"></i>Our Services
                </a>
            </div>
        </div>
    </section>
@endsection
