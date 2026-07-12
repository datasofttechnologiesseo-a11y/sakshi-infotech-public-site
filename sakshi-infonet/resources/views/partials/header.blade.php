{{-- Top information strip --}}
<div class="topbar">
    <div class="container">
        <div class="tb-left">
            <span class="tb-item">
                <svg viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                <a href="tel:{{ config('site.phone_link') }}">{{ config('site.phone') }}</a>
            </span>
            <span class="tb-item">
                <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a>
            </span>
            <span class="tb-item">
                <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 010-5 2.5 2.5 0 010 5z"/></svg>
                <span>Faridabad, Delhi NCR</span>
            </span>
        </div>
        <div class="tb-right">
            <span>{{ config('site.hours') }}</span>
        </div>
    </div>
</div>

{{-- Main header --}}
<header class="site-header">
    <div class="container header-inner">
        <a href="{{ route('home') }}" class="brand" aria-label="{{ config('site.name') }} Home">
            <img src="{{ asset(config('site.logo')) }}" alt="{{ config('site.name') }} - Security, IT Hardware, Communication & Networking Solutions">
        </a>

        <button class="nav-toggle" aria-label="Toggle menu">
            <span></span><span></span><span></span>
        </button>

        @php
            $ddTaglines = [
                'security-systems'  => 'CCTV, biometric & face recognition',
                'computer-hardware' => 'Sales, repairs, printers & upgrades',
                'communication'     => 'Intercom, EPABX & telecom systems',
                'networking'        => 'LAN, Wi-Fi, internet & cabling',
            ];
            $onServices = request()->routeIs('services') || request()->routeIs('service.show');
        @endphp
        <nav class="nav-links">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>

            <div class="nav-item has-dropdown">
                <a href="{{ route('services') }}" class="nav-drop-toggle {{ $onServices ? 'active' : '' }}">
                    Services
                    <svg class="nav-caret" viewBox="0 0 24 24" fill="currentColor"><path d="M7 10l5 5 5-5z"/></svg>
                </a>
                <div class="nav-dropdown">
                    <div class="nav-dropdown-inner">
                        @foreach (config('site.services') as $s)
                            <a href="{{ route('service.show', $s['slug']) }}" class="dd-item {{ request()->route('slug') === $s['slug'] ? 'is-active' : '' }}">
                                <span class="dd-ic">@include('partials.icon', ['name' => $s['icon']])</span>
                                <span class="dd-text">
                                    <strong>{{ $s['title'] }}</strong>
                                    <small>{{ $ddTaglines[$s['slug']] ?? \Illuminate\Support\Str::limit($s['short'], 40) }}</small>
                                </span>
                            </a>
                        @endforeach
                    </div>
                    <div class="nav-dropdown-foot">
                        <a href="{{ route('services') }}" class="dd-all">
                            View all services
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-primary dd-cta">Get a Free Quote</a>
                    </div>
                </div>
            </div>

            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a>
            <span class="nav-cta">
                <a href="tel:{{ config('site.phone_link') }}" class="btn btn-navy">Call Now</a>
            </span>
        </nav>
    </div>
</header>
