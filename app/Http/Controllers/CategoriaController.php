<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function index()
    {
        return Categorias::with('cards')->get(); // opcional
    }
    
}
