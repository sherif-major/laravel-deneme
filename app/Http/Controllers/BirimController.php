<?php

namespace App\Http\Controllers;

use App\Models\Birim;
use Illuminate\Http\Request;

class BirimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Birim::query()->latest()->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'birim_adi' => ['required', 'string', 'max:255'],
            'konusu'    => ['required', 'string'],
        ]);

        $birim = Birim::create($validated);

        return response()->json($birim, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Birim $birimler)
    {
        // Route Model Binding: {birimler}
        return response()->json($birimler);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Birim $birimler)
    {
        $validated = $request->validate([
            'birim_adi' => ['sometimes', 'required', 'string', 'max:255'],
            'konusu'    => ['sometimes', 'required', 'string'],
        ]);

        $birimler->update($validated);

        return response()->json($birimler);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Birim $birimler)
    {
        $birimler->delete();
        return response()->noContent();
    }
}
