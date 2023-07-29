<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pay;
use Illuminate\Http\Request;

class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pays = Pay::all();

        return view('admin.pays.index', compact('pays'));
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
            'name' => ['required', 'unique:pays']
        ]);
        $pays = Pay::create([
            'name' => $request->name
        ]);

        return redirect()->route('pays.index')->with('success', 'Success !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pay $pay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pay $pay)
    {
        $pays = Pay::all();
        return view('admin.pays.edit', compact('pay', 'pays'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pay $pay)
    {
        $request->validate([
            'name' => ['required']
        ]);
        
        $pay->update([
            'name' => $request->name
        ]);

        return redirect()->route('pays.index')->with('success', 'Success !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pay $pay)
    {
        $pay->delete();

        return redirect()->route('pays.index')->with('success', 'Success !');

    }
}
