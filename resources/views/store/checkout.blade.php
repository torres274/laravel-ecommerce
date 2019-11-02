@extends('layouts.layout')

@section('title', 'Checkout')

@section('content')
<div class="breadcrumb-area pt-255 pb-170" style="background-image: url('/store/img/banner/banner-Fondo.jpg')">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h2>checkout </h2>
            <ul>
                <li>
                    <a href="/store/index">inicio</a>
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
            <div class="col-md-12">
                <div class="coupon-accordion">
                    <h3>Eres Cliente? <span id="showlogin">Click aquí para iniciar sesión</span></h3>
                    <div id="checkout-login" class="coupon-content">
                        <div class="coupon-info">
                            <p class="coupon-text">Debes iniciar sesión antes de realizar cualquier compra.</p>
                            <form action="#">
                                <p class="form-row-first">
                                    <label>Nombre de Usuario <span class="required">*</span></label>
                                    <input type="text" />
                                </p>
                                <p class="form-row-last">
                                    <label>Contraseña <span class="required">*</span></label>
                                    <input type="text" />
                                </p>
                                <p class="form-row">					
                                    <input type="submit" value="Login" />
                                    <label>
                                        <input type="checkbox" />
                                            Recuerdame 
                                    </label>
                                </p>
                                <p class="lost-password">
                                    <a href="#">Olvido su Contraseña?</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <form action="#">
                    <div class="checkbox-form">						
                        <h3>Detalle de Facturacion</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Cédula <span class="required">*</span></label>										
                                    <input type="text" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Nombre Completo <span class="required">*</span></label>										
                                    <input type="text" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Dirección <span class="required">*</span></label>
                                    <input type="text" placeholder="Dirección exacta" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Teléfono  <span class="required">*</span></label>										
                                    <input type="text" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Email <span class="required">*</span></label>										
                                    <input type="email" />
                                </div>
                            </div>
                        </div>

                        <div class="different-address">
                            <div class="order-notes">
                                <div class="checkout-form-list mrg-nn">
                                    <label>Notas</label>
                                    <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notas sobre su orden, ej. notas especiales para el envio." ></textarea>
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
                                <tr class="cart_item">
                                    <td class="product-name">
                                        Producto #1 <strong class="product-quantity"> × 1</strong>
                                    </td>
                                    <td class="product-total">
                                        <span class="amount">¢1000</span>
                                    </td>
                                </tr>
                                <tr class="cart_item">
                                    <td class="product-name">
                                        Producto #2 <strong class="product-quantity"> × 1</strong>
                                    </td>
                                    <td class="product-total">
                                        <span class="amount">¢1000</span>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td><span class="amount">¢2000</span></td>
                                </tr>
                                <tr class="order-total">
                                    <th>Total</th>
                                    <td><strong><span class="amount">¢2000</span></strong>
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
                                        <h5 class="panel-title"><a data-toggle="collapse" aria-expanded="true" data-parent="#faq" href="#payment-1">Direct Bank Transfer.</a></h5>
                                    </div>
                                    <div id="payment-1" class="panel-collapse collapse show">
                                        <div class="panel-body">
                                            <p>Realice su pago directamente en nuestra cuenta bancaria. Por favor use su Orden ID en su referencia de pago. Su pedido no se enviará hasta que los fondos se hayan liquidado en nuestra cuenta.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title"><a class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-3">PayPal</a></h5>
                                    </div>
                                    <div id="payment-3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Realice su pago a travéz de PayPal.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-button-payment">
                                <input type="submit" value="Realizar compra" />
                            </div>								
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection