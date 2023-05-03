<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categoria= Categorias::all();
        return response()->json($categoria);
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
        $categoria =  new Categorias;
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->estado = $categoria->estado;
        $categoria->save();
        $data = [
            'message' => 'Categoria creada exitosamente',
            'categoria' => $categoria
    ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorias $categoria)
    {
        //

        if(!$categoria){
            return response()->json(
                [
                    'message'=>'Categoria no encontrada'
                ]);
        }
        return response()->json($categoria);
       
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorias $categoria)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorias $categoria)
    {
        //
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->estado = $categoria->estado;
        $categoria->save();
        $data = [
            'message' => 'Categoria actualizada exitosamente',
            'categoria' => $categoria
    ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorias $categoria)
    {
        //
        $categoria->delete();
        $data = [
            'message' => 'Categoria borrada exitosamente',
            'categoria' => $categoria
    ];
    return response()->json($data);

    }
}
