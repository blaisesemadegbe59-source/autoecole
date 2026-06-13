<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    // Liste tous les candidats
    public function index()
    {
        return response()->json(Candidat::all());
    }

    // Crée un nouveau candidat
    public function store(Request $request)
    {
        $candidat = Candidat::create($request->all());
        return response()->json($candidat, 201);
    }

    // Affiche un candidat par ID
    public function show($id)
    {
        return response()->json(Candidat::findOrFail($id));
    }

    // Met à jour un candidat
    public function update(Request $request, $id)
    {
        $candidat = Candidat::findOrFail($id);
        $candidat->update($request->all());
        return response()->json($candidat);
    }

    // Supprime un candidat
    public function destroy($id)
    {
        Candidat::destroy($id);
        return response()->json(null, 204);
    }
}
