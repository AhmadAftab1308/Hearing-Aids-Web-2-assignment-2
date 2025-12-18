<x-layout>
    <h2>Compare Hearing Aids</h2>

    <p class="muted">
        Compare different hearing aids, their prices and how suitable they are for active lifestyles, small groups and social situations.
        Use the search and price filter to find the most suitable option.
    </p>

    <form method="GET" action="{{ route('hearing-aids.index') }}" class="filter-form">
        <div class="field">
            <label for="search">Search (brand, model or description)</label>
            <input
                type="text"
                id="search"
                name="search"
                value="{{ request('search') }}"
                placeholder="e.g. Specsavers, Premium"
            >
        </div>

        <div class="field">
            <label for="price_filter">Filter by price</label>
            <select id="price_filter" name="price_filter">
                <option value="all" {{ request('price_filter') === 'all' ? 'selected' : '' }}>All prices</option>
                <option value="under_1000" {{ request('price_filter') === 'under_1000' ? 'selected' : '' }}>Under £1000</option>
                <option value="1000_2000" {{ request('price_filter') === '1000_2000' ? 'selected' : '' }}>£1000 - £2000</option>
                <option value="over_2000" {{ request('price_filter') === 'over_2000' ? 'selected' : '' }}>Over £2000</option>
            </select>
        </div>

        <div class="actions">
            <button type="submit" class="btn">Apply</button>
            <a class="btn secondary" href="{{ route('hearing-aids.index') }}">Reset</a>
        </div>
    </form>

    <div class="table-wrap">
        <table class="data-table">
            <thead>
                <tr>
                    <th>Brand</th>
                    <th>Hearing instrument</th>
                    <th>Price per pair</th>
                    <th>Rechargeable</th>
                    <th>Sound quality</th>
                    <th>Active lifestyle</th>
                    <th>Small groups</th>
                    <th>Social situations</th>
                    <th class="actions-col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($hearingAids as $aid)
                    <tr>
                        <td data-label="Brand">{{ $aid->brand->name }}</td>
                        <td data-label="Hearing instrument">
                            <a href="{{ route('hearing-aids.show', $aid) }}">{{ $aid->instrument }}</a>
                        </td>
                        <td data-label="Price per pair">£{{ number_format($aid->price_per_pair, 2) }}</td>
                        <td data-label="Rechargeable">{{ $aid->rechargeable ? 'Yes' : 'No' }}</td>
                        <td data-label="Sound quality"><x-stars :value="$aid->sound_quality" /></td>
                        <td data-label="Active lifestyle"><x-stars :value="$aid->suitability_active_lifestyles" /></td>
                        <td data-label="Small groups"><x-stars :value="$aid->suitability_small_groups" /></td>
                        <td data-label="Social situations"><x-stars :value="$aid->social_situations" /></td>
                        <td data-label="Actions" class="actions-col">
                            @auth
                                @php $isFav = in_array($aid->id, $favoriteIds ?? []); @endphp

                                @if($isFav)
                                    <form method="POST" action="{{ route('favorites.destroy', $aid) }}" class="inline-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn tiny secondary">Unfavorite</button>
                                    </form>
                                @else
                                    <form method="POST" action="{{ route('favorites.store', $aid) }}" class="inline-form">
                                        @csrf
                                        <button type="submit" class="btn tiny">Favorite</button>
                                    </form>
                                @endif
                            @endauth

                            @if(auth()->check() && auth()->user()->is_admin)
                                <a class="btn tiny" href="{{ route('hearing-aids.edit', $aid) }}">Edit</a>

                                <form method="POST" action="{{ route('hearing-aids.destroy', $aid) }}" class="inline-form" onsubmit="return confirm('Delete this hearing aid?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn tiny danger">Delete</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9">No results found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="pagination">
        @if ($hearingAids->onFirstPage())
            <span class="disabled">Previous</span>
        @else
            <a href="{{ $hearingAids->previousPageUrl() }}">Previous</a>
        @endif

        <span>Page {{ $hearingAids->currentPage() }} of {{ $hearingAids->lastPage() }}</span>

        @if ($hearingAids->hasMorePages())
            <a href="{{ $hearingAids->nextPageUrl() }}">Next</a>
        @else
            <span class="disabled">Next</span>
        @endif
    </div>
</x-layout>
