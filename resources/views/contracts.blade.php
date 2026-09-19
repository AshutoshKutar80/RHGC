@extends('layouts.app')

@section('title', 'Contracts Showcase - RHGC')

@section('content')
    <section class="bg-primary text-white py-5" style="background: linear-gradient(135deg, #0F172A 0%, #1E40AF 100%);">
        <div class="container text-center py-3">
            <h1 class="display-5 fw-bold">Contract Portfolio</h1>
            <p class="lead text-light opacity-75">Verified Client Undertakings & Defense Assignments</p>
        </div>
    </section>

    <section class="py-5" x-data="{
        filter: 'all',
        visible: 6,
        perPage: 6,
        contracts: {{ Js::from($contracts) }},
        get filtered() {
            return this.contracts.filter(c => this.filter === 'all' || c.category === this.filter);
        },
        get shown() {
            return this.filtered.slice(0, this.visible);
        },
        get hasMore() {
            return this.visible < this.filtered.length;
        },
        setFilter(cat) {
            this.filter = cat;
            this.visible = this.perPage;
        },
        loadMore() {
            this.visible += this.perPage;
        }
    }">
        <div class="container">
            <!-- Filter Buttons -->
            <div class="d-flex flex-wrap justify-content-center gap-2 mb-5" data-aos="fade-up">
                <button @click="setFilter('all')" :class="filter === 'all' ? 'btn-gold' : 'btn-outline-dark'"
                    class="btn rounded-pill px-4 fw-semibold">All Contracts</button>
                <button @click="setFilter('government')" :class="filter === 'government' ? 'btn-gold' : 'btn-outline-dark'"
                    class="btn rounded-pill px-4 fw-semibold">Government</button>
                <button @click="setFilter('defence')" :class="filter === 'defence' ? 'btn-gold' : 'btn-outline-dark'"
                    class="btn rounded-pill px-4 fw-semibold">Defence</button>
                <button @click="setFilter('private')" :class="filter === 'private' ? 'btn-gold' : 'btn-outline-dark'"
                    class="btn rounded-pill px-4 fw-semibold">Private Sector</button>
                <button @click="setFilter('psu')" :class="filter === 'psu' ? 'btn-gold' : 'btn-outline-dark'"
                    class="btn rounded-pill px-4 fw-semibold">PSU</button>
            </div>

            <!-- Result Count -->
            <p class="text-center text-muted small mb-4">
                Showing <span class="fw-bold text-dark" x-text="shown.length"></span>
                of <span class="fw-bold text-dark" x-text="filtered.length"></span> contracts
            </p>

            <!-- Contracts Grid -->
            <div class="row g-4">
                <template x-for="c in shown" :key="c.short + c.year">
                    <div class="col-md-6 col-lg-4" x-transition:enter="transition ease-out duration-400"
                        x-transition:enter-start="opacity-0 transform translate-y-3"
                        x-transition:enter-end="opacity-100 transform translate-y-0">
                        <div class="card h-100 card-hover bg-white border p-4 position-relative">
                            <span class="position-absolute top-0 end-0 m-3 badge bg-warning text-dark fw-bold"
                                x-text="c.year"></span>

                            <div class="text-center mb-3">
                                <img :src="c.logo" :alt="c.short"
                                    class="rounded-circle border mb-2 shadow-sm"
                                    style="width: 70px; height: 70px; object-fit: cover;">
                                <h3 class="fw-bold mb-0" x-text="c.short"></h3>
                                <small class="text-muted" x-text="c.full"></small>
                            </div>

                            <hr class="text-muted opacity-25">

                            <p class="fw-semibold text-dark mb-2">
                                <i class="bi bi-briefcase text-primary me-2"></i>
                                <span x-text="c.work"></span>
                            </p>
                            <p class="text-muted small mb-3">
                                <i class="bi bi-geo-alt-fill text-danger me-1"></i>
                                <span x-text="c.location"></span>
                            </p>

                            <div class="mt-auto d-flex align-items-center justify-content-between border-top pt-3">
                                <span class="badge bg-success-subtle text-success border border-success px-2 py-1">
                                    <i class="bi bi-patch-check-fill"></i> Verified
                                </span>
                                <span class="text-uppercase small fw-bold text-secondary" x-text="c.category"></span>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Empty State -->
            <div x-show="filtered.length === 0" class="text-center py-5">
                <i class="bi bi-inbox fs-1 text-muted"></i>
                <p class="text-muted mt-2">No contracts found for this category.</p>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-5" x-show="hasMore" x-transition>
                <button @click="loadMore()" class="btn btn-gold btn-lg px-5 rounded-pill shadow-sm">
                    <i class="bi bi-arrow-down-circle me-2"></i>
                    Load More
                </button>
            </div>

            <!-- All Loaded Message -->
            <div class="text-center mt-5" x-show="!hasMore && filtered.length > 0" x-transition>
                <span class="badge bg-success-subtle text-success border border-success px-4 py-2 rounded-pill">
                    <i class="bi bi-check-circle-fill me-1"></i> All contracts loaded
                </span>
            </div>
        </div>
    </section>
@endsection
