@extends('plan_adminlte.layout')
@section('contenido')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Nueva Categoria</h3>
            </div>
            <form role="form" action="{{route('categoria.store')}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese Nombre" name="nombre" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Descripcion</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese Descripcion" name="descripcion" required>
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>


          </div>  
        </div>
      </div>
    </div>
@endsection