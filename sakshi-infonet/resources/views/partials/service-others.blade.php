@php $others = $others ?? collect(); @endphp
@if (count($others))
<section class="section-soft">
    <div class="container">
        <div class="section-head reveal" style="margin-bottom:34px;">
            <span class="eyebrow">Explore More</span>
            <h2>Our Other Services</h2>
        </div>
        <div class="svc-others-grid">
            @foreach ($others as $o)
                <a href="{{ route('service.show', $o['slug']) }}" class="svc-other reveal">
                    <span class="svc-other-ic">@include('partials.icon', ['name' => $o['icon']])</span>
                    <span>
                        <strong>{{ $o['title'] }}</strong>
                        <span>{{ \Illuminate\Support\Str::limit($o['short'], 42) }}</span>
                    </span>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endif
