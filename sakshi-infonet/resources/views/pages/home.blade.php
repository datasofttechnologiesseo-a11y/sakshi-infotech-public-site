@extends('layouts.app')

@section('content')

{{-- ============ HERO ============ --}}
<section class="hero">
    <div class="container">
        <div class="hero-copy">
            <span class="hero-badge">
                <svg class="hb-ic" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 010-5 2.5 2.5 0 010 5z"/></svg>
                Faridabad-based &middot; 20+ years in security &amp; IT
            </span>
            <h1>Smart <span class="accent">Security</span> &amp; IT Solutions for Your Home and Business</h1>
            <p class="lead">
                Sakshi Infonet installs CCTV cameras, biometric systems, computer hardware, intercom and
                networking setups that keep you safe and connected. One trusted partner for all your
                security and IT needs in Faridabad and across Delhi NCR.
            </p>
            <div class="hero-actions">
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Get a Free Quote</a>
                <a href="{{ route('services') }}" class="btn btn-white btn-lg">Explore Services</a>
            </div>
            <div class="hero-stats">
                <div class="stat"><strong>20+</strong><span>Years Industry Experience</span></div>
                <div class="stat"><strong>1000+</strong><span>Happy Customers</span></div>
                <div class="stat"><strong>6-Day</strong><span>On-Site Support</span></div>
            </div>
        </div>

        <div class="hero-visual reveal">
            <div class="hero-grid">
                @foreach (config('site.services') as $s)
                    <a href="{{ route('service.show', $s['slug']) }}" class="hero-tile">
                        <img src="{{ asset('images/services/'.$s['slug'].'.jpg') }}?v=5" alt="{{ $s['title'] }} in Faridabad, Delhi NCR by Sakshi Infonet">
                        <span class="hero-tile-label">
                            <span class="hero-tile-ic">@include('partials.icon', ['name' => $s['icon']])</span>
                            {{ $s['title'] }}
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ============ SERVICES ============ --}}
<section class="section-soft">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">What We Do</span>
            <h2>Complete <span class="u">Security &amp; IT</span> Solutions Under One Roof</h2>
            <p>From CCTV cameras to computer hardware and networking, Sakshi Infonet gives you everything you need to protect and power your business, with quality products and expert installation.</p>
        </div>

        <div class="card-grid">
            @foreach (config('site.services') as $service)
                <div class="service-card reveal">
                    <div class="service-icon">@include('partials.icon', ['name' => $service['icon']])</div>
                    <h3>{{ $service['title'] }}</h3>
                    <p>{{ $service['short'] }}</p>
                    <a href="{{ route('service.show', $service['slug']) }}" class="learn">
                        Learn More
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z"/></svg>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============ ABOUT SPLIT ============ --}}
<section>
    <div class="container">
        <div class="split">
            <div class="split-media reveal">
                <div class="split-illus">
                    <img src="{{ asset('images/expert-team.jpg') }}?v=6" alt="The Sakshi Infonet expert team advising a customer on security and IT solutions in Faridabad, Delhi NCR">
                </div>
                <div class="brand-mark">
                    <h3 style="color:#fff;font-size:24px;font-weight:800;margin-bottom:12px;">Your Trusted Technology Partner</h3>
                    <p style="color:#d7def2;font-size:15px;">Your one-stop shop for Security, IT Hardware, Communication and Networking in Delhi NCR.</p>
                </div>
                <ul class="trust-list">
                    <li><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Genuine, branded products, no local copies</li>
                    <li><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Same-day visits across Faridabad &amp; NCR</li>
                    <li><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Trained technicians, not sub-contractors</li>
                    <li><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Clear pricing with a written quote</li>
                </ul>
            </div>

            <div class="reveal">
                <span class="eyebrow">Who We Are</span>
                <h2 style="font-size:clamp(1.7rem,3.2vw,2.4rem);color:var(--navy);font-weight:800;line-height:1.2;margin-bottom:16px;">
                    A Local Team You Can Trust for Safety and Technology
                </h2>
                <p style="color:var(--muted);margin-bottom:8px;">
                    Sakshi Infonet is a Faridabad-based company that helps homes, shops, offices and factories stay
                    safe and connected. We supply and install security cameras, biometric machines, computers,
                    printers, intercom systems and internet networks, all with honest advice and dependable support.
                </p>
                <ul class="about-points">
                    <li>
                        <span class="chk"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <div><strong>End-to-End Service</strong><p>We handle everything, from choosing the right product to installation and after-sales support.</p></div>
                    </li>
                    <li>
                        <span class="chk"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <div><strong>Genuine &amp; Branded Products</strong><p>We use only original, reliable hardware so your setup works for years without trouble.</p></div>
                    </li>
                    <li>
                        <span class="chk"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <div><strong>Quick On-Site Support</strong><p>Our local team reaches you fast across Faridabad and Delhi NCR when you need help.</p></div>
                    </li>
                </ul>
                <a href="{{ route('about') }}" class="btn btn-navy" style="margin-top:26px;">More About Us</a>
            </div>
        </div>
    </div>
