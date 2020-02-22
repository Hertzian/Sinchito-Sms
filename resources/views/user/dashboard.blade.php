@extends('user.layouts.app')

@section('title')
    <h1>Inicio</h1>
@endsection

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-5">

            <div class="content">
                <div class="content box-body">
                    <div class="row">

                        <div class="col-xl-4 col-md-12 col-sm-12 col-6 homeBox">
                            <div class="info-box">
                                <span class="info-box-icon bg-success"><i class="fa fa-envelope"></i></span>
                                <div class="info-box-content box-body">
                                    <h3 class="box-title">Mensaje simple</h3>
                                    <p>
                                        ¿Solamente un SMS simple?
                                    </p>
                                    <span class="info-box-text"><p class="text-right">
                                            <a href="{{ url('/user/single') }}" class="text-left"> Envia SMS simple</a>
                                    </p></span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-12 col-sm-12 col-6 homeBox">
                            <div class="info-box">
                                <span class="info-box-icon bg-success"><i class="fas fa-mail-bulk"></i></span>
                                <div class="info-box-content box-body">
                                    <h3 class="box-title">Envia un lote de SMS</h3>
                                    <p>
                                        Envia un SMS a mutiples contactos
                                    </p>
                                    <span class="info-box-text"><p class="text-right">
                                    <a href="{{ url('/user/getlist') }}" class="text-left">Enviar lote de mendajes</a>
                                    </p></span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-12 col-sm-12 col-6 homeBox">
                            <div class="info-box">
                                <span class="info-box-icon bg-success"><i class="fas fa-copy"></i></span>
                                <div class="info-box-content box-body">
                                    <h3 class="box-title">Plantillas</h3>
                                    <p>
                                        Envia SMS personalizados
                                    </p>
                                    <span class="info-box-text"><p class="text-right">
                                    <a href="{{ url('/user/gettemplates') }}" class="text-left">Personaliza tus mensajes</a>
                                    </p></span> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row ">

                        <div class="col-xl-4 col-md-12 col-sm-12 col-6 homeBox">
                            <div class="info-box">
                                <span class="info-box-icon bg-success"><i class="ion ion-person-stalker"></i></span>
                                <div class="info-box-content box-body">
                                    <h3 class="box-title">Contactos</h3>
                                    <p>
                                        Agrega tus contactos. 
                                    </p>
                                    <span class="info-box-text"><p class="text-right">
                                        <a href="{{ url('/user/getlist') }}"class="text-left">Ir a contactos</a>
                                    </p></span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-12 col-sm-12 col-6 homeBox">
                            <div class="info-box">
                                <span class="info-box-icon bg-success"><i class="fas fa-question"></i></span>
                                <div class="info-box-content box-body">
                                    <h3 class="box-title">F.A.Q.</h3>
                                    <p> 
                                        Preguntas frecuentes.
                                    </p>
                                    <span class="info-box-text"><p class="text-right"><a href="#"class="text-left">Ver preguntas frecuentes</a></span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-12 col-sm-12 col-6 homeBox">
                            <div class="info-box">
                                <span class="info-box-icon bg-success"><i class="fas fa-hand-holding-usd"></i></span>
                                <div class="info-box-content box-body">
                                    <h3 class="box-title">Agregar credito</h3>
                                    <p> 
                                        Agrega credito en tu cuenta.
                                    </p>
                                    <span class="info-box-text"><p class="text-right">
                                        {{-- <a href="{{ url('/getbalance') }}"class="text-left">Agregar credito</a> --}}
                                        <a href="#"class="text-left">PROXIMAMENTE</a>
                                    </p></span>
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

