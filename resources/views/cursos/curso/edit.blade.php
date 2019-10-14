@extends ('layouts.admin')
@section ('contenido')

<div class="row">
  <div class="col-lg-12 col-md-6 col-xs-12">
	<h3>Editar Cursoo: {{ $curso->nombre}} </h3>
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


	  {!!Form::model($curso,['method'=>'PATCH','route'=>['curso.update',$curso->idcurso],'files'=>'true'])!!}
	{{Form::token()}}


	<div class="row">
		
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
	      <div class="form-group">
		    <label for="nombre">Nombre</label>
		     <input type="text" name="nombre" required value="{{$curso->nombre}}" class="form-control" placeholder="Nombre..">

	        </div>
	    </div>


	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
	      <div class="form-group">
	      	<label for="idprofesor">Profesor(Busque el nombre de la Persona)</label>
		    <select name="idprofesor" id="idprofesor" class="form-control selectpicker"  data-live-search="true">

		    	@foreach($profesors as $profesor)
		    	<option value="{{$profesor->id}}">{{$profesor->nombre.' '.$profesor->apellidos}}</option>
		    	@endforeach

		     </select>

	        </div>
	    </div>

</div>

	 <div class="row">

         <div class="col-lg-12 col-md-6 col-xs-12">
	      <div class="form-group">
		    <label for="descripcion">Descripcion</label>
		     <textarea type="text" name="descripcion" required value="{{old('descripcion')}}" class="form-control" placeholder="Descripcion.." rows="5">{{$curso->descripcion}}</textarea>

	        </div>
	    </div>


    </div>






	    <div class="row">

	       <div class="col-lg-12 col-md-6 col-xs-12">
	        	<div class="form-group">
		         <button class="btn btn-primary" type="submit">Guardar</button>
		         <button class="btn btn-danger" type="reset">Cancelar</button>

	            </div>

	         </div>

	    </div>





	{{Form::Close()}}


@push ('scripts')


@endpush




@endsection