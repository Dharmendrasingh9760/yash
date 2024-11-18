<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\ApplyAdvertisement;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    public function advertisement()
    {
        return view('advertisement.advertisement');
    }

    public function allAdvertisement()
    {
        $advertisement = Advertisement::where('status', 1)->get();
        return view('advertisement.all-advertisment', compact('advertisement'));
    }

    public function bookAdvertisement(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|exists:advertisements,id',
            'price' => 'required|numeric|min:0',
        ]);

        $userId = auth()->id();

        $applyAdvertisement = ApplyAdvertisement::create([
            'user_price' => $validatedData['price'],
            'advertisement_id' => $validatedData['id'],
            'user_id' => $userId,
            'status' => 0,
        ]);

        return redirect()->back()->with('success', 'Advertisement Applied successfully!');
    }

    public function appliedAdvertisement()
    {
        $userId = auth()->id();

        $advertisements = Advertisement::with(['applications' => function ($query) use ($userId) {
            $query->where('user_id', $userId);
        }])
            ->whereHas('applications', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })
            ->get();
        // dd($advertisements);
        return view('advertisement.advertisment-applied', compact('advertisements'));
    }

    public function appliedAdvertisementView($id)
    {
        $advertisements = Advertisement::with('applications')
            ->where('id', $id)
            ->first();
        return view('advertisement.advertisement-view', compact('advertisements'));
    }
}
