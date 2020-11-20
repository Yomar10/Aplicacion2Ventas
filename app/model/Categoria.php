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
}
