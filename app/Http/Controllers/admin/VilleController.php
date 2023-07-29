<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ville;
use App\Models\Region;
use Illuminate\Http\Request;

class VilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $villes = Ville::with('region')->get();
        $regions = Region::all();

        return view('admin.villes.index', compact('regions', 'villes'));

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
            'name' => ['required', 'unique:villes'],
            'coefCorrection' => ['required'],
            'region' => ['required']
        ]);
        $ville = Ville::create([
            'name' => $request->name,
            'coefCorrection' => $request->coefCorrection,
            'region_id' => $request->region
        ]);

        return redirect()->route('villes.index')->with('success', 'Success !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ville $ville)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ville $ville)
    {
        $villes = Ville::with('region')->get();
        $regions = Region::all();

        return view('admin.villes.edit', compact('regions', 'villes', 'ville'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ville $ville)
    {
            $request->validate([
                'name' => ['required'],
                'coefCorrection' => ['required'],
                'region' => ['required']
            ]);
            $ville->update([
                'name' => $request->name,
                'coefCorrection' => $request->coefCorrection,
                'region_id' => $request->region
            ]);
    
            return redirect()->route('villes.index')->with('success', 'Success !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ville $ville)
    {
        $ville->delete();

        return redirect()->route('villes.index')->with('success', 'Success !');

    }
}
