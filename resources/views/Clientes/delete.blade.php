@extends('plan_adminlte.layout')
@section('contenido')
<section class="content">
    <form action="{{route('cliente.destroy',['id'=>$cliente->id])}}" method="POST">
        @csrf
        @method('delete')
        <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Different Width</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <p>Desea eliminar {{$cliente->nombre}}</p>
              </div>
              <button class="btn btn-danger">Eliminar</button>
              <button class="btn btn-primary">Cancelar</button>
            </div>
            <!-- /.card-body -->
          </div>
    </form>
@endsection