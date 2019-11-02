@extends('layouts.layout')

@section('title', 'Tienda')

@section('content')
<div class="breadcrumb-area pt-255 pb-170" style="background-image: url('/img/banner/banner-Fondo.jpg')">
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
                            <form action="#">
                                <input type="text" placeholder="Buscar Producto...">
                                <button><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-widget pb-50">
                        <h3 class="sidebar-widget">por categoria</h3>
                        <div class="widget-categories">
                            <ul>
                                <li><a href="#">Celulares</a></li>
                                <li><a href="#">Computadoras</a></li>
                                <li><a href="#">Accesorios</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-55">
                        <h3 class="sidebar-widget">por precio</h3>
                        <div class="price_filter mr-60">
                            <div id="slider-range"></div>
                            <div class="price_slider_amount">
                                <div class="label-input">
                                    <label>precio : </label>
                                    <input type="text" id="amount" name="price"  placeholder="Agrege su Precio" />
                                </div>
                                <button type="button">Filtrar</button> 
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <h3 class="sidebar-widget">mejores ventas</h3>
                        <div class="best-seller">
                            <div class="single-best-seller">
                                <div class="best-seller-img">
                                    <a href="#"><img src="/img/product/product-12.jpg" alt=""></a>
                                </div>
                                <div class="best-seller-text">
                                    <h3><a href="#">Producto #1</a></h3>
                                    <span>¢1000</span>
                                </div>
                            </div>
                            <div class="single-best-seller">
                                <div class="best-seller-img">
                                    <a href="#"><img src="/img/product/product-13.jpg" alt=""></a>
                                </div>
                                <div class="best-seller-text">
                                    <h3><a href="#">Producto #2</a></h3>
                                    <span>¢1000</span>
                                </div>
                            </div>
                            <div class="single-best-seller">
                                <div class="best-seller-img">
                                    <a href="#"><img src="/img/product/product-14.jpg" alt=""></a>
                                </div>
                                <div class="best-seller-text">
                                    <h3><a href="#">Producto #3</a></h3>
                                    <span>¢1000</span>
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
                        <div class="shop-product-sorting nav">
                            <a class="active" data-toggle="tab" href="#new-product">Cedulares </a>
                            <a  data-toggle="tab" href="#use-product">Computadoras </a>
                            <a data-toggle="tab" href="#accessory-product">Accesorios</a>
                        </div>
                        <div class="sorting sorting-bg-1">
                            <form>
                                <select class="select">
                                    <option value="">Orden default</option>
                                    <option value="">Ordenar por nombre</option>
                                    <option value="">Ordenar por precio</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="grid-list-product-wrapper tab-content">
                    <div id="new-product" class="product-grid product-view tab-pane active">
                        <div class="row">
                            <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                <div class="product-wrapper mb-35">
                                    <div class="product-img">
                                        <a href="/product-details">
                                            <img src="/img/product/product-1.jpg" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>Espacio #1</li>
                                                <li>Espacio #2</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2 p-action-none" title="Agregar al Carrito" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="/product-details">Producto #1</a></h4>
                                                <span>Descripcion</span>
                                            </div>
                                            <div class="product-price">
                                                <span>Precio</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h2><a href="/product-details">Producto #1</a></h2>
                                        <div class="quick-view-rating">
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                        </div>
                                        <div class="product-price">
                                            <span>¢1000</span>
                                        </div>
                                        <p>Descripcion del producto.</p>
                                        <div class="shop-list-cart">
                                            <a href="/cart"><i class="ti-shopping-cart"></i> Agregar al Carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                <div class="product-wrapper mb-35">
                                    <div class="product-img">
                                        <a href="/product-details">
                                            <img src="/img/product/product-1.jpg" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>Espacio #1</li>
                                                <li>Espacio #2</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2 p-action-none" title="Agregar al Carrito" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="/product-details">Producto #1</a></h4>
                                                <span>Descripcion</span>
                                            </div>
                                            <div class="product-price">
                                                <span>Precio</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h2><a href="/product-details">Producto #1</a></h2>
                                        <div class="quick-view-rating">
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                        </div>
                                        <div class="product-price">
                                            <span>¢1000</span>
                                        </div>
                                        <p>Descripcion del producto.</p>
                                        <div class="shop-list-cart">
                                            <a href="/cart"><i class="ti-shopping-cart"></i> Agregar al Carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                <div class="product-wrapper mb-35">
                                    <div class="product-img">
                                        <a href="/product-details">
                                            <img src="/img/product/product-1.jpg" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>Espacio #1</li>
                                                <li>Espacio #2</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2 p-action-none" title="Agregar al Carrito" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="/product-details">Producto #1</a></h4>
                                                <span>Descripcion</span>
                                            </div>
                                            <div class="product-price">
                                                <span>Precio</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h2><a href="/product-details">Producto #1</a></h2>
                                        <div class="quick-view-rating">
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                        </div>
                                        <div class="product-price">
                                            <span>¢1000</span>
                                        </div>
                                        <p>Descripcion del producto.</p>
                                        <div class="shop-list-cart">
                                            <a href="/cart"><i class="ti-shopping-cart"></i> Agregar al Carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                <div class="product-wrapper mb-35">
                                    <div class="product-img">
                                        <a href="/product-details">
                                            <img src="/img/product/product-1.jpg" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>Espacio #1</li>
                                                <li>Espacio #2</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2 p-action-none" title="Agregar al Carrito" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="/product-details">Producto #1</a></h4>
                                                <span>Descripcion</span>
                                            </div>
                                            <div class="product-price">
                                                <span>Precio</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h2><a href="/product-details">Producto #1</a></h2>
                                        <div class="quick-view-rating">
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                        </div>
                                        <div class="product-price">
                                            <span>¢1000</span>
                                        </div>
                                        <p>Descripcion del producto.</p>
                                        <div class="shop-list-cart">
                                            <a href="/cart"><i class="ti-shopping-cart"></i> Agregar al Carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                <div class="product-wrapper mb-35">
                                    <div class="product-img">
                                        <a href="/product-details">
                                            <img src="/img/product/product-1.jpg" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>Espacio #1</li>
                                                <li>Espacio #2</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2 p-action-none" title="Agregar al Carrito" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="/product-details">Producto #1</a></h4>
                                                <span>Descripcion</span>
                                            </div>
                                            <div class="product-price">
                                                <span>Precio</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h2><a href="/product-details">Producto #1</a></h2>
                                        <div class="quick-view-rating">
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                        </div>
                                        <div class="product-price">
                                            <span>¢1000</span>
                                        </div>
                                        <p>Descripcion del producto.</p>
                                        <div class="shop-list-cart">
                                            <a href="/cart"><i class="ti-shopping-cart"></i> Agregar al Carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                <div class="product-wrapper mb-35">
                                    <div class="product-img">
                                        <a href="/product-details">
                                            <img src="/img/product/product-1.jpg" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>Espacio #1</li>
                                                <li>Espacio #2</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2 p-action-none" title="Agregar al Carrito" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="/product-details">Producto #1</a></h4>
                                                <span>Descripcion</span>
                                            </div>
                                            <div class="product-price">
                                                <span>Precio</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h2><a href="/product-details">Producto #1</a></h2>
                                        <div class="quick-view-rating">
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                        </div>
                                        <div class="product-price">
                                            <span>¢1000</span>
                                        </div>
                                        <p>Descripcion del producto.</p>
                                        <div class="shop-list-cart">
                                            <a href="/cart"><i class="ti-shopping-cart"></i> Agregar al Carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                <div class="product-wrapper mb-35">
                                    <div class="product-img">
                                        <a href="/product-details">
                                            <img src="/img/product/product-1.jpg" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>Espacio #1</li>
                                                <li>Espacio #2</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2 p-action-none" title="Agregar al Carrito" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="/product-details">Producto #1</a></h4>
                                                <span>Descripcion</span>
                                            </div>
                                            <div class="product-price">
                                                <span>Precio</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h2><a href="/product-details">Producto #1</a></h2>
                                        <div class="quick-view-rating">
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                        </div>
                                        <div class="product-price">
                                            <span>¢1000</span>
                                        </div>
                                        <p>Descripcion del producto.</p>
                                        <div class="shop-list-cart">
                                            <a href="/cart"><i class="ti-shopping-cart"></i> Agregar al Carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                <div class="product-wrapper mb-35">
                                    <div class="product-img">
                                        <a href="/product-details">
                                            <img src="/img/product/product-1.jpg" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>Espacio #1</li>
                                                <li>Espacio #2</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2 p-action-none" title="Agregar al Carrito" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="/product-details">Producto #1</a></h4>
                                                <span>Descripcion</span>
                                            </div>
                                            <div class="product-price">
                                                <span>Precio</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h2><a href="/product-details">Producto #1</a></h2>
                                        <div class="quick-view-rating">
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                        </div>
                                        <div class="product-price">
                                            <span>¢1000</span>
                                        </div>
                                        <p>Descripcion del producto.</p>
                                        <div class="shop-list-cart">
                                            <a href="/cart"><i class="ti-shopping-cart"></i> Agregar al Carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                <div class="product-wrapper mb-35">
                                    <div class="product-img">
                                        <a href="/product-details">
                                            <img src="/img/product/product-1.jpg" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>Espacio #1</li>
                                                <li>Espacio #2</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2 p-action-none" title="Agregar al Carrito" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="/product-details">Producto #1</a></h4>
                                                <span>Descripcion</span>
                                            </div>
                                            <div class="product-price">
                                                <span>Precio</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h2><a href="/product-details">Producto #1</a></h2>
                                        <div class="quick-view-rating">
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                        </div>
                                        <div class="product-price">
                                            <span>¢1000</span>
                                        </div>
                                        <p>Descripcion del producto.</p>
                                        <div class="shop-list-cart">
                                            <a href="/cart"><i class="ti-shopping-cart"></i> Agregar al Carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>       
                        </div>
                    </div>
                    <div id="use-product" class="product-grid product-view tab-pane">
                        <div class="row">
                            <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                <div class="product-wrapper mb-35">
                                    <div class="product-img">
                                        <a href="/product-details">
                                            <img src="/img/product/product-1.jpg" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>Espacio #1</li>
                                                <li>Espacio #2</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2 p-action-none" title="Agregar al Carrito" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="/product-details">Producto #2</a></h4>
                                                <span>Descripcion</span>
                                            </div>
                                            <div class="product-price">
                                                <span>Precio</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h2><a href="/product-details">Producto #2</a></h2>
                                        <div class="quick-view-rating">
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                        </div>
                                        <div class="product-price">
                                            <span>¢1000</span>
                                        </div>
                                        <p>Descripcion del producto.</p>
                                        <div class="shop-list-cart">
                                            <a href="/cart"><i class="ti-shopping-cart"></i> Agregar al Carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                <div class="product-wrapper mb-35">
                                    <div class="product-img">
                                        <a href="/product-details">
                                            <img src="/img/product/product-1.jpg" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>Espacio #1</li>
                                                <li>Espacio #2</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2 p-action-none" title="Agregar al Carrito" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="/product-details">Producto #2</a></h4>
                                                <span>Descripcion</span>
                                            </div>
                                            <div class="product-price">
                                                <span>Precio</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h2><a href="/product-details">Producto #2</a></h2>
                                        <div class="quick-view-rating">
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                        </div>
                                        <div class="product-price">
                                            <span>¢1000</span>
                                        </div>
                                        <p>Descripcion del producto.</p>
                                        <div class="shop-list-cart">
                                            <a href="/cart"><i class="ti-shopping-cart"></i> Agregar al Carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                <div class="product-wrapper mb-35">
                                    <div class="product-img">
                                        <a href="/product-details">
                                            <img src="/img/product/product-1.jpg" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>Espacio #1</li>
                                                <li>Espacio #2</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2 p-action-none" title="Agregar al Carrito" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="/product-details">Producto #2</a></h4>
                                                <span>Descripcion</span>
                                            </div>
                                            <div class="product-price">
                                                <span>Precio</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h2><a href="/product-details">Producto #2</a></h2>
                                        <div class="quick-view-rating">
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                        </div>
                                        <div class="product-price">
                                            <span>¢1000</span>
                                        </div>
                                        <p>Descripcion del producto.</p>
                                        <div class="shop-list-cart">
                                            <a href="/cart"><i class="ti-shopping-cart"></i> Agregar al Carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>       
                        </div>
                    </div>
                    <div id="accessory-product" class="product-grid product-view tab-pane">
                        <div class="row">
                            <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                <div class="product-wrapper mb-35">
                                    <div class="product-img">
                                        <a href="/product-details">
                                            <img src="/img/product/product-1.jpg" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>Espacio #1</li>
                                                <li>Espacio #2</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2 p-action-none" title="Agregar al Carrito" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="/product-details">Producto #3</a></h4>
                                                <span>Descripcion</span>
                                            </div>
                                            <div class="product-price">
                                                <span>Precio</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h2><a href="/product-details">Producto #3</a></h2>
                                        <div class="quick-view-rating">
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                        </div>
                                        <div class="product-price">
                                            <span>¢1000</span>
                                        </div>
                                        <p>Descripcion del producto.</p>
                                        <div class="shop-list-cart">
                                            <a href="/cart"><i class="ti-shopping-cart"></i> Agregar al Carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                <div class="product-wrapper mb-35">
                                    <div class="product-img">
                                        <a href="/product-details">
                                            <img src="/img/product/product-1.jpg" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>Espacio #1</li>
                                                <li>Espacio #2</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2 p-action-none" title="Agregar al Carrito" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="/product-details">Producto #3</a></h4>
                                                <span>Descripcion</span>
                                            </div>
                                            <div class="product-price">
                                                <span>Precio</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h2><a href="/product-details">Producto #3</a></h2>
                                        <div class="quick-view-rating">
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                        </div>
                                        <div class="product-price">
                                            <span>¢1000</span>
                                        </div>
                                        <p>Descripcion del producto.</p>
                                        <div class="shop-list-cart">
                                            <a href="/cart"><i class="ti-shopping-cart"></i> Agregar al Carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                <div class="product-wrapper mb-35">
                                    <div class="product-img">
                                        <a href="/product-details">
                                            <img src="/img/product/product-1.jpg" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>Espacio #1</li>
                                                <li>Espacio #2</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2 p-action-none" title="Agregar al Carrito" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-reload" title="Ver" data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="/product-details">Producto #3</a></h4>
                                                <span>Descripcion</span>
                                            </div>
                                            <div class="product-price">
                                                <span>Precio</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-list-details">
                                        <h2><a href="/product-details">Producto #3</a></h2>
                                        <div class="quick-view-rating">
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                        </div>
                                        <div class="product-price">
                                            <span>¢1000</span>
                                        </div>
                                        <p>Descripcion del producto.</p>
                                        <div class="shop-list-cart">
                                            <a href="/cart"><i class="ti-shopping-cart"></i> Agregar al Carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>     
                        </div>
                    </div>
                </div>
                <div class="paginations text-center mt-20">
                    <ul>
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal -->
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
                                <img src="/img/quick-view/l1.jpg" alt="">
                            </div>
                            <div class="tab-pane fade" id="modal2" role="tabpanel">
                                <img src="/img/quick-view/l2.jpg" alt="">
                            </div>
                            <div class="tab-pane fade" id="modal3" role="tabpanel">
                                <img src="/img/quick-view/l3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="quick-view-list nav" role="tablist">
                        <a class="active" href="#modal1" data-toggle="tab" role="tab">
                            <img src="/img/quick-view/s1.jpg" alt="">
                        </a>
                        <a href="#modal2" data-toggle="tab" role="tab">
                            <img src="/img/quick-view/s2.jpg" alt="">
                        </a>
                        <a href="#modal3" data-toggle="tab" role="tab">
                            <img src="/img/quick-view/s3.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="qwick-view-right">
                    <div class="qwick-view-content">
                        <h3>Nombre del Producto</h3>
                        <div class="price">
                            <span class="new">Precio Nuevo</span>
                            <span class="old">Precio Viejo</span>
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
                        <p>Descripcion del producto: </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                        <div class="quickview-plus-minus">
                            <div class="cart-plus-minus">
                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                            </div>
                            <div class="quickview-btn-cart">
                                <a class="btn-style" href="#">agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection