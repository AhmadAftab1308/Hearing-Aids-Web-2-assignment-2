<x-layout>
    <h2>Edit Brand</h2>

    <form method="POST" action="{{ route('admin.brands.update', $brand) }}" class="card form-card">
        @csrf
        @method('PUT')

        @include('admin.brands._form', ['brand' => $brand])

        <div class="form-actions">
            <button type="submit" class="btn">Update</button>
            <a href="{{ route('admin.brands.index') }}" class="btn secondary">Cancel</a>
        </div>
    </form>
</x-layout>
