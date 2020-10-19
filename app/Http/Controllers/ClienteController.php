<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        $index = 1;
        return view('clientes.index',[
            'clientes'=>$clientes,
            'index'=>$index
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente;
        $cliente->nombre = $request->get('nombre');
        $cliente->direccion = $request->get('direccion');
        $cliente->dni = $request->get('dni');
        $cliente->telefono = $request->get('telefono');
        $cliente->save();
        return redirect(route('cliente.index'));
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
    public function edit($id,request $request)
    {
        $cliente = Cliente::find($id);
        return view('Clientes.edit',[
            'cliente'=>$cliente
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
        $cliente = Cliente::find($id);
        $cliente->nombre = $request->get('nombre');
        $cliente->direccion = $request->get('direccion');
        $cliente->dni = $request->get('dni');
        $cliente->telefono = $request->get('telefono');
        $cliente->save();
        return redirect(route('cliente.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id,Request $request){
        $cliente = Cliente::find($id);
        return view('Clientes.delete',[
            'cliente'=>$cliente
        ]);
    }
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect(route('cliente.index'));
    }
}
