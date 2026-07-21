@extends('layouts.app')
@include('partials.service-schema')

@section('content')

{{-- Cinematic full-bleed hero --}}
<section class="svc-hero-full">
    <div class="svc-hero-bg" style="background-image:url('{{ asset('images/services/gallery/security-systems-1.jpg') }}?v=2');"></div>
    <div class="container">
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Home</a> <span>›</span>
            <a href="{{ route('services') }}">Services</a> <span>›</span>
            <span style="color:#fff;">{{ $service['title'] }}</span>
        </div>
        <h1>Round-the-Clock Security for Your Home &amp; Business</h1>
        <p>{{ $service['short'] }} Professionally installed and maintained across Faridabad and Delhi NCR.</p>
        <div class="svc-hero-actions">
            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Get a Free Site Visit</a>
            <a href="tel:{{ config('site.phone_link') }}" class="btn btn-white btn-lg">Call {{ config('site.phone') }}</a>
        </div>
    </div>
</section>

{{-- Branded showcase --}}
<section style="padding-bottom:0;">
    <div class="container">
        <div class="svc-showcase reveal">
            <img src="{{ asset('images/services/security-systems-banner.jpg') }}?v=6" alt="CCTV cameras, biometric access control and surveillance systems by Sakshi Infonet in Faridabad, Delhi NCR">
        </div>
    </div>
</section>

{{-- Intro + features --}}
<section>
    <div class="container">
        <div class="split" style="align-items:start;">
            <div class="reveal">
                <span class="eyebrow">CCTV &amp; Access Control</span>
                <h2 style="font-size:clamp(1.6rem,3vw,2.2rem);color:var(--navy);font-weight:800;letter-spacing:-0.02em;line-height:1.2;margin-bottom:16px;">Complete Security Systems, Installed the Right Way</h2>
                <p class="svc-lead">{{ $service['long'] }}</p>
            </div>
            <div class="reveal">
                <h3 class="ss-subhead" style="color:var(--navy);font-size:19px;font-weight:700;margin-bottom:16px;">What We Install</h3>
                <ul class="feature-list">
                    @foreach ($service['items'] as $item)
                        <li><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> {{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- Installations gallery --}}
<section class="section-soft" style="padding-top:0;">
    <div class="container">
        <div class="section-head reveal" style="margin-bottom:36px;padding-top:74px;">
            <span class="eyebrow">Our Work</span>
            <h2>Cameras &amp; Systems We Set Up</h2>
            <p>From single-camera homes to multi-camera offices, shops and factories, clean, tested and mobile-ready.</p>
        </div>
        <div class="svc-gallery reveal">
            <figure class="svc-gallery-item"><img src="{{ asset('images/services/gallery/security-systems-2.jpg') }}?v=2" alt="Dome CCTV camera installation in Faridabad by Sakshi Infonet" loading="lazy"></figure>
            <figure class="svc-gallery-item"><img src="{{ asset('images/services/gallery/security-systems-3.jpg') }}?v=2" alt="Outdoor security camera setup in Delhi NCR by Sakshi Infonet" loading="lazy"></figure>
        </div>
    </div>
</section>

{{-- Why choose --}}
<section>
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Why Sakshi Infonet</span>
            <h2>Security You Can Actually Rely On</h2>
        </div>
        <div class="why-grid">
            <div class="why-card reveal"><div class="wic"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z"/></svg></div><h4>Genuine Cameras</h4><p>Branded CCTV, DVR/NVR and biometric hardware that lasts.</p></div>
            <div class="why-card reveal"><div class="wic"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M17 10.5V7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4z"/></svg></div><h4>Mobile Viewing</h4><p>Watch live footage on your phone from anywhere, anytime.</p></div>
            <div class="why-card reveal"><div class="wic"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></div><h4>Neat Wiring</h4><p>Tidy, concealed cabling and a proper on-site demo.</p></div>
            <div class="why-card reveal"><div class="wic"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg></div><h4>AMC &amp; Support</h4><p>Fast local maintenance and service whenever you need it.</p></div>
        </div>
    </div>
</section>

@include('partials.service-others', ['others' => $others])
@include('partials.service-cta', ['service' => $service])

@endsection
