@extends('layouts.app')

@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "ItemList",
    "itemListElement": [
        @foreach (config('site.services') as $i => $service)
        {
            "@@type": "ListItem",
            "position": {{ $i + 1 }},
            "item": {
                "@@type": "Service",
                "name": "{{ $service['title'] }}",
                "description": "{{ $service['short'] }}",
                "provider": { "@@type": "LocalBusiness", "name": "{{ config('site.name') }}" },
                "areaServed": "Faridabad, Delhi NCR"
            }
        }@if(!$loop->last),@endif
        @endforeach
    ]
}
</script>
@endpush

@section('content')

{{-- Banner --}}
<section class="page-banner">
    <div class="container">
        <h1>Our Services</h1>
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Home</a> <span>›</span> <span style="color:#fff;">Services</span>
        </div>
    </div>
</section>

{{-- Intro --}}
<section style="padding-bottom:30px;">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Complete Technology Solutions</span>
            <h2>Everything You Need to Stay <span class="u">Safe &amp; Connected</span></h2>
            <p>Sakshi Infonet offers four core services for homes and businesses in Faridabad and Delhi NCR. Explore each one below and call us for a free quote.</p>
        </div>

    </div>
</section>

{{-- Services grid — each card links to its own detail page --}}
<section style="padding-top:24px;">
    <div class="container">
        <div class="services-overview-grid">
            @foreach (config('site.services') as $service)
                <a href="{{ route('service.show', $service['slug']) }}" class="svc-overview-card reveal">
                    @include('partials.service-image', ['service' => $service, 'imgClass' => 'svc-card-img'])
                    <div class="svc-overview-body">
                        <span class="service-icon">@include('partials.icon', ['name' => $service['icon']])</span>
                        <h3>{{ $service['title'] }}</h3>
                        <p>{{ $service['short'] }}</p>
                        <span class="learn">View Details
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z"/></svg>
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

{{-- FAQ (great for SEO) --}}
<section class="section-soft">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Common Questions</span>
            <h2>Frequently Asked Questions</h2>
            <p>Quick answers to the questions customers in Delhi NCR ask us most often.</p>
        </div>
        <div style="max-width:820px;margin:0 auto;">
            <div class="faq-item reveal">
                <h4><svg viewBox="0 0 24 24" fill="currentColor"><path d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"/></svg> Do you provide CCTV installation for homes and shops in Faridabad?</h4>
                <p>Yes. We install CCTV cameras for homes, shops, offices and factories across Faridabad and all of Delhi NCR, including mobile viewing setup so you can watch live footage from anywhere.</p>
            </div>
            <div class="faq-item reveal">
                <h4><svg viewBox="0 0 24 24" fill="currentColor"><path d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"/></svg> Do you offer computer and printer repair services?</h4>
                <p>Absolutely. We supply and repair desktops, laptops, printers and scanners, and also handle upgrades like RAM, SSD and software setup, with on-site support available.</p>
            </div>
            <div class="faq-item reveal">
                <h4><svg viewBox="0 0 24 24" fill="currentColor"><path d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"/></svg> Can you set up networking and Wi-Fi for my office?</h4>
                <p>Yes. We design and install LAN, intranet, Wi-Fi and broadband networks for offices and buildings, with proper cabling, routers and network security.</p>
            </div>
            <div class="faq-item reveal">
                <h4><svg viewBox="0 0 24 24" fill="currentColor"><path d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"/></svg> How can I get a price quote?</h4>
                <p>Just call us at {{ config('site.phone') }} or fill our contact form. We offer a free site visit and share a fair, transparent quote with no hidden charges.</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section>
    <div class="container">
        <div class="cta-band reveal">
            <div>
                <h3>Not Sure Which Solution You Need?</h3>
                <p>Our experts will help you pick the right service for your home or business. Get free advice and a quote today.</p>
            </div>
            <div class="cta-actions">
                <a href="tel:{{ config('site.phone_link') }}" class="btn btn-white btn-lg">Call {{ config('site.phone') }}</a>
                <a href="{{ route('contact') }}" class="btn btn-navy btn-lg">Get Free Quote</a>
            </div>
        </div>
    </div>
</section>

@endsection
