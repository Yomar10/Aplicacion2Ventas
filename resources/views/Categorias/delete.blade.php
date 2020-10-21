@extends('plan_adminlte.layout')
@section('contenido')
<section class="content">
  <form action="{{route('categoria.destroy',['id'=>$categoria->id])}}" method="POST">
        @csrf
        @method('delete')
        <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Different Width</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <p>Desea eliminar {{$categoria->nombre}}</p>
              </div>
              <button type="submit" class="btn btn-danger">Eliminar</button>
              <a href="{{route('categoria.index')}}" class="btn btn-primary">Cancelar</a>
              
            </div>
            <!-- /.card-body -->
          </div>
    </form>
@endsection