<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Batterie;
use Illuminate\Http\Request;

class BatterieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batteries = Batterie::all();

        return view('admin.batteries.index', compact('batteries'));
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
            'name' => ['required', 'unique:batteries'],
            'courant' => ['required'],
            'tension' => ['required'],
            'duree_de_vie' => ['required']
        ]);

        $batterie = Batterie::create([
            'name' => $request->naame,
            'courant' => $request->courant,
            'tension' => $request->tension,
            'duree_de_vie' => $request->duree_de_vie
        ]);

        return redirect()->route('batteries.index')->with('success', 'Success !');

    }

    /**
     * Display the specified resource.
     */
    public function show(Batterie $batterie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Batterie $batterie)
    {
        $batteries = Batterie::all();

        return view('admin.batteries.edit', compact('batterie', 'batteries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Batterie $batterie)
    {
        $request->validate([
            'name' => ['required'],
            'courant' => ['required'],
            'tension' => ['required'],
            'duree_de_vie' => ['required']
        ]);

        $batterie->update([
            'name' => $request->naame,
            'courant' => $request->courant,
            'tension' => $request->tension,
            'duree_de_vie' => $request->duree_de_vie
        ]);

        return redirect()->route('batteries.index')->with('success', 'Success !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Batterie $batterie)
    {
        $batterie->delete();

        return redirect()->route('batteries.index')->with('success', 'Success !');
    }
}
