@extends('layouts.layout')

@section('title', 'Carrito')

@section('content')
<div class="breadcrumb-area pt-255 pb-170" style="background-image: url('/store/img/banner/banner-Fondo.jpg')">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h2>Carrito</h2>
            <ul>
                <li>
                    <a href="/">inicio</a>
                </li>
                <li>carrito</li>
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
                                <th class="product-name">Producto</th>
                                <th class="product-price">Nombre</th>
                                <th class="product-name">Precio</th>
                                <th class="product-price">Cantidad</th>
                                <th class="product-quantity">Total</th>
                                <th class="product-subtotal">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(Cart::content() as $cartItem)
                            <tr>
                                <td class="product-thumbnail">
                                    <a><img alt="" src="/store/img/cart/bag.png"></a>
                                </td>
                                <td class="product-name">
                                    <a>{{ $cartItem->name }}</a>
                                </td>
                                <td class="product-price"><span class="amount">¢{{ $cartItem->price }}</span></td>
                                <td class="product-quantity">
                                    <div class="quantity-range">
                                        <input id="qty" name="qty" class="input-text qty text" type="number" step="1" min="0" value="{{ $cartItem->qty }}" title="Qty" size="3">
                                    </div>
                                </td>
                                <td class="product-subtotal">¢{{ $cartItem->subtotal }}</td>
                                <td class="product-cart-icon product-subtotal">
                                    <a href="{{ route('remove', [ $cartItem->rowId ]) }}"><i class="ti-trash"></i></a>
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
                            <a class="btn-style cr-btn" href="#">
                                <span>Actualizar</span>
                            </a>
                        </div>
                        <div class="update-cart">
                            <a class="btn-style cr-btn" href="/store/checkout">
                                <span>checkout</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection