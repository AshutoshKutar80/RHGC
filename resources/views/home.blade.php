@extends('layouts.app')

@section('title', 'Home - RHGC Construction & Contracting Services')

@section('content')
    <!-- ================= HERO SECTION ================= -->
    <section class="py-5 text-white position-relative overflow-hidden"
        style="background: linear-gradient(135deg, #0F172A 0%, #1E40AF 100%);">
        <!-- decorative blur -->
        <div class="position-absolute rounded-circle"
            style="width: 400px; height: 400px; background: rgba(245,158,11,0.15); filter: blur(100px); top: -100px; right: -100px;">
        </div>
        <div class="container py-lg-5 position-relative">
            <div class="row align-items-center g-5">
                <div class="col-lg-7" data-aos="fade-up">
                    <span class="badge bg-warning text-dark px-3 py-2 rounded-pill mb-3 fw-bold">
                        <i class="bi bi-trophy-fill"></i> Trusted by 20+ Key Govt Organizations
                    </span>
                    <h1 class="display-4 fw-bold mb-3 lh-sm">
                        Delivering Excellence in <span class="text-warning">Govt & Private</span> Contracts
                    </h1>
                    <p class="lead opacity-75 mb-4">
                        Over 15 years of proven legacy in delivering critical infrastructure, defense quarters,
                        and high-spec industrial works across India.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="{{ route('contracts') }}" class="btn btn-gold btn-lg px-4 rounded-pill">
                            <i class="bi bi-file-earmark-text me-2"></i>View Our Contracts
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg px-4 rounded-pill">
                            <i class="bi bi-chat-dots me-2"></i>Get In Touch
                        </a>
                    </div>

                    <!-- Micro trust indicators -->
                    <div class="d-flex flex-wrap gap-4 pt-3 border-top border-secondary">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-patch-check-fill text-warning fs-5"></i>
                            <span class="small opacity-75">ISO Certified</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-shield-lock-fill text-warning fs-5"></i>
                            <span class="small opacity-75">Defense Cleared</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-award-fill text-warning fs-5"></i>
                            <span class="small opacity-75">Class-A Contractor</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="fade-left">
                    <div class="card bg-white text-dark p-4 rounded-4 shadow-lg border-0">
                        <h5 class="fw-bold mb-3 border-bottom pb-2">
                            <i class="bi bi-graph-up-arrow text-primary me-2"></i>Contract Quick Highlights
                        </h5>
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-patch-check-fill text-success fs-2 me-3"></i>
                            <div>
                                <h6 class="mb-0 fw-bold">Class-A Govt Contractor</h6>
                                <small class="text-muted">Registered across central & state tenders</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-building-check text-primary fs-2 me-3"></i>
                            <div>
                                <h6 class="mb-0 fw-bold">50+ Completed Projects</h6>
                                <small class="text-muted">100% On-time delivery benchmark</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-shield-lock-fill text-warning fs-2 me-3"></i>
                            <div>
                                <h6 class="mb-0 fw-bold">Defense Security Compliant</h6>
                                <small class="text-muted">Cleared for high-security site executions</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-people-fill text-info fs-2 me-3"></i>
                            <div>
                                <h6 class="mb-0 fw-bold">500+ Skilled Workforce</h6>
                                <small class="text-muted">Engineers, supervisors & technicians</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= STATS COUNTER ================= -->
    <section class="py-4 bg-dark text-white border-top border-secondary">
        <div class="container">
            <div class="row g-4 text-center">
                @php
                    $stats = [
                        ['number' => '15+', 'label' => 'Years of Excellence', 'icon' => 'bi-calendar-check'],
                        ['number' => '50+', 'label' => 'Projects Delivered', 'icon' => 'bi-buildings-fill'],
                        ['number' => '20+', 'label' => 'PSU & Govt Clients', 'icon' => 'bi-briefcase-fill'],
                        ['number' => '100%', 'label' => 'On-Time Compliance', 'icon' => 'bi-patch-check-fill'],
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

    <!-- ================= FEATURED CONTRACTS ================= -->
    <section class="py-5">
        <div class="container py-4">
            <div class="d-flex justify-content-between align-items-end mb-4 flex-wrap gap-3" data-aos="fade-up">
                <div>
                    <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-bold mb-2">
                        <i class="bi bi-star-fill"></i> Featured Work
                    </span>
                    <h2 class="fw-bold mb-1">Completed Contracts Showcase</h2>
                    <p class="text-muted mb-0">High-priority assignments successfully executed</p>
                </div>
                <a href="{{ route('contracts') }}" class="btn btn-outline-primary rounded-pill">
                    View All Contracts <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="row g-4">
                @foreach ($featuredContracts as $contract)
                    <div class="col-md-6 col-lg-4" data-aos="zoom-in">
                        <div class="card h-100 card-hover bg-white border p-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge bg-dark text-warning fs-6 px-3 py-2 rounded-pill">
                                    {{ $contract['short'] }}
                                </span>
                                <span
                                    class="badge bg-warning-subtle text-dark border border-warning px-3 py-1 rounded-pill fw-bold">
                                    {{ $contract['year'] }}
                                </span>
                            </div>
                            <h5 class="fw-bold mb-1">{{ $contract['full'] }}</h5>
                            <p class="text-muted small mb-3">
                                <i class="bi bi-geo-alt-fill text-danger"></i> {{ $contract['location'] }}
                            </p>
                            <p class="card-text text-secondary mb-3">{{ $contract['work'] }}</p>
                            <div class="mt-auto border-top pt-3 d-flex justify-content-between align-items-center">
                                <span class="text-success small fw-semibold">
                                    <i class="bi bi-check-circle-fill me-1"></i> Verified
                                </span>
                                <span
                                    class="text-uppercase small fw-bold text-secondary">{{ $contract['category'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ================= SERVICES PREVIEW ================= -->
    <section class="py-5 bg-white border-top">
        <div class="container py-4">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-2">
                    <i class="bi bi-gear-fill"></i> Our Capabilities
                </span>
                <h2 class="fw-bold mb-2">End-to-End Engineering Services</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">
                    From civil construction to high-voltage electrical works — we handle the complete project lifecycle.
                </p>
            </div>
            <div class="row g-4">
                @php
                    $homeServices = [
                        [
                            'icon' => 'bi-building-gear',
                            'title' => 'Civil Construction',
                            'desc' => 'Turnkey structural & foundation works.',
                        ],
                        [
                            'icon' => 'bi-lightning-charge',
                            'title' => 'Electrical Works',
                            'desc' => 'HT/LT substations & industrial wiring.',
                        ],
                        [
                            'icon' => 'bi-truck',
                            'title' => 'Supply & Logistics',
                            'desc' => 'Strategic procurement & transport.',
                        ],
                        [
                            'icon' => 'bi-tools',
                            'title' => 'Facility Maintenance',
                            'desc' => 'AMC & MEP upkeep contracts.',
                        ],
                        [
                            'icon' => 'bi-shield-check',
                            'title' => 'Security Systems',
                            'desc' => 'CCTV, access control & perimeter.',
                        ],
                        [
                            'icon' => 'bi-diagram-3',
                            'title' => 'Project Management',
                            'desc' => 'Site supervision & compliance.',
                        ],
                    ];
                @endphp
                @foreach ($homeServices as $index => $s)
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}">
                        <div class="card h-100 card-hover bg-white border p-4">
                            <div class="bg-primary-subtle text-primary rounded-3 d-inline-flex align-items-center justify-content-center mb-3"
                                style="width: 60px; height: 60px;">
                                <i class="bi {{ $s['icon'] }} fs-3"></i>
                            </div>
                            <h6 class="fw-bold mb-2">{{ $s['title'] }}</h6>
                            <p class="text-muted small mb-0">{{ $s['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-5" data-aos="fade-up">
                <a href="{{ route('services') }}" class="btn btn-gold px-5 rounded-pill">
                    Explore All 12 Services <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ================= PROCESS TIMELINE ================= -->
    <section class="py-5">
        <div class="container py-4">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-bold mb-2">
                    <i class="bi bi-diagram-2-fill"></i> How We Work
                </span>
                <h2 class="fw-bold mb-2">From Tender to Handover</h2>
                <p class="text-muted">A transparent, compliance-first execution process</p>
            </div>
            <div class="row g-4">
                @php
                    $steps = [
                        [
                            'num' => '01',
                            'title' => 'Tender Review',
                            'desc' => 'Detailed study of scope, BOQ & technical specs.',
                        ],
                        [
                            'num' => '02',
                            'title' => 'Planning & Mobilization',
                            'desc' => 'Site survey, resource allocation & approvals.',
                        ],
                        [
                            'num' => '03',
                            'title' => 'Execution',
                            'desc' => 'On-ground construction with quality checks at every stage.',
                        ],
                        [
                            'num' => '04',
                            'title' => 'Handover',
                            'desc' => 'Final audit, documentation & client sign-off.',
                        ],
                    ];
                @endphp
                @foreach ($steps as $index => $step)
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $index * 120 }}">
                        <div class="card h-100 border-0 bg-white shadow-sm p-4 position-relative">
                            <div class="position-absolute top-0 end-0 m-3 display-5 fw-bold text-warning opacity-25">
                                {{ $step['num'] }}
                            </div>
                            <div class="bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center fw-bold mb-3"
                                style="width: 50px; height: 50px;">
                                {{ $step['num'] }}
                            </div>
                            <h6 class="fw-bold mb-2">{{ $step['title'] }}</h6>
                            <p class="text-muted small mb-0">{{ $step['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ================= WHY CHOOSE US ================= -->
    <section class="py-5 bg-white border-top">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-5" data-aos="fade-right">
                    <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-bold mb-3">
                        <i class="bi bi-award-fill"></i> Why RHGC
                    </span>
                    <h2 class="fw-bold mb-3">Execution Partner You Can Trust</h2>
                    <p class="text-muted mb-4">
                        Over 15 years of proven expertise in delivering critical civil, electrical, and defense
                        infrastructure with 100% compliance and on-time delivery.
                    </p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Class-A Govt
                            Registered Contractor</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Defense Security
                            Cleared Sites</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> In-House Skilled
                            Workforce</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Transparent Billing &
                            Compliance</li>
                    </ul>
                    <a href="{{ route('about') }}" class="btn btn-outline-primary rounded-pill mt-2">
                        More About Us <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="row g-3">
                        @php
                            $whyUs = [
                                [
                                    'icon' => 'bi-patch-check-fill',
                                    'title' => 'Class-A Contractor',
                                    'desc' => 'Registered across central & state tenders',
                                ],
                                [
                                    'icon' => 'bi-clock-history',
                                    'title' => 'On-Time Delivery',
                                    'desc' => '100% projects delivered on schedule',
                                ],
                                [
                                    'icon' => 'bi-shield-lock-fill',
                                    'title' => 'Defense Compliant',
                                    'desc' => 'Cleared for high-security sites',
                                ],
                                [
                                    'icon' => 'bi-people-fill',
                                    'title' => 'Skilled Workforce',
                                    'desc' => '500+ trained engineers & technicians',
                                ],
                                [
                                    'icon' => 'bi-cash-coin',
                                    'title' => 'Transparent Pricing',
                                    'desc' => 'Clear BOQ, no hidden charges',
                                ],
                                [
                                    'icon' => 'bi-headset',
                                    'title' => '24/7 Support',
                                    'desc' => 'Dedicated project manager & helpline',
                                ],
                            ];
                        @endphp
                        @foreach ($whyUs as $w)
                            <div class="col-md-6">
                                <div class="bg-light p-4 rounded-4 h-100 border">
                                    <i class="bi {{ $w['icon'] }} text-warning fs-2"></i>
                                    <h6 class="fw-bold mt-3 mb-1">{{ $w['title'] }}</h6>
                                    <p class="text-muted small mb-0">{{ $w['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= TESTIMONIALS / CLIENTS STRIP ================= -->
    <section class="py-5 bg-light border-top">
        <div class="container py-3">
            <div class="text-center mb-4" data-aos="fade-up">
                <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-bold mb-2">
                    <i class="bi bi-building-fill"></i> Trusted By
                </span>
                <h3 class="fw-bold mb-0">Leading Government & Private Organizations</h3>
            </div>
            <div class="row g-3 justify-content-center text-center" data-aos="fade-up">
                @php
                    $clients = ['OFC', 'BSF', 'Assam Rifles', 'L&T', 'MSME', 'CPWD', 'NHAI', 'BHEL', 'Tata Projects'];
                @endphp
                @foreach ($clients as $client)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="bg-white border rounded-3 py-3 px-2 fw-bold text-secondary">
                            {{ $client }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
