@extends('layouts.app')

@section('title', 'Services - RHGC Construction')

@section('content')
    <section class="bg-primary text-white py-5" style="background: linear-gradient(135deg, #0F172A 0%, #1E40AF 100%);">
        <div class="container text-center py-3">
            <h1 class="display-5 fw-bold">Our Engineering Services</h1>
            <p class="lead text-light opacity-75">End-to-End Execution for Critical Projects</p>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-5">
        <div class="container py-4">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-3">
                    <i class="bi bi-grid-3x3-gap-fill"></i> 12 Core Service Verticals
                </span>
                <h2 class="fw-bold mb-2">Complete Infrastructure Capabilities</h2>
                <p class="text-muted mx-auto" style="max-width: 620px;">
                    From turnkey civil execution to high-security defense installations — we deliver with compliance,
                    precision, and on-time commitment.
                </p>
            </div>

            <div class="row g-4">
                @php
                    $services = [
                        [
                            'icon' => 'bi-building-gear',
                            'title' => 'Civil Construction',
                            'desc' => 'Turnkey structural, foundation, and defense quarters building.',
                            'points' => ['RCC & Steel Structures', 'Defense Quarters', 'Industrial Sheds'],
                        ],
                        [
                            'icon' => 'bi-lightning-charge',
                            'title' => 'Electrical Works',
                            'desc' => 'High-voltage sub-stations, cabling, and industrial wiring setup.',
                            'points' => ['HT/LT Substations', 'Industrial Wiring', 'Earthing & Lightning'],
                        ],
                        [
                            'icon' => 'bi-truck',
                            'title' => 'Supply & Logistics',
                            'desc' => 'Strategic material procurement and tactical equipment transport.',
                            'points' => ['Bulk Procurement', 'Tactical Transport', 'Vendor Management'],
                        ],
                        [
                            'icon' => 'bi-tools',
                            'title' => 'Facility Maintenance',
                            'desc' => 'Annual civil & MEP maintenance contracts for defense complexes.',
                            'points' => ['AMC Contracts', 'MEP Upkeep', 'Preventive Maintenance'],
                        ],
                        [
                            'icon' => 'bi-clipboard-data',
                            'title' => 'Technical Consultancy',
                            'desc' => 'Detailed Project Reports (DPR) and tender evaluation services.',
                            'points' => ['DPR Preparation', 'Tender Evaluation', 'Cost Estimation'],
                        ],
                        [
                            'icon' => 'bi-diagram-3',
                            'title' => 'Project Management',
                            'desc' => 'Complete site supervision, compliance, and quality auditing.',
                            'points' => ['Site Supervision', 'Quality Audits', 'Compliance Tracking'],
                        ],
                        [
                            'icon' => 'bi-rulers',
                            'title' => 'Architectural Design',
                            'desc' => '2D/3D layouts, elevation plans, and structural drawings for approval.',
                            'points' => ['2D/3D Layouts', 'Elevation Plans', 'Structural Drawings'],
                        ],
                        [
                            'icon' => 'bi-water',
                            'title' => 'Plumbing & Sanitation',
                            'desc' => 'Water supply lines, drainage systems, and STP installation works.',
                            'points' => ['Water Supply Lines', 'Drainage Systems', 'STP Installation'],
                        ],
                        [
                            'icon' => 'bi-shield-check',
                            'title' => 'Security Systems',
                            'desc' => 'CCTV, access control, and perimeter intrusion detection setup.',
                            'points' => ['CCTV Networks', 'Access Control', 'Perimeter Security'],
                        ],
                        [
                            'icon' => 'bi-bricks',
                            'title' => 'Roads & Pavements',
                            'desc' => 'Bituminous roads, paver blocks, and internal campus road networks.',
                            'points' => ['Bituminous Roads', 'Paver Blocks', 'Campus Roads'],
                        ],
                        [
                            'icon' => 'bi-tree',
                            'title' => 'Landscape & Horticulture',
                            'desc' => 'Campus greening, garden development, and irrigation systems.',
                            'points' => ['Campus Greening', 'Garden Development', 'Irrigation Systems'],
                        ],
                        [
                            'icon' => 'bi-recycle',
                            'title' => 'Renovation & Retrofitting',
                            'desc' => 'Structural strengthening, modernization, and heritage restoration.',
                            'points' => ['Structural Strengthening', 'Modernization', 'Heritage Restoration'],
                        ],
                    ];
                @endphp

                @foreach ($services as $index => $s)
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}">
                        <div class="card h-100 card-hover bg-white border p-4">
                            <div class="d-flex align-items-start gap-3 mb-3">
                                <div class="bg-primary-subtle text-primary rounded-3 d-inline-flex align-items-center justify-content-center flex-shrink-0"
                                    style="width: 60px; height: 60px;">
                                    <i class="bi {{ $s['icon'] }} fs-3"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">{{ $s['title'] }}</h5>
                                    <span class="text-warning small fw-bold">
                                        <i class="bi bi-star-fill"></i> Trusted Service
                                    </span>
                                </div>
                            </div>

                            <p class="text-secondary small mb-3">{{ $s['desc'] }}</p>

                            <ul class="list-unstyled small text-muted mb-3">
                                @foreach ($s['points'] as $p)
                                    <li class="mb-1">
                                        <i class="bi bi-check-circle-fill text-success me-2"></i>{{ $p }}
                                    </li>
                                @endforeach
                            </ul>

                            <a href="{{ route('contact') }}"
                                class="mt-auto text-decoration-none fw-semibold text-primary small">
                                Learn More <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-5 bg-white border-top">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-5" data-aos="fade-right">
                    <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-bold mb-3">
                        <i class="bi bi-award-fill"></i> Why RHGC
                    </span>
                    <h2 class="fw-bold mb-3">Execution Partner You Can Rely On</h2>
                    <p class="text-muted mb-4">
                        Over 15 years of proven expertise in delivering critical civil, electrical, and defense
                        infrastructure with 100% compliance and on-time delivery.
                    </p>
                    <a href="{{ route('contact') }}" class="btn btn-gold px-4 rounded-pill">
                        Request a Quote
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
@endsection
