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
<div class="product-area pb-190">
    <div class="container">
        <div class="section-title text-center mb-50">
            <h2>COMPUTADORAS</h2>
            <p><span>MOUSE SHOP</span> le ofrece todo en computadoras. Desde la linea más económica hasta la gama más alta de equipos.</p>
        </div>
        <div class="tab-content jump">
            <div class="tab-pane active" id="home1">
                <div class="product-slider-active owl-carousel">
                    <div class="product-wrapper-bundle">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="/store/product-details">
                                    <img src="/store/img/product/product-1.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>Espacio #1</li>
                                        <li>Espacio #2</li>
                                        <li>Espacio #3</li>
                                        <li>Espacio #4</li>
                                    </ul>
                                </div>
                                <div class="product-action">
                                    <a class="action-plus-2" title="Agregar al Carrito" href="#">
                                        <i class=" ti-shopping-cart"></i>
                                    </a>
                                    <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class=" ti-zoom-in"></i>
                                    </a>
                                </div>
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="/store/product-details">Nombre del Producto</a></h4>
                                        <span>Descripcion</span>
                                    </div>
                                    <div class="product-price">
                                        <span>Precio</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="/store/product-details">
                                    <img src="/store/img/product/product-4.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>Espacio #1</li>
                                        <li>Espacio #2</li>
                                        <li>Espacio #3</li>
                                        <li>Espacio #4</li>
                                    </ul>
                                </div>
                                <div class="product-action">
                                    <a class="action-plus-2" title="Agregar al Carrito" href="#">
                                        <i class=" ti-shopping-cart"></i>
                                    </a>
                                    <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class=" ti-zoom-in"></i>
                                    </a>
                                </div>
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="/store/product-details">Nombre del Producto</a></h4>
                                        <span>Descripcion</span>
                                    </div>
                                    <div class="product-price">
                                        <span>Precio</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper-bundle">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="/store/product-details">
                                    <img src="/store/img/product/product-2.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>Espacio #1</li>
                                        <li>Espacio #2</li>
                                        <li>Espacio #3</li>
                                        <li>Espacio #4</li>
                                    </ul>
                                </div>
                                <div class="product-action">
                                    <a class="action-plus-2" title="Agregar al Carrito" href="#">
                                        <i class=" ti-shopping-cart"></i>
                                    </a>
                                    <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class=" ti-zoom-in"></i>
                                    </a>
                                </div>
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="/store/product-details">Nombre del Producto</a></h4>
                                        <span>Descripcion</span>
                                    </div>
                                    <div class="product-price">
                                        <span>Precio</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="/store/product-details">
                                    <img src="/store/img/product/product-5.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>Espacio #1</li>
                                        <li>Espacio #2</li>
                                        <li>Espacio #3</li>
                                        <li>Espacio #4</li>
                                    </ul>
                                </div>
                                <div class="product-action">
                                    <a class="action-plus-2" title="Agregar al Carrito" href="#">
                                        <i class=" ti-shopping-cart"></i>
                                    </a>
                                    <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class=" ti-zoom-in"></i>
                                    </a>
                                </div>
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="/store/product-details">Nombre del Producto</a></h4>
                                        <span>Descripcion</span>
                                    </div>
                                    <div class="product-price">
                                        <span>Precio</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper-bundle">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="/store/product-details">
                                    <img src="/store/img/product/product-3.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>Espacio #1</li>
                                        <li>Espacio #2</li>
                                        <li>Espacio #3</li>
                                        <li>Espacio #4</li>
                                    </ul>
                                </div>
                                <div class="product-action">
                                    <a class="action-plus-2" title="Agregar al Carrito" href="#">
                                        <i class=" ti-shopping-cart"></i>
                                    </a>
                                    <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class=" ti-zoom-in"></i>
                                    </a>
                                </div>
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="/store/product-details">Nombre del Producto</a></h4>
                                        <span>Descripcion</span>
                                    </div>
                                    <div class="product-price">
                                        <span>Precio</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="/store/product-details">
                                    <img src="/store/img/product/product-6.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>Espacio #1</li>
                                        <li>Espacio #2</li>
                                        <li>Espacio #3</li>
                                        <li>Espacio #4</li>
                                    </ul>
                                </div>
                                <div class="product-action">
                                    <a class="action-plus-2" title="Agregar al Carrito" href="#">
                                        <i class=" ti-shopping-cart"></i>
                                    </a>
                                    <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class=" ti-zoom-in"></i>
                                    </a>
                                </div>
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="/store/product-details">Nombre del Producto</a></h4>
                                        <span>Descripcion</span>
                                    </div>
                                    <div class="product-price">
                                        <span>Precio</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper-bundle">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="/store/product-details">
                                    <img src="/store/img/product/product-2.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>Espacio #1</li>
                                        <li>Espacio #2</li>
                                        <li>Espacio #3</li>
                                        <li>Espacio #4</li>
                                    </ul>
                                </div>
                                <div class="product-action">
                                    <a class="action-plus-2" title="Agregar al Carrito" href="#">
                                        <i class=" ti-shopping-cart"></i>
                                    </a>
                                    <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class=" ti-zoom-in"></i>
                                    </a>
                                </div>
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="/store/product-details">Nombre del Producto</a></h4>
                                        <span>Descripcion</span>
                                    </div>
                                    <div class="product-price">
                                        <span>Precio</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="/store/product-details">
                                    <img src="/store/img/product/product-5.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>Espacio #1</li>
                                        <li>Espacio #2</li>
                                        <li>Espacio #3</li>
                                        <li>Espacio #4</li>
                                    </ul>
                                </div>
                                <div class="product-action">
                                    <a class="action-plus-2" title="Agregar al Carrito" href="#">
                                        <i class=" ti-shopping-cart"></i>
                                    </a>
                                    <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class=" ti-zoom-in"></i>
                                    </a>
                                </div>
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="/store/product-details">Nombre del Producto</a></h4>
                                        <span>Descripcion</span>
                                    </div>
                                    <div class="product-price">
                                        <span>Precio</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            
        </div>
    </div>
