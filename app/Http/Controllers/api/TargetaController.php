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
       return response()->json(['targeta' => $targetas], 200);
    }
}
