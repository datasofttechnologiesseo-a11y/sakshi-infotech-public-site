@php
    // Resolve the best available image for a service.
    // Priority: real photo dropped in by the owner (jpg/jpeg/png/webp) > custom SVG illustration > branded graphic fallback.
    $slug = $service['slug'] ?? '';
    $candidates = [];
    foreach (['jpg', 'jpeg', 'png', 'webp', 'svg'] as $ext) {
        $candidates[] = "images/services/{$slug}.{$ext}";
    }
    if (!empty($service['image'])) {
        array_unshift($candidates, $service['image']);
    }

    $found = null;
    foreach ($candidates as $c) {
        if (file_exists(public_path($c))) { $found = $c; break; }
    }

    $imgClass = $imgClass ?? '';
@endphp
<div class="svc-image {{ $imgClass }}">
    @if ($found)
        <img src="{{ asset($found) }}?v=5" alt="{{ $service['title'] }} services in Faridabad, Delhi NCR - Sakshi Infonet" loading="lazy">
    @else
        <div class="svc-image-fallback">
            <span class="svc-fallback-icon">@include('partials.icon', ['name' => $service['icon']])</span>
            <span class="svc-fallback-text">{{ $service['title'] }}</span>
        </div>
    @endif
</div>
