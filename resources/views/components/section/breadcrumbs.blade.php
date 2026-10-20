@php
    $path = request()->path();

    if (request()->hasHeader('X-Livewire')) {
        $referer = request()->header('Referer');
        $refererPath = $referer ? parse_url($referer, PHP_URL_PATH) : null;
        $refererHost = $referer ? parse_url($referer, PHP_URL_HOST) : null;

        if ($refererHost === request()->getHost() && is_string($refererPath)) {
            $path = trim($refererPath, '/');
        }
    }

    $segments = $path === '' ? [] : explode('/', $path);
    $labels = [
        'about-ins' => 'About INS',
        'about-wfns' => 'About WFNS',
        'organizing-committee' => 'Organizing Committee',
        'program-at-glance' => 'Program at a Glance',
        'scientific-schedule' => 'Scientific Schedule',
        'presentation-schedule' => 'Presentation Schedule',
        'wfns-congress-2027' => 'WFNS Congress 2027',
    ];
@endphp

<nav aria-label="Breadcrumb" class="breadcrumbs mt-2 px-4 text-xs">
    <ul>
        @if (count($segments) === 0)
            <li><span aria-current="page">Home</span></li>
        @else
            <li><a href="{{ route('home') }}">Home</a></li>
            @foreach ($segments as $index => $segment)
                @php
                    $label = $labels[$segment] ?? \Illuminate\Support\Str::headline($segment);
                    $url = url(implode('/', array_slice($segments, 0, $index + 1)));
                @endphp
                <li>
                    @if ($loop->last)
                        <span aria-current="page">{{ $label }}</span>
                    @else
                        <a href="{{ $url }}">{{ $label }}</a>
                    @endif
                </li>
            @endforeach
        @endif
    </ul>
</nav>