@extends('layouts.app')

@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "{{ $service['title'] }}",
    "serviceType": "{{ $service['title'] }}",
    "description": "{{ \Illuminate\Support\Str::limit(strip_tags($service['long']), 200) }}",
    "provider": {
        "@@type": "LocalBusiness",
        "name": "{{ config('site.name') }}",
        "telephone": "{{ config('site.phone_link') }}",
        "areaServed": "Faridabad, Delhi NCR"
    },
    "areaServed": ["Faridabad", "Delhi NCR"]
}
</script>
@endpush

@section('content')

{{-- Banner --}}
<section class="page-banner">
    <div class="container">
        <h1>{{ $service['title'] }}</h1>
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Home</a> <span>›</span>
            <a href="{{ route('services') }}">Services</a> <span>›</span>
            <span style="color:#fff;">{{ $service['title'] }}</span>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="service-single">
            {{-- Main content --}}
            <div class="ss-main">
                @php $ssBanner = "images/services/{$service['slug']}-banner.jpg"; @endphp
                @if (file_exists(public_path($ssBanner)))
                    <div class="ss-banner">
                        <img src="{{ asset($ssBanner) }}?v=6" alt="{{ $service['title'] }} services in Faridabad &amp; Delhi NCR by Sakshi Infonet">
                    </div>
                @else
                    @include('partials.service-image', ['service' => $service, 'imgClass' => 'ss-hero-img'])
                @endif

                <span class="eyebrow" style="margin-top:28px;">Our Service</span>
                <h2 class="ss-title">{{ $service['title'] }} in Faridabad &amp; Delhi NCR</h2>
                <p class="ss-desc">{{ $service['long'] }}</p>

                <h3 class="ss-subhead">What We Offer</h3>
                <ul class="feature-list">
                    @foreach ($service['items'] as $item)
                        <li>
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>

                <h3 class="ss-subhead">Why Choose Sakshi Infonet</h3>
                <div class="ss-why">
                    <div class="ss-why-item">
                        <span class="chk"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <div><strong>Genuine &amp; Branded Products</strong><p>Only original, reliable hardware that lasts for years.</p></div>
                    </div>
                    <div class="ss-why-item">
                        <span class="chk"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <div><strong>Expert Installation</strong><p>Trained local technicians for neat, professional setup.</p></div>
                    </div>
                    <div class="ss-why-item">
                        <span class="chk"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <div><strong>Affordable Pricing</strong><p>Best quality at honest, budget-friendly rates.</p></div>
                    </div>
                    <div class="ss-why-item">
                        <span class="chk"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <div><strong>Quick After-Sales Support</strong><p>Reliable maintenance and help across Delhi NCR.</p></div>
                    </div>
                </div>
            </div>

            {{-- Sidebar --}}
            <aside class="ss-side">
                <div class="ss-card ss-nav">
                    <h4>All Services</h4>
                    <ul>
                        @foreach (config('site.services') as $s)
                            <li>
                                <a href="{{ route('service.show', $s['slug']) }}" class="{{ $s['slug'] === $service['slug'] ? 'active' : '' }}">
                                    <span class="ss-nav-ic">@include('partials.icon', ['name' => $s['icon']])</span>
                                    {{ $s['title'] }}
                                    <svg class="ss-nav-arrow" viewBox="0 0 24 24" fill="currentColor"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z"/></svg>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="ss-card ss-quote">
                    <h4>Need {{ $service['title'] }}?</h4>
                    <p>Talk to our experts for a free consultation and quote.</p>
                    <a href="tel:{{ config('site.phone_link') }}" class="btn btn-white" style="width:100%;justify-content:center;margin-bottom:10px;">
                        <svg viewBox="0 0 24 24" fill="currentColor" style="width:18px;height:18px;"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        {{ config('site.phone') }}
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-primary" style="width:100%;justify-content:center;">Get a Free Quote</a>
                </div>
            </aside>
        </div>
    </div>
</section>

{{-- CTA --}}
<section style="padding-top:0;">
    <div class="container">
        <div class="cta-band">
            <div>
                <h3>Ready to Get Started with {{ $service['title'] }}?</h3>
                <p>Contact Sakshi Infonet today for a free site visit and a fair quote across Faridabad and Delhi NCR.</p>
            </div>
            <div class="cta-actions">
                <a href="tel:{{ config('site.phone_link') }}" class="btn btn-white btn-lg">Call {{ config('site.phone') }}</a>
                <a href="{{ route('contact') }}" class="btn btn-navy btn-lg">Send Enquiry</a>
            </div>
        </div>
    </div>
</section>

@endsection
