
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div  class="container">
        <a class="bnt btn-success btn-lg" href="{{url('/ventas/create')}}" title="Crear Venta"><i class="fa fa-tag"></i></a>
    </div>
    <div  class="container text-center">
        <h1>Bienvenido</h1> <br> <br>
        {{$ventas[0]->created_at}}
        {{$ventas[1]->nombre_marca}}
        {{$ventas[2]->modelo}}
        {{$ventas[3]->cantidad_venta}}
        {{$ventas[4]->precio_unidad}}
        {{$ventas[5]->total_venta}}
        
    <table class="table container">
        <thead class="thead-dark">
            <tr>
          <th scope= "col">Fecha de venta</th>
                    <th scope= "col">Fecha de venta :</th>
                    <th scope= "col">Marca:</th>
                    <th scope= "col">Modelo:</th>
                    <th scope= "col">Cantidad venta:</th>
                    <th scope= "col">Precio Unidad :</th>
                    <th scope= "col">Total de venta:</th>
                </thead>
                @foreach($ventas as $item)
                <td scope= "row" >{{ $item->created_at }}</td>
                <td scope= "row" >{{ $item->marca }}</td>
                <td scope= "row" >{{ $item->cantidad_venta}}</td>
                <td scope= "row" >{{ $item->precio_unidad}}</td>
                <td scope= "row" >{{ $item->total_venta}}</td>
                

                
            
                @endforeach
                
                

    
</body>

</html>