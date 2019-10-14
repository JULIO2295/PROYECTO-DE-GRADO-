@extends ('layouts.admin')
@section ('contenido')

<div class="row">
	<div class="col-lg-12 col-md-6 col-xs-12">
	<h3>Editar Discapacidad: {{ $discapacidad->nombre}} </h3>
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

			{!!Form::model($discapacidad,['method'=>'PATCH','route'=>['discapacidad.update',$rol->idrol]])!!}
	{{Form::token()}}

<div class="row">
		
		<div class="col-lg-12 col-md-6 col-xs-12">
	      <div class="form-group">
		    <label for="nombre">Nombre</label>
		<input type="text" name="nombre" class="form-control" value="{{$discapacidad->nombre}}" placeholder="Nombre..">

	        
	    </div>
    </div>

    <div class="col-lg-6 col-md-6 col-xs-6">
	      <div class="form-group">
		    <label for="grado">Grado</label>
		<input type="text" name="grado" class="form-control" value="{{$discapacidad->grado}}" placeholder="Grado..">

	        
	    </div>
    </div>
</div>

	<div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
	      <div class="form-group">
		    <label for="descripcion">Descripcion</label>
		     <textarea type="text" name="descripcion" class="form-control" value="{{$rol->descripcion}}" placeholder="Descripcion.." rows="5">{{$discapacidad->descripcion}}</textarea>

	        </div>
	    </div>

	        
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