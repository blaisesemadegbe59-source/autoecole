<?php

namespace App\Http\Controllers;

use App\Models\Versement;
use Illuminate\Http\Request;

class VersementController extends Controller
{
    public function index()
    {
        return response()->json(Versement::all());
    }

    public function store(Request $request)
    {
        $versement = Versement::create($request->all());
        return response()->json($versement, 201);
    }

    public function show($id)
    {
        return response()->json(Versement::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $versement = Versement::findOrFail($id);
        $versement->update($request->all());
        return response()->json($versement);
    }

    public function destroy($id)
    {
        Versement::destroy($id);
        return response()->json(null, 204);
    }
}