</div>
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
<div class="accessories-area pt-152 pb-130">
    <div class="container-fluid">
        <div class="section-title section-fluid text-center mb-60">
            <h2>CELULARES</h2>
            <p><span>Mouse Shop</span> la mejor opción para comprar celulares de calidad.</p>
        </div>
        <div class="accessories-wrapper">
            <div class="product-accessories-active owl-carousel">
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="/store/product-details">
                            <img src="/store/img/product/product-8.jpg" alt="">
                        </a>
                        <div class="product-action">
                            <a class="action-plus-2" title="Agregar al Carrito" href="#">
                                <i class=" ti-shopping-cart"></i>
                            </a>
                            <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class=" ti-zoom-in"></i>
                            </a>
                        </div>
                        <div class="product-content-wrapper-2">
                            <div class="product-title-price-2 text-center">
                                <span>Precio</span>
                                <h4><a href="/store/product-details">Nombre del Producto</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="/store/product-details">
                            <img src="/store/img/product/product-8.jpg" alt="">
                        </a>
                        <div class="product-action">
                            <a class="action-plus-2" title="Agregar al Carrito" href="#">
                                <i class=" ti-shopping-cart"></i>
                            </a>
                            <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class=" ti-zoom-in"></i>
                            </a>
                        </div>
                        <div class="product-content-wrapper-2">
                            <div class="product-title-price-2 text-center">
                                <span>Precio</span>
                                <h4><a href="/store/product-details">Nombre del Producto</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="/store/product-details">
                            <img src="/store/img/product/product-9.jpg" alt="">
                        </a>
                        <div class="product-action">
                            <a class="action-plus-2" title="Agregar al Carrito" href="#">
                                <i class=" ti-shopping-cart"></i>
                            </a>
                            <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class=" ti-zoom-in"></i>
                            </a>
                        </div>
                        <div class="product-content-wrapper-2">
                            <div class="product-title-price-2 text-center">
                                <span>Precio</span>
                                <h4><a href="/product-details">Nombre del Producto</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="/product-details">
                            <img src="/store/img/product/product-10.jpg" alt="">
                        </a>
                        <div class="product-action">
                            <a class="action-plus-2" title="Agregar al Carrito" href="#">
                                <i class=" ti-shopping-cart"></i>
                            </a>
                            <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class=" ti-zoom-in"></i>
                            </a>
                        </div>
                        <div class="product-content-wrapper-2">
                            <div class="product-title-price-2 text-center">
                                <span>Precio</span>
                                <h4><a href="/store/product-details">Nombre del Producto</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="accessories-area pt-10 pb-130">
    <div class="container-fluid">
        <div class="section-title section-fluid text-center mb-60">
            <h2>ACCESORIOS</h2>
            <p><span>Mouse Shop</span> le ofrece gran cantidad de accesorios para computadoras, celulares y equipos de redes inalambricadas.</p>
        </div>
        <div class="accessories-wrapper">
            <div class="product-accessories-active owl-carousel">
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="/store/product-details">
                            <img src="/store/img/product/product-8.jpg" alt="">
                        </a>
                        <div class="product-action">
                            <a class="action-plus-2" title="Agregar al Carrito" href="#">
                                <i class=" ti-shopping-cart"></i>
                            </a>
                            <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class=" ti-zoom-in"></i>
                            </a>
                        </div>
                        <div class="product-content-wrapper-2">
                            <div class="product-title-price-2 text-center">
                                <span>Precio</span>
                                <h4><a href="/store/product-details">Nombre del Producto</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="/store/product-details">
                            <img src="/store/img/product/product-8.jpg" alt="">
                        </a>
                        <div class="product-action">
                            <a class="action-plus-2" title="Agregar al Carrito" href="#">
                                <i class=" ti-shopping-cart"></i>
                            </a>
                            <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class=" ti-zoom-in"></i>
                            </a>
                        </div>
                        <div class="product-content-wrapper-2">
                            <div class="product-title-price-2 text-center">
                                <span>Precio</span>
                                <h4><a href="/store/product-details">Nombre del Producto</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="/store/product-details">
                            <img src="/store/img/product/product-9.jpg" alt="">
                        </a>
                        <div class="product-action">
                            <a class="action-plus-2" title="Agregar al Carrito" href="#">
                                <i class=" ti-shopping-cart"></i>
                            </a>
                            <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class=" ti-zoom-in"></i>
                            </a>
                        </div>
                        <div class="product-content-wrapper-2">
                            <div class="product-title-price-2 text-center">
                                <span>Precio</span>
                                <h4><a href="/store/product-details">Nombre del Producto</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="icofont icofont-close" aria-hidden="true"></span>
    </button>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="qwick-view-left">
                    <div class="quick-view-learg-img">
                        <div class="quick-view-tab-content tab-content">
                            <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                <img src="/store/img/quick-view/l1.jpg" alt="">
                            </div>
                            <div class="tab-pane fade" id="modal2" role="tabpanel">
                                <img src="/store/img/quick-view/l2.jpg" alt="">
                            </div>
                            <div class="tab-pane fade" id="modal3" role="tabpanel">
                                <img src="/store/img/quick-view/l3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="quick-view-list nav" role="tablist">
                        <a class="active" href="#modal1" data-toggle="tab" role="tab">
                            <img src="/store/img/quick-view/s1.jpg" alt="">
                        </a>
                        <a href="#modal2" data-toggle="tab" role="tab">
                            <img src="/store/img/quick-view/s2.jpg" alt="">
                        </a>
                        <a href="#modal3" data-toggle="tab" role="tab">
                            <img src="/store/img/quick-view/s3.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="qwick-view-right">
                    <div class="qwick-view-content">
                        <h3>Nombre del Producto</h3>
                        <div class="price">
                            <span class="new">¢1000</span>
                            <span class="old">¢2000</span>
                        </div>
                        <div class="rating-number">
                            <div class="quick-view-rating">
                                <i class="fa fa-star reting-color"></i>
                                <i class="fa fa-star reting-color"></i>
                                <i class="fa fa-star reting-color"></i>
                                <i class="fa fa-star reting-color"></i>
                                <i class="fa fa-star reting-color"></i>
                            </div>
                        </div>
                        <p>Descripcion del producto.</p>
                        <div class="quickview-plus-minus">
                            <div class="cart-plus-minus">
                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                            </div>
                            <div class="quickview-btn-cart">
                                <a class="btn-style" href="#">Agregar al Carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection