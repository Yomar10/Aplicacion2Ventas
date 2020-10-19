<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->truncate();
        DB::table('clientes')->insert([
            'nombre'=>'Daniela Calle Martinez',
            'direccion'=>'Jr Catacaos 343',
            'dni'=>'06897657',
            'telefono'=>'985736275'
        ]);
        DB::table('clientes')->insert([
            'nombre'=>'Pedro Montaño Rivera',
            'direccion'=>'Jr Lima 135',
            'dni'=>'05985633',
            'telefono'=>'998756352'
        ]);
        DB::table('clientes')->insert([
            'nombre'=>'Sara Cañola Adanaque',
            'direccion'=>'Jr Piura  789',
            'dni'=>'06897657',
            'telefono'=>'943678230'
        ]);
        DB::table('clientes')->insert([
            'nombre'=>'Graciela Vilela Navarro',
            'direccion'=>'Jr Tacna 564',
            'dni'=>'56367829',
            'telefono'=>'912738495'
        ]);
    }
}
