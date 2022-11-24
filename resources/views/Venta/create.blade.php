@extends('layouts.app')
@section('content')
<br>
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
         <div class="card"> 
             <div class="card-header text-center">Registro Venta</div>
                <div class="card-body">
                    <form action="{{url('/venta/form')}}" method="post" enctype="multipart/form-data">
                        @include('venta.form')
                            @csrf
                        
                       
                    </form>
                <div>
        </div>
     </div>
 </div>
@endsection