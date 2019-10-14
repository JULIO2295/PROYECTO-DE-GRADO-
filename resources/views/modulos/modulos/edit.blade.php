@extends ('layouts.admin')
@section ('contenido')

<div class="row">
	<div class="col-lg-12 col-md-6 col-xs-12">
	<h3>Editar Rol: {{ $modulo->nombre}} </h3>
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

			{!!Form::model($modulo,['method'=>'PATCH','route'=>['modulos.update',$modulo->idmodulo]])!!}
	{{Form::token()}}

	<div class="row">
		
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
	      <div class="form-group">
		    <label for="nombre">Nombre</label>
		<input type="text" name="nombre" class="form-control" value="{{$modulo->nombre}}" placeholder="Nombre..">

	        
	    </div>
    </div>

    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
	      <div class="form-group">
		    <label for="nivel">Nivel</label>
		<input type="text" name="nivel" class="form-control" value="{{$modulo->nivel}}" placeholder="Nivel..">

	        
	    </div>
    </div>
</div>

	<div class="row">
		
	<div class="col-lg-12 col-md-6 col-xs-12">
	      <div class="form-group">
		    <label for="descripcion">Descripcion</label>
		     <textarea type="text" name="descripcion" class="form-control" value="{{$modulo->descripcion}}" placeholder="Descripcion.." rows="5">{{$modulo->descripcion}}</textarea>

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