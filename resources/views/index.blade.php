@extends('layouts.layout')

@section('title', 'Inicio')

@section('content')
<div class="slider-area">
    <div class="slider-active owl-carousel">
        <div class="single-slider slider-1" style="background-image: url('/store/img/slider/slider-main.jpg')">
            <div class="container">
                <div class="slider-content slider-animated-1">
                    <div class="slider-img text-center">
                        <img class="animated" src="/store/img/slider/slider-dell.png" alt="slider images">
                    </div>
                    <div class="slider-text-img">
                        <h6 class="animated">Dell Inspiron - 15.6" - Intel Celeron N3060 - 4GB RAM - 500 GB</h6>
                        <img class="animated" src="/store/img/icon-img/shopping-cart.png" alt="slider images">
                    </div>
                    <h2 class="animated">MOUSE SHOP</h2>
                </div>
            </div>
        </div>
        <div class="single-slider slider-1" style="background-image: url('/store/img/slider/slider-main.jpg')">
            <div class="container">
                <div class="slider-content slider-animated-1">
                    <div class="slider-img text-center">
                        <img class="animated" src="/store/img/slider/slider-hp.png" alt="slider images">
                    </div>
                    <div class="slider-text-img">
                        <h6 class="animated">HP 15z - 15.6" - AMD A9-9425 Dual-Core - 8 GB RAM - 1TB</h6>
                        <img class="animated" src="/store/img/icon-img/shopping-cart.png" alt="slider images">
                    </div>
                    <h2 class="animated">MOUSE SHOP</h2>
                </div>
            </div>
        </div>
        <div class="single-slider slider-1" style="background-image: url(/store/img/slider/slider-main.jpg)">
            <div class="container">
                <div class="slider-content slider-animated-1">
                    <div class="slider-img text-center">
                        <img class="animated" src="/store/img/slider/slider-acer.png" alt="slider images">
                    </div>
                    <div class="slider-text-img">
                        <h6 class="animated">Laptop Acer Aspire 3 - 15.6" - Intel Core i5-7200U - 4GB RAM - 1TB</h6>
                        <img class="animated" src="/store/img/icon-img/shopping-cart.png" alt="slider images">
                    </div>
                    <h2 class="animated">MOUSE SHOP</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-social">
        <ul>
            <li class="facebook"><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
            <li class="twitter"><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
            <li class="pinterest"><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
        </ul>
    </div>
</div>
<div class="overview-area pt-135">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="overview-content">
                    <h1><span>MOUSE SHOP</span> COSTA RICA </h1>
                    <h2>LA MEJOR <span>TIENDA DE TECNOLOGIA</span></h2>
                    <p><span>MOUSE SHOP</span> le ofrece lo mejor en computadoras, celulares, seguridad y accesorios. </p>
                    <div class="question-area">
                        <h4>Alguna pregunta? </h4>
                        <div class="question-contact">
                            <div class="question-icon">
                                <i class="icofont icofont-phone"></i>
                            </div>
                            <div class="question-content-number">
                                <h6>+506 2667-0294</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="overview-img">
                    <img class="tilter" src="/store/img/banner/banner-1-logitech.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="banner-area pt-135 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="banner-wrapper mb-30">
                    <a><img src="/store/img/banner/banner-1-computadoras.png" alt="image"></a>
                    <div class="banner-content">
                        <h2>COMPUTADORAS</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="banner-wrapper mb-30">
                    <a><img src="/store/img/banner/banner-1-celulares.png" alt="image"></a>
                    <div class="banner-content">
                        <h2>CELULARES</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="banner-wrapper mb-30">
                    <a><img src="/store/img/banner/banner-1-accesorios.png" alt="image"></a>
                    <div class="banner-content">
                        <h2>ACCESORIOS</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Computadoras --}}
<div class="product-area pb-190">
    <div class="container">
        <div class="section-title text-center mb-50">
            <h2>COMPUTADORAS</h2>
            <p><span>MOUSE SHOP</span> le ofrece todo en computadoras. Desde la linea más económica hasta la gama más alta de equipos.</p>
        </div>
        <div class="tab-content jump">
            <div class="tab-pane active" id="home1">
                <div class="product-slider-active owl-carousel">

                    @foreach($products as $product)
                        @if ($product->category_id == 1)
                        <div class="product-wrapper-bundle">    
                            <div class="product-wrapper">
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
                            </div>
                        </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

{{-- Anuncio --}}
<div class="latest-product-area pt-205 pb-145 bg-img" style="background-image: url('/store/img/banner/banner-fondo.jpg')">
    <div class="container-fluid">
        <div class="latest-product-slider owl-carousel">
            <div class="single-latest-product slider-animated-2">
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-12">
                        <div class="latest-product-img">
                            <img class="animated" src="/store/img/banner/banner-2-coolermaster.png" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-12">
                        <div class="latest-product-content">
                            <h2 class="animated">OFERTA <br>COOLER MASTER</h2>
                            <p class="animated"><span>Mouse Shop</span> le ofrece lo mejor en accesorios y torres Cooler Master en todo tipo de gamas. Cooler Master es una compañia que produce cajas de computadoras, funetes de alimentación, refrigeradores de CPU de aire y liquido, etc. </p>
                            <div class="latest-price">
                                <h3 class="animated"> PRECIO DESDE <span>¢50000</span></h3>
                                <span class="animated">IVA</span>
                            </div>
                            <div class="latext-btn">
                                <a class="animated" href="/store/shop">VER TIENDA</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-latest-product slider-animated-2">
                <div class="row">
                    <div class="col-lg-7 col-col-12 col-12">
                        <div class="latest-product-img">
                            <img class="animated" src="/store/img/banner/banner-2-ubiquiti.png" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-5 col-col-12 col-12">
                        <div class="latest-product-content">
                            <h2 class="animated">OFERTA <br>UBIQUITI</h2>
                            <p class="animated"><span>Mouse Shop</span> cuenta con lo mejor en equipos de redes informaticas. Le ofrecemos productos de comunicacion de datos inalambricos para empresas. </p>
                            <div class="latest-price">
                                <h3 class="animated">PRECIO DESDE <span>¢50000</span></h3>
                                <span class="animated">IVA</span>
                            </div>
                            <div class="latext-btn">
                                <a class="animated" href="/shop">VER TIENDA</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Celulares --}}
<div class="accessories-area pt-152 pb-130">
    <div class="container-fluid">
        <div class="section-title section-fluid text-center mb-60">
            <h2>CELULARES</h2>
            <p><span>Mouse Shop</span> la mejor opción para comprar celulares de calidad.</p>
        </div>
        <div class="accessories-wrapper">
            <div class="product-accessories-active owl-carousel">

                @foreach($products as $product)
                    @if ($product->category_id == 2)
                    <div class="product-wrapper-bundle">    
                        <div class="product-wrapper">
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
                        </div>
                    </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
</div>

{{-- Accesorios --}}
<div class="accessories-area pt-10 pb-130">
    <div class="container-fluid">
        <div class="section-title section-fluid text-center mb-60">
            <h2>ACCESORIOS</h2>
            <p><span>Mouse Shop</span> le ofrece gran cantidad de accesorios para computadoras, celulares y equipos de redes inalambricadas.</p>
        </div>
        <div class="accessories-wrapper">
            <div class="product-accessories-active owl-carousel">

                @foreach($products as $product)
                    @if ($product->category_id == 3)
                    <div class="product-wrapper-bundle">    
                        <div class="product-wrapper">
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
                        </div>
                    </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection