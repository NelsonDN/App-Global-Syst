<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plaque;
use Illuminate\Http\Request;

class PlaqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plaques = Plaque::all();

        return view('admin.plaques.index', compact('plaques'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'courant' => ['required'],
            'tension' => ['required'],
            'duree_de_vie' => ['required']
        ]);

        $plaques = Plaque::create([
            'name' => $request->naame,
            'courant' => $request->courant,
            'tension' => $request->tension,
            'duree_de_vie' => $request->duree_de_vie
        ]);

        return redirect()->route('plaques.index')->with('success', 'Success !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Plaque $plaque)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plaque $plaque)
    {
        $plaques = Plaque::all();

        return view('admin.plaques.index', compact('plaques', 'plaque'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plaque $plaque)
    {
        $request->validate([
            'name' => ['required'],
            'courant' => ['required'],
            'tension' => ['required'],
            'duree_de_vie' => ['required']
        ]);

        $plaque->update([
            'name' => $request->naame,
            'courant' => $request->courant,
            'tension' => $request->tension,
            'duree_de_vie' => $request->duree_de_vie
        ]);

        return redirect()->route('plaques.index')->with('success', 'Success !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plaque $plaque)
    {
        $plaque->delete();

        return redirect()->route('plaques.index')->with('success', 'Success !');
    }
}
