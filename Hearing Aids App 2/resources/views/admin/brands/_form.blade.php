@php $b = $brand ?? null; @endphp

<div class="field">
    <label for="name">Brand name</label>
    <input type="text" id="name" name="name" value="{{ old('name', optional($b)->name ?? '') }}">
</div>

<div class="field">
    <label for="description">Description (optional)</label>
    <textarea id="description" name="description" rows="4">{{ old('description', optional($b)->description ?? '') }}</textarea>
</div>
