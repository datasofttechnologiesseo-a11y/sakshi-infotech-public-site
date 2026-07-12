@extends('layouts.app')

@section('content')

{{-- Banner --}}
<section class="page-banner">
    <div class="container">
        <h1>About Sakshi Infonet</h1>
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Home</a> <span>›</span> <span style="color:#fff;">About Us</span>
        </div>
    </div>
</section>

{{-- Intro split --}}
<section>
    <div class="container">
        <div class="split">
            <div class="reveal">
                <span class="eyebrow">Our Story</span>
                <h2 style="font-size:clamp(1.7rem,3.2vw,2.4rem);color:var(--navy);font-weight:800;line-height:1.2;margin-bottom:16px;">
                    Protecting and Powering Delhi NCR, One Setup at a Time
                </h2>
                <p style="color:var(--muted);margin-bottom:14px;">
                    Sakshi Infonet started with one simple goal, to make good security and IT technology easy
                    and affordable for everyone in Faridabad and Delhi NCR. Over the years, we have grown into a
                    trusted name that homes, shops, offices and factories rely on for their safety and technology needs.
                </p>
                <p style="color:var(--muted);margin-bottom:14px;">
                    We are based in Dabua Colony, N.I.T Faridabad, and we serve customers all across the National
                    Capital Region. Whether you need a single CCTV camera for your home or a complete networking
                    setup for your office, our team gives you honest advice, quality products and neat installation
                    every time.
                </p>
                <p style="color:var(--muted);">
                    From security cameras and biometric machines to computers, printers, intercom systems and
                    internet networks, we bring all your technology needs together under one trusted roof.
                </p>
            </div>

            <div class="split-media reveal">
                <div class="split-illus">
                    <img src="{{ asset('images/about2.jpg') }}?v=2" alt="The Sakshi Infonet IT team serving businesses across Faridabad, Delhi NCR">
                </div>
                <div class="brand-mark">
                    <h3 style="color:#fff;font-size:24px;font-weight:800;margin-bottom:12px;">{{ config('site.name') }}</h3>
                    <p style="color:#d7def2;font-size:15px;">Security · IT Hardware · Communication · Networking Solutions</p>
                </div>
                <div class="mini-stats">
                    <div class="ms"><strong>20+</strong><span>Years Industry Experience</span></div>
                    <div class="ms"><strong>1000+</strong><span>Installations</span></div>
                    <div class="ms"><strong>4</strong><span>Core Services</span></div>
                    <div class="ms"><strong>NCR</strong><span>Wide Coverage</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- What to expect --}}
<section class="section-soft">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">What To Expect</span>
            <h2>How We Actually Work With You</h2>
            <p>No jargon and no pushy selling, just a straightforward way of working that our customers keep coming back for.</p>
        </div>
        <div class="card-grid">
            <div class="service-card reveal">
                <div class="service-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 10-.7.7l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0A4.5 4.5 0 119.5 5a4.5 4.5 0 010 9z"/></svg></div>
                <h3>We Visit First, Then Advise</h3>
                <p>We come to your home, shop or office, look at the layout, and suggest the setup that actually fits your space and budget, not the costliest one on the shelf.</p>
            </div>
            <div class="service-card reveal">
                <div class="service-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M22.7 19l-9.1-9.1c.9-2.3.4-5-1.5-6.9-2-2-5-2.4-7.4-1.3L9 6 6 9 1.6 4.7C.4 7.1.9 10.1 2.9 12.1c1.9 1.9 4.6 2.4 6.9 1.5l9.1 9.1c.4.4 1 .4 1.4 0l2.3-2.3c.4-.4.4-1 .1-1.4z"/></svg></div>
                <h3>Neat, Tested Installation</h3>
                <p>Our own technicians handle the wiring and fitting cleanly, test everything in front of you, and show you how to use it before they leave the site.</p>
            </div>
            <div class="service-card reveal">
                <div class="service-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1c-4.97 0-9 4.03-9 9v7c0 1.66 1.34 3 3 3h3v-8H5v-2c0-3.87 3.13-7 7-7s7 3.13 7 7v2h-4v8h4v1h-7v2h6c1.66 0 3-1.34 3-3V10c0-4.97-4.03-9-9-9z"/></svg></div>
                <h3>We Answer After the Sale</h3>
                <p>When you call later with a question or an issue, you reach the same local team that installed it, a familiar voice, not a call centre.</p>
            </div>
        </div>
    </div>
</section>

{{-- Why choose --}}
<section>
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Why Choose Us</span>
            <h2>What Makes Sakshi Infonet Different</h2>
            <p>We do not just sell products, we build long-term trust with honest service and real support.</p>
        </div>
        <div class="why-grid">
            <div class="why-card reveal">
                <div class="wic"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></div>
                <h4>One-Stop Solution</h4>
                <p>Security, computers, communication and networking, all handled by one trusted team.</p>
            </div>
            <div class="why-card reveal">
                <div class="wic"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z"/></svg></div>
                <h4>Genuine Products</h4>
                <p>Only original, branded and reliable hardware that lasts for years.</p>
            </div>
            <div class="why-card reveal">
                <div class="wic"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3z"/></svg></div>
                <h4>Customer First</h4>
                <p>We listen to your needs and suggest what is truly right for you, not what is costly.</p>
            </div>
            <div class="why-card reveal">
                <div class="wic"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M13 3a9 9 0 00-9 9H1l4 4 4-4H6a7 7 0 117 7v2a9 9 0 000-18z"/></svg></div>
                <h4>After-Sales Support</h4>
                <p>Maintenance, service and quick help are always just one phone call away.</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="section-soft">
    <div class="container">
        <div class="cta-band reveal">
            <div>
                <h3>Let's Build Something Safe and Smart Together</h3>
                <p>Reach out to Sakshi Infonet today and let our experts help you choose the right security and IT solution for your space.</p>
            </div>
            <div class="cta-actions">
                <a href="{{ route('contact') }}" class="btn btn-white btn-lg">Contact Us</a>
                <a href="tel:{{ config('site.phone_link') }}" class="btn btn-navy btn-lg">Call Now</a>
            </div>
        </div>
    </div>
</section>

@endsection
