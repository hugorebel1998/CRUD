<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;
use App\Producto;

class ProductosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(ProductoRequest $request)
    {

        $producto = new Producto();

        $producto->NombreArticulo = $request->NombreArticulo;
        $producto->Seccion = $request->Seccion;
        $producto->Precio = $request->Precio;
        $producto->PaisOrigen = $request->PaisOrigen;
        $producto->Fecha = $request->Fecha;

        $producto->save();

        // $nombreProducto = $request->input('NombreArticulo');
        // $Seccion = $request->input('Seccion');
        // $Precio = $request->input('Precio');
        // $Pais = $request->input('PaisOrigen');
        // $Fecha = $request->input('Fecha');
        // var_dump($nombreProducto, $Seccion, $Precio, $Pais, $Fecha);
        // die();
    }
    public function edit($id)
    {
        return view('productos.edit');

    }
}
