@extends ('layouts.admin')
@section ('contenido')


<div class="card-content">

	{!!$contenido->descripcion!!}
	
</div>    


	<div class="form-group row">
		<br>
		<br>
        <div class="col-md-12">
            <a href="{{URL::previous()}}"><button class="btn btn-info">Cerrar</button></a>
        </div>
    </div>





@endsection