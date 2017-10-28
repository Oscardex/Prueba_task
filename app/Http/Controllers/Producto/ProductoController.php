<?php

namespace App\Http\Controllers\Producto;

use App\Models\Producto;
use App\Models\Parametro;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::where("usuario",Auth::user()->id)->get();

        return response()->json([
            "productos" => $productos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = Producto::all()->last();
        $categorias = Parametro::where("tipo_parametro_id",2)->get();
        $id = $producto->id + 1;
        $usuario = Auth::user()->id;

        $producto->identificador = 1;
        $producto->id = $id;
        $producto->usuario = $usuario;
        $producto->categoria = $categorias;
        $producto->costo = "";
        $producto->nombre = "";
        $producto->descripcion = "";
        $producto->updated_at = new \DateTime("now");
        $producto->created_at = new \DateTime("now");
        return response()->json([
            "productos" => $producto,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);

        $categorias = Parametro::where("tipo_parametro_id",2)->get();
        $producto->categoria = $categorias;
        $producto->categoria_value = $producto->categorias->nombre;
        $producto->identificador = 2;

        return response()->json([
            "producto" => $producto
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $datos = $request->all();

        $producto = Producto::find($id);
        $producto->fill($datos);
        $producto->save();

        if($producto->save()){
            return response()->json([
            "Exito" => "true"
        ]);
        }else{
           return response()->json([
            "Error" => "false"
        ]); 
        }
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $producto = Producto::find($id);
       $producto->delete();

       if($producto->delete()){
            return response()->json([
                "Exito" => "true"
            ]);
       }else{
            return response()->json([
                "Error" => "false"
            ]);
       }
    }
}
