@extends ('layouts.admin')
@section ('contenido')


<div class="col-md-6">
    <div class="card card-outline-warning">
      <div class="card-header">
     <h4 class="m-b-0 text-white">Editar Datos del Estudiante</h4>
      </div>
      <div class="card-body">
        <form action="{{route('estudiante.update', $estudiante->idpersona)}}" method="POST">
          @csrf
          @method('PUT')
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" class="form-control" value="{{$estudiante->nombre}}" required="">
          <label for="apellido_p">Apellidos</label>
          <input type="text" name="apellidos" class="form-control" value="{{$estudiante->apellidos}}" required="">
          <label for="discapacidads">Discapacidad</label>
          <select name="iddiscapacidad" class="form-control">
              @foreach ($discapacidads as $dis)
              <option value="{{$dis->iddiscapacidad}}">{{$dis->nombre}}</option>
              @endforeach
              </select>
          <label for="apellido_m">Dirección</label>
          <input type="text" name="direccion" class="form-control" value="{{$estudiante->direccion}}" required="">
          <label for="genero">Genero</label>
          <select name="genero" class="form-control" required="">
            <option value="">Seleccione Genero</option>
            <option value="Femenino">Femenino</option>
            <option value="Masculino">Masculino</option>
          </select>
          <label for="telefono">Teléfono</label>
          <input type="text" name="telefono" class="form-control" value="{{$estudiante->telefono}}" required="">
          <label for="fecha_nac">Fecha Nacimiento</label>
          <input type="text" name="fecha_nac" class="form-control" value="{{$estudiante->fecha_nac}}" required="">
          <label for="apellido_p">Ci</label>
          <input type="text" name="ci" class="form-control" value="{{$estudiante->ci}}" required="">
          <button type="submit" class="btn btn-primary btn-block">Guardar Cambios</button>
        </form>
      </div>
    </div>
  </div>
</div>



@endsection