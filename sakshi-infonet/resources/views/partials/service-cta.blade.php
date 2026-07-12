<section>
    <div class="container">
        <div class="cta-band reveal">
            <div>
                <h3>Ready to Get Started with {{ $service['title'] }}?</h3>
                <p>Contact Sakshi Infonet today for a free site visit and a fair quote across Faridabad and Delhi NCR.</p>
            </div>
            <div class="cta-actions">
                <a href="tel:{{ config('site.phone_link') }}" class="btn btn-white btn-lg">Call {{ config('site.phone') }}</a>
                <a href="{{ route('contact') }}" class="btn btn-navy btn-lg">Send Enquiry</a>
            </div>
        </div>
    </div>
</section>
