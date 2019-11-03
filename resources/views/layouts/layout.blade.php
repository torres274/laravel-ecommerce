<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Sale of electronic products. Mouse Shop Costa Rica.">
    <title>@yield('title', 'MouseShop CR')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/store/img/favicon.png') }}">

    <!-- all css here -->
    <link rel="stylesheet" href="{{asset('/store/css/bootstrap.min.css') }}"/>
        <link rel="stylesheet" href="{{asset('/store/css/animate.css') }}"/>
        <link rel="stylesheet" href="{{asset('/store/css/owl.carousel.min.css') }}"/>
        <link rel="stylesheet" href="{{asset('/store/css/chosen.min.css') }}"/>
        <link rel="stylesheet" href="{{asset('/store/css/meanmenu.min.css') }}"/>
        <link rel="stylesheet" href="{{asset('/store/css/themify-icons.css') }}"/>
        <link rel="stylesheet" href="{{asset('/store/css/icofont.css') }}"/>
        <link rel="stylesheet" href="{{asset('/store/css/font-awesome.min.css') }}"/>
        <link rel="stylesheet" href="{{asset('/store/css/bundle.css') }}"/>
        <link rel="stylesheet" href="{{asset('/store/css/style.css') }}"/>
        <link rel="stylesheet" href="{{asset('/store/css/responsive.css') }}"/>
        <script src="{{asset('/store/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="header-area transparent-bar ptb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-4">
                            <div class="logo-small-device">
                                <a href="/store/index"><img src="/store/img/logo/logoMouse.png"></a>
                            </div>
                        </div>   
                        <div class="col-lg-8 col-md-8 col-8">
                            <div class="header-contact-menu-wrapper pl-45">
                                <div class="header-contact">
                                    <p>CENTRO DE ATENCIÓN  +506 2667-0294</p>
                                </div>
                                <div class="menu-wrapper text-center">
                                    <button class="menu-toggle">
                                        <img class="s-open" alt="" src="/store/img/icon-img/menu-open.png">
                                        <img class="s-close" alt="" src="/store/img/icon-img/menu-cross.png">
                                    </button>
                                    <div class="main-menu">
                                        <nav>
                                            <ul>
                                                <li><a href="/store/index">inicio</a></li>
                                                <li class="active"><a href="/store/about-us">sobre nosotros</a></li>
                                                <li><a href="/store/shop">tienda</a></li>
                                                <li><a href="/store/login-register">login</a></li>
                                                <li><a href="/store/contact">contacto</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="header-cart cart-small-device">
                                <button class="icon-cart">
                                    <i class="ti-shopping-cart"></i>
                                    <span class="count-style">03</span>
                                    <span class="count-price-add">¢3000</span>
                                </button>
                                <div class="shopping-cart-content">
                                    <ul>
                                        <li class="single-shopping-cart">
                                            <div class="shopping-cart-img">
                                                <a href="#"><img alt="" src="/store/img/cart/cart-1.jpg"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h3><a href="#">Articulo</a></h3>
                                                <span>Precio: ¢1000</span>
                                                <span>Cantidad: 01</span>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="icofont icofont-ui-delete"></i></a>
                                            </div>
                                        </li>
                                        <li class="single-shopping-cart">
                                            <div class="shopping-cart-img">
                                                <a href="#"><img alt="" src="/store/img/cart/cart-2.jpg"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h3><a href="#">Articulo</a></h3>
                                                <span>Precio: ¢1000</span>
                                                <span class="qty">Cantidad: 01</span>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="icofont icofont-ui-delete"></i></a>
                                            </div>
                                        </li>
                                        <li class="single-shopping-cart">
                                            <div class="shopping-cart-img">
                                                <a href="#"><img alt="" src="/store/img/cart/cart-3.jpg"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h3><a href="#">Articulo</a></h3>
                                                <span>Precio: ¢1000</span>
                                                <span class="qty">Cantidad: 01</span>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="icofont icofont-ui-delete"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-total">
                                        <h4>total: <span>¢3000</span></h4>
                                    </div>
                                    <div class="shopping-cart-btn">
                                        <a class="btn-style cr-btn" href="/store/cart">ver carrito</a>
                                    </div>
                                    <div class="shopping-cart-btn">
                                        <a class="btn-style cr-btn" href="/store/checkout">checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu-area col-12">
                            <div class="mobile-menu">
                                <nav id="mobile-menu-active">
                                    <ul class="menu-overflow">
                                        <li><a href="/store/index">inicio</a></li>
                                        <li><a href="/store/about-us">sobre nosotros</a></li>
                                        <li><a href="/store/shop">tienda</a></li>
                                        <li><a href="/store/login-register">login</a></li>
                                        <li><a href="/store/contact">Contacto</a></li>
                                    </ul>
                                </nav>                          
                            </div>
                        </div>
                    </div>
                </div> 
                {{-- Cierre del row --}}
                <div class="header-cart-wrapper">
                    <div class="header-cart">
                        <button class="icon-cart">
                            <i class="ti-shopping-cart"></i>
                            <span class="count-style">01</span>
                        </button>
                        <div class="shopping-cart-content">
                            <ul>
                                <li class="single-shopping-cart">
                                    <div class="shopping-cart-img">
                                        <a href="#"><img alt="" src="/store/img/cart/cart-1.jpg"></a>
                                    </div>
                                    <div class="shopping-cart-title">
                                        <h3><a href="#">Articulo</a></h3>
                                        <span>Precio: ¢1000</span>
                                        <span>Cantidad: 01</span>
                                    </div>
                                    <div class="shopping-cart-delete">
                                        <a href="#"><i class="icofont icofont-ui-delete"></i></a>
                                    </div>
                                </li>

                            </ul>
                            <div class="shopping-cart-total">
                                <h4>total: <span>¢3000</span></h4>
                            </div>
                            <div class="shopping-cart-btn">
                                <a class="btn-style cr-btn" href="/store/cart">ver carrito</a>
                            </div>
                            <div class="shopping-cart-btn">
                                <a class="btn-style cr-btn" href="/store/checkout">checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        {{-- <div class="newsletter-area">
            <div class="container">
                <div class="newsletter-wrapper-all theme-bg-2">
                    <div class="row">
                        <div class="col-lg-5 col-12 col-md-12">
                            <div class="newsletter-img bg-img" style="background-image: url('/store/img/banner/newsletter-blanco.jpg')">
                                <img alt="image" src="/store/img/team/newsletter-mouse.png">
                            </div>
                        </div>
                        <div class="col-lg-7 col-12 col-md-12">
                            <div class="newsletter-wrapper text-center">
                                <div class="newsletter-title">
                                    <h3>Suscribete para mas noticias</h3>
                                </div>
                                <div id="mc_embed_signup" class="subscribe-form">
                                    <form action="#" method="post" id="#" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll" class="mc-form">
                                            <input type="email" value="" name="EMAIL" class="email" placeholder="Ingrese su email aqui..." required>
                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                            <div class="clear"><input type="#" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <footer>
            <div class="footer-top pt-100 pb-70 theme-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="footer-widget mb-30">
                                <div class="footer-about">
                                    <p><span>MOUSE SHOP</span>, nos dedicamos a la venta de productos electronicos incluyendo computadoras, celulares, productos de comunicacion de datos inalambricos, entre otros. </p>
                                    <div class="footer-support">
                                        <h5>PARA SOPORTE LLAMAR AL</h5>
                                        <span>+506 2667-0294</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="footer-widget mb-30 pl-60">
                                <div class="footer-widget-title">
                                    <h3>ENLACES</h3>
                                </div>
                                <div class="quick-links">
                                    <ul>
                                        <li><a href="/store/about-us">Sobre nosotros</a></li>
                                        <li><a href="/store/shop">Tienda</a></li>
                                        <li><a href="/store/contact">Contacto</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="footer-widget mb-30">
                                <div class="footer-widget-title">
                                    <h3>INFORMACION DE CONTACTO</h3>
                                </div>
                                <div class="food-info-wrapper">
                                    <div class="food-address">
                                        <div class="food-info-title">
                                            <span>Direccion</span>
                                        </div>
                                        <div class="food-info-content">
                                            <p>75 metros Oeste de la escuela Lakeside International en el Barrio el Tablazo en Sardinal, Carrillo, Guanacaste.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="footer-widget mb-30">
                                <div class="footer-widget-title">
                                    <h3>SITIO WEB</h3>
                                </div>
                                <div class="food-info-wrapper">
                                    <div class="food-address">
                                        <div class="food-info-content">
                                            <a href="#">info@mouseshopcr.com</a>
                                            <a href="#">https://mouselamptechnologies.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom ptb-20 black-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-12">
                            <div class="copyright">
                                <p>©Copyright, 2019 Todos los derechos reservados por <a href="#">Mouse Lamp Technologies</a></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="footer-payment-method">
                                <a><img alt="" src="/store/img/icon-img/payment.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div> 

    @yield('map')
    
    <!-- all js here -->
    <script src="{{asset('/store/js/vendor/jquery-1.12.0.min.js') }}"></script>
    <script src="{{asset('/store/js/popper.js') }}"></script>
    <script src="{{asset('/store/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('/store/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{asset('/store/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{asset('/store/js/jquery.counterup.min.js') }}"></script>
    <script src="{{asset('/store/js/waypoints.min.js') }}"></script>

    <script src="{{asset('/store/js/owl.carousel.min.js') }}"></script>
    <script src="{{asset('/store/js/plugins.js') }}"></script>
    <script src="{{asset('/store/js/main.js') }}"></script>
</body>
</html>