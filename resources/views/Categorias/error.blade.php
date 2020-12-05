@extends('plan_adminlte.layout')
@section('contenido')
<section class="content">
  <form action="" method="POST">
        @csrf
        @method('delete')
        <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">No pude Eliminar</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <p>La categoria {{$categoria->nombre}} tiene productos registrados </p>
              </div>
              {{-- <button type="submit" class="btn btn-danger">Eliminar</button> --}}
              <a href="{{route('categoria.index')}}" class="btn btn-primary">Volver al menú</a>
            </div>
          </div>
    </form>
@endsection