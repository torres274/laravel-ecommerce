@extends('layouts.layout')

@section('title', 'Checkout')

@section('content')
<div class="breadcrumb-area pt-255 pb-170" style="background-image: url('/store/img/banner/banner-Fondo.jpg')">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h2>checkout </h2>
            <ul>
                <li>
                    <a href="/">inicio</a>
                </li>
                <li>checkout </li>
            </ul>
        </div>
    </div>
</div>
<!-- checkout-area start -->
<div class="checkout-area pt-50 pb-100">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <form action="#">
                    <div class="checkbox-form">						
                        <h3>Detalle de Facturacion</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Cédula <span class="required">*</span></label>										
                                    <input type="text" value="{{ Auth::user()->identification }}" readonly/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Nombre Completo <span class="required">*</span></label>										
                                    <input type="text" value="{{ Auth::user()->name }}" readonly/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Dirección <span class="required">*</span></label>
                                    <input type="text" value="{{ Auth::user()->address }}" readonly/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Teléfono  <span class="required">*</span></label>										
                                    <input type="text" value="{{ Auth::user()->phone }}" readonly/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Email <span class="required">*</span></label>										
                                    <input type="email" value="{{ Auth::user()->email }}" readonly/>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>	
            <div class="col-lg-6 col-md-12 col-12">
                <div class="your-order">
                    <h3>Orden</h3>
                    <div class="your-order-table table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-name">Producto</th>
                                    <th class="product-total">Total</th>
                                </tr>							
                            </thead>
                            <tbody>

                                @foreach(Cart::content() as $cartItem)
                                <tr class="cart_item">
                                    <td class="product-name">
                                        {{ $cartItem->name }} <strong class="product-quantity"> × {{ $cartItem->qty }}</strong>
                                    </td>
                                    <td class="product-total">
                                        <span class="amount">¢{{ $cartItem->subtotal }}</span>
                                    </td>
                                </tr>
                                @endforeach 

                            </tbody>
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td>
                                        <span class="amount">¢{{ Cart::subtotal() }}</span>
                                    </td>
                                </tr>
                                <tr class="cart-tax">
                                    <th>I . V . A</th>
                                    <td>
                                        <span class="amount">¢{{ Cart::tax() }}</span>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <th>Total</th>
                                    <td><strong><span class="amount">¢{{ Cart::total() }}</span></strong>
                                    </td>
                                </tr>								
                            </tfoot>
                        </table>
                    </div>
                    <div class="payment-method mt-40">
                        <div class="payment-accordion">
                            <div class="panel-group" id="faq">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title"><a data-toggle="collapse" aria-expanded="true" data-parent="#faq" href="#payment-1">Deposito</a></h5>
                                    </div>
                                    <div id="payment-1" class="panel-collapse collapse show">
                                        <div class="panel-body">
                                            <p>Le estaremos contactando para que realice su pago directamente en nuestra cuenta bancaria. Por favor use su Orden ID en su referencia de pago. Su pedido no se enviará hasta que los fondos se hayan liquidado en nuestra cuenta.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-button-payment">
                                    <a href="{{ route('checkout') }}" class="btn-style cr-btn">Realizar Compra</a>
                            </div>								
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection