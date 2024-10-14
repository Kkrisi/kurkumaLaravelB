<?php

namespace App\Http\Controllers;

use App\Models\baskets;
use Illuminate\Http\Request;

class BasketsController extends Controller
{
    public function index()
    {
        return baskets::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $record = new baskets();
        $record->fill($request->all());
        $record->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return baskets::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $record = baskets::find($id);
        $record->fill($request->all());
        $record->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        baskets::find($id)->delete();
    }
}
