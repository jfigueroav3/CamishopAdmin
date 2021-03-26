<?php

namespace App\Http\Controllers;

use App\Models\producto;
use App\Models\categoria;
use Illuminate\Http\Request;
use DB;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = producto::latest()->paginate(10);
        $data1 = DB::select('CALL spr_sel_index_productos(1)');
        return view('producto.index', compact('data'))
                                    ->with('i', (request()->input('page', 1) - 1) * 10)
                                    ->with('miprod', $data1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data1['games'] = ['AC', 'Zelda', 'Apex'];
        $data1['consolas'] = ['suish', 'xbox', 'ps4'];
        $categorias = categoria::where('Estado', '=', 1)->get();
        return view('producto.create', $data1, compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required',
            'Descripcion' => 'required',
            'PrecioUnitario' => 'required',
            'Genero' => 'required',
            'Estado' => 'required',
            'IdCategoria' => 'required',
            'IdMarcas' => 'required',
            'IdEmpleado' => 'required'
        ]);
    
        producto::create($request->all());
     
        return redirect()->route('producto.index')->with('success','PRODUCTO CREADO!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(producto $producto)
    {
        $data1['games'] = ['AC', 'Zelda', 'Apex'];
        $data1['consolas'] = ['suish', 'xbox', 'ps4'];
        $categorias = categoria::where('Estado', '=', 1)->get();
        return view('producto.edit', $data1, compact('producto', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, producto $producto)
    {
        $request->validate([
            'Nombre' => 'required',
            'Descripcion' => 'required',
            'PrecioUnitario' => 'required',
            'Genero' => 'required',
            'Estado' => 'required',
            'IdCategoria' => 'required',
            'IdMarcas' => 'required',
            'IdEmpleado' => 'required'
        ]);
    
        $producto->update($request->all());
    
        return redirect()->route('producto.index')->with('success','PRODUCTO ACTUALIZADO !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(producto $producto)
    {
        $producto->delete();
    
        return redirect()->route('producto.index')->with('success','PRODUCTO BORRADO');
    }
}
