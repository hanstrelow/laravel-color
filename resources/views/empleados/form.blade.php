<!-- formulario -->
<H1>{{ $modo }} Empleado </H1>

@if(count($errors)>0)
<div class="alert alert-primary" role="alert">

<ul>
@foreach($errors->all() as $error)
<li> {{ $error}} </li>
@endforeach
</ul>
</div>
@endif

<div class="form-group">
<label for="Nombre"> Nombre:</label>
  <input type="text"  class="form-control" name="Nombre"  value="{{ isset($empleado->nombre)?$empleado->nombre:'' }}"id="Nombre" /> </br>
</div>
<div class="form-group">
  <label for="Apellido">Apellido:</label>
  <input type="text"  class="form-control"  name="Apellido" value="{{ isset($empleado->apellido)?$empleado->apellido:'' }}"id="Apellido"/></br>
</div>
<div class="form-group">
  <label for="correo">Correo:</label>
  <input type="email"  class="form-control"  name="correo"  value="{{ isset($empleado->correo)?$empleado->correo:'' }}"id="correo"></br>
</div>
<div class="form-group">
  <label for="foto">foto:</label>
  @if(isset($empleado->foto))
  <img src="{{ asset('storage').'/'.$empleado->foto}}"  width="60" alt="">
  @endif
  <input type="file" class="form-control"   name="foto"   id="foto" ></br>
</div>
  <input type="submit" class="btn btn-success" value="{{ $modo }}">
  <a  class="btn btn-primary" href="{{url('empleado/')}}"> regresa </a>
</br>