</section>

{{-- ============ WHY CHOOSE US ============ --}}
<section class="section-soft">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Why Sakshi Infonet</span>
            <h2>Reasons Customers in Delhi NCR Choose Us</h2>
            <p>We make security and IT simple, affordable and worry-free for every customer.</p>
        </div>
        <div class="why-grid">
            <div class="why-card reveal">
                <div class="wic"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z"/></svg></div>
                <h4>Trusted &amp; Reliable</h4>
                <p>Hundreds of homes and businesses across Faridabad trust us for their security and IT needs.</p>
            </div>
            <div class="why-card reveal">
                <div class="wic"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 15l-5-5 1.41-1.41L11 14.17l6.59-6.59L19 9l-8 8z"/></svg></div>
                <h4>Affordable Prices</h4>
                <p>Get the best quality products and installation at honest, budget-friendly rates.</p>
            </div>
            <div class="why-card reveal">
                <div class="wic"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg></div>
                <h4>Quick Installation</h4>
                <p>Fast, clean and professional setup so your system is up and running the same day.</p>
            </div>
            <div class="why-card reveal">
                <div class="wic"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 12H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/></svg></div>
                <h4>Friendly Support</h4>
                <p>Simple guidance and quick help whenever you have a question or a problem.</p>
            </div>
        </div>
    </div>
</section>

{{-- ============ HOW WE WORK ============ --}}
<section>
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">How We Work</span>
            <h2>Getting Started Is Easy</h2>
            <p>Four simple steps from your first call to a fully working system.</p>
        </div>
        <div class="steps">
            <div class="step reveal"><div class="num">1</div><h4>Call or Enquire</h4><p>Tell us what you need over a call, WhatsApp or our contact form.</p></div>
            <div class="step reveal"><div class="num">2</div><h4>Free Site Visit</h4><p>We visit your location, understand your needs and suggest the best solution.</p></div>
            <div class="step reveal"><div class="num">3</div><h4>Quick Installation</h4><p>Our trained team installs and tests everything neatly and quickly.</p></div>
            <div class="step reveal"><div class="num">4</div><h4>Ongoing Support</h4><p>We stay with you with maintenance and support whenever you need it.</p></div>
        </div>
    </div>
</section>

{{-- ============ CTA BAND ============ --}}
<section style="padding-top:0;">
    <div class="container">
        <div class="cta-band reveal">
            <div>
                <h3>Ready to Secure and Upgrade Your Space?</h3>
                <p>Talk to our experts today for a free consultation and quote. We serve homes, shops, offices and factories across Faridabad and Delhi NCR.</p>
            </div>
            <div class="cta-actions">
                <a href="tel:{{ config('site.phone_link') }}" class="btn btn-white btn-lg">Call {{ config('site.phone') }}</a>
                <a href="{{ route('contact') }}" class="btn btn-navy btn-lg">Send Enquiry</a>
            </div>
        </div>
    </div>
</section>

@endsection
