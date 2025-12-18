<?php

namespace App\Http\Controllers;

use App\Models\HearingAid;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function store(Request $request, HearingAid $hearingAid)
    {
        $request->user()->favorites()->firstOrCreate([
            'hearing_aid_id' => $hearingAid->id,
        ]);

        return back()->with('success', 'Added to your favorites.');
    }

    public function destroy(Request $request, HearingAid $hearingAid)
    {
        $request->user()->favorites()
            ->where('hearing_aid_id', $hearingAid->id)
            ->delete();

        return back()->with('success', 'Removed from your favorites.');
    }
}
