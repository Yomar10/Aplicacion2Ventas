@extends('plan_adminlte.layout')
@section('contenido')
<section class="content">
    <form action="{{route('producto.destroy',['id'=>$producto->id])}}" method="POST">
        @csrf
        @method('delete')
        <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Different Width</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <h5>Desea eliminar el producto: {{$producto->nombre}}</h5>
              </div>
              <button class="btn btn-danger">Eliminar</button>
                <a href="{{route('producto.index')}}" class="btn btn-primary">Cancelar</a> 
            </div>
            <!-- /.card-body -->
          </div>
    </form>
@endsection