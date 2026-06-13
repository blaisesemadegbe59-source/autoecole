<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function index()
    {
        return response()->json(Inscription::all());
    }

    public function store(Request $request)
    {
        $inscription = Inscription::create($request->all());
        return response()->json($inscription, 201);
    }

    public function show($id)
    {
        return response()->json(Inscription::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $inscription = Inscription::findOrFail($id);
        $inscription->update($request->all());
        return response()->json($inscription);
    }

    public function destroy($id)
    {
        Inscription::destroy($id);
        return response()->json(null, 204);
    }
}
