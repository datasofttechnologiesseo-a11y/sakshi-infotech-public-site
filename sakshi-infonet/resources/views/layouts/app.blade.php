<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#14245f">

    @php
        $meta = $meta ?? [];
        $siteName = config('site.name');
        $title = $meta['title'] ?? $siteName;
        $description = $meta['description'] ?? config('site.short_desc');
        $keywords = $meta['keywords'] ?? '';
        $ogType = $meta['og_type'] ?? 'website';
        $canonical = url()->current();
        $ogImage = asset(config('site.logo'));
    @endphp

    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="author" content="{{ $siteName }}">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="language" content="English">
    <meta name="geo.region" content="IN-HR">
    <meta name="geo.placename" content="Faridabad, Delhi NCR">
    <link rel="canonical" href="{{ $canonical }}">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="{{ $ogType }}">
    <meta property="og:site_name" content="{{ $siteName }}">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:url" content="{{ $canonical }}">
    <meta property="og:image" content="{{ $ogImage }}">
    <meta property="og:image:alt" content="{{ $siteName }} — Security, IT Hardware, Communication & Networking Solutions">
    <meta property="og:locale" content="en_IN">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $description }}">
    <meta name="twitter:image" content="{{ $ogImage }}">

    {{-- Favicon (SI monogram) --}}
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}?v=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}?v=1">
    <link rel="apple-touch-icon" href="{{ asset('images/favicon.png') }}?v=1">

    {{-- Fonts: Poppins (headings) + Inter (body) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v=2.1">

    {{-- Structured Data: LocalBusiness --}}
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "LocalBusiness",
        "name": "{{ $siteName }}",
        "image": "{{ $ogImage }}",
        "description": "{{ config('site.short_desc') }}",
        "@@id": "{{ url('/') }}",
        "url": "{{ url('/') }}",
        "telephone": "{{ config('site.phone_link') }}",
        "email": "{{ config('site.email') }}",
        "priceRange": "₹₹",
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "{{ config('site.address.line') }}",
            "addressLocality": "{{ config('site.address.city') }}",
            "addressRegion": "{{ config('site.address.state') }}",
            "postalCode": "{{ config('site.address.pincode') }}",
            "addressCountry": "IN"
        },
        "areaServed": ["Faridabad", "Delhi NCR", "Gurugram", "Delhi", "Noida", "Ballabgarh"],
        "openingHours": "Mo-Sa 09:00-19:00",
        "sameAs": [
            "{{ config('site.social.facebook') }}",
            "{{ config('site.social.instagram') }}"
        ]
    }
    </script>
    @stack('schema')
</head>
<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    {{-- Floating WhatsApp --}}
    <a href="{{ config('site.social.whatsapp') }}" class="wa-float" aria-label="Chat on WhatsApp" target="_blank" rel="noopener">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.25-1.38c1.45.79 3.08 1.21 4.79 1.21h.01c5.46 0 9.91-4.45 9.91-9.91C21.96 6.45 17.5 2 12.04 2zm5.8 14.09c-.24.68-1.42 1.31-1.95 1.36-.5.05-.99.24-3.33-.7-2.8-1.1-4.58-3.96-4.72-4.15-.14-.19-1.13-1.5-1.13-2.86 0-1.36.71-2.03.97-2.31.24-.26.53-.32.71-.32.18 0 .35 0 .5.01.16.01.38-.06.59.45.24.56.81 1.94.88 2.08.07.14.12.31.02.5-.09.19-.14.31-.28.48-.14.16-.29.36-.42.48-.14.14-.28.29-.12.57.16.28.71 1.17 1.52 1.9 1.05.93 1.93 1.22 2.21 1.36.28.14.44.12.6-.07.16-.19.69-.81.87-1.08.18-.28.36-.23.6-.14.24.09 1.53.72 1.8.85.28.14.46.21.53.32.07.12.07.68-.17 1.36z"/></svg>
    </a>

    <script>
        // Mobile nav toggle
        document.addEventListener('DOMContentLoaded', function () {
            var toggle = document.querySelector('.nav-toggle');
            var links = document.querySelector('.nav-links');
            if (toggle && links) {
                toggle.addEventListener('click', function () {
                    links.classList.toggle('open');
                });
                links.querySelectorAll('a').forEach(function (a) {
                    a.addEventListener('click', function () { links.classList.remove('open'); });
                });
            }

            // Scroll reveal
            var els = document.querySelectorAll('.reveal');
            if ('IntersectionObserver' in window) {
                var obs = new IntersectionObserver(function (entries) {
                    entries.forEach(function (e) {
                        if (e.isIntersecting) { e.target.classList.add('show'); obs.unobserve(e.target); }
                    });
                }, { threshold: 0.12 });
                els.forEach(function (el) { obs.observe(el); });
            } else {
                els.forEach(function (el) { el.classList.add('show'); });
            }

            // Header shadow on scroll
            var header = document.querySelector('.site-header');
            if (header) {
                var onScroll = function () {
                    header.classList.toggle('scrolled', window.scrollY > 8);
                };
                onScroll();
                window.addEventListener('scroll', onScroll, { passive: true });
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
