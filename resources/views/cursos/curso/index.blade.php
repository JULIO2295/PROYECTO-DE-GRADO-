@extends ('layouts.admin')
@section ('contenido')


<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Cursos  <a href="curso/create"><button class="btn btn-success"><i class="fas fa-plus"></i> Nuevo</button></a>  <a href="#"><button class="btn btn-warning"><i class="far fa-file-pdf"></i> PDF</button></a> </h3>
		<br>
		@include('cursos.curso.search')
	</div>

</div>

<div class="row">

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-reponsive">
		<table class="table table-striped table-bordered">
				<thead class="bg-primary text-white">  <!--cabezera de la tabla -->
					<th>Id</th>
					<th>Nombre</th>
					<th>Profesor</th>
					<th>Descripción</th>
					<th>Estado</th>
					<th>Opción</th>
				</thead>

				@foreach ($cursos as $cur) <!--es un bucle-->

				<tr>  <!--filas de la tabla-->
					<td>{{ $cur->idcurso}}</td>
					<td>{{ $cur->nombre}}</td>
					<td>{{ $cur->profesor}}</td>
					<td>{{ $cur->descripcion}}</td>
					
					<td>
					@if($cur->estado=='Inactivo')
					<span class="badge bg-danger" style="color: white;">{{ $cur->estado}}</span>
					@else
					<span class="badge bg-warning" style="color: white;">{{ $cur->estado}}</span>
					@endif
				     </td>
					<td>
						<a href="{{URL::action('CursoController@edit',$cur->idcurso)}}"><button class="btn btn-sm btn-info"> <i class="fas fa-pencil-alt"></i></i> </button></a>

					{!! Form::open(['method' => 'DELETE','route' => ['curso.destroy', $cur->idcurso],'style'=>'display:inline','id' => 'confirm_delete']) !!}		
					<button class="btn btn-sm btn-danger" id="delete-btn" type="submit"><i class="fas fa-trash-alt"></i> </button>

					{{ Form::close() }}


					</td>


				</tr>
  				
				

				@endforeach

			</table>
		</div>

		

		{{ $cursos->render()}}

	</div>
</div>




@push ('scripts')



<script type="text/javascript">
                      document.querySelector('#confirm_delete').addEventListener('submit', function(e) {
                                    var form = this;
                                    e.preventDefault();
                                    swal({
                                        title: "¿Estas seguro que deseas eliminar este Curso?",
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
                                                text: 'El curso ha sido eliminado con exito!',
                                                type: 'success'
                                            }, function() {
                                                form.submit();
                                            });
                                        } else {
                                            swal("Cancelado", "El Curso no ha sido eliminado", "error");
                                        }
                                    });
                                });
                            </script>  

                           



@endpush




@endsection