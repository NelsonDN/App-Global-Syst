<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Region;
use App\Models\Pay;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regions = Region::with('pay')->get();
        $pays = Pay::all();

        return view('admin.regions.index', compact('pays', 'regions'));
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
            'name' => ['required', 'unique:regions'],
            'pays' => ['required']
        ]);
        $region = Region::create([
            'name' => $request->name,
            'pay_id' => $request->pays
        ]);

        return redirect()->route('regions.index')->with('success', 'Success !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Region $region)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Region $region)
    {
        $regions = Region::with('pay')->get();
        $pays = Pay::all();

        return view('admin.regions.edit', compact('pays', 'regions', 'region'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Region $region)
    {
        $request->validate([
            'name' => ['required'],
            'pays' => ['required']
        ]);
        $region->update([
            'name' => $request->name,
            'pay_id' => $request->pays
        ]);

        return redirect()->route('regions.index')->with('success', 'Success !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Region $region)
    {
        $region->delete();

        return redirect()->route('regions.index')->with('success', 'Success !');

    }
}
