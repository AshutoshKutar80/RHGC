<footer class="bg-dark text-white pt-5 pb-4 border-top border-secondary">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <a href="{{ route('home') }}" class="d-inline-block mb-3">
                    <img src="{{ asset('images/footer.png') }}" alt="RHGC Logo" style="height: 60px; width: auto;"
                        class="img-fluid">
                </a>
                <p class="text-secondary">Premier civil, electrical, and defense infrastructure contracting company
                    trusted by Indian Armed Forces, PSUs, and corporate giants.</p>
            </div>
            <div class="col-lg-2 col-md-4">
                <h6 class="fw-bold mb-3 text-light">Quick Links</h6>
                <ul class="list-unstyled text-secondary">
                    <li><a href="{{ route('home') }}" class="text-decoration-none text-secondary">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-decoration-none text-secondary">About Us</a></li>
                    <li><a href="{{ route('services') }}" class="text-decoration-none text-secondary">Services</a></li>
                    <li><a href="{{ route('contracts') }}" class="text-decoration-none text-secondary">Contracts</a>
                    </li>
                    <li><a href="{{ route('contact') }}" class="text-decoration-none text-secondary">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4">
                <h6 class="fw-bold mb-3 text-light">Key Clients</h6>
                <ul class="list-unstyled text-secondary">
                    <li>Ordnance Factory Chanda (OFC)</li>
                    <li>Border Security Force (BSF)</li>
                    <li>Assam Rifles (AR)</li>
                    <li>Larsen & Toubro (L&T)</li>
                    <li>Ministry of MSME</li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4">
                <h6 class="fw-bold mb-3 text-light">Contact Info</h6>
                <p class="text-secondary mb-1"><i class="bi bi-geo-alt-fill text-warning me-2"></i> Industrial Estate,
                    Sector 4, New Delhi</p>
                <p class="text-secondary mb-1"><i class="bi bi-telephone-fill text-warning me-2"></i> +91 98765 43210
                </p>
                <p class="text-secondary"><i class="bi bi-envelope-fill text-warning me-2"></i> info@rhgc.in</p>
            </div>
        </div>
        <hr class="border-secondary mt-4">
        <div class="text-center text-secondary small">
            &copy; {{ date('Y') }} RHGC Construction & Contracting Services. All rights reserved.
        </div>
    </div>
</footer>
