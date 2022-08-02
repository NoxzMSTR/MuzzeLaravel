<!DOCTYPE html>
<html lang="en">
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the page title -->
	<title>D'Guillermo Galeria - galeria de arte Guillo Perez</title>
	<!-- inlcude google archivo & lora font cdn link -->
	<link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Lora:ital,wght@0,400;0,700;1,400;1,700&family=Muli:ital@0;1&family=Merriweather&display=swap" rel="stylesheet">
	<!-- include the site bootstrap stylesheet -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{asset('assets/style.css')}}">
	<!-- include the site responsive stylesheet -->
	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    @yield('css')
</head>
<body class="hClassVi">
	<!-- pageWrapper -->
	<div id="pageWrapper">
		<div class="phStickyWrap phViv w-100">
			<!-- pageHeader -->
			@include('components.header')
		</div>

        <main>
            @yield('content')
        </main>

            <!-- ftAreaWrap -->
            @include('components.footer')
            
            @include('includes.home-modal')
	
	</div>
	<!-- include jQuery library -->
	<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
	<!-- include bootstrap popper JavaScript -->
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<!-- include bootstrap JavaScript -->
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<!-- include custom JavaScript -->
	<script src="{{asset('assets/js/jqueryCustom.js')}}"></script>
	<!-- include fontawesome kit -->
	<script src="https://kit.fontawesome.com/391f644c42.js"></script>
    @yield('js')
</body>
</html>