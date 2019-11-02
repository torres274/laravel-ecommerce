@extends('layouts.layout')

@section('title', 'Carrito')

@section('content')
<div class="breadcrumb-area pt-255 pb-170" style="background-image: url('/store/img/banner/banner-Fondo.jpg')">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h2>Carrito</h2>
            <ul>
                <li>
                    <a href="/store/index">inicio</a>
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
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="#"><img src="/store/img/cart/4.jpg" alt=""></a>
                                </td>
                                <td class="product-name">
                                    <a href="#">Producto #1</a>
                                </td>
                                <td class="product-price"><span class="amount">¢1000</span></td>
                                <td class="product-quantity">
                                    <div class="quantity-range">
                                        <input class="input-text qty text" type="number" step="1" min="0" value="1" title="Qty" size="4">
                                    </div>
                                </td>
                                <td class="product-subtotal">¢1000</td>
                                <td class="product-cart-icon product-subtotal"><a href="#"><i class="ti-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="#"><img src="/store/img/cart/5.jpg" alt=""></a>
                                </td>
                                <td class="product-name">
                                    <a href="#">Producto #2</a>
                                </td>
                                <td class="product-price"><span class="amount">¢1000</span></td>
                                <td class="product-quantity">
                                    <div class="quantity-range">
                                        <input class="input-text qty text" type="number" step="1" min="0" value="1" title="Qty" size="4">
                                    </div>
                                </td>
                                <td class="product-subtotal">¢1000</td>
                                <td class="product-cart-icon product-subtotal"><a href="#"><i class="ti-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="#"><img src="/store/img/cart/6.jpg" alt=""></a>
                                </td>
                                <td class="product-name">
                                    <a href="#">Producto #3</a>
                                </td>
                                <td class="product-price"><span class="amount">¢1000</span></td>
                                <td class="product-quantity">
                                    <div class="quantity-range">
                                        <input class="input-text qty text" type="number" step="1" min="0" value="1" title="Qty" size="4">
                                    </div>
                                </td>
                                <td class="product-subtotal">¢1000</td>
                                <td class="product-cart-icon product-subtotal"><a href="#"><i class="ti-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="#"><img src="/store/img/cart/7.jpg" alt=""></a>
                                </td>
                                <td class="product-name">
                                    <a href="#">Producto #4</a>
                                </td>
                                <td class="product-price"><span class="amount">¢1000</span></td>
                                <td class="product-quantity">
                                    <div class="quantity-range">
                                        <input class="input-text qty text" type="number" step="1" min="0" value="1" title="Qty" size="4">
                                    </div>
                                </td>
                                <td class="product-subtotal">¢1000</td>
                                <td class="product-cart-icon product-subtotal"><a href="#"><i class="ti-trash"></i></a></td>
                            </tr>
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
                            <button class="btn-style cr-btn"><span>actualizar</span></button>
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