@extends('layouts.layout')

@section('title', 'Detalle del Producto')

@section('content')         
<div class="breadcrumb-area pt-255 pb-170" style="background-image: url('/store/img/banner/banner-Fondo.jpg')">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h2>Detalle del Producto</h2>
            <ul>
                <li>
                    <a href="/store/index">inicio</a>
                </li>
                <li>detalle del producto</li>
            </ul>
        </div>
    </div>
</div>
<div class="product-details-area fluid-padding-3 ptb-130">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-details-img-content">
                    <div class="product-details-tab mr-40">
                        <div class="product-details-large tab-content">
                            <div class="tab-pane active" id="pro-details1">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="/store/img/product-details/bl1.jpg">
                                        <img src="/store/img/product-details/l1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane" id="pro-details2">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="/store/img/product-details/bl2.jpg">
                                        <img src="/store/img/product-details/l2.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane" id="pro-details3">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="/store/img/product-details/bl3.jpg">
                                        <img src="/store/img/product-details/l3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane" id="pro-details4">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="/store/img/product-details/bl4.jpg">
                                        <img src="/store/img/product-details/l4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane" id="pro-details5">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="/store/img/product-details/bl3.jpg">
                                        <img src="/store/img/product-details/l3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-details-small nav mt-12 product-dec-slider owl-carousel">
                            <a class="active" href="#pro-details1">
                                <img src="/store/img/product-details/s1.jpg" alt="">
                            </a>
                            <a href="#pro-details2">
                                <img src="/store/img/product-details/s2.jpg" alt="">
                            </a>
                            <a href="#pro-details3">
                                <img src="/store/img/product-details/s3.jpg" alt="">
                            </a>
                            <a href="#pro-details4">
                                <img src="/store/img/product-details/s4.jpg" alt="">
                            </a>
                            <a href="#pro-details5">
                                <img src="/store/img/product-details/s3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-details-content">
                    <h2>Nombre del Producto</h2>
                    <div class="quick-view-rating">
                        <i class="fa fa-star reting-color"></i>
                        <i class="fa fa-star reting-color"></i>
                        <i class="fa fa-star reting-color"></i>
                        <i class="fa fa-star reting-color"></i>
                        <i class="fa fa-star reting-color"></i>
                        <span> ( 01 Valoraciones de Clientes )</span>
                    </div>
                    <div class="product-price">
                        <span>Precio</span>
                    </div>
                    <div class="product-overview">
                        <h5 class="pd-sub-title">Descripcion del Producto</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo.</p>
                    </div>
                    <div class="quickview-plus-minus">
                        <div class="cart-plus-minus">
                            <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                        </div>
                        <div class="quickview-btn-cart">
                            <a class="btn-style cr-btn" href="#"><span>add to cart</span></a>
                        </div>
                    </div>
                    <div class="product-share">
                        <h5 class="pd-sub-title">Publicar</h5>
                        <ul>
                            <li>
                                <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"> <i class="icofont icofont-social-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection