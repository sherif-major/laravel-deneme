<?php

namespace App\Http\Controllers;

use App\Models\Unvan;
use Illuminate\Http\Request;

class UnvanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Unvan::query()->latest()->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'unvan_adi' => ['required', 'string', 'max:255'],
        ]);

        $unvan = Unvan::create($validated);

        return response()->json($unvan, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Unvan $unvanlar)
    {
        // Route Model Binding: {unvanlar}
        return response()->json($unvanlar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unvan $unvanlar)
    {
        $validated = $request->validate([
            'unvan_adi' => ['sometimes', 'required', 'string', 'max:255'],
        ]);

        $unvanlar->update($validated);

        return response()->json($unvanlar);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unvan $unvanlar)
    {
        $unvanlar->delete();
        return response()->noContent();
    }
}
