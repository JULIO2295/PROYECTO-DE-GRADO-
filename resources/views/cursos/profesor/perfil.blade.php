@extends ('layouts.admin')
@section ('contenido')

<div class="card">
<div class="card-header" style="background: linear-gradient(50deg, #4F4F4F, #D0D0D0);">






				<h4 class="card-title"><strong style="color: white;">Perfil del Profesor: {{$usuario->nombre.' '.$usuario->apellidos}}</strong></h4>
									
								</div>
								<div class="card-body">
									<p class="demo">
										<div class="row">
											<div class="col-sm-1">
												
											</div>
										</p><div class="avatar avatar-xxl">
									<img src="{{asset('imagenes/usuarios/'.$usuario->imagen)}}" alt="{{$usuario->nombre}}" height="120px" width="120px" class="avatar-img rounded-circle">
											
										</div>

										<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
											<label><strong>Nombre Completo: </strong>{{$usuario->nombre.' '.$usuario->apellidos}}</label><br>
											<label><strong>Cédula de Identidad: </strong>{{$usuario->ci}}</label><br>
											<label><strong>Dirección: </strong>{{$usuario->direccion}}</label><br>
											<label><strong>Teléfono: </strong>{{$usuario->telefono}}</label><br>
											<label><strong>Género: </strong>{{$usuario->genero}}</label><br>
											<label><strong>Email: </strong>{{$usuario->email}}</label>
										</div>
									</div>


								
								</div>
</div>

@endsection