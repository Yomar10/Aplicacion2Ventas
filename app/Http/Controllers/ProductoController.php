<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Categoria;
use App\model\Producto;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        $index = 1;
        return view('productos.index',[
            'productos'=>$productos,
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
        $categoria = Categoria::all();
        return view('Productos.create',[
            'categoria'=>$categoria
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
        $producto = new Producto;
        $producto->categoria_id = $request->get('categorias');
        $producto->nombre = $request->get('nombre');
        $producto->precio = $request->get('precio');
        $producto->stock = $request->get('stock'); 
        $producto->save();
        return redirect(route('producto.index'));
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
        $producto = Producto::find($id);
        $categoria = Categoria::all();
        if($producto != ""){
            $cat_select = Categoria::select('nombre','id')->where('id',$producto->categoria_id)->first();
        }
        return view('productos.edit',[
            'producto'=>$producto,
            'cat_select'=>$cat_select,
            'categoria'=>$categoria
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
        $producto = Producto::find($id);
        $producto->categoria_id = $request->get('categorias');
        $producto->nombre = $request->get('nombre');
        $producto->precio = $request->get('precio');
        $producto->stock = $request->get('stock'); 
        $producto->save();
        return redirect(route('producto.index'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id){
        $producto = Producto::find($id);
        return view('productos.delete',[
            'producto'=>$producto
        ]);
    }
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect(route('producto.index'));
    }
}
