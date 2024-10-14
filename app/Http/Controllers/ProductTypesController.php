<?php

namespace App\Http\Controllers;

use App\Models\producttypes;
use Illuminate\Http\Request;

class ProductTypesController extends Controller
{
    public function index()
    {
        return producttypes::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $record = new producttypes();
        $record->fill($request->all());
        $record->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return producttypes::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $record = producttypes::find($id);
        $record->fill($request->all());
        $record->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        producttypes::find($id)->delete();
    }
}
