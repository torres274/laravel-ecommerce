@extends('layouts.master')

@section('title', 'Categorias')

@section('content')
<div class="main-header">
	<!-- Logo Header -->
	<div class="logo-header" data-background-color="blue">
		<a href="/" class="logo">
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

				<li class="nav-item">
					<a href="/home">
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

				<li class="nav-item active">
					<a data-toggle="collapse" href="#productos">
						<i class="material-icons">list</i>
						<p>Ventas</p>
						<span class="caret"></span>
					</a>
					<div class="collapse show" id="productos">
						<ul class="nav nav-collapse">
							<li>
								<a href="/product">
									<span class="sub-item">Productos</span>
								</a>
							</li>
							<li>
								<a href="/inventory">
									<span class="sub-item">Inventario</span>
								</a>
							</li>
							<li class="active">
								<a href="/productCategory">
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
								<a href="/order">
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
								<a href="/user">
									<span class="sub-item">Administradores</span>
								</a>
							</li>
							<li>
								<a href="/customer">
									<span class="sub-item">Clientes</span>
								</a>
							</li>
							<li>
								<a href="/role">
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
				<h4 class="page-title">Productos</h4>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="d-flex align-items-center">
								<h4 class="card-title">Categorias de Productos</h4>
								<a onclick="event.preventDefault();addCategoryForm();" href="#" class="btn btn-primary btn-round ml-auto" data-toggle="modal">
									<span>Agregar</span>
								</a>
							</div>
						</div>
						<div class="card-body">

							@include('partials.productCategory')

							<div class="table-responsive">
								<table id="add-row" class="display table table-striped table-hover" >
									<thead>
										<tr>
											<th>ID</th>
											<th>Descripcion</th>
											<th width="10%">Acción</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($productCategory as $category)
										<tr>
											<td>{{$category->id}}</td>
											<td>{{$category->description}}</td>
											<td>
												<div class="form-button-action">
													<a onclick="event.preventDefault();editCategoryForm({{$category->id}});" href="#" class="edit open-modal" data-toggle="modal" value="{{$category->id}}"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
													<a onclick="event.preventDefault();deleteCategoryForm({{$category->id}});" href="#" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
												</div>
											</td>
											</tr>
										@endforeach
									</tbody>
								</table>
								<div class="clearfix">
									<div class="hint-text">Mostrando <b>{{$productCategory->count()}}</b> de <b>{{$productCategory->total()}}</b> registros</div>
									{{ $productCategory->links() }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer">
		<div class="container-fluid">
			<div class="copyright ml-auto">
				<p>©Copyright 2019 | Todos los derechos reservados por <a href="#">Mouse Lamp Technologies</a></p>
			</div>				
		</div>
	</footer>
</div>
@endsection

@section('datatable')
<script type="text/javascript" src="{{asset('js/productCategory.js')}}"></script>
@endsection