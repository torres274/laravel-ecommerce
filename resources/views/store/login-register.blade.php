@extends('layouts.layout')

@section('title', 'Login')

@section('content')
<div class="breadcrumb-area pt-255 pb-170" style="background-image: url('/store/img/banner/banner-Fondo.jpg')">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h2>login</h2>
            <ul>
                <li>
                    <a href="/store/index">inicio</a>
                </li>
                <li>login</li>
            </ul>
        </div>
    </div>
</div>
<div class="login-register-area ptb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg1">
                            <h4> iniciar sesion </h4>
                        </a>
                        <a data-toggle="tab" href="#lg2">
                            <h4> registrarse </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-form">
                                    <form action="#" method="post">
                                        <input type="text" name="user-name" placeholder="Nombre de Usuario">
                                        <input type="password" name="user-password" placeholder="Contraseña">
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox">
                                                <label>Recordarme</label>
                                                <a href="#">Olvido su contraseña?</a>
                                            </div>
                                            <button type="submit" class="btn-style cr-btn"><span>Iniciar Sesion</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="lg2" class="tab-pane">
                            <div class="login-form-container">
                                <div class="login-form">
                                    <form action="#" method="post">
                                        <input type="text" name="user-cedula" placeholder="Cédula">
                                        <input type="text" name="user-nombre" placeholder="Nombre Completo">
                                        <input type="text" name="user-telefono" placeholder="Teléfono">
                                        <input type="text" name="user-direccion" placeholder="Dirección">
                                        <input type="email" name="user-email" placeholder="Email">
                                        <input type="text" name="user-usuario" placeholder="Nombre de Usuario">
                                        <input type="password" name="user-contrasena" placeholder="Contraseña">        
                                        <div class="button-box">
                                            <button type="submit" class="btn-style cr-btn"><span>Registrarse</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
