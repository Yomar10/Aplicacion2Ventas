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
              <h3 class="card-title">Nuevo Cliente</h3>
            </div>
            <form role="form" action="{{route('cliente.store')}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese Nombre" name="nombre" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Dirección</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese Dirección" name="direccion" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">D.N.I</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese D.N.I" name="dni" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Telefono</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese Teléfono" name="telefono" required>
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