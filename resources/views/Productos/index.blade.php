@extends('plan_adminlte.layout')
@section('contenido')
<H1>Producto</H1>
<a href="{{route('producto.create')}}" class="btn btn-primary">Agregar</a>
 <div class="row"> 
     <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Producto</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>Numero</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Categoria</th>
                <th colspan="2">Acciones</th>
              </tr>
            </thead>
            <tbody>
               @foreach ($productos as $p)
                  <tr>
                      <td>{{$index++}}</td>
                      <td>{{$p->nombre}}</td>
                      <td>{{$p->precio}}</td>
                      <td>{{$p->stock}}</td>
                      <td>{{$p->NombreCateg($p->categoria_id)}}</td>
                      <td>
                        <a href="{{route('producto.edit',['id'=>$p->id])}}"><i class="fas fa-pencil-alt"></i></a>
                        <td><a href="{{route('producto.delete',['id'=>$p->id])}}"><i class="fas fa-trash-alt text-danger"></i></a></td>
                      </td>
                  </tr>   
               @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div> 
  </section>
  
@endsection


