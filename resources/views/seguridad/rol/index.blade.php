@extends ('layouts.admin')
@section ('contenido')


<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Roles  <a href="rol/create"><button class="btn btn-success"><i class="fas fa-plus"></i> Nuevo</button></a>  <a href="/rol-pdf"><button class="btn btn-warning"><i class="fas fa-file-alt"></i> PDF</button></a> </h3>
		<br>
		@include('seguridad.rol.search')
	</div>

</div>

<div class="row">

   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
	     <table class="table">
				<thead class="bg-primary text-white">  <!--cabezera de la tabla -->
					<th>Id</th>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Estado</th>
					<th>Opciones</th>
				</thead>

				@foreach ($roles as $ro) <!--es un bucle-->

				<tr>  <!--filas de la tabla-->
					<td>{{ $ro->idrol}}</td>
					<td>{{ $ro->nombre}}</td>
					<td>{{ $ro->descripcion}}</td>
					<td>
					@if($ro->estado=='Inactivo')
					<span class="badge bg-danger" style="color: white;">{{ $ro->estado}}</span>
					@else
					<span class="badge bg-warning" style="color: white;">{{ $ro->estado}}</span>
					@endif
				     </td>
					<td>
						<a href="{{URL::action('RolController@edit',$ro->idrol)}}"><button class="btn btn-info"> <i class="fas fa-pencil-alt"></i></i> </button></a>


					{!! Form::open(['method' => 'DELETE','route' => ['rol.destroy', $ro->idrol],'style'=>'display:inline','class' => 'delete_form']) !!}		
					<button class="btn btn-danger" id="delete-btn" type="submit"><i class="fas fa-trash-alt"></i> </button>
					{{ Form::close() }}


					</td>


				</tr>
  				
				
				@endforeach

			</table>
		</div>


		
		{{ $roles->render()}}

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
            // confirmButtonColor: '#3085d6',
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
                  'El Rol ha sido eliminado.',
                  'success'
                   )
            } else {
                swal("Cancelado", "No se ha eliminado ningun rol:)", "error");
                e.preventDefault();
                return false;
            }
        });
    });

</script>
                           



@endpush




@endsection