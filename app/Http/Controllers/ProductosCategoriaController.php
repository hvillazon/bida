<?php

namespace App\Http\Controllers;

use App\Models\Productos_Categoria;
use Illuminate\Http\Request;

class ProductosCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categoria= Categorias::all();
        return response()->json($categoria);
        $producto= Productos::all();
        return response()->json($producto);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Productos_Categoria $productos_Categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Productos_Categoria $productos_Categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Productos_Categoria $productos_Categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Productos_Categoria $productos_Categoria)
    {
        //
    }
}
