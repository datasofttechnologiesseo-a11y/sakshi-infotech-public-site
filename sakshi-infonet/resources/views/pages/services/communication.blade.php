@extends('layouts.app')
@include('partials.service-schema')

@section('content')

{{-- Standard banner --}}
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

{{-- Centered editorial intro --}}
<section>
    <div class="container">
        <div class="section-head reveal svc-centered">
            <span class="eyebrow">Intercom · EPABX · Telecom</span>
            <h2>Keep Everyone Connected, Clearly</h2>
            <p class="svc-lead">{{ $service['long'] }}</p>
        </div>
        <div class="svc-showcase reveal" style="margin-top:44px;">
            <img src="{{ asset('images/services/communication-banner.jpg') }}?v=6" alt="Intercom, EPABX, video door phones and office communication systems by Sakshi Infonet in Faridabad">
        </div>
    </div>
</section>

{{-- Feature checklist centred --}}
<section class="section-soft">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">What We Set Up</span>
            <h2>Communication Solutions for Every Space</h2>
            <p>Ideal for offices, apartments, factories and commercial complexes across Delhi NCR.</p>
        </div>
        <div class="reveal" style="max-width:820px;margin:0 auto;">
            <ul class="feature-list center">
                @foreach ($service['items'] as $item)
                    <li><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> {{ $item }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

{{-- Gallery --}}
<section>
    <div class="container">
        <div class="section-head reveal" style="margin-bottom:34px;">
            <span class="eyebrow">Our Work</span>
            <h2>Smooth Communication, Set Up Right</h2>
        </div>
        <div class="reveal">
            @include('partials.service-gallery', ['service' => $service, 'galAlt' => 'Office communication and intercom solutions by Sakshi Infonet'])
        </div>
    </div>
</section>

@include('partials.service-others', ['others' => $others])
@include('partials.service-cta', ['service' => $service])

@endsection
