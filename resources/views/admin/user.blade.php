@extends('layouts.master')

@section('title', 'Principal')

@section('content')
<div class="main-header">
	<!-- Logo Header -->
	<div class="logo-header" data-background-color="blue">
		<a href="/admin/home" class="logo">
			<img src="/img/logoBlancoMouse.png" alt="navbar brand" class="navbar-brand">
		</a>

		<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon">
				<i class="material-icons">dehaze</i>
			</span>
		</button>

		<button class="topbar-toggler more">
			<i class="icon-options-vertical"></i>
		</button>

		<div class="nav-toggle">
			<button class="btn btn-toggle toggle-sidebar">
				<i class="material-icons">dehaze</i>
			</button>
		</div>
	</div>
	<!-- End Logo Header -->

	<!-- Navbar Header -->
	<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">				
		<div class="container-fluid">
			<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
				<li class="nav-item dropdown hidden-caret">
					<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
						<div class="avatar-sm">
							<img src="/img/user.png" alt="..." class="avatar-img rounded-circle">
						</div>
					</a>
					<ul class="dropdown-menu dropdown-user animated fadeIn">
						<div class="dropdown-user-scroll scrollbar-outer">
							<li>
								<div class="user-box">
									<div class="avatar-lg"><img src="/img/user.png" alt="image profile" class="avatar-img rounded"></div>
									<div class="u-text">
										<h4>{{ Auth::user()->name }}</h4>
										<p class="text-muted">{{ Auth::user()->identification }}</p>
									</div>
								</div>
							</li>

							<li>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">
									{{ __('Perfil') }}
								</a>
							</li>

							<li>
								<a class="dropdown-item" href="{{ route('logout') }}"
									onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</li>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<!-- End Navbar -->
</div>

<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
	<div class="sidebar-wrapper scrollbar scrollbar-inner">
		<div class="sidebar-content">
			<ul class="nav nav-primary">

				<li class="nav-item active">
					<a href="/admin/home">
						<i class="material-icons">home</i>
						<p>Principal</p>
					</a>
				</li>

				<li class="nav-section">
					<span class="sidebar-mini-icon">
						<i class="fa fa-ellipsis-h"></i>
					</span>
					<h4 class="text-section">Administracion</h4>
				</li>

				<li class="nav-item">
					<a data-toggle="collapse" href="#productos">
						<i class="material-icons">list</i>
						<p>Ventas</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="productos">
						<ul class="nav nav-collapse">
							<li>
								<a href="/admin/product">
									<span class="sub-item">Productos</span>
								</a>
							</li>
							<li>
								<a href="/admin/inventory">
									<span class="sub-item">Inventario</span>
								</a>
							</li>
							<li>
								<a href="/admin/productCategory">
									<span class="sub-item">Categorias</span>
								</a>
							</li>
						</ul>
					</div>
				</li>

				<li class="nav-item">
					<a data-toggle="collapse" href="#compras">
						<i class="material-icons">list</i>
						<p>Compras</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="compras">
						<ul class="nav nav-collapse">
							<li>
								<a href="/admin/order">
									<span class="sub-item">Ordenes</span>
								</a>
							</li>
						</ul>
					</div>
				</li>

				<li class="nav-item">
					<a data-toggle="collapse" href="#usuarios">
						<i class="material-icons">list</i>
						<p>Usuarios</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="usuarios">
						<ul class="nav nav-collapse">
							<li>
								<a href="/admin/administrator">
									<span class="sub-item">Administradores</span>
								</a>
							</li>
							<li>
								<a href="/admin/employee">
									<span class="sub-item">Empleados</span>
								</a>
							</li>
							<li>
							<li>
								<a href="/admin/customer">
									<span class="sub-item">Clientes</span>
								</a>
							</li>
							<li>
								<a href="/admin/role">
									<span class="sub-item">Roles</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- End Sidebar -->

<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">Perfil</h4>
			</div>       
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-with-nav">
                        <form>
                            <div class="card-header">
                                <div class="row row-nav-line">
                                    <ul class="nav nav-tabs nav-line nav-color-primary w-100 pl-3" role="tablist">
                                        <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#home" role="tab" aria-selected="true">Configuración</a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Identificación</label>
                                            <input type="text" class="form-control" name="email" value="{{ Auth::user()->identification }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Nombre</label>
                                            <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Teléfono</label>
                                            <input type="text" class="form-control" name="email" value="{{ Auth::user()->phone }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="form-group form-group-default">
                                            <label>Dirección</label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->address }}" name="address">
                                        </div>
                                    </div>
								</div>
								<div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Contraseña</label>
                                            <input type="password" class="form-control" value="{{ Auth::user()->password }}" name="password">
                                        </div>
									</div>
									<div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Confirmar contraseña</label>
                                            <input type="password" class="form-control" value="{{ Auth::user()->password }}" name="password">
                                        </div>
                                    </div>
								</div>
                                <div class="text-right mt-3 mb-3">
                                    <button class="btn btn-primary" type="submit" disabled>Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-profile">
                        <div class="card-header" style="background-image: url('/img/perfil.jpg')">
                            <div class="profile-picture">
                                <div class="avatar avatar-xl">
                                    <img src="/img/user.png" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="user-profile text-center">
                                <div class="name">{{ Auth::user()->name }}</div>
                                <div>{{ Auth::user()->identification }}</div>
                                <div>Teléfono: {{ Auth::user()->phone }}</div>
                                <div class="desc">Dirección: {{ Auth::user()->address }}</div>
                                <div class="job">{{ Auth::user()->email }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

		</div>
	</div>
</div>
@endsection