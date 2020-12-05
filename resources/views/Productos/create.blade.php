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
              <h3 class="card-title">Nuevo Producto</h3>
            </div>
            <form role="form" action="{{route('producto.store')}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese Nombre" name="nombre" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Precio</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Ingrese Precio" name="precio" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Stock</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Ingrese Stock" name="stock" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Categoria</label>
                    <select class="form-control" name="categorias">
                      @foreach ($categoria as $c)
                          <option value="{{$c->id}}">{{$c->nombre}}</option>
                      @endforeach
                    </select>
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
              </form>


          </div>  
        </div>
      </div>
    </div>
@endsection