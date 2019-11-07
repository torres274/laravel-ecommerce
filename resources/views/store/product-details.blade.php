@extends('layouts.layout')

@section('title', 'Detalle del Producto')

@section('content')         
<div class="breadcrumb-area pt-255 pb-170" style="background-image: url('/store/img/banner/banner-Fondo.jpg')">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h2>Detalle del Producto</h2>
            <ul>
                <li>
                    <a href="/">inicio</a>
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
                        <div class="product-details-large">
                            <div class="tab-pane active" id="pro-details1">
                                <div class="easyzoom easyzoom--overlay">
                                    <a>
                                        <img src="{{ asset('img/products/' .$productDetails->image)}}">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-details-content">
                    <h2>{{ $productDetails->name }}</h2>
                    <div class="quick-view-rating">
                        <i class="fa fa-star reting-color"></i>
                        <i class="fa fa-star reting-color"></i>
                        <i class="fa fa-star reting-color"></i>
                        <i class="fa fa-star reting-color"></i>
                        <i class="fa fa-star reting-color"></i>
                        <span> ( 01 Valoraciones de Clientes )</span>
                    </div>
                    <div class="product-price">
                        <span>Precio: ¢ {{ number_format($productDetails->price_total) }} i.v.a</span>
                    </div>
                    <div class="product-overview">
                        <h5 class="pd-sub-title">Descripcion del Producto</h5>
                        <p>{{ $productDetails->description }}</p>
                    </div>
                    <div class="quickview-plus-minus">
                        <div class="quickview-btn-cart">
                            <a class="btn-style cr-btn" href="{{ route('add', [ $productDetails->getRouteKey() ]) }}"><span>add to cart</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection