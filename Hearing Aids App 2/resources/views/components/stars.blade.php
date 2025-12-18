@props(['value' => 0])

@php
    $value = (int) $value;
    $value = max(0, min(5, $value));
@endphp

<span class="stars" aria-label="{{ $value }} out of 5 stars">
    @for($i = 1; $i <= 5; $i++)
        @if($i <= $value)
            ★
        @else
            <span class="star-empty">★</span>
        @endif
    @endfor
</span>
