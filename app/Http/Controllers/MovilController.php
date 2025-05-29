<?php

namespace App\Http\Controllers;

use App\Models\Movil;
use Illuminate\Http\Request;

class MovilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movils = Movil::all();
        return view('movils.index', compact('movils'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movils.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'modelo' => 'required',
            'sistema' => 'required',
            'marca' => 'required',
            'pulgadas' => 'nullable'
        ]);

        Movil::create($request->all());

        return redirect()->route('movils.index')->with('success', 'Movil creat correctament!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movil $movil)
    {
        return view('movils.show', compact('movil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movil $movil)
    {
        return view('movils.edit', compact('movil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movil $movil)
    {
        $request->validate([
            'modelo' => 'required',
            'sistema' => 'required',
            'marca' => 'required',
            'pulgadas' => 'nullable'
        ]);

        $movil->update($request->all());

        return redirect()->route('movils.index')->with('success', 'Movil actualitzat correctament!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movil $movil)
    { {

            $movil->delete();
            return redirect()->route('movils.index')->with('success', 'Llibre eliminat correctament!');
        }
    }
}
