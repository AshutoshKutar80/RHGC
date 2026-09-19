@extends('layouts.app')

@section('title', 'Contact Us - RHGC')

@section('content')
    <!-- ================= HERO ================= -->
    <section class="bg-primary text-white py-5" style="background: linear-gradient(135deg, #0F172A 0%, #1E40AF 100%);">
        <div class="container text-center py-3">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-3">
                <i class="bi bi-headset"></i> We're Here to Help
            </span>
            <h1 class="display-5 fw-bold">Contact Us</h1>
            <p class="lead text-light opacity-75">Connect with Our Tender & Business Team</p>
        </div>
    </section>

    <!-- ================= QUICK CONTACT CARDS ================= -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4 mb-5">
                @php
                    $quickContact = [
                        [
                            'icon' => 'bi-telephone-fill',
                            'title' => 'Call Us',
                            'line1' => '+91 98765 43210',
                            'line2' => '+91 11 2345 6789',
                            'action' => 'tel:+919876543210',
                            'actionText' => 'Call Now',
                            'color' => 'primary',
                        ],
                        [
                            'icon' => 'bi-envelope-fill',
                            'title' => 'Email Us',
                            'line1' => 'tenders@rhgc.in',
                            'line2' => 'info@rhgc.in',
                            'action' => 'mailto:tenders@rhgc.in',
                            'actionText' => 'Send Email',
                            'color' => 'warning',
                        ],
                        [
                            'icon' => 'bi-geo-alt-fill',
                            'title' => 'Visit Us',
                            'line1' => 'Industrial Complex, Sector 4',
                            'line2' => 'New Delhi - 110001',
                            'action' => '#locations',
                            'actionText' => 'Get Directions',
                            'color' => 'success',
                        ],
                        [
                            'icon' => 'bi-clock-fill',
                            'title' => 'Working Hours',
                            'line1' => 'Mon - Sat: 9:00 AM - 6:30 PM',
                            'line2' => 'Sunday: Closed',
                            'action' => '#',
                            'actionText' => 'Tender Support 24/7',
                            'color' => 'info',
                        ],
                    ];
                @endphp

                @foreach ($quickContact as $index => $qc)
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <div class="card h-100 card-hover bg-white border p-4 text-center">
                            <div class="bg-{{ $qc['color'] }}-subtle text-{{ $qc['color'] }} rounded-circle d-inline-flex align-items-center justify-content-center mx-auto mb-3"
                                style="width: 70px; height: 70px;">
                                <i class="bi {{ $qc['icon'] }} fs-3"></i>
                            </div>
                            <h5 class="fw-bold mb-3">{{ $qc['title'] }}</h5>
                            <p class="text-muted small mb-1">{{ $qc['line1'] }}</p>
                            <p class="text-muted small mb-3">{{ $qc['line2'] }}</p>
                            <a href="{{ $qc['action'] }}"
                                class="mt-auto text-decoration-none fw-semibold text-{{ $qc['color'] }} small">
                                {{ $qc['actionText'] }} <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- ================= MAIN FORM + INFO ================= -->
            <div class="row g-4">
                <!-- Left: Form -->
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="card bg-white border p-4 p-md-5 rounded-4 shadow-sm">
                        <div class="mb-4">
                            <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-bold mb-2">
                                <i class="bi bi-chat-dots-fill"></i> Inquiry Form
                            </span>
                            <h4 class="fw-bold mb-1">Send an Inquiry</h4>
                            <p class="text-muted small mb-0">
                                Fill out the form below and our tender team will respond within 24 hours.
                            </p>
                        </div>

                        <form action="https://formspree.io/f/sample" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold small">Full Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" required
                                        placeholder="John Doe">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold small">Email Address <span
                                            class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" required
                                        placeholder="john@org.com">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold small">Phone Number</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="+91">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold small">Organization / Dept</label>
                                    <input type="text" name="org" class="form-control" placeholder="e.g. OFC / CPWD">
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-semibold small">Inquiry Type</label>
                                    <select name="inquiry_type" class="form-select">
                                        <option value="">Select inquiry type...</option>
                                        <option value="tender">Tender / Bid Submission</option>
                                        <option value="project">New Project Enquiry</option>
                                        <option value="amc">AMC / Maintenance Contract</option>
                                        <option value="consultancy">Technical Consultancy</option>
                                        <option value="vendor">Vendor Registration</option>
                                        <option value="career">Career / Job Application</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-semibold small">Requirement Details <span
                                            class="text-danger">*</span></label>
                                    <textarea name="message" class="form-control" rows="5" required
                                        placeholder="Project details, tender reference number, scope of work, etc."></textarea>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="consent" required>
                                        <label class="form-check-label small text-muted" for="consent">
                                            I agree to be contacted by RHGC regarding this inquiry.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-gold btn-lg w-100 rounded-pill">
                                        <i class="bi bi-send-fill me-2"></i>Submit Inquiry
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Right: Info + Map -->
                <div class="col-lg-5" data-aos="fade-left">
                    <!-- Headquarters Info -->
                    <div class="card bg-white border p-4 rounded-4 shadow-sm mb-4">
                        <h5 class="fw-bold mb-4">
                            <i class="bi bi-building-fill text-primary me-2"></i>Headquarters Info
                        </h5>
                        <div class="d-flex align-items-start mb-3">
                            <i class="bi bi-geo-alt-fill text-warning fs-4 me-3"></i>
                            <div>
                                <h6 class="fw-bold mb-0 small text-uppercase text-muted">Office Address</h6>
                                <p class="text-muted mb-0 small">
                                    RHGC Construction & Contracting Services<br>
                                    Industrial Complex, Sector 4<br>
                                    New Delhi - 110001, India
                                </p>
                            </div>
                        </div>
                        <hr class="opacity-25">
                        <div class="d-flex align-items-start mb-3">
                            <i class="bi bi-telephone-fill text-warning fs-4 me-3"></i>
                            <div>
                                <h6 class="fw-bold mb-0 small text-uppercase text-muted">Phone</h6>
                                <p class="text-muted mb-0 small">+91 98765 43210 (Business)</p>
                                <p class="text-muted mb-0 small">+91 11 2345 6789 (Tender Cell)</p>
                            </div>
                        </div>
                        <hr class="opacity-25">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-envelope-fill text-warning fs-4 me-3"></i>
                            <div>
                                <h6 class="fw-bold mb-0 small text-uppercase text-muted">Email</h6>
                                <p class="text-muted mb-0 small">tenders@rhgc.in (Tender Queries)</p>
                                <p class="text-muted mb-0 small">info@rhgc.in (General Info)</p>
                                <p class="text-muted mb-0 small">careers@rhgc.in (Jobs)</p>
                            </div>
                        </div>
                    </div>

                    <!-- GST / Registration -->
                    <div class="card bg-primary text-white border-0 p-4 rounded-4 shadow-sm mb-4">
                        <h6 class="fw-bold mb-3">
                            <i class="bi bi-patch-check-fill text-warning me-2"></i>Registration Details
                        </h6>
                        <div class="row g-3 small">
                            <div class="col-6">
                                <span class="opacity-75 d-block">GSTIN</span>
                                <span class="fw-bold">07AAACR1234A1Z5</span>
                            </div>
                            <div class="col-6">
                                <span class="opacity-75 d-block">PAN</span>
                                <span class="fw-bold">AAACR1234A</span>
                            </div>
                            <div class="col-6">
                                <span class="opacity-75 d-block">CIN</span>
                                <span class="fw-bold">U45200DL2009PTC123456</span>
                            </div>
                            <div class="col-6">
                                <span class="opacity-75 d-block">MSME / Udyam</span>
                                <span class="fw-bold">UDYAM-DL-01-0012345</span>
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="card bg-white border p-0 rounded-4 shadow-sm overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.177209822353!2d77.2246623150819!3d28.61389598242789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce2db961be393%3A0x8d1b4e6b8f8f8f8f!2sIndia%20Gate!5e0!3m2!1sen!2sin!4v1234567890"
                            width="100%" height="240" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= OFFICE LOCATIONS ================= -->
    <section class="py-5 bg-white border-top" id="locations">
        <div class="container py-4">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-bold mb-2">
                    <i class="bi bi-geo-alt-fill"></i> Our Presence
                </span>
                <h2 class="fw-bold mb-2">Regional Offices</h2>
                <p class="text-muted">Strategic locations to serve projects across India</p>
            </div>
            <div class="row g-4">
                @php
                    $offices = [
                        [
                            'city' => 'New Delhi',
                            'type' => 'Headquarters',
                            'address' => 'Industrial Complex, Sector 4, New Delhi - 110001',
                            'phone' => '+91 11 2345 6789',
                            'icon' => 'bi-building-fill',
                            'primary' => true,
                        ],
                        [
                            'city' => 'Mumbai',
                            'type' => 'West Zone Office',
                            'address' => 'Andheri East, MIDC, Mumbai - 400093',
                            'phone' => '+91 22 6789 1234',
                            'icon' => 'bi-building',
                            'primary' => false,
                        ],
                        [
                            'city' => 'Bangalore',
                            'type' => 'South Zone Office',
                            'address' => 'Whitefield Industrial Area, Bangalore - 560066',
                            'phone' => '+91 80 4321 9876',
                            'icon' => 'bi-building',
                            'primary' => false,
                        ],
                        [
                            'city' => 'Guwahati',
                            'type' => 'North-East Office',
                            'address' => 'GS Road, Dispur, Guwahati - 781006',
                            'phone' => '+91 361 234 5678',
                            'icon' => 'bi-building',
                            'primary' => false,
                        ],
                    ];
                @endphp
                @foreach ($offices as $index => $office)
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <div class="card h-100 card-hover bg-white border p-4 position-relative">
                            @if ($office['primary'])
                                <span class="position-absolute top-0 end-0 m-3 badge bg-warning text-dark fw-bold">
                                    HQ
                                </span>
                            @endif
                            <i class="bi {{ $office['icon'] }} text-primary fs-1 mb-3"></i>
                            <h5 class="fw-bold mb-1">{{ $office['city'] }}</h5>
                            <span class="badge bg-primary-subtle text-primary mb-3">{{ $office['type'] }}</span>
                            <p class="text-muted small mb-2">
                                <i class="bi bi-geo-alt-fill text-danger me-1"></i>{{ $office['address'] }}
                            </p>
                            <p class="text-muted small mb-0">
                                <i class="bi bi-telephone-fill text-warning me-1"></i>{{ $office['phone'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ================= FAQ ================= -->
    <section class="py-5">
        <div class="container py-4">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-2">
                    <i class="bi bi-question-circle-fill"></i> FAQ
                </span>
                <h2 class="fw-bold mb-2">Frequently Asked Questions</h2>
                <p class="text-muted">Quick answers to common queries</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-9" data-aos="fade-up">
                    <div class="accordion" id="faqAccordion">
                        @php
                            $faqs = [
                                [
                                    'q' => 'How can I submit a tender or bid for RHGC projects?',
                                    'a' =>
                                        'You can email your tender documents to tenders@rhgc.in or call our tender cell at +91 11 2345 6789. We accept bids from registered vendors and also do fresh vendor registrations.',
                                ],
                                [
                                    'q' => 'What is the typical response time for a new inquiry?',
                                    'a' =>
                                        'Our business team responds to all inquiries within 24 working hours. For urgent tender-related matters, please call our direct helpline.',
                                ],
                                [
                                    'q' => 'Do you handle projects outside Delhi NCR?',
                                    'a' =>
                                        'Yes. We have successfully executed projects across India including Maharashtra, Rajasthan, Meghalaya, Gujarat, Odisha, Madhya Pradesh, and Andhra Pradesh. We have regional offices in Mumbai, Bangalore, and Guwahati.',
                                ],
                                [
                                    'q' => 'Are you registered for government and defense tenders?',
                                    'a' =>
                                        'Yes. RHGC is a Class-A registered contractor with valid GSTIN, PAN, MSME/Udyam registration. We are cleared for high-security defense sites including Ordnance Factories, BSF, and Assam Rifles projects.',
                                ],
                                [
                                    'q' => 'How do I register as a vendor or supplier?',
                                    'a' =>
                                        'Please fill out the inquiry form above with "Vendor Registration" as the inquiry type, and our procurement team will reach out with the necessary documentation requirements.',
                                ],
                                [
                                    'q' => 'Do you offer AMC (Annual Maintenance Contracts)?',
                                    'a' =>
                                        'Yes, we provide comprehensive AMC services for civil, electrical, and MEP infrastructure. Our facility maintenance team handles both government complexes and private industrial facilities.',
                                ],
                            ];
                        @endphp

                        @foreach ($faqs as $index => $faq)
                            <div class="accordion-item border mb-3 rounded-3 overflow-hidden shadow-sm">
                                <h2 class="accordion-header" id="heading{{ $index }}">
                                    <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }} fw-bold"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $index }}"
                                        aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                        aria-controls="collapse{{ $index }}">
                                        <i class="bi bi-patch-question text-warning me-2"></i>
                                        {{ $faq['q'] }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $index }}"
                                    class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                    aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-muted small">
                                        {{ $faq['a'] }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
