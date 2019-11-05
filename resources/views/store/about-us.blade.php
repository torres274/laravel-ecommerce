@extends('layouts.layout')

@section('title', 'Sobre Nosotros')

@section('content')
<div class="breadcrumb-area pt-255 pb-170" style="background-image: url('/store/img/banner/banner-Fondo.jpg')">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h2>Sobre nosotros</h2>
            <ul>
                <li>
                    <a href="/">inicio</a>
                </li>
                <li>sobre nostros</li>
            </ul>
        </div>
    </div>
</div>

<div class="about-us-area pt-125 pb-125">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="overview-content">
                    <h1><span>MOUSE SHOP</span> COSTA RICA</h1>
                    <h2>NUESTRA <span>TIENDA DE TECNOLOGIA</span></h2>
                    <p><span>Mouse Lamp Tecnologies</span> nace a principio del año 2012, iniciando la idea de un pequeño equipo de trabajo de Ingeniería en Sistemas de la Universidad Nacional Campus Liberia, de aquí parte la iniciativa de crear una empresa tecnológica en la región de Guanacaste que supla las necesidades de las personas y pymes a nivel tecnológico. </p>
                    <div class="question-area">
                        <h4>ALGUNA PREGUNTA? </h4>
                        <div class="question-contact">
                            <div class="question-icon">
                                <i class="icofont icofont-phone"></i>
                            </div>
                            <div class="question-content-number">
                                <h6> 2667-0294 / 8717-0007</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="overview-img">
                    <img class="tilter" src="/store/img/banner/history.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="team-area pt-30 pb-95">
    <div class="container">
        <div class="section-title text-center mb-60">
            <h2>EQUIPO</h2>
            <p>
                <span>MOUSE SHOP</span>
                equipo especializado en el desarrollo de aplicaciones moviles, diseño de paginas web, reparacion de celulares y computadoras.
            </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="team-wrapper mb-30">
                    <div class="team-img">
                        <img src="/store/img/team/thumb1.jpg" alt="">
                    </div>
                    <div class="team-content">
                        <h4>Joseph Rojas Méndez</h4>
                        <span>CEO - Mouse Lamp Technologies</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="team-wrapper mb-30">
                    <div class="team-img">
                        <img src="/store/img/team/thumb2.jpg" alt="">
                    </div>
                    <div class="team-content">
                        <h4>Jennifer Rojas Méndez</h4>
                        <span>Encargada de contabilidad de Mouse</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="team-wrapper mb-30">
                    <div class="team-img">
                        <img src="/store/img/team/thumb3.jpg" alt="">
                    </div>
                    <div class="team-content">
                        <h4>Yorlin Sevilla Picado</h4>
                        <span>Técnica en mantenimiento y reparación</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection