@extends ('layouts.admin')
@section ('contenido')

<div class="row">
	<div class="col-lg-12 col-md-6 col-xs-12">
	<h3>Editar Contenido: {{$contenido->nombre}} </h3>
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

			{!!Form::model($contenido,['method'=>'PATCH','route'=>['contenido.update',$contenido->idcontenido]])!!}
	{{Form::token()}}

	<div class="row">

	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
	      <div class="form-group">
	      	<label for="idprofesor">Módulo(Busque el nombre del Módulo)</label>
		    <select name="idmodulo" id="idmodulo" class="form-control selectpicker"  data-live-search="true">

		    	@foreach($modulos as $modulo)
		    	<option value="{{$modulo->idmodulo}}">{{$modulo->nombre.' - '.$modulo->nivel}}</option>
		    	@endforeach

		     </select>

	        </div>
	    </div>
		
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
	      <div class="form-group">
		    <label for="nombre">Nombre del Contenido</label>
		<input type="text" name="nombre" class="form-control" value="{{$contenido->nombre}}" placeholder="Nombre..">

	        
	    </div>
    </div>


</div>

	<div class="row">
		
	<div class="col-lg-12 col-md-6 col-xs-12">
	      <div class="form-group">
		    <label for="descripcion">Descripcion</label>
		     <textarea type="text" name="descripcion" class="form-control" value="{{$contenido->descripcion}}" placeholder="Descripcion.." rows="10" id="body">{{$contenido->descripcion}}</textarea>

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