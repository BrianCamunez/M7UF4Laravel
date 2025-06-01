<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Targeta;
use Illuminate\Support\Facades\Validator;

class TargetaController extends Controller
{
    public function index()
    {
        $targetas = Targeta::all();
        if($targetas){
            return response()->json($targetas, 200);
        }else{
            return response()->json(['message' => 'No targetas found'], 404);
        }
    }

    public function show($id)
    {
        $targeta = Targeta::find($id);
        if ($targeta) {
            return response()->json($targeta, 200);
        } else {
            return response()->json(['message' => 'Targeta not found'], 404);
        }
    }

    public function store(Request $request)
    {
        // // Comprobar si el campo 'url' está presente y no está vacío
        // $targeta = Targeta::create($request->all());
        // return response()->json(['targeta' => $targeta], 201);
        $validator = Validator::make($request->all(), [
            'url' => 'required|url',
            'nombre' => 'required|string|max:255',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $targeta = Targeta::create($request->all());
        return response()->json(['targeta' => $targeta], 201);

    }

    public function update(Request $request, $id)
    {
        $targeta = Targeta::find($id);
        if (!$targeta) {
            return response()->json(['message' => 'Targeta not found'], 404);
        }

        $targeta->update($request->all());
        return response()->json(['targeta' => $targeta], 200);
    }

    public function updatePartial(Request $request, $id)
    {
        $targeta = Targeta::find($id);
        if (!$targeta) {
            return response()->json(['message' => 'Targeta not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'url' => 'url',
            'nombre' => 'string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $targeta->update($request->all());
        return response()->json(['targeta' => $targeta], 200);
    }

    public function destroy($id)
    {
        $targeta = Targeta::find($id);
        if (!$targeta) {
            return response()->json(['message' => 'Targeta not found'], 404);
        }

        $targeta->delete();
        return response()->json(['message' => 'Targeta deleted successfully'], 200);
    }

}

