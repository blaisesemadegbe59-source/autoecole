<?php

namespace App\Http\Controllers;

use App\Models\Moniteur;
use Illuminate\Http\Request;

class MoniteurController extends Controller
{
    public function index()
    {
        return response()->json(Moniteur::all());
    }

    public function store(Request $request)
    {
        $moniteur = Moniteur::create($request->all());
        return response()->json($moniteur, 201);
    }

    public function show($id)
    {
        return response()->json(Moniteur::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $moniteur = Moniteur::findOrFail($id);
        $moniteur->update($request->all());
        return response()->json($moniteur);
    }

    public function destroy($id)
    {
        Moniteur::destroy($id);
        return response()->json(null, 204);
    }
}
