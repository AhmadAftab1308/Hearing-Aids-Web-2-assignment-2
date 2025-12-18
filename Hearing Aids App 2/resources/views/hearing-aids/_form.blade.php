@php
    $aid = $hearingAid ?? null;
    $selectedBrand = old('brand_id', optional($aid)->brand_id ?? '');
@endphp

<div class="field">
    <label for="brand_id">Brand</label>
    <select name="brand_id" id="brand_id">
        <option value="">Select a brand</option>
        @foreach($brands as $brand)
            <option value="{{ $brand->id }}" {{ (string)$selectedBrand === (string)$brand->id ? 'selected' : '' }}>
                {{ $brand->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="field">
    <label for="instrument">Hearing instrument (model)</label>
    <input type="text" id="instrument" name="instrument" value="{{ old('instrument', optional($aid)->instrument ?? '') }}">
</div>

<div class="field">
    <label for="price_per_pair">Price per pair (£)</label>
    <input type="number" step="0.01" id="price_per_pair" name="price_per_pair" value="{{ old('price_per_pair', optional($aid)->price_per_pair ?? '') }}">
</div>

<div class="field">
    <label for="rechargeable">Rechargeable</label>
    <select id="rechargeable" name="rechargeable">
        @php $re = old('rechargeable', (optional($aid)->rechargeable ?? true) ? 1 : 0); @endphp
        <option value="1" {{ (string)$re === '1' ? 'selected' : '' }}>Yes</option>
        <option value="0" {{ (string)$re === '0' ? 'selected' : '' }}>No</option>
    </select>
</div>

<div class="grid-2">
    <div class="field">
        <label for="sound_quality">Sound quality (1–5)</label>
        <select id="sound_quality" name="sound_quality">
            @for($i=1;$i<=5;$i++)
                <option value="{{ $i }}" {{ (string)old('sound_quality', optional($aid)->sound_quality ?? 3) === (string)$i ? 'selected' : '' }}>
                    {{ $i }}
                </option>
            @endfor
        </select>
    </div>

    <div class="field">
        <label for="suitability_active_lifestyles">Active lifestyles (1–5)</label>
        <select id="suitability_active_lifestyles" name="suitability_active_lifestyles">
            @for($i=1;$i<=5;$i++)
                <option value="{{ $i }}" {{ (string)old('suitability_active_lifestyles', optional($aid)->suitability_active_lifestyles ?? 3) === (string)$i ? 'selected' : '' }}>
                    {{ $i }}
                </option>
            @endfor
        </select>
    </div>

    <div class="field">
        <label for="suitability_small_groups">Small groups (1–5)</label>
        <select id="suitability_small_groups" name="suitability_small_groups">
            @for($i=1;$i<=5;$i++)
                <option value="{{ $i }}" {{ (string)old('suitability_small_groups', optional($aid)->suitability_small_groups ?? 3) === (string)$i ? 'selected' : '' }}>
                    {{ $i }}
                </option>
            @endfor
        </select>
    </div>

    <div class="field">
        <label for="social_situations">Social situations (1–5)</label>
        <select id="social_situations" name="social_situations">
            @for($i=1;$i<=5;$i++)
                <option value="{{ $i }}" {{ (string)old('social_situations', optional($aid)->social_situations ?? 3) === (string)$i ? 'selected' : '' }}>
                    {{ $i }}
                </option>
            @endfor
        </select>
    </div>
</div>

<div class="field">
    <label for="description">Information (optional)</label>
    <textarea id="description" name="description" rows="4">{{ old('description', optional($aid)->description ?? '') }}</textarea>
</div>
