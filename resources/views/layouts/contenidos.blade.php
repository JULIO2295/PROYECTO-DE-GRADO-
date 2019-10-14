@extends ('layouts.scroll')
@section ('content')



      <div class="row">
        <div class="col-md-12">
          <div class="col-md-12" id="m-products" data-animated="0">
            <h2 style="text-align: center;font-weight: 700">Nuestros Contenidos</h2>
<br>
            <div class="row">

            @foreach($contenidos as $con)
              <div class="col-md-4" >
                <div class="product-wrap" style="background: rgba(147,206,222,1);
                background: -moz-linear-gradient(left, rgba(147,206,222,1) 0%, rgba(21,172,214,1) 41%, rgba(16,232,189,1) 100%);
                background: -webkit-gradient(left top, right top, color-stop(0%, rgba(147,206,222,1)), color-stop(41%, rgba(21,172,214,1)), color-stop(100%, rgba(16,232,189,1)));
                background: -webkit-linear-gradient(left, rgba(147,206,222,1) 0%, rgba(21,172,214,1) 41%, rgba(16,232,189,1) 100%);
                background: -o-linear-gradient(left, rgba(147,206,222,1) 0%, rgba(21,172,214,1) 41%, rgba(16,232,189,1) 100%);
                background: -ms-linear-gradient(left, rgba(147,206,222,1) 0%, rgba(21,172,214,1) 41%, rgba(16,232,189,1) 100%);
                background: linear-gradient(to right, rgba(147,206,222,1) 0%, rgba(21,172,214,1) 41%, rgba(16,232,189,1) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#93cede', endColorstr='#10e8bd', GradientType=1 );">
                  <img src="img/products/1.jpg" class="img-responsive" alt=""/>
                  <div class="pw-inner">
                    <h4 class="title" style="color: white;font-weight: 700;">{{$con->nombre}}</h4>
                    <div class="card-footer ">
                    <ul>
                      <li><a href="{{ route('showcontenidos', $con->idcontenido) }}"><button class="btn btn-success">Ver más</button></a></li>
                    </ul>
                  </div>
                </div>
                </div>
              </div>
              @endforeach
              

            
            </div>
          </div>
        </div>
      </div>



  @endsection