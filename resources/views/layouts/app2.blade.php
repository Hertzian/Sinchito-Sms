<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <title>{{ config('app.name', 'SinchitoSms') }}</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-extends.css') }}">
	<!-- theme style -->
	<link rel="stylesheet" href="{{ asset('css/master-style.css') }}">
	<!-- MinimalLite Admin skins -->
	<link rel="stylesheet" href="{{ asset('css/_all-skins.css') }}">
</head>

    @yield('content')

{{-- <!-- jQuery 3 -->
<script src="{{ asset('js/jquery.js') }}"></script>
<!-- popper -->
<script src="{{ asset('js/popper.js') }}"></script>
<!-- Bootstrap 4.0-->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- Functions.js -->
<script src="{{ asset('js/functions.js') }}"></script> --}}


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

</html>
