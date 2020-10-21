<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('categorias')->truncate();
       DB::table('categorias')->insert([
           'nombre' => 'Vegetales',
           'descripcion' => 'Disponible'
       ]);
       DB::table('categorias')->insert([
            'nombre' => 'Frutas',
            'descripcion' => 'Disponible'
       ]);
    }
}
