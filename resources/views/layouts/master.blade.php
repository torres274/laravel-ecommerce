<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title', 'MouseShop')</title>

	<!-- Fonts and icons -->
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('/img/favicon.png') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="{{asset('/css/fonts.min.css') }}">

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{asset('/css/atlantis.css') }}">
	
</head>

<body>
	<div class="wrapper">

    @yield('content')
	</div>
	<!--   Core JS Files   -->
	<script src="{{asset('/js/core/jquery.3.2.1.min.js') }}"></script>
	<script src="{{asset('/js/core/popper.min.js') }}"></script>
	<script src="{{asset('/js/core/bootstrap.min.js') }}"></script>
	<!-- jQuery UI -->
	<script src="{{asset('/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
	<script src="{{asset('/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>
	<!-- jQuery Scrollbar -->
	<script src="{{asset('/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
	<!-- Datatables -->
	<script src="{{asset('/js/plugin/datatables/datatables.min.js') }}"></script>
	<!-- Bootstrap Notify -->
	<script src="{{asset('/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
	<!-- Atlantis JS -->
	<script src="{{asset('/js/atlantis.js') }}"></script>
	<!-- Alert Style -->
	<script src="{{asset('/js/alert.js') }}"></script>
    
    @yield('datatable')

</body>
</html>