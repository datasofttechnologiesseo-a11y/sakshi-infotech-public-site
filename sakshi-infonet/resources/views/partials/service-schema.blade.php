@php
    $svcUrl = route('service.show', $service['slug']);
    $svcBanner = "images/services/{$service['slug']}-banner.jpg";
    $svcImg = file_exists(public_path($svcBanner)) ? asset($svcBanner) : asset('images/og-image.jpg');
@endphp
@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "@@id": "{{ $svcUrl }}#service",
    "name": "{{ $service['title'] }}",
    "serviceType": "{{ $service['title'] }}",
    "description": "{{ \Illuminate\Support\Str::limit(strip_tags($service['long']), 200) }}",
    "url": "{{ $svcUrl }}",
    "image": "{{ $svcImg }}",
    "provider": { "@@id": "{{ url('/') }}#business" },
    "areaServed": [
        { "@@type": "City", "name": "Faridabad" },
        { "@@type": "AdministrativeArea", "name": "Delhi NCR" }
    ],
    "hasOfferCatalog": {
        "@@type": "OfferCatalog",
        "name": "{{ $service['title'] }} — what we offer",
        "itemListElement": [
            @foreach ($service['items'] as $item)
            {
                "@@type": "Offer",
                "itemOffered": { "@@type": "Service", "name": "{{ addslashes($item) }}" }
            }@if(!$loop->last),@endif
            @endforeach
        ]
    }
}
</script>
@endpush

@include('partials.schema-breadcrumb', ['crumbs' => [
    ['name' => 'Home', 'url' => route('home')],
    ['name' => 'Services', 'url' => route('services')],
    ['name' => $service['title'], 'url' => $svcUrl],
]])
