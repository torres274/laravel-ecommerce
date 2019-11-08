@extends('layouts.layout')

@section('title', 'Ordenes')

@section('content')
<div class="breadcrumb-area pt-255 pb-170" style="background-image: url('/store/img/banner/banner-Fondo.jpg')">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h2>Ordenes</h2>
            <ul>
                <li>
                    <a href="/">inicio</a>
                </li>
                <li>ordenes</li>
            </ul>
        </div>
    </div>
</div>

<div class="product-cart-area pt-120 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="table-content table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th class="product-price">Orden</th>
                                <th class="product-price">Pago</th>
                                <th class="product-quantity">Estado</th>
                                <th class="product-subtotal" width="1px">Detalle</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order as $orders)
                            <tr>
                                <td>{{$orders->id}}</td>
                                <td>{{$orders->payment_type}}</td>
                                <td>{{$orders->status}}</td>
                                <td>
                                    <div class="form-button-action">
                                        <a href="{{ url('store/ordersUser/'.$orders->id) }}" class="see"><i class="material-icons" data-toggle="tooltip" title="Ver">remove_red_eye</i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="cart-shiping-update">
                    <div class="cart-shipping">
                        <a class="btn-style cr-btn" href="/store/shop">
                            <span>continuar comprando</span>
                        </a>
                    </div>
                    <div class="update-checkout-cart">
                        <div class="update-cart">
                            {{ $order->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection