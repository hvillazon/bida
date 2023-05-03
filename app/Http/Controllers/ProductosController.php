<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $producto =  new Productos;
        $producto->categorias_id = $request->categorias_id;
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->imagen = $producto->imagen;
        $producto->save();
        $data = [
            'message' => 'Producto creado exitosamente',
            'producto' => $producto
    ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Productos $producto)
    {
        //

        if(!$producto){
            return response()->json(
                [
                    'message'=>'Producto no encontrado'
                ]);
        }
        return response()->json($producto);
       
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Productos $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Productos $producto)
    {
        //
        $producto->categorias_id = $request->categorias_id;
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->imagen = $producto->imagen;
        $producto->save();
        $data = [
            'message' => 'Producto actualizado exitosamente',
            'producto' => $producto
    ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Productos $producto)
    {
        //
        $producto->delete();
        $data = [
            'message' => 'Producto borrado exitosamente',
            'producto' => $producto
    ];
    return response()->json($data);

    }
}
