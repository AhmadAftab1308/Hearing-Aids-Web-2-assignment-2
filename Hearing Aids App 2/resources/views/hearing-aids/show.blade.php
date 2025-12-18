<x-layout>
    <article class="card">
        <h2>{{ $hearingAid->brand->name }} – {{ $hearingAid->instrument }}</h2>

        <p class="price">
            Price per pair: <strong>£{{ number_format($hearingAid->price_per_pair, 2) }}</strong>
        </p>

        <dl class="details-list">
            <div>
                <dt>Rechargeable</dt>
                <dd>{{ $hearingAid->rechargeable ? 'Yes' : 'No' }}</dd>
            </div>
            <div>
                <dt>Sound quality</dt>
                <dd><x-stars :value="$hearingAid->sound_quality" /></dd>
            </div>
            <div>
                <dt>Suitability for active lifestyles</dt>
                <dd><x-stars :value="$hearingAid->suitability_active_lifestyles" /></dd>
            </div>
            <div>
                <dt>Suitability in small groups</dt>
                <dd><x-stars :value="$hearingAid->suitability_small_groups" /></dd>
            </div>
            <div>
                <dt>Social situations</dt>
                <dd><x-stars :value="$hearingAid->social_situations" /></dd>
            </div>
        </dl>

        @if ($hearingAid->description)
            <section class="description">
                <h3>Information about this hearing aid</h3>
                <p>{{ $hearingAid->description }}</p>
            </section>
        @endif

        <div class="form-actions">
            @auth
                @if($isFavorite)
                    <form method="POST" action="{{ route('favorites.destroy', $hearingAid) }}" class="inline-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn secondary">Remove from favorites</button>
                    </form>
                @else
                    <form method="POST" action="{{ route('favorites.store', $hearingAid) }}" class="inline-form">
                        @csrf
                        <button type="submit" class="btn">Add to favorites</button>
                    </form>
                @endif
            @endauth

            @if(auth()->check() && auth()->user()->is_admin)
                <a href="{{ route('hearing-aids.edit', $hearingAid) }}" class="btn">Edit</a>
            @endif

            <a href="{{ route('hearing-aids.index') }}" class="btn secondary">Back to list</a>
        </div>
    </article>
</x-layout>
