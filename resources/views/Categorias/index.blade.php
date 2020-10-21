@extends('plan_adminlte.layout')
@section('contenido')
<H1>Categoria</H1>
<a href="{{route('categoria.create')}}" class="btn btn-primary">Agregar</a>
 <div class="row"> 
     <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Categoría</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>Numero</th>
                <th>Cliente</th>
                <th>Descripcion</th>
                <th colspan="2">Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $c)
                <tr>
                    <td>{{$index++}}</td>
                    <td>{{$c->nombre}}</td>
                    <td>{{$c->descripcion}}</td>
                    <td>
                        <a href="{{route('categoria.edit',['id'=>$c->id])}}"><i class="fas fa-pencil-alt"></i></a>
                        <td><a href="{{route('categoria.delete',['id'=>$c->id])}}"><i class="fas fa-trash-alt text-danger"></i></a></td>
                    </td>
                </tr>          
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div> 

    





        
        <!-- /.container-fluid -->
      </section>
  {{-- </div> --}}

  

   






   
@endsection


