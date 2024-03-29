@extends('layouts.layout')

@section('title', 'Tienda')

@section('content')
<div class="breadcrumb-area pt-255 pb-170" style="background-image: url('/store/img/banner/banner-Fondo.jpg')">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h2>Tienda</h2>
            <ul>
                <li>
                    <a href="/">inicio</a>
                </li>
                <li>tienda</li>
            </ul>
        </div>
    </div>
</div>

<div class="shop-wrapper fluid-padding-2 pt-120 pb-150">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-sidebar-area pr-60">
                    <div class="sidebar-widget pb-55">
                        <h3 class="sidebar-widget">Buscar Producto</h3>
                        <div class="sidebar-search">
                            <form action="/search" method="GET">
                                <input type="text" name="search" placeholder="Buscar Producto...">
                                <button type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                    
                    <div class="sidebar-widget pb-50">
                        <h3 class="sidebar-widget">categorias</h3>
                        <div class="widget-categories">
                            <ul>
                                @foreach ($productCategory as $category)
                                <li><a href="{{ url('/store/shop/'.$category->id) }}">{{ $category->description }}</a></li>
                                @endforeach
                                <li><a href="/store/shop">Ver todos</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="sidebar-widget">
                        <h3 class="sidebar-widget">mejores ventas</h3>
                        <div class="best-seller">

                            <div class="single-best-seller">
                                <div class="best-seller-img">
                                    <a><img src="/store/img/product/alarm.png" alt=""></a>
                                </div>
                                <div class="best-seller-text">
                                    <h3><a>Sistema de Alarma</a></h3>
                                    <span>¢32,121</span>
                                </div>
                            </div>

                            <div class="single-best-seller">
                                <div class="best-seller-img">
                                    <a><img src="/store/img/product/huawei.png" alt=""></a>
                                </div>
                                <div class="best-seller-text">
                                    <h3><a>Huawei Y5</a></h3>
                                    <span>¢324,234</span>
                                </div>
                            </div>

                                <div class="single-best-seller">
                                    <div class="best-seller-img">
                                        <a><img src="/store/img/product/logitech.png" alt=""></a>
                                    </div>
                                    <div class="best-seller-text">
                                        <h3><a>Headset Logitech</a></h3>
                                        <span>¢50,000</span>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="shop-topbar-wrapper">
                    <div class="grid-list-options">
                        <ul class="view-mode">
                            <li class="active"><a href="#product-grid" data-view="product-grid"><i class="ti-layout-grid2"></i></a></li>
                            <li><a href="#product-list" data-view="product-list"><i class="ti-view-list"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-sorting">
                        <div class="sorting sorting-bg-1">
                            <form>
                                <a href="/store/shop">Orden default /</a>
                                <a href="/orderByName">Ordenar por nombre /</a>
                                <a href="/orderByPrice">Ordenar por precio</a>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="grid-list-product-wrapper tab-content">
                    <div id="new-product" class="product-grid product-view tab-pane active">
                        <div class="row">
                            @foreach($products as $product)
                                <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a>
                                                <img src="{{ asset('img/products/' .$product->image)}}" >
                                            </a>
                                            <div class="product-action">
                                                <a class="action-plus-2" title="Agregar al Carrito" href="{{ route('add', [ $product->getRouteKey() ]) }}">
                                                    <i class=" ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-reload" title="Ver" href="{{ url('store/product-details/'.$product->id) }}">
                                                    <i class=" ti-zoom-in"></i>
                                                </a>
                                            </div>
                                            <div class="product-content-wrapper">
                                                <div class="product-title-spreed">
                                                    <h4><a>{{ $product->name }}</a></h4>
                                                    <span>¢ {{ number_format($product->price_neto) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h2><a>{{ $product->name }}</a></h2>
                                            <div class="quick-view-rating">
                                                <i class="fa fa-star reting-color"></i>
                                                <i class="fa fa-star reting-color"></i>
                                                <i class="fa fa-star reting-color"></i>
                                                <i class="fa fa-star reting-color"></i>
                                                <i class="fa fa-star reting-color"></i>
                                            </div>
                                            <div class="product-price">
                                                <span>¢ {{ number_format($product->price_neto) }}</span>
                                            </div>
                                            <p>{{ $product->description }}</p>
                                            <div class="shop-list-cart">
                                                <a href="{{ route('add', [ $product->getRouteKey() ]) }}"><i class="ti-shopping-cart"></i> Agregar al Carrito</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{ $products->links() }}
                    </div>
                </div>                          
            </div>
        </div>
    </div>
</div>
@endsection