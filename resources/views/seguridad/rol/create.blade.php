@extends ('layouts.admin')
@section ('contenido')

<div class="row">
   <div class="col-lg-12 col-md-6 col-xs-12">
	<h3>Nuevo Rol</h3>
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

	{!!Form::open(array('url'=>'seguridad/rol','method'=>'POST','autocomplete'=>'off'))!!}
	{{Form::token()}}

	<div class="row">
		
		 <div class="col-lg-12 col-md-6 col-xs-12">
	      <div class="form-group">
		    <label for="nombre">Nombre</label>
		     <input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="Nombre..">

	        </div>
	    </div>
    </div>

	<div class="row">
		
		 <div class="col-lg-12 col-md-6 col-xs-12">
	      <div class="form-group">
		    <label for="descripcion">Descripcion</label>
		     <textarea type="text" name="descripcion" required value="{{old('descripcion')}}" class="form-control" placeholder="Descripcion.." rows="5"></textarea>

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