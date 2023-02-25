<!--Aqui en esta vista mostramos el checkout del carrito confirmado-->
@extends('layout')
   
@section('content')

<div class="container">
    <div class="row">
        <!--Div de 8 izquierda-->
        <div class="col-lg-8 col-sm-8 col-8 main-section">
            <h2>Información de contacto</h2>
            <form role="form">

                <div class="form-group">
                    <label for="ejemplo_email_1">Correo Electronico</label>
                    <input type="email" class="form-control" placeholder="Introduce tu email">
                </div>

                <h2>Direccion de Envio</h2>
                <div class="form-group">
                        <!--lista desplegable - Pais-->
                    <label for="Select" class="col-sm-8 control-label">Pais / Region</label>                
                    <select id="Select" class="form-control">
                        <option>Argentina</option>
                        <option>España</option>
                    </select>
                        
                    <label class="col-sm-2 control-label"></label>                    
                    <input class="form-control" id="focusedInput" type="text" placeholder="Nombre completo">
                    <label class="col-sm-2 control-label"></label>
                    <input class="form-control" id="focusedInput" type="text" placeholder="Direccion">
                    <label class="col-sm-2 control-label"></label>
                    <div class="row">                    
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Codigo Postal">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Ciudad">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Provincia / Estado">
                        </div>
                    </div>
                    <label class="col-sm-2 control-label"></label>
                    <input class="form-control" id="focusedInput" type="text" placeholder="Telefono">
                </div>

                <h2>Tarjeta de Credito</h2>

                <label class="col-sm-2 control-label"></label>
                <div class="row">                    
                    <div class="col-md-6">
                        <label class="col-sm-10 control-label">Numero de Tarjeta</label>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label class="col-sm-10 control-label">Codigo de Seguridad</label>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
                <label class="col-sm-2 control-label"></label>
                <div class="row">                    
                    <div class="col-md-6">
                        <label class="col-sm-10 control-label">Fecha de Expiracion</label>
                        <input type="date" class="form-control" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label class="col-sm-10 control-label">Año de Expiracion</label>
                        <input type="date" class="form-control" placeholder="">
                    </div>
                </div>

                <label class="col-sm-2 control-label"></label>
                <div class="radio">
                    <label>
                        <input type="radio" name="opciones" id="opciones_1" value="opcion_1" checked>
                        Paypal
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="opciones" id="opciones_2" value="opcion_2">
                        ShopPay
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="opciones" id="opciones_2" value="opcion_2">
                        GooglePay
                    </label>
                </div>
            </form>
            <div class="text-right">
                <a href="{{ route('checkout') }}" class="btn btn-success">Finalizar Compra</a>
            </div>
            <br>
        </div>
        
        <!--Div de 4 derecha-->
        <div class="col-lg-4 col-sm-4 col-4 main-section">
            
            <!--la session(cart) hace que los productos seleccionados se mantengan asi-->
            @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                    <div class="row cart-detail">
                        <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                            <img src="{{ $details['image'] }}" />
                        </div>
                        <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                            <p>{{ $details['name'] }}</p>
                            <span class="price text-info"> $ {{ $details['price'] }}</span> 
                            <span class="count"> Cant.: {{ $details['quantity'] }}</span>
                        </div>
                    </div>
                @endforeach
            @endif
            <hr>
            @php $total = 0 @endphp
                <!--Recorremos con un foreach lo seleccionado-->
                @foreach((array) session('cart') as $id => $details)
                    @php $total += $details['price'] * $details['quantity'] @endphp
                @endforeach
                
                <h5 class="text-left">Subtotal:</h5> <h5 class="text-right"><span class="text-info">$ {{ $total }}</span></h5>
                
            <hr>
            @php $total = 0 @endphp
                <!--Recorremos con un foreach lo seleccionado-->
                @foreach((array) session('cart') as $id => $details)
                    @php $total += $details['price'] * $details['quantity'] @endphp
                @endforeach
                
                <h2 class="text-left">Total:</h2> <h2 class="text-right"><span class="text-info">$ {{ $total }}</span></h2>
                
            <hr>
            <div class="text-right">
                <a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Volver a la Tienda</a>
            </div>
        </div>
    </div> <!--fin div row-->
</div>                
@endsection