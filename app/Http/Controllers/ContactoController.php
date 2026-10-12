<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactos = Contacto::all();
        return response()->json($contactos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:contactos,email',
            'telefono' => 'nullable|string|max:20',
            'direccion' => 'nullable|string|max:255',
        ]);

        $contacto = Contacto::create($validated);
        return response()->json($contacto, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contacto $contacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacto $contacto)
    {
        //
    }
}
