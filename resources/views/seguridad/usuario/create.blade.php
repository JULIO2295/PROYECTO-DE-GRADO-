@extends ('layouts.admin')
@section ('contenido')

<div class="row">
   <div class="col-lg-12 col-md-6 col-xs-12">
	<h3>Nuevo Usuario</h3>
	<br>
	@if (count($errors)>0)
	    <div class="alert alert-danger">
		  <ul>
			@foreach ($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		   </ul>
	       </div>
     </div>
</div>
	@endif

	{!!Form::open(array('url'=>'seguridad/usuario','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
	{{Form::token()}}

    <div class="row">
        
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
  <label for="idrol">{{ __('Rol') }}</label>

                  
                            <select name="idrol" class="form-control">
                            @foreach ($roles as $ro)
                            <option value="{{$ro->idrol}}">{{$ro->nombre}}</option>
                            @endforeach
                            </select>

                                @if ($errors->has('idrol'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('idrol') }}</strong>
                                    </span>
                                @endif
                   
            </div>

  
        
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <label for="username">{{ __('Username') }}</label>

                            
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                          
                        </div>
    </div>

            <div class="row">

                  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <label for="nombre">{{ __('Nombre') }}</label>

                           
                                <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                       
                        </div>
           

    
              <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

                    
                            <label for="apellidos">{{ __('Apellidos') }}</label>

                           
                                <input id="apellidos" type="text" class="form-control{{ $errors->has('apellidos') ? ' is-invalid' : '' }}" name="apellidos" value="{{ old('apellidos') }}" required autofocus>

                                @if ($errors->has('apellidos'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('apellidos') }}</strong>
                                    </span>
                                @endif
                           
                        
                </div>
    </div>


<div class="row">
          <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

                        
                            <label for="ci">{{ __('Ci') }}</label>

                          
                          <input id="ci" type="text" class="form-control{{ $errors->has('ci') ? ' is-invalid' : '' }}" name="ci" value="{{ old('ci') }}" required autofocus>


                                @if ($errors->has('ci'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ci') }}</strong>
                                    </span>
                                @endif
                          
                        </div>

  

                      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <label for="direccion" >{{ __('Dirección') }}</label>

                          
                                <input id="direccion" type="text" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" value="{{ old('direccion') }}" required autofocus>

                                @if ($errors->has('direccion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                      
                        </div>


                    </div>

        <div class="row">

                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <label for="direccion" >{{ __('Teléfono') }}</label>

                            
                                <input id="telefono" type="text" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ old('telefono') }}" required autofocus>

                                @if ($errors->has('telefono'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                          
                        </div>
                         


                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <label for="genero">{{ __('Género') }}</label>

                          
                                <input id="genero" type="text" class="form-control{{ $errors->has('genero') ? ' is-invalid' : '' }}" name="genero" value="{{ old('genero') }}" required autofocus>

                                @if ($errors->has('genero'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('genero') }}</strong>
                                    </span>
                                @endif
                         
                        </div>

     </div>

     <div class="row">


                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <label for="email">{{ __('E-Mail') }}</label>

                           
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                          
                        </div>
 

                       <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <label for="password" >{{ __('Contraseña') }}</label>

                           
                         <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{old('password')}}">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

        </div>

        <div class="row">


                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <label for="password-confirm" >{{ __('Confirme Contraseña') }}</label>

                           
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{old('password-confirm')}}">
                          
                        </div>

        

                
                     <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <label for="imagen">{{ __('Foto') }}</label>

                            
                                <input type="file" name="imagen" id="imagen" class="form-control">
                                <div id="imagePreview"></div>
                           
                        </div>
    </div>

    <div class="row">


      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<button class="btn btn-primary" type="submit">Guardar</button>
		<button class="btn btn-danger" type="reset">Cancelar</button>
	  </div>
    </div>


	{!!Form::close()!!}




@push ('scripts')
<script src="{{ asset('js/jquery-latest.min.js')}}"></script>
<script src="{{ asset('js/bootstrap-show-password.min.js')}}"></script> 
<script  type="text/javascript" charset="UTF-8" >

(function(){
    function filePreview(input){
        if (input.files && input.files[0]) {

            var reader = new FileReader();


            reader.onload = function(e){
               $('#imagePreview').html("<img src='"+e.target.result+"' width='150px' height='150px' />");
            }

            reader.readAsDataURL(input.files[0]);

        }
    }


    $('#imagen').change(function(){
        filePreview(this);
    });




})();

  $(function() {
    $('#password').password()
  });

   $(function() {
    $('#password-confirm').password()
  });

  
  </script>

@endpush



@endsection