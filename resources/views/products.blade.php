<!--Aqui en esta vista mostramos todos los productos en el home-->
@extends('layout')
   
@section('content')
    
<div class="row">
    <!--el foreach recorre todos los productos que estan en la DB que traemos desde el controlador-->
    @foreach($products as $product)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ $product->image }}" alt="">
                <div class="caption">
                    <h4>{{ $product->name }}</h4>
                    <p>{{ $product->description }}</p>
                    <p><strong>Precio: </strong> {{ $product->price }}$</p>
                    <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Agregar al Carrito</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
    
@endsection