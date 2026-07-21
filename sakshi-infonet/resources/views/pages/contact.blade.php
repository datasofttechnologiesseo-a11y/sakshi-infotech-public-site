@extends('layouts.app')

@section('content')

{{-- Banner --}}
<section class="page-banner">
    <div class="container">
        <h1>Contact Us</h1>
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Home</a> <span>›</span> <span style="color:#fff;">Contact Us</span>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Get In Touch</span>
            <h2>We'd Love to <span class="u">Hear From You</span></h2>
            <p>Have a question or need a free quote? Call us, email us, or send an enquiry using the form below. Our team in Faridabad will get back to you quickly.</p>
        </div>

        <div class="contact-grid">
            {{-- Info side --}}
            <div class="reveal">
                <div class="split-illus" style="margin-bottom:20px;box-shadow:var(--shadow-sm);">
                    <img src="{{ asset('images/contact.jpg') }}?v=6" alt="Get in touch with the Sakshi Infonet team for CCTV, IT hardware and networking support in Faridabad, Delhi NCR">
                </div>
                <div class="info-card">
                    <div class="info-row">
                        <div class="ic"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 010-5 2.5 2.5 0 010 5z"/></svg></div>
                        <div>
                            <h4>Visit Our Office</h4>
                            <p class="small">{{ config('site.address.full') }}</p>
                        </div>
                    </div>
                    <div class="info-row">
                        <div class="ic"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg></div>
                        <div>
                            <h4>Call / WhatsApp</h4>
                            <a href="tel:{{ config('site.phone_link') }}">{{ config('site.phone') }}</a>
                        </div>
                    </div>
                    <div class="info-row">
                        <div class="ic"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg></div>
                        <div>
                            <h4>Email Us</h4>
                            <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a>
                        </div>
                    </div>
                    <div class="info-row">
                        <div class="ic"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg></div>
                        <div>
                            <h4>Working Hours</h4>
                            <p class="small">{{ config('site.hours') }}<br>Sunday: Closed</p>
                        </div>
                    </div>
                    <div class="info-row">
                        <div class="ic"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V8h16v10z"/><path d="M6 10h5v5H6z"/></svg></div>
                        <div>
                            <h4>GST Number</h4>
                            <p class="small">{{ config('site.gst') }}</p>
                        </div>
                    </div>
                </div>

                <a href="{{ config('site.social.whatsapp') }}" target="_blank" rel="noopener" class="btn btn-primary" style="width:100%;justify-content:center;margin-top:18px;background:#25d366;box-shadow:0 8px 20px rgba(37,211,102,0.3);">
                    <svg viewBox="0 0 24 24" fill="currentColor" style="width:20px;height:20px;"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.25-1.38c1.45.79 3.08 1.21 4.79 1.21h.01c5.46 0 9.91-4.45 9.91-9.91C21.96 6.45 17.5 2 12.04 2z"/></svg>
                    Chat on WhatsApp
                </a>
            </div>

            {{-- Form side --}}
            <div class="reveal">
                <div class="form-card">
                    @if (session('success'))
                        <div class="alert-success">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            {{ session('success') }}
                        </div>
                    @endif

                    <h3 style="color:var(--navy);font-size:22px;font-weight:800;margin-bottom:6px;">Send Us an Enquiry</h3>
                    <p style="color:var(--muted);font-size:15px;margin-bottom:22px;">Fill in your details and we will contact you soon.</p>

                    <form action="{{ route('contact.submit') }}" method="POST" novalidate>
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Your Name *</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Enter your full name">
                                @error('name') <span class="err">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone">Mobile Number *</label>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="{{ $errors->has('phone') ? 'is-invalid' : '' }}" placeholder="Enter your mobile number">
                                @error('phone') <span class="err">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Enter your email">
                                @error('email') <span class="err">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="service">Service Needed</label>
                                <select id="service" name="service">
                                    <option value="">Select a service</option>
                                    @foreach (config('site.services') as $service)
                                        <option value="{{ $service['title'] }}" {{ old('service') == $service['title'] ? 'selected' : '' }}>{{ $service['title'] }}</option>
                                    @endforeach
                                    <option value="Other" {{ old('service') == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="message">Your Message *</label>
                            <textarea id="message" name="message" class="{{ $errors->has('message') ? 'is-invalid' : '' }}" placeholder="Tell us how we can help you...">{{ old('message') }}</textarea>
                            @error('message') <span class="err">{{ $message }}</span> @enderror
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg" style="width:100%;justify-content:center;">Send Enquiry</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Map --}}
<section class="section-soft" style="padding-top:0;padding-bottom:74px;">
    <div class="container">
        <div class="section-head reveal" style="margin-bottom:30px;">
            <span class="eyebrow">Find Us</span>
            <h2>Our Location in Faridabad</h2>
        </div>
        <div class="map-embed reveal">
            <iframe
                src="https://www.google.com/maps?q={{ urlencode(config('site.map_query')) }}&output=embed"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Sakshi Infonet location on Google Maps"
                allowfullscreen></iframe>
        </div>
    </div>
</section>

@endsection
