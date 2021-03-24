<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = producto::first()->paginate(10);
    
        return view('producto.index',compact('data'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['games'] = ['AC', 'Zelda', 'Apex'];
        $data['consolas'] = ['suish', 'xbox', 'ps4'];
        return view('producto.create', $data);
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
            'Estado' => 'required'
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
        return view('producto.edit',compact('producto'));
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
