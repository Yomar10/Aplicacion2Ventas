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
              <h3 class="card-title">Editar Producto</h3>
            </div>
            
            <form role="form" action="{{route('producto.update',['id'=>$producto->id])}}" method="POST">
                @method('PUT')
                @csrf
                <h1>{{$cat_select->nombre}}</h1>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese Nombre" name="nombre" value="{{$producto->nombre}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Precio</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Ingrese Precio" name="precio" value="{{$producto->precio}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Stock</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Ingrese Stock" name="stock" value="{{$producto->stock}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Categoria</label>
                    <select class="form-control" name="categorias">
                      @foreach ($categoria as $c)
                            @if ($c->id === $cat_select->id)
                                <option value="{{$c->id}}" selected>{{$c->nombre}}</option>
                            @else
                                <option value="{{$c->id}}">{{$c->nombre}}</option>
                            @endif
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