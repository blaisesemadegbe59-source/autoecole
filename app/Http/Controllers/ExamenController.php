<?php

namespace App\Http\Controllers;

use App\Models\Examen;
use Illuminate\Http\Request;

class ExamenController extends Controller
{
    public function index()
    {
        return response()->json(Examen::all());
    }

    public function store(Request $request)
    {
        $examen = Examen::create($request->all());
        return response()->json($examen, 201);
    }

    public function show($id)
    {
        return response()->json(Examen::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $examen = Examen::findOrFail($id);
        $examen->update($request->all());
        return response()->json($examen);
    }

    public function destroy($id)
    {
        Examen::destroy($id);
        return response()->json(null, 204);
    }
}
