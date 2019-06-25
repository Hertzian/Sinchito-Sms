@extends('layouts.app')

@section('title')
    <h1>Home</h1>
@endsection

@section('content')

@section('title')
<h1>Home Dashboard</h1>    
@endsection

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Estas loggeado correctamente
                    </div>
                    {{-- ************************************* --}}
                    <div class="content">
                        <div class="content box-body">
                            <h4>Envía mensajes</h4>
                            <div class="row">
                                <div class="col-xl-4 col-md-6 col">
                                    <div class="info-box">
                                        <span class="info-box-icon bg-success"><i class="fa fa-envelope"></i></span>
                                        <div class="info-box-content box-body">
                                            <h3 class="box-title">Envía un SMS sencillo</h3>
                                            <p>
                                                ¿Quieres enviar un msensje sencillo? Simple. <br>
                                                Hazlo aquí. <br><br>
                                            </p>
                                            <span class="info-box-text"><p class="text-right"><a href="
                                            {{ url('/single') }}
                                            ">Ir a mensaje sencillo</a></span> 
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>

                                <div class="col-xl-4 col-md-6 col">
                                    <div class="info-box">
                                        <span class="info-box-icon bg-success"><i class="fa fa-envelope"></i></span>
                                        <div class="info-box-content box-body">
                                            <h3 class="box-title">Prorgamar un envío por lotes</h3>
                                            <p>
                                                ¿Necesitas planificar por adelantado? Repetir envíos? ¿Enviando a un gran grupo de receptores? <br>
                                            Programe un lote aquí.
                                            </p>
                                            <span class="info-box-text"><p class="text-right"><a href="
                                                {{ url('/getlist') }}
                                                "class="text-left">Ir a lotes</a></span> 
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>

                                <div class="col-xl-4 col-md-6 col">
                                    <div class="info-box">
                                        <span class="info-box-icon bg-success"><i class="fa fa-envelope"></i></span>
                                        <div class="info-box-content box-body">
                                            <h3 class="box-title">Plantillas</h3>
                                            <p>
                                                Configure sus plantillas de mensajes predefinidos. <br>
                                                Se permiten mensajes personalizados. <br><br>
                                            </p>
                                            <span class="info-box-text"><p class="text-right"><a href="
                                            #
                                            {{-- {{ URL::route('tempate') }} --}}
                                            "class="text-left">Ir a plantillas</a></span> 
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                            </div>


                            <h4>Lorem ipsum dolor</h4>
                            <div class="row ">

                            <div class="col-xl-4 col-md-6 col">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="ion ion-person-stalker"></i></span>
                                    <div class="info-box-content box-body">
                                        <h3 class="box-title">Directorio</h3>
                                        <p>
                                            Suba la lista de receptores a los que quiere enviar,<br>
                                            Para simplificar el envío recurrente.<br><br><br>
                                        </p>
                                        <span class="info-box-text"><p class="text-right"><a href="
                                            #
                                            {{-- {{ URL::route('contacts') }} --}}
                                            "class="text-left">Ir al directorio</a></span> 
                                    </div>
                                    <!-- /.info-box-content --> 
                                </div>
                                <!-- /.info-box -->
                            </div>

                            <div class="col-xl-4 col-md-6 col">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="fa fa-exclamation"></i></span>
                                    <div class="info-box-content box-body">
                                        <h3 class="box-title">FAQ</h3>
                                        <p> 
                                            ¿Cómo envío un lote de SMS?<br>
                                            ¿Cómo envío un solo SMS?<br>
                                            ¿Cómo creo un directorio?<br>
                                            ¿Cómo subo una lista?<br>
                                        </p>
                                        <span class="info-box-text"><p class="text-right"><a href="#"class="text-left">Ir a FAQ</a></span> 
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>

                            <div class="col-xl-4 col-md-6 col">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="fa fa-gears"></i></span>
                                    <div class="info-box-content box-body">
                                        <h3 class="box-title">¿Necesita recargar su cuenta?</h3>
                                        <p> 
                                            Administre su cuenta y recargue su saldo en nuestro portal. <br><br><br>
                                        </p>
                                        <span class="info-box-text"><p class="text-right"><a href="#"class="text-left">Ir a pagos</a></span>
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
