@extends('layouts.app')
@include('partials.service-schema')

@section('content')

{{-- Split hero --}}
<section style="padding-bottom:40px;">
    <div class="container">
        <div class="breadcrumb" style="color:var(--muted);margin-bottom:22px;">
            <a href="{{ route('home') }}" style="color:var(--muted);">Home</a> <span style="color:var(--red);">›</span>
            <a href="{{ route('services') }}" style="color:var(--muted);">Services</a> <span style="color:var(--red);">›</span>
            <span style="color:var(--navy);font-weight:600;">{{ $service['title'] }}</span>
        </div>
        <div class="split">
            <div class="reveal">
                <span class="eyebrow">IT Hardware &amp; Repairs</span>
                <h1 style="font-size:clamp(1.9rem,3.6vw,2.7rem);color:var(--navy);font-weight:800;letter-spacing:-0.025em;line-height:1.15;margin-bottom:16px;">Computers &amp; IT Hardware That Keep You Running</h1>
                <p class="svc-lead" style="margin-bottom:26px;">{{ $service['long'] }}</p>
                <div style="display:flex;gap:14px;flex-wrap:wrap;">
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Get a Quote</a>
                    <a href="tel:{{ config('site.phone_link') }}" class="btn btn-outline btn-lg">Call {{ config('site.phone') }}</a>
                </div>
            </div>
            <div class="reveal svc-media-card">
                <img src="{{ asset('images/services/gallery/computer-hardware-1.jpg') }}?v=2" alt="IT hardware and server setup by Sakshi Infonet in Faridabad">
            </div>
        </div>
    </div>
</section>

{{-- What we handle, card grid --}}
<section class="section-soft">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">What We Handle</span>
            <h2>Sales, Setup, Repairs &amp; Upgrades</h2>
            <p>One reliable partner for every piece of IT hardware in your home or office.</p>
        </div>
        <div class="card-grid">
            @foreach ($service['items'] as $item)
                <div class="service-card reveal" style="padding:26px 24px;">
                    <div class="service-icon" style="width:50px;height:50px;border-radius:13px;margin-bottom:16px;">
                        <svg viewBox="0 0 24 24" fill="currentColor" style="width:24px;height:24px;"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                    </div>
                    <h3 style="font-size:17px;margin-bottom:0;">{{ $item }}</h3>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Gallery --}}
<section>
    <div class="container">
        <div class="section-head reveal" style="margin-bottom:34px;">
            <span class="eyebrow">In the Workshop</span>
            <h2>Hardware We Work With</h2>
        </div>
        <div class="reveal">
            <div class="svc-gallery">
                <figure class="svc-gallery-item"><img src="{{ asset('images/services/gallery/computer-hardware-2.jpg') }}?v=2" alt="RAM and computer memory upgrades by Sakshi Infonet" loading="lazy"></figure>
                <figure class="svc-gallery-item"><img src="{{ asset('images/services/gallery/computer-hardware-3.jpg') }}?v=2" alt="Computer components and circuit boards serviced by Sakshi Infonet" loading="lazy"></figure>
            </div>
        </div>
    </div>
</section>

@include('partials.service-others', ['others' => $others])
@include('partials.service-cta', ['service' => $service])

@endsection
