@extends ('layouts.admin')
@section ('contenido')

<div class="row">
   <div class="col-lg-12 col-md-6 col-xs-12">
	<h3>Nueva Discapacidad</h3>
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

	{!!Form::open(array('url'=>'estudiante/discapacidad','method'=>'POST','autocomplete'=>'off'))!!}
	{{Form::token()}}

	<div class="row">
		
		 <div class="col-lg-6 col-md-6 col-xs-6">
	      <div class="form-group">
		    <label for="nombre">Nombre</label>
		     <input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="Nombre..">

	        </div>
	    </div>

	    <div class="col-lg-6 col-md-6 col-xs-6">
	      <div class="form-group">
		    <label for="descripcion">Grado</label>
		     <input type="text" name="grado" required value="{{old('nombre')}}" class="form-control" placeholder="Grado..">

	        </div>
	    </div>

    </div>

	<div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
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