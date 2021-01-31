@extends('errors::layout')
@section('title', '404')
@section('message')
<!doctype html>
<html lang="en">

<head>
    <title>Osam | 404</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Osam Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
    <meta name="author" content="GetBootstrap, design by: puffintheme.com">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('vendor/animate-css/vivify.min.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/site.min.css')}}">

</head>

<body class="theme-blush">

<div class="auth-main particles_js">
    <div class="auth_div vivify popIn">
        <div class="auth_brand">
            <a class="navbar-brand" href="#"><img src="{{URL::asset('/img/fenix.png')}}" width="30" height="30" class="d-inline-block align-top mr-2" alt="">FENIX</a>
        </div>
        <div class="card page-400">
            <div class="pattern">
                <span class="red"></span>
                <span class="indigo"></span>
                <span class="blue"></span>
                <span class="green"></span>
                <span class="orange"></span>
            </div>
            <div class="header">
                <p class="lead"><span class="number left">404 </span><span class="text">Oops! <br/>Pagina no encontrada</span></p>
            </div>
            <div class="body">
                <p>No se pudo encontrar la página que buscaba, por favor <a href="javascript:void(0);">contáctenos </a> para informar este problema.</p>
                <div class="margin-top-30">
                    <a href="javascript:history.go(-1)" class="btn btn-round btn-default btn-block"><i class="fa fa-arrow-left"></i> <span>Go Back</span></a>
                    <a href="{{url('/')}}" class="btn btn-round btn-primary btn-block"><i class="fa fa-home"></i> <span>Home</span></a>
                </div>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</div>
<!-- END WRAPPER -->

<script src="{{URL::asset('/bundles/libscripts.bundle.js')}}"></script>
<script src="{{URL::asset('/bundles/vendorscripts.bundle.js')}}"></script>

<script src="{{URL::asset('/vendor/particlesjs/particles.min.js')}}"></script>
<script src="{{URL::asset('/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{URL::asset('/js/pages/particlesjs.js')}}"></script>
</body>
@endsection