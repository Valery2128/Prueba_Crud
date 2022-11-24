@extends('layouts.app')
@section('content')
<div  class="container">
    <a class="bnt btn-success btn-lg" href="{{url('/Venta/create')}}" title="Crear Venta"><i class="fa fa-tag"></i></a>
</div>
<div  class="container text-center">
    <h1>Bienvenido</h1> <br> <br>
<table class="table container">
    <thead class="thead-dark">
        <tr>
      <th scope= "col">ID</th>
                <th scope= "col">Marca</th>
            </thead>
            <tbody class="table-danger table-striped">
                @foreach ($marca as $marca)
                <tr>
                    <td scope= "row" >{{$marca->id_marca}} </td> 
                    <td scope= "row" >{{$marca->nombre_marca}} </td>  
                    <td scope="row"> 
                        
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody> </table></div>
            @endsection