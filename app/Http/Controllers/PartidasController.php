<?php

namespace App\Http\Controllers;

use App\Models\Partidas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PartidasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $partidas = Partidas::where('user_id', $userId)->get();

        return response()->json([
            'mensaje' => 'Partidas obtenidas correctamente',
            'datos' => $partidas,
        ], 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'clicks' => 'required|integer|min:0',
            'puntos' => 'required|integer|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $partida = Partidas::create([
            'user_id' => Auth::id(),
            'clicks' => $request['clicks'],
            'puntos' => $request['puntos'],
        ]);;

        return response()->json([
            'mensaje' => 'Partida creada correctamente',
            'datos' => $partida,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Partidas $partidas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partidas $partidas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partidas $partidas)
    {
        if ($partidas->user_id != Auth::id()) {
            return response()->json([
                'mensaje' => 'No tienes permiso para editar esta partida',
            ], 403);
        }

        $validated = $request->validate([
            'duracion' => 'required|integer|min:0',
            'clicks' => 'required|integer|min:0',
            'puntos' => 'required|integer|min:1',
        ]);

        $partidas->update($validated);

        return response()->json([
            'mensaje' => 'Partida actualizada correctamente',
            'datos' => $partidas,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $partida = Partidas::findOrFail($id);
        $user = Auth::user();

        if ($user->id !== $partida->user_id && $user->role !== 'admin') {
            return response()->json([
                'mensaje' => 'No tienes permiso para eliminar esta partida',
            ], 403);
        }

        $partida->delete();

        return response()->json([
            'mensaje' => 'Partida eliminada correctamente',
        ], 200);
    }

    public function getPartidasByUserId($id)
    {

        $user = Auth::user();

        if ($user->role !== 'admin') {
            return response()->json([
                'mensaje' => 'No tienes permiso para ver las partidas de otros usuarios',
            ], 403);
        }

        $partidas = Partidas::where('user_id', $id)->get();

        return response()->json([
            'mensaje' => 'Partidas obtenidas correctamente',
            'datos' => $partidas,
        ], 200);
    }

    public function ranking()
    {
        $ranking = Partidas::select('user_id')
            ->selectRaw('MIN(duracion) as mejor_tiempo')
            ->selectRaw('MIN(clicks) as min_clicks')
            ->selectRaw('MAX(puntos) as max_puntos')
            ->groupBy('user_id')
            ->orderBy('mejor_tiempo')
            ->orderBy('min_clicks')
            ->orderBy('max_puntos')
            ->with('user')
            ->take(5)
            ->get();

        return response()->json([
            'mensaje' => 'Ranking obtenido del TOP 5 correctamente',
            'datos' => $ranking,
        ], 200);
    }

    public function adminIndex()
{
    $partidas = Partidas::with('user:id,name,email')
        ->orderBy('id', 'desc')
        ->get();

    return response()->json([
        'mensaje' => 'Partidas obtenidas correctamente',
        'datos' => $partidas,
    ], 200);
}
}
