<?php

namespace App\Http\Controllers;

use App\Models\Seance;
use Illuminate\Http\Request;

class SeanceController extends Controller
{
    public function index()
    {
        return response()->json(Seance::with(['moniteur','vehicule','inscription'])->get());
    }

    public function store(Request $request)
    {
        $seance = Seance::create($request->all());
        return response()->json($seance, 201);
    }

    public function show($id)
    {
        return response()->json(Seance::with(['moniteur','vehicule','inscription'])->findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $seance = Seance::findOrFail($id);
        $seance->update($request->all());
        return response()->json($seance);
    }

    public function destroy($id)
    {
        Seance::destroy($id);
        return response()->json(null, 204);
    }
}
