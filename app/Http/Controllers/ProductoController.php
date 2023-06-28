<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request){
        
        $producto=new Producto();
        $producto->name=$request->name;
        $producto->descripcion=$request->descripcion;
        $producto->precio=$request->precio;
        $producto->existncias=$request->existencias;
        $producto->proveedor=$request->proveedor;
        $producto->save();  
  
      }
}