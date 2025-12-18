<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\HearingAid;
use Illuminate\Http\Request;

class HearingAidController extends Controller
{
    public function index(Request $request)
    {
        $query = HearingAid::with('brand');

        $search = trim((string) $request->get('search', ''));
        if ($search !== '') {
            $query->where(function ($q) use ($search) {
                $q->where('instrument', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%")
                  ->orWhereHas('brand', function ($brandQ) use ($search) {
                      $brandQ->where('name', 'like', "%{$search}%");
                  });
            });
        }

        $priceFilter = (string) $request->get('price_filter', 'all');
        if ($priceFilter === 'under_1000') {
            $query->where('price_per_pair', '<', 1000);
        } elseif ($priceFilter === '1000_2000') {
            $query->whereBetween('price_per_pair', [1000, 2000]);
        } elseif ($priceFilter === 'over_2000') {
            $query->where('price_per_pair', '>', 2000);
        }

        $hearingAids = $query
            ->orderBy('price_per_pair')
            ->paginate(6)
            ->appends($request->query());

        $favoriteIds = [];
        if (auth()->check()) {
            $favoriteIds = auth()->user()
                ->favorites()
                ->pluck('hearing_aid_id')
                ->all();
        }

        return view('hearing-aids.index', compact('hearingAids', 'favoriteIds'));
    }

    public function create()
    {
        $brands = Brand::orderBy('name')->get();
        return view('hearing-aids.create', compact('brands'));
    }

    public function store(Request $request)
    {
        $validated = $this->validateData($request);

        HearingAid::create($validated);

        return redirect()
            ->route('hearing-aids.index')
            ->with('success', 'Hearing aid added successfully.');
    }

    public function show(HearingAid $hearingAid)
    {
        $hearingAid->load('brand');

        $isFavorite = false;
        if (auth()->check()) {
            $isFavorite = auth()->user()
                ->favorites()
                ->where('hearing_aid_id', $hearingAid->id)
                ->exists();
        }

        return view('hearing-aids.show', compact('hearingAid', 'isFavorite'));
    }

    public function edit(HearingAid $hearingAid)
    {
        $brands = Brand::orderBy('name')->get();
        return view('hearing-aids.edit', compact('hearingAid', 'brands'));
    }

    public function update(Request $request, HearingAid $hearingAid)
    {
        $validated = $this->validateData($request);

        $hearingAid->update($validated);

        return redirect()
            ->route('hearing-aids.index')
            ->with('success', 'Hearing aid updated successfully.');
    }

    public function destroy(HearingAid $hearingAid)
    {
        $hearingAid->delete();

        return redirect()
            ->route('hearing-aids.index')
            ->with('success', 'Hearing aid deleted successfully.');
    }

    private function validateData(Request $request): array
    {
        return $request->validate([
            'brand_id' => ['required', 'integer', 'exists:brands,id'],
            'instrument' => ['required', 'string', 'max:255'],
            'price_per_pair' => ['required', 'numeric', 'min:0'],
            'rechargeable' => ['required', 'boolean'],
            'sound_quality' => ['required', 'integer', 'between:1,5'],
            'suitability_active_lifestyles' => ['required', 'integer', 'between:1,5'],
            'suitability_small_groups' => ['required', 'integer', 'between:1,5'],
            'social_situations' => ['required', 'integer', 'between:1,5'],
            'description' => ['nullable', 'string', 'max:2000'],
        ]);
    }
}
