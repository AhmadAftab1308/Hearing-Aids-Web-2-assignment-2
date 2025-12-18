<x-layout>
    <h2>Edit Hearing Aid</h2>

    <form method="POST" action="{{ route('hearing-aids.update', $hearingAid) }}" class="card form-card">
        @csrf
        @method('PUT')

        @include('hearing-aids._form', ['hearingAid' => $hearingAid])

        <div class="form-actions">
            <button type="submit" class="btn">Update</button>
            <a href="{{ route('hearing-aids.index') }}" class="btn secondary">Cancel</a>
        </div>
    </form>
</x-layout>
