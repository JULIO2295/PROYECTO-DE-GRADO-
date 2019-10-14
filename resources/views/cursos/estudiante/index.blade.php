@extends ('layouts.admin')
@section ('contenido')


<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Cursos</h3>
		<br>
		
	</div>

</div>

	<div class="row">
    @foreach($cursos as $data)
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-body" style="background-color: #fc4b6c;border-color: #fc4b6c;">
          <div class="row">
            <div class="col-5 col-md-3">
              <div class="icon-big text-center icon-warning">
                <i class="nc-icon nc-box text-success"></i>
              </div>
            </div>
            <div class="col-7 col-md-9">
              <div class="numbers">
                <p class="card-title"><strong style="color: white;">{{$data->nombre}}</strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer ">
          <hr>
          <div class="stats">
            <button id="{{$data->idcurso}}" class="btn btn-primary btn-sm btn-block">
            	<i class="fas fa-list"></i> Ver Lista
            </button>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success btn-sm btn-block" id="add{{$data->idcurso}}" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-plus-circle"></i> Agregar Nuevo
            </button>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>


  	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header" style="background-color: #007bff;">
	        <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Nuevo Estudiante <label id="tcurso"></label></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>

	<form action="{{route('estudiante.store')}}" method="POST" id="form_estudiante">
	      <div class="modal-body">
      		@csrf
        
           
      		<input type="hidden" id="curso" name="idcurso" class="form-control">		
          			<label for="discapacidads">Discapacidad</label>
          			  <select name="iddiscapacidad" class="form-control">
                            @foreach ($discapacidads as $dis)
                            <option value="{{$dis->iddiscapacidad}}">{{$dis->nombre}}</option>
                            @endforeach
                            </select>
              
          <div class="row">
          <div class="col-sm-6">
					<label for="nombre">Nombre</label>
					<input type="text" class="form-control" name="nombre" autocomplete="off" required="">
          </div>
          <div class="col-sm-6">
					<label for="apellidos">Apellidos</label>
					<input type="text" class="form-control" name="apellidos" autocomplete="off">
          </div>
          </div>
					<label for="direccion">Dirección</label>
					<input type="text" class="form-control" name="direccion" autodcomplete="off">
					<label for="genero">Genero</label>
					<select name="genero" class="form-control" required="">
						<option value="" selected="">Seleccione Genero</option>
						<option value="Femenino">Femenino</option>
						<option value="Masculino">Masculino</option>
					</select>
					<label for="telefono">Teléfono</label>
					<input type="text" class="form-control" name="telefono" autocomplete="off">
					<label for="fecha_nac">Fecha Nacimiento</label>
					<input type="date" class="form-control" name="fecha_nac" autocomplete="off">
					<label for="ci">Ci</label>
					<input type="text" class="form-control" name="ci" autocomplete="off">
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">
	        	<i class="fa fa-times-circle"></i> Cerrar
	        </button>
	        <button type="submit" class="btn btn-primary">
	        	<i class="fa fa-save"></i> Guardar
	        </button>
	      </div>
	      
	      </form>
	    </div>
	  </div>
	</div>


@foreach($cursos as $data)
  <div class="col-md-12" id="curso{{$data->idcurso}}">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">
        	Lista de Estudiantes {{$data->nombre}}
        </h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead class="text-primary">
              <th>Opciones</th>
              <th>Nombre</th>
              <th>Apellidos</th>              
              <th>Discapacidad</th>
              <th>Ci</th>
              <th>Genero</th>
              <th>Fecha Nac.</th>
              <th>Estado</th>
            </thead>
            <tbody>
              @foreach($estudiantes as $dato)
              @if($data->idcurso == $dato->idcurso)
              <tr>
              	<td>
 
              			<a href="{{route('estudiante.edit', $dato->idpersona)}}" class="btn btn-warning btn-sm">Editar</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['estudiante.destroy', $dato->idpersona],'style'=>'display:inline','id' => 'confirm_delete']) !!}
              			<button type="submit" class="btn btn-danger btn-sm" id="delete-btn">Eliminar</button>	  
              		{{ Form::close() }}
              	</td>
              	<td>{{$dato->nombre}}</td>
              	<td>{{$dato->apellidos}}</td>
              	<td>{{$dato->discapacidad}}</td>
              	<td>{{$dato->ci}}</td>
              	<td>{{$dato->genero}}</td>
              	<td>{{$dato->fecha_nac}}</td>
                <td>
                  @if($dato->estado == 'Activo') 
                    <span class="badge badge-success">{{$dato->estado}}</span>
                  @else
                    <span class="badge badge-danger">{{$dato->estado}}</span>
                  @endif
                </td>
              </tr>
              @endif
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  @endforeach




 <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
 <script src="{{ asset('plugins/bootstrap/js/tether.min.js')}}"></script>
 <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
 <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
 {!! JsValidator::formRequest('sisEscuela\Http\Requests\PersonaFormRequest', '#form_estudiante') !!}





@push ('scripts')
  <script type="text/javascript">
	$(function(){
		@foreach($cursos as $data)
	  	$('#curso{{$data->idcurso}}').hide();

	  	$('#{{$data->idcurso}}').on('click', function(){
		   	$('#curso{{$data->idcurso}}').toggle(1000);
		  });

		  $('#add{{$data->idcurso}}').on('click', function(){
		  	$('#curso').val('{{$data->idcurso}}');
		  	$('#tcurso').text('{{$data->nombre}}');
		  });
	  @endforeach

	  /*$('#button').on('click', function(){
	    $('#form').toggle(1000);
	    $('#button').hide(); 
	  });
	  */
	});



                      document.querySelector('#confirm_delete').addEventListener('submit', function(e) {
                                    var form = this;
                                    e.preventDefault();
                                    swal({
                                        title: "¿Estas seguro que deseas eliminar este Estudiante?",
                                        type: "warning",
                                        showCancelButton: true,
                                        confirmButtonColor: '#DD6B55',
                                        confirmButtonText: '¡Si, estoy seguro!',
                                        cancelButtonText: "Cancelar",
                                        closeOnConfirm: false,
                                        closeOnCancel: false
                                    },
                                    function(isConfirm) {
                                        if (isConfirm) {
                                            swal({
                                                title: '¡Eliminado!',
                                                text: 'El Estudiante ha sido eliminado con exito!',
                                                type: 'success'
                                            }, function() {
                                                form.submit();
                                            });
                                        } else {
                                            swal("Cancelado", "El Estudiante no ha sido eliminado", "error");
                                        }
                                    });
                                });





	</script>

@endpush

@endsection