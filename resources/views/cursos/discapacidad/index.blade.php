@extends ('layouts.admin')
@section ('contenido')


<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Discapacidades  <a href="discapacidad/create"><button class="btn btn-success"><i class="fas fa-plus"></i> Nuevo</button></a>  <a href="/rol-pdf"><button class="btn btn-warning"><i class="far fa-file-pdf"></i> PDF</button></a> </h3>
		<br>
		@include('cursos.discapacidad.search')
	</div>

</div>

<div class="row">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-reponsive">
	<table class="table table-striped table-bordered">
				<thead class="bg-primary text-white">  <!--cabezera de la tabla -->
					<th>Id</th>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Grado</th>
					<th>Estado</th>
					<th>Opciones</th>
				</thead>

				@foreach ($discapacidads as $dis) <!--es un bucle-->

				<tr>  <!--filas de la tabla-->
					<td>{{ $dis->iddiscapacidad}}</td>
					<td>{{ $dis->nombre}}</td>
					<td>{{ $dis->descripcion}}</td>
					<td>{{ $dis->grado}}</td>
					<td>
					@if($dis->estado=='Inactivo')
					<span class="badge bg-danger" style="color: white;">{{ $dis->estado}}</span>
					@else
					<span class="badge bg-warning" style="color: white;">{{ $dis->estado}}</span>
					@endif
				     </td>
					<td>
					<a href="{{URL::action('DiscapacidadController@edit',$dis->iddiscapacidad)}}"><button class="btn btn-info"> <i class="fas fa-pencil-alt"></i></i> </button></a>


					{!! Form::open(['method' => 'DELETE','route' => ['discapacidad.destroy', $dis->iddiscapacidad],'style'=>'display:inline','id' => 'confirm_delete']) !!}		
					<button class="btn btn-danger" id="delete-btn" type="submit"><i class="fas fa-trash-alt"></i> </button>
					{{ Form::close() }}


					</td>


				</tr>
  				
				
				@endforeach

			</table>
		</div>


		@include('sweetalert::alert')

		{{ $discapacidads->render()}}

	</div>
</div>



@push ('scripts')

<script type="text/javascript">
                                         
                      document.querySelector('#confirm_delete').addEventListener('submit', function(e) {
                                    var form = this;
                                    e.preventDefault();
                                    swal({
                                        title: "¿Estas seguro que deseas eliminar esta Discapacidad?",
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
                                                title: '¡Eliminada!',
                                                text: 'La Discapacidad ha sido eliminada con exito!',
                                                type: 'success'
                                            }, function() {
                                                form.submit();
                                            });
                                        } else {
                                            swal("Cancelado", "La Discapacidad no ha sido eliminada", "error");
                                        }
                                    });
                                });

</script>
                           



@endpush




@endsection