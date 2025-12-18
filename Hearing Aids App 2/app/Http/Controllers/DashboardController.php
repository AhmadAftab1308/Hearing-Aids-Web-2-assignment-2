<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        $favoriteHearingAids = $user->favoriteHearingAids()
            ->with('brand')
            ->orderBy('price_per_pair')
            ->get();

        return view('dashboard', compact('favoriteHearingAids'));
    }
}
