@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "{{ $service['title'] }}",
    "serviceType": "{{ $service['title'] }}",
    "description": "{{ \Illuminate\Support\Str::limit(strip_tags($service['long']), 200) }}",
    "provider": {
        "@@type": "LocalBusiness",
        "name": "{{ config('site.name') }}",
        "telephone": "{{ config('site.phone_link') }}",
        "areaServed": "Faridabad, Delhi NCR"
    },
    "areaServed": ["Faridabad", "Delhi NCR"]
}
</script>
@endpush
