<x-layout>
    <h2>Add Hearing Aid</h2>

    <form method="POST" action="{{ route('hearing-aids.store') }}" class="card form-card">
        @csrf

        @include('hearing-aids._form', ['hearingAid' => null])

        <div class="form-actions">
            <button type="submit" class="btn">Save</button>
            <a href="{{ route('hearing-aids.index') }}" class="btn secondary">Cancel</a>
        </div>
    </form>
</x-layout>
