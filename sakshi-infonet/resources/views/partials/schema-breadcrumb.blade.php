{{-- Reusable BreadcrumbList structured data. Pass $crumbs = [['name'=>..,'url'=>..], ...] --}}
@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        @foreach ($crumbs as $i => $c)
        {
            "@@type": "ListItem",
            "position": {{ $i + 1 }},
            "name": "{{ $c['name'] }}"@if(!empty($c['url'])),
            "item": "{{ $c['url'] }}"@endif
        }@if(!$loop->last),@endif
        @endforeach
    ]
}
</script>
@endpush
