<x-layout>
    <h2>Manage Brands</h2>
    <p class="muted">Brands are stored in a separate table and linked to hearing aids (one-to-many relationship).</p>

    <div class="form-actions">
        <a href="{{ route('admin.brands.create') }}" class="btn">Add Brand</a>
        <a href="{{ route('hearing-aids.index') }}" class="btn secondary">Back to home</a>
    </div>

    <div class="card">
        <div class="table-wrap">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th class="actions-col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($brands as $brand)
                        <tr>
                            <td data-label="Name">{{ $brand->name }}</td>
                            <td data-label="Description">{{ $brand->description ?: '—' }}</td>
                            <td data-label="Actions" class="actions-col">
                                <a href="{{ route('admin.brands.edit', $brand) }}" class="btn tiny">Edit</a>
                                <form method="POST" action="{{ route('admin.brands.destroy', $brand) }}" class="inline-form" onsubmit="return confirm('Delete this brand? (Hearing aids will also be deleted)')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn tiny danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">No brands yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="pagination">
            @if ($brands->onFirstPage())
                <span class="disabled">Previous</span>
            @else
                <a href="{{ $brands->previousPageUrl() }}">Previous</a>
            @endif

            <span>Page {{ $brands->currentPage() }} of {{ $brands->lastPage() }}</span>

            @if ($brands->hasMorePages())
                <a href="{{ $brands->nextPageUrl() }}">Next</a>
            @else
                <span class="disabled">Next</span>
            @endif
        </div>
    </div>
</x-layout>
