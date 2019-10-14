@extends ('layouts.admin')
@section ('contenido')


<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Actividades  <a href="actividad/create"><button class="btn btn-success"><i class="fas fa-plus"></i> Nuevo</button></a>  <a href="#"><button class="btn btn-warning"><i class="fas fa-file-alt"></i> PDF</button></a> </h3>
		<br>
		@include('modulos.actividad.search')
	</div>

</div>

<div class="row">

   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
	     <table class="table">
				<thead class="bg-primary text-white">  <!--cabezera de la tabla -->
					<th>Id</th>
					<th>Contenido</th>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Fecha Creación</th>
					<th>Estado</th>
					<th>Opciones</th>
				</thead>

				@foreach ($actividads as $ac) <!--es un bucle-->

				<tr>  <!--filas de la tabla-->
					<td>{{ $ac->idactividad}}</td>
					<td>{{ $ac->contenido}}</td>
					<td>{{ $ac->nombre}}</td>
					<td>{!! $ac->descripcion !!}</td>
					<td>{{ $ac->fecha_creacion}}</td>
					

					<td>
					@if($ac->estado=='Inactivo')
					<span class="badge bg-danger" style="color: white;">{{ $ac->estado}}</span>
					@else
					<span class="badge bg-warning" style="color: white;">{{ $ac->estado}}</span>
					@endif
				     </td>
					<td>
						<a href="{{URL::action('ActividadController@edit',$ac->idactividad)}}"><button class="btn btn-info"> <i class="fas fa-pencil-alt"></i></i> </button></a>


					{!! Form::open(['method' => 'DELETE','route' => ['actividad.destroy', $ac->idactividad],'style'=>'display:inline','class' => 'delete_form']) !!}		
					<button class="btn btn-danger" id="delete-btn" type="submit"><i class="fas fa-trash-alt"></i> </button>
					{{ Form::close() }}

					<a href="{{ route('calificacion', $ac->idactividad) }}"><button class="btn btn-inverse"> <i class="fas fa-clipboard"></i> Evaluar</button></a>



					</td>


				</tr>
  				
				
				@endforeach

			</table>
		</div>


		
		{{ $actividads->render()}}

	</div>
</div>



@push ('scripts')

<script type="text/javascript">
                                         
document.querySelector('.delete_form').addEventListener('submit', function (e) {
        let form = this;

        e.preventDefault(); // <--- prevent form from submitting

        swal({
            title: "Eliminar Rol",
            text: "Estas seguro que deseas continuar!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, estoy seguro!',
            cancelButtonText: "No, cancelar!",
            closeOnConfirm: false,
            closeOnCancel: false,
            dangerMode: true,
        }).then((willPromote) => {
            e.preventDefault();
            if (willPromote.value) {
                form.submit(); // <--- submit form programmatically
                Swal.fire(
                  'Eliminado!',
                  'El Módulo ha sido eliminado.',
                  'success'
                   )
            } else {
                swal("Cancelado", "No se ha eliminado ningun módulo:)", "error");
                e.preventDefault();
                return false;
            }
        });
    });

</script>
                           



@endpush




@endsection