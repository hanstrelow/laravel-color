@extends('layouts.app')

@section('content')
<div class="container">
 
@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif

  <a href="{{url('empleado/create')}}" class="btn btn-success"> Crear nuevo empleado</a>
<br>
<br>
<div class="table-responsive">
  <table class="table table-dark">
    <thead>
      <tr>

        <th scope="col">#</th>

        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Correo</th>
        <th scope="col">Foto</th>
        <th scope="col"> acciones</th>
      </tr>
    </thead>
    <tbody>
         @foreach($empleados as $empleado)
      <tr class="">
        <td scope="row"> {{$empleado->id}}</td>
        <td>{{$empleado->nombre}}</td>
        <td>{{$empleado->apellido}}</td>
        <td>{{$empleado->correo}}</td>
        @if(isset($empleado->foto))
        <td>  <img class="img-thumbnail img-fluid"src="{{ asset('storage').'/'.$empleado->foto}}" width="60" alt=""> </td>
        @endif
        <td> <a href="{{ url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-warning"> editar </a>
          <form action="{{url('/empleado/'.$empleado->id)}}" method="post" class="d-inline">
            @csrf
            {{method_field('DELETE')}}
          <input type="submit" onclick ="return confirm('quieres Eliminar ?')" class="btn btn-danger" value="borrar">    
                  
          </form> </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection