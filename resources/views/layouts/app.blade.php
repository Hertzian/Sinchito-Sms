<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="images/favicon.ico">
	<title>Sinchito Admin - Dashboard</title>
	<!-- fontawesome-->  
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-extends.css') }}">
	<!-- theme style -->
	<link rel="stylesheet" href="{{ asset('css/master-style.css') }}">
	<!-- MinimalLite Admin skins -->
	<link rel="stylesheet" href="{{ asset('css/_all-skins.css') }}">
	<!-- Morris.js charts CSS -->
	<link rel="stylesheet" href="{{ asset('css/morris.css') }}">
	<!-- Vector CSS -->
	<link rel="stylesheet" href="{{ asset('css/jvectormap.css') }}">
	<!-- date picker -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
	<!-- daterange picker -->
	<link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">
	<!-- Data table -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
	<!-- bootstrap wysihtml5 - text editor -->
	<!-- text eitable -->
	<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
	<link rel="stylesheet" href="{{ asset('css/bootstrap3-wysihtml5.css') }}">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    @yield('style')

  </head>
<body class="hold-transition skin-green-light sidebar-mini">
<div class="wrapper">



@include('partials.navbar')

@include('partials.sidebar')

<div class="content">
		
	@include('partials.title')
	
	@include('partials.message')

	@yield('content')

</div>


@include('partials.footer')

@include('partials.controlsidebar')



<!-- jQuery 3 -->
<script src="{{ asset('js/jquery.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>$.widget.bridge('uibutton', $.ui.button);</script>
<!-- popper -->
<script src="{{ asset('js/popper.js') }}"></script>
<!-- Bootstrap 4.0-->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('js/raphael.js') }}"></script>
<script src="{{ asset('js/morris.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('js/chart.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('js/sparkline.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('js/slimscroll.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('js/fastclick.js') }}"></script>
<!-- peity -->
<script src="{{ asset('js/peity.js') }}"></script>
<!-- Vector map JavaScript -->
<script src="{{ asset('js/vectormap.js') }}"></script>
<script src="{{ asset('js/vectormap-us.js') }}"></script>
<!-- MinimalLite Admin App -->
<script src="{{ asset('js/template.js') }}"></script>
<!-- MinimalLite Admin dashboard demo (This is only for demo purposes) -->
{{-- Pendiente --}}
{{-- <script src="js/pages/dashboard.js"></script> --}}
<!-- MinimalLite Admin for demo purposes -->
<script src="{{ asset('js/demo.js') }}"></script>
<!-- funciones  -->
<script src="{{ asset('js/functions.js') }}"></script>

@yield('scripts')

</body>
</html>