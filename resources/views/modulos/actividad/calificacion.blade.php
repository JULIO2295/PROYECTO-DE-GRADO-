@extends ('layouts.admin')
@section ('contenido')

<div class="row">
   <div class="col-lg-12 col-md-6 col-xs-12">
	<h3>Calificar Actividad:  {{$actividad->actividad}}  Curso: {{$actividad->curso}}</h3>
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



<div class="row">
	    	
	    	<div class="panel panel-primary">
	    		
	    		<div class="panel-body">






	    		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

	    			<table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
	    				
	    				<thead style="background-color: #A9D0F5">
	    			
	    					<th>Nº</th>
	    					<th>Estudiante</th>
	    					<th>Nota</th>

	    				</thead>

	    				<tfoot>
	    					
	    					<th></th>
	    					<th></th>
	    					<th></th>



	    				</tfoot>

	    				<tbody>

	    					
	    					
	    					@foreach($actividads as $ac)
	    					
	    					<tr>
	    						<td>{{$c=$c+1}}</td>
	    						<td>{{$ac->estudiante}}</td>
	                           <td> <input type="text" name="nota" required value="{{old('nombre')}}" class="form-control" placeholder="Nota..">
                               </td>
	    						
	    						
	    					</tr>
	    					@endforeach



	    				</tbody>


	    			</table>


	    		</div>

	    		     <div class="form-group row">
                            <div class="col-md-12">
                                <a href="{{URL::previous()}}"><button class="btn btn-warning">Cerrar</button></a>
                            </div>
                     </div>




	    		</div>

	    	</div>

			</div>





@endsection