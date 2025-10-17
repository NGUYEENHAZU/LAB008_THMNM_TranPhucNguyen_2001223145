@php
    $segments = request()->segments();
@endphp

<nav style="margin:12px 0; color:#6b7280;">
    <small>
        @foreach($segments as $index => $segment)
            @if($index > 0)
                / 
            @endif
            <a href="{{ url(implode('/', array_slice($segments, 0, $index + 1))) }}" style="color:#2563EB;">
                {{ ucfirst($segment) }}
            </a>
        @endforeach
    </small>
</nav>
