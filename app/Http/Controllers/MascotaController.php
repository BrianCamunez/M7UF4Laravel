<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class MascotaController extends Controller
{

    public function index()
    {
        return "HOla";
    }

    public function mascotasMias()
     {
        $userId = Auth::id();
        $mascotas = Mascota::where('user_id', $userId)->get();

        return response()->json([
            'message' => 'Mis mascotas',
            'data' => $mascotas
        ], 200);
    }

    public function mascotasMiasInsertar(Request $request)
    {
        $validator  = Validator::make($request->all(),[
            'nombre' => 'required|string|max:100',
            'imagen' => 'required|url',
            'tipo' => 'required|string|max:100',
        ]);

        if($validator->fails()){
             return response()->json($validator->errors(), 422);
        }

        $mascota = Mascota::create([
            'user_id' => Auth::id(),
            'nombre' => $request->nombre,
            'imagen' => $request->imagen,
            'tipo' => $request->tipo,
        ]);

        return response()->json([
            'mensaje' => 'Mascota registrada',
            'mascota' => $mascota
        ], 201);
    }

    public function mascotasMiasEditar(Request $request, $id)
    {

        $mascota = Mascota::find($id);

        $userId = Auth::id();

        if($mascota->user_id != $userId ){
            return response()->json(['mensaje' => 'esta mascota no es tuya'], 404);
        }

          $validator  = Validator::make($request->all(),[
            'nombre' => 'required|string|max:100',
            'imagen' => 'required|url',
            'tipo' => 'required|string|max:100',
        ]);

        if($validator->fails()){
             return response()->json($validator->errors(), 422);
        }

        if(!$mascota){
            return response()->json(['mensaje' => 'mascota no encontrada'], 404);
        }

        $mascota->update($request->all());
        return response()->json(['mascota' => $mascota], 200);

    }

    public function mascotasMiasCambiar(Request $request, $id)
    {
         $mascota = Mascota::find($id);

         $userId = Auth::id();

        if($mascota->user_id != $userId ){
            return response()->json(['mensaje' => 'esta mascota no es tuya'], 404);
        }

          $validator  = Validator::make($request->all(),[
            'nombre' => 'string|max:100',
            'imagen' => 'url',
            'tipo' => 'string|max:100',
        ]);

        if($validator->fails()){
             return response()->json($validator->errors(), 422);
        }

        if(!$mascota){
            return response()->json(['mensaje' => 'mascota no encontrada'], 404);
        }

        $mascota->update($request->all());
        return response()->json(['mascota' => $mascota], 200);

    }

    public function mascotasMiasBorrar(Request $request, $id)
    {
        $mascota = Mascota::find($id);
        if (!$mascota) {
            return response()->json(['mensaje' => 'Mascota no encontrada'], 404);
        }

        $mascota->delete();
        return response()->json(['mensaje' => 'Mascota borrada'], 200);
    }

    public function mascotasOtros($id)
    {
        $user = Auth::user();
        if ($user->role !== 'admin') {
            return response()->json(['error' => 'Solo para admins'], 403);
        }

        $mascotas = Mascota::where('user_id', $id)->get();

    return response()->json([
        'mensaje' => "Mascotas del usuario $id",
        'mascotas' => $mascotas
    ]);

    }
    
}
