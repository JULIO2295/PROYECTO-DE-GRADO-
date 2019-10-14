@extends ('layouts.admin')
@section ('contenido')


<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Profesores</h3>
		<br>
		@include('cursos.profesor.search')
	</div>

</div>

<div class="row">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table">
				<thead class="bg-primary text-white">  <!--cabezera de la tabla -->
					<th>Id</th>
					<th>Username</th>
					<th>Rol</th>
					<th>Nombre</th>
					<th>Ci</th>
					<th>Direccion</th>
					<th>Telefono</th>
					<th>Genero</th>
					<th>Foto</th>
					<th>Opciones</th>
				</thead>
				

				@foreach ($usuarios as $usu) <!--es un bucle-->

				<tr>  <!--filas de la tabla-->
					<td>{{ $usu->id}}</td>
					<td>{{ $usu->username}}</td>
					<td>{{ $usu->rol}}</td>
					<td>{{ $usu->nombre.' '.$usu->apellidos}}</td>
					<td>{{ $usu->ci}}</td>
					<td>{{ $usu->direccion}}</td>
					<td>{{ $usu->telefono}}</td>
				    <td>{{ $usu->genero}}</td>
				    <td>
				    	<img src="{{asset('imagenes/usuarios/'.$usu->imagen)}}" alt="{{  $usu->nombre}}" height="100px" width="100px" class="img-thumbnail" style="width: 100px;height: 100px;">
				    </td>
					
					<td>
                     <a href="{{ route('detalle-profesor', $usu->id) }}"><button class="btn btn-warning"> <i class="fas fa-file-alt"></i> Detalles</button></a>
					</td>


				</tr>
  				

				@endforeach



			</table>
		</div>

		

		{{ $usuarios->render()}}

	</div>
</div>



@push ('scripts')

<script type="text/javascript">
                                         
document.querySelector('.delete_form').addEventListener('submit', function (e) {
        let form = this;

        e.preventDefault(); // <--- prevent form from submitting

        swal({
            title: "Eliminar Usuario",
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
                  'El usuario ha sido eliminado.',
                  'success'
                   )
            } else {
                swal("Cancelado", "No se ha eliminado ningun usuario:)", "error");
                e.preventDefault();
                return false;
            }
        });
    });

</script>
                           



@endpush



@endsection