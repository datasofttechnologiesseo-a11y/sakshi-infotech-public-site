@php
    $gslug = $slug ?? ($service['slug'] ?? '');
    $galImages = [];
    for ($i = 1; $i <= 4; $i++) {
        $rel = "images/services/gallery/{$gslug}-{$i}.jpg";
        if (file_exists(public_path($rel))) {
            $galImages[] = $rel;
        }
    }
    $galAlt = $galAlt ?? (($service['title'] ?? 'Our') . ' work by ' . config('site.name'));
    $galClass = $galClass ?? '';
@endphp
@if (count($galImages))
<div class="svc-gallery {{ $galClass }}">
    @foreach ($galImages as $g)
        <figure class="svc-gallery-item">
            <img src="{{ asset($g) }}?v=3" alt="{{ $galAlt }}" loading="lazy">
        </figure>
    @endforeach
</div>
@endif
