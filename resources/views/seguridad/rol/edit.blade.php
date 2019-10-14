@extends ('layouts.admin')
@section ('contenido')

<div class="row">
	<div class="col-lg-12 col-md-6 col-xs-12">
	<h3>Editar Rol: {{ $rol->nombre}} </h3>
	<br>
	@if (count($errors)>0)
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
	@endif
   </div>
 </div>

			{!!Form::model($rol,['method'=>'PATCH','route'=>['rol.update',$rol->idrol]])!!}
	{{Form::token()}}

	<div class="row">
		
		<div class="col-lg-12 col-md-6 col-xs-12">
	      <div class="form-group">
		    <label for="nombre">Nombre</label>
		<input type="text" name="nombre" class="form-control" value="{{$rol->nombre}}" placeholder="Nombre..">

	        
	    </div>
    </div>
</div>

	<div class="row">
		
	<div class="col-lg-12 col-md-6 col-xs-12">
	      <div class="form-group">
		    <label for="descripcion">Descripcion</label>
		     <textarea type="text" name="descripcion" class="form-control" value="{{$rol->descripcion}}" placeholder="Descripcion.." rows="5">{{$rol->descripcion}}</textarea>

	        </div>
	    </div>
    </div>



	

   <div class="row">
	  <div class="form-group">
		  <button class="btn btn-primary" type="submit">Guardar</button>
		  <button class="btn btn-danger" type="reset">Cancelar</button>
	  </div>
   </div>


	{!!Form::close()!!}




@endsection