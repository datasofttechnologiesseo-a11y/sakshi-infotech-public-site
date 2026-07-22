<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            {{-- Brand --}}
            <div class="f-brand">
                <img src="{{ asset(config('site.logo')) }}" alt="{{ config('site.name') }} logo">
                <p>{{ config('site.short_desc') }}</p>
                <span class="f-badge">GST: {{ config('site.gst') }}</span>

                <div class="social-follow">
                    <span class="social-label">Follow Us</span>
                    <div class="social-icons">
                        <a href="{{ config('site.social.instagram') }}" target="_blank" rel="noopener" class="social-btn ig" aria-label="Follow us on Instagram">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.16c3.2 0 3.58.01 4.85.07 1.17.05 1.8.25 2.23.41.56.22.96.48 1.38.9.42.42.68.82.9 1.38.16.42.36 1.06.41 2.23.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.05 1.17-.25 1.8-.41 2.23-.22.56-.48.96-.9 1.38-.42.42-.82.68-1.38.9-.42.16-1.06.36-2.23.41-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-1.17-.05-1.8-.25-2.23-.41-.56-.22-.96-.48-1.38-.9-.42-.42-.68-.82-.9-1.38-.16-.42-.36-1.06-.41-2.23-.06-1.27-.07-1.65-.07-4.85s.01-3.58.07-4.85c.05-1.17.25-1.8.41-2.23.22-.56.48-.96.9-1.38.42-.42.82-.68 1.38-.9.42-.16 1.06-.36 2.23-.41C8.42 2.17 8.8 2.16 12 2.16zm0 3.68A6.16 6.16 0 1 0 12 18.16 6.16 6.16 0 0 0 12 5.84zm0 10.16A4 4 0 1 1 12 8a4 4 0 0 1 0 8zm6.4-10.4a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0z"/></svg>
                        </a>
                        <a href="{{ config('site.social.facebook') }}" target="_blank" rel="noopener" class="social-btn fb" aria-label="Follow us on Facebook">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.07C24 5.4 18.63 0 12 0S0 5.4 0 12.07C0 18.1 4.39 23.1 10.13 24v-8.44H7.08v-3.49h3.05V9.41c0-3.02 1.79-4.69 4.53-4.69 1.31 0 2.68.24 2.68.24v2.97h-1.51c-1.49 0-1.96.93-1.96 1.89v2.25h3.33l-.53 3.49h-2.8V24C19.61 23.1 24 18.1 24 12.07z"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Quick links --}}
            <div>
                <h5>Quick Links</h5>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z"/></svg>Home</a></li>
                    <li><a href="{{ route('about') }}"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z"/></svg>About Us</a></li>
                    <li><a href="{{ route('services') }}"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z"/></svg>Services</a></li>
                    <li><a href="{{ route('contact') }}"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z"/></svg>Contact Us</a></li>
                </ul>
            </div>

            {{-- Services --}}
            <div>
                <h5>Our Services</h5>
                <ul class="footer-links">
                    @foreach (config('site.services') as $service)
                        <li><a href="{{ route('service.show', $service['slug']) }}"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z"/></svg>{{ $service['title'] }}</a></li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h5>Reach Us</h5>
                <ul class="f-contact">
                    <li>
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 010-5 2.5 2.5 0 010 5z"/></svg>
                        <span>{{ config('site.address.full') }}</span>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        <a href="tel:{{ config('site.phone_link') }}">{{ config('site.phone') }}</a>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                        <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                        <span>{{ config('site.hours') }}</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <span>&copy; {{ date('Y') }} {{ config('site.name') }}. All Rights Reserved.</span>
            <span>Designed &amp; Developed by <a href="https://www.datasofttechnologies.com" target="_blank" rel="noopener" class="credit-link">Datasoft Technologies</a></span>
        </div>
    </div>
</footer>
