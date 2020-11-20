<?php

namespace App\model;
use App\Model\Categoria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Producto extends Model
{
    use SoftDeletes;
    protected $table = 'productos';
    protected $dates = ["deleted_at"];
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
    public function NombreCateg($id_cate){
        $cate = Categoria::select('nombre')->where('id',$id_cate)->first();
        if($cate != ""){
            return $cate->nombre;
        }else{
            return "";
        }
    }
}
