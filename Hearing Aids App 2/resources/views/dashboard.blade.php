<x-layout>
    <h2>Dashboard</h2>
    <p class="muted">Your saved favorites are listed below.</p>

    @if($favoriteHearingAids->isEmpty())
        <div class="card">
            <p>You have not favorited any hearing aids yet. Browse the <a href="{{ route('hearing-aids.index') }}">home page</a> and click “Favorite”.</p>
        </div>
    @else
        <div class="card">
            <div class="table-wrap">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Brand</th>
                            <th>Hearing instrument</th>
                            <th>Price per pair</th>
                            <th>Rechargeable</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($favoriteHearingAids as $aid)
                            <tr>
                                <td data-label="Brand">{{ $aid->brand->name }}</td>
                                <td data-label="Hearing instrument">
                                    <a href="{{ route('hearing-aids.show', $aid) }}">{{ $aid->instrument }}</a>
                                </td>
                                <td data-label="Price per pair">£{{ number_format($aid->price_per_pair, 2) }}</td>
                                <td data-label="Rechargeable">{{ $aid->rechargeable ? 'Yes' : 'No' }}</td>
                                <td data-label="Actions">
                                    <form method="POST" action="{{ route('favorites.destroy', $aid) }}" class="inline-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn tiny secondary">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
</x-layout>
