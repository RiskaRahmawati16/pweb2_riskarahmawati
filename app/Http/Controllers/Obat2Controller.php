<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\obat;

class Obat2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = obat::orderBy('id','asc')->paginate(5);
        return view('/index')->with('data', $data);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = obat::where('id', $id)->first();
        return view('show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
