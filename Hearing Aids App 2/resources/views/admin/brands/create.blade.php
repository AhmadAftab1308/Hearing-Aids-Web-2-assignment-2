<x-layout>
    <h2>Add Brand</h2>

    <form method="POST" action="{{ route('admin.brands.store') }}" class="card form-card">
        @csrf

        @include('admin.brands._form')

        <div class="form-actions">
            <button type="submit" class="btn">Save</button>
            <a href="{{ route('admin.brands.index') }}" class="btn secondary">Cancel</a>
        </div>
    </form>
</x-layout>
