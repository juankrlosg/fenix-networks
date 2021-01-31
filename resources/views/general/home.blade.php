@extends('layouts.app')
@section('content')

@endsection
<div id="main-content">
    <div class="container">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>Planes y Paquetes de Internet</h1>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="inlineblock vivify swoopInTop delay-900 mr-4">Visitors <span id="mini-bar-chart1" class="mini-bar-chart"></span></div>
                    <div class="inlineblock vivify swoopInTop delay-950 mr-4">Visits <span id="mini-bar-chart2" class="mini-bar-chart"></span></div>
                    <div class="inlineblock vivify swoopInTop delay-1000">Chats <span id="mini-bar-chart3" class="mini-bar-chart"></span></div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 cool-md-4 col-sm-12">
                <div class="card">
                    <ul class="pricing body">
                        <li class="plan-img"><img class="img-fluid rounded-circle" src="{{URL::asset('images/casa6.svg')}}" /></li>
                        <li class="price">
                            <h3><span>$</span> 250 <small>/ mes</small></h3>
                            <span>Básico</span>
                        </li>
                        <li>3 MB de velocidad de descarga</li>
                        <li>Descargas ilimitadas todos los días del mes</li>
                        <li>Soporte<span class="text-red">*</span></li>
                        <li class="plan-btn"><button class="btn btn-round btn-outline-secondary">Contratar plan</button></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-4 cool-md-4 col-sm-12">
                <div class="card">
                    <ul class="pricing body">
                        <li class="plan-img"><img class="img-fluid rounded-circle" src="{{URL::asset('images/mansion.svg')}}" /></li>
                        <li class="price">
                            <h3><span>$</span> 500 <small>/ mes</small></h3>
                            <span>Avanzado</span>
                        </li>
                        <li>5 MB de velocidad de descarga</li>
                        <li>Descargas ilimitadas todos los días del mes</li>
                        <li>Soporte<span class="text-red">*</span></li>
                        <li class="plan-btn"><button class="btn btn-round btn-outline-secondary">Contratar plan</button></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 cool-md-4 col-sm-12">
                <div class="card">
                    <ul class="pricing body">
                        <li class="plan-img"><img class="img-fluid rounded-circle" src="{{URL::asset('images/edificio2.svg')}}" /></li>
                        <li class="price">
                            <h3><span>$</span> 750 - <span>$</span> 1,500<small>/ mes</small></h3>
                            <span>Empresarial</span>
                        </li>
                        <li>10 - 50 MB de velocidad de descarga</li>
                        <li>Descargas ilimitadas todos los días del mes</li>
                        <li>Enlace punto a punto</li>
                        <li>Soporte<span class="text-red">*</span></li>
                        <li class="plan-btn"><button class="btn btn-round btn-outline-secondary">Contratar plan</button></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>