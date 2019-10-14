<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de categorias</title>

</head>
<body>


    <div>
        <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr>
				
					<th>Id</th>
					<th>Nombre</th>
					<th>Descripcion</th>
				</tr>
				</thead>
				<tbody>
				@foreach ($categorias as $cat)

				<tr>  
					<td>{{ $cat->idcategoria}}</td>
					<td>{{ $cat->nombre}}</td>
					<td>{{ $cat->descripcion}}</td>
				</tr>
				
				@endforeach

				</tbody>

	</table>
</div>


</body>
</html>