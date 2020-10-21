<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\model\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        $index = 1;
        return view ('Categorias.index',[
            'categorias'=>$categorias,
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
        return view('Categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria = new Categoria;
        $categoria->nombre = $request->get('nombre');
        $categoria->descripcion = $request->get('descripcion');
        $categoria->save();
        return redirect(route('categoria.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,request $request)
    {
        $categoria = Categoria::find($id);
        return view('Categorias.edit',[
            'categoria' => $categoria
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
        $categoria = Categoria::find($id);
        $categoria->nombre = $request->get('nombre');
        $categoria->descripcion = $request->get('descripcion');
        $categoria->save();
        return redirect(route('categoria.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id,request $request){
        $categoria = Categoria::find($id);
        return view('Categorias.delete',[
            'categoria'=>$categoria
        ]);
    }
    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect(route('categoria.index'));
    }
}
