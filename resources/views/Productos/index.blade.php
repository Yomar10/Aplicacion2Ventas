@extends('plan_adminlte.layout')
@section('contenido')
<H1>Clientes</H1>
<a href="{{route('cliente.create')}}" class="btn btn-primary">Agregar</a>
 <div class="row"> 
     <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">CLIENTES</h3>

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
                <th>Dirección</th>
                <th>DNI</th>
                <th>Teléfono</th>
                <th colspan="2">Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $c)
                <tr>
                    <td>{{$index++}}</td>
                    <td>{{$c->nombre}}</td>
                    <td>{{$c->direccion}}</td>
                    <td>{{$c->dni}}</td>
                    <td>{{$c->telefono}}</td>
                    <td>
                        <a href="{{route('cliente.edit',['id'=>$c->id])}}"><i class="fas fa-pencil-alt"></i></a>
                        <td><a href="{{route('cliente.delete',['id'=>$c->id])}}"><i class="fas fa-trash-alt text-danger"></i></a></td>
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


