@extends ('layouts.admin')
@section ('contenido')

<div class="row">
   <div class="col-lg-12 col-md-6 col-xs-12">
	<h3>Nueva Actividad</h3>
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

	{!!Form::open(array('url'=>'modulos/actividad','method'=>'POST','autocomplete'=>'off'))!!}
	{{Form::token()}}

	<div class="row">

	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
	      <div class="form-group">
	      	<label for="idprofesor">Contenido(Busque el nombre del Contenido)</label>
		    <select name="idcontenido" id="idcontenido" class="form-control selectpicker"  data-live-search="true">

		    	@foreach($contenidos as $contenido)
		    	<option value="{{$contenido->idcontenido}}">{{$contenido->nombre}}</option>
		    	@endforeach

		     </select>

	        </div>
	    </div>


	   <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
	      <div class="form-group">
	      	<label for="idprofesor">Curso(Busque el nombre del Cuso)</label>
		    <select name="idcurso" id="idcuso" class="form-control selectpicker"  data-live-search="true">

		    	@foreach($cursos as $curso)
		    	<option value="{{$curso->idcurso}}">{{$curso->nombre}}</option>
		    	@endforeach

		     </select>

	        </div>
	    </div>



	</div>

	<div class="row">
		 <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
	      <div class="form-group">
		    <label for="nombre">Nombre de la Actividad</label>
		     <input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="Nombre..">

	        </div>
	    </div>

    </div>

	<div class="row">
		
		 <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
	      <div class="form-group">
		    <label for="descripcion">Descripcion</label>
		     <textarea type="text" name="descripcion" required value="{{old('descripcion')}}" class="form-control" placeholder="Descripcion.." rows="10" id="body"></textarea>

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