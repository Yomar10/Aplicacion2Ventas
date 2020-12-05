<?php

namespace App\model;
use App\Model\Producto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use SoftDeletes;
    protected $table = 'categorias';
    protected $dates = ["deleted_at"];
    public function producto(){
        return $this->hasmany(Producto::class);
    }
    // PROBANDOOOOOOO
    public function ruta($id_cat){
        $pr_ca = Producto::where('categoria_id',$id_cat)
                        ->whereNotNull('created_at')->first();
        if($pr_ca === null){
            // elimina
            return 'categoria.delete';
        }else{
            // no puede eliminar
            return 'categoria.error';
        }
    }
}
