@extends('layouts.app')

@section('title')
    <h1>Inicio</h1>
@endsection

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-5">
            <div class="card">
                    {{-- ************************************* --}}
                    <div class="content">
                        <div class="content box-body">
                            <div class="row">
                                <div class="col-xl-4 col-md-6 col-6 homeBox">
                                    <div class="info-box">
                                        <span class="info-box-icon bg-success"><i class="fa fa-envelope"></i></span>
                                        <div class="info-box-content box-body">
                                            <h3 class="box-title">Enviar un mensaje sencillo</h3>
                                            <p>
                                                ¿Solamente quieren enviar un mensaje sencillo?
                                                 
                                                <br>
                                            </p>
                                            <span class="info-box-text"><p class="">
                                                    <a href="{{ url('/single') }}"> Envia mensaje sencillo</a>
                                            </p></span> 
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div><br>

                                <div class="col-xl-4 col-md-6 col-6 homeBox">
                                    <div class="info-box">
                                        <span class="info-box-icon bg-success"><i class="fa fa-envelope"></i></span>
                                        <div class="info-box-content box-body">
                                            <h3 class="box-title">Envia lote de mensajes</h3>
                                            <p>
                                                Envia mensajes a mutiples pesonas,
                                                Envia lotes de mensajes. 
                                            </p>
                                            <span class="info-box-text"><p class="text-right">
                                            <a href="{{ url('/getlist') }}" class="text-left">Enviar lote de mendajes</a>
                                            </p></span> 
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div><br>

                                <div class="col-xl-4 col-md-6 col-6 homeBox">
                                    <div class="info-box">
                                        <span class="info-box-icon bg-success"><i class="fa fa-envelope"></i></span>
                                        <div class="info-box-content box-body">
                                            <h3 class="box-title">Plantillas</h3>
                                            <p>
                                                Envia mensajes personalisados,<br>
                                                Crea mensajes personalizados.<br><br><br>
                                            </p>
                                            <span class="info-box-text"><p class="text-right">
                                            <a href="{{ url('/gettemplates') }}" class="text-left">Personaliza tus mensajes</a>
                                            </p></span> 
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                            </div>

                            <div class="row ">

                            <div class="col-xl-4 col-md-6 col-6 homeBox">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="ion ion-person-stalker"></i></span>
                                    <div class="info-box-content box-body">
                                        <h3 class="box-title">Contactos</h3>
                                        <p>
                                            Agrega a quien quieres enviarle mensajes 
                                            
                                        </p>
                                        <span class="info-box-text"><p class="text-right">
                                            <a href="{{ url('/getlist') }}"class="text-left">Ir a contactos</a>
                                        </p></span> 
                                    </div>
                                    <!-- /.info-box-content --> 
                                </div>
                                <!-- /.info-box -->
                            </div><br>

                            <div class="col-xl-4 col-md-6 col-6 homeBox">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="fa fa-exclamation"></i></span>
                                    <div class="info-box-content box-body">
                                        <h3 class="box-title">Preguntas frecuentes</h3>
                                        <p> 
                                            ¿Como enviar un lote de mensajes?<br>
                                            ¿Como enviar un mensaje simple?<br>
                                            ¿Como agregar contactos?<br>
                                        </p>
                                        <span class="info-box-text"><p class="text-right"><a href="#"class="text-left">Ver preguntas frecuentes</a></span> 
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div><br>

                            <div class="col-xl-4 col-md-6 col-6 homeBox">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="fa fa-gears"></i></span>
                                    <div class="info-box-content box-body">
                                        <h3 class="box-title">Agregar credito</h3>
                                        <p> 
                                            ¿Te quedaste sin credito? <br>
                                            Agrega credito en tu cuenta.<br><br>
                                        </p>
                                        <span class="info-box-text"><p class="text-right">
                                            {{-- <a href="{{ url('/getbalance') }}"class="text-left">Agregar credito</a> --}}
                                            <a href="#"class="text-left">PROXIMAMENTE</a>
                                        </p></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection

