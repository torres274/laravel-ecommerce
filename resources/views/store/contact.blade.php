@extends('layouts.layout')

@section('title', 'Contacto')

@section('content')
<div class="breadcrumb-area pt-255 pb-170" style="background-image: url('/store/img/banner/banner-Fondo.jpg')">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h2>CONTACTO</h2>
            <ul>
                <li>
                    <a href="/">inicio</a>
                </li>
                <li>contacto</li>
            </ul>
        </div>
    </div>
</div>
<div class="contact-area pt-130">
    <div class="container">
        <div class="contact-map">
            <div id="map"></div>
        </div>
    </div>
    <div class="all-info ptb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info-wrapper">
                        <h4 class="contact-title">INFORMACIÓN</h4>
                        <div class="communication-info">
                            <div class="single-communication">
                                <div class="communication-icon">
                                    <i class="ti-home" aria-hidden="true"></i>
                                </div>
                                <div class="communication-text">
                                    <h4>Dirección:</h4>
                                    <p>75 metros Oeste de la escuela Lakeside International en el Barrio el Tablazo en Sardinal, Carrillo, Guanacaste.</p>
                                </div>
                            </div>
                            <div class="single-communication">
                                <div class="communication-icon">
                                    <i class="ti-mobile" aria-hidden="true"></i>
                                </div>
                                <div class="communication-text">
                                    <h4>Teléfono:</h4>
                                    <p>2667-0294 / 8717-0007</p>
                                </div>
                                </div>
                            <div class="single-communication">
                                <div class="communication-icon">
                                    <i class="ti-email" aria-hidden="true"></i>
                                </div>
                                <div class="communication-text">
                                    <h4>Email:</h4>
                                    <p><a href="#">info@mouseshopcr.com</a></p>
                                </div>
                            </div>
                            <div class="single-communication">
                                <div class="communication-icon">
                                    <i class="ti-world" aria-hidden="true"></i>
                                </div>
                                <div class="communication-text">
                                    <h4>Sitio Web:</h4>
                                    <p><a href="#">https://mouselamptechnologies.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-message-wrapper">
                        <h4 class="contact-title">CONTACTO</h4>
                        <div class="contact-message">
                            <form id="contact-form" action="/create" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="name" placeholder="Nombre Completo" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="email" placeholder="Email" type="email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-form-style mb-20">
                                            <input name="subject" placeholder="Asunto" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-form-style">
                                            <textarea name="message" placeholder="Mensaje" required></textarea>
                                            <button class="submit cr-btn btn-style" type="submit"><span>ENVIAR MENSAJE</span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
       
@section('map')
<script src="https://maps.googleapis.com/maps/api/js?key="></script>
<script>
    function init() {
        var mapOptions = {
            zoom: 15,
            scrollwheel: false,
            center: new google.maps.LatLng(10.5344652, -85.6140881),
            styles: 
            [
                {
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "saturation": 36
                        },
                        {
                            "color": "#878787"
                        },
                        {
                            "lightness": 40
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 17
                        },
                        {
                            "weight": 1.2
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#444444"
                        },
                        {
                            "lightness": 29
                        },
                        {
                            "weight": 0.2
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 18
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 19
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#2d333c"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                }
            ]
        };
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(10.5344652, -85.6140881),
            map: map,
            icon: '/store/img/icon-img/8.png',
            animation:google.maps.Animation.BOUNCE,
            title: 'Snazzy!'
        });
    }
    google.maps.event.addDomListener(window, 'load', init);
</script>
@endsection