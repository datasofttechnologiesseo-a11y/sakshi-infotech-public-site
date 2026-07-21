@extends('layouts.app')
@include('partials.service-schema')

@section('content')

{{-- Dark split hero --}}
<section class="svc-dark">
    <div class="container">
        <div class="breadcrumb" style="padding-top:34px;">
            <a href="{{ route('home') }}">Home</a> <span>›</span>
            <a href="{{ route('services') }}">Services</a> <span>›</span>
            <span style="color:#fff;">{{ $service['title'] }}</span>
        </div>
        <div class="split" style="padding:40px 0 56px;">
            <div class="reveal">
                <span class="eyebrow">LAN · Wi-Fi · Internet</span>
                <h1 style="font-size:clamp(1.9rem,3.6vw,2.7rem);color:#fff;font-weight:800;letter-spacing:-0.025em;line-height:1.15;margin-bottom:16px;">Fast, Secure Networks That Never Let You Down</h1>
                <p style="color:#cbd4ec;font-size:17px;line-height:1.7;margin-bottom:26px;">{{ $service['long'] }}</p>
                <div style="display:flex;gap:14px;flex-wrap:wrap;">
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Get a Free Quote</a>
                    <a href="tel:{{ config('site.phone_link') }}" class="btn btn-white btn-lg">Call {{ config('site.phone') }}</a>
                </div>
            </div>
            <div class="reveal svc-media-card">
                <img src="{{ asset('images/services/networking-banner.jpg') }}?v=6" alt="Networking, Wi-Fi, routers and structured cabling set up by Sakshi Infonet in Faridabad">
            </div>
        </div>
    </div>
</section>

{{-- Capabilities as steps --}}
<section>
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Our Capabilities</span>
            <h2>Everything Your Network Needs</h2>
            <p>From a single office to a full building, designed, cabled and secured properly.</p>
        </div>
        <div class="steps">
            @foreach ($service['items'] as $i => $item)
                <div class="step reveal">
                    <div class="num">{{ $i + 1 }}</div>
                    <h4 style="margin-bottom:0;">{{ $item }}</h4>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Infrastructure image band --}}
<section class="section-soft">
    <div class="container">
        <div class="section-head reveal" style="margin-bottom:34px;">
            <span class="eyebrow">Infrastructure</span>
            <h2>Built for Speed &amp; Reliability</h2>
        </div>
        <div class="svc-band reveal" style="background-image:url('{{ asset('images/services/gallery/networking-2.jpg') }}?v=2');"></div>
    </div>
</section>

@include('partials.service-others', ['others' => $others])
@include('partials.service-cta', ['service' => $service])

@endsection
