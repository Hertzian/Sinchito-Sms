@extends('layouts.app')

@section('title')
  <h1>Historial de mensajes</h1>
@endsection

@section('content')

        <!-- Estadisticas     -->
        <div class="row">
           
            <div class="col-xl-4 col-md-6 col-12 ">
                <div class="box box-body">
                    <a href="{{ URL::route('home') }}">
                        <div class="font-size-18 flexbox align-items-center">
                            <span><i class="fas fa-chevron-left"></i></span>
                            <span>Regresar</span>
                        </div>
                        <div class="progress progress-xxs mt-10 mb-0">
                            <div class="progress-bar" role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>
                </div>
            </div> 

            <div class="col-md-6 col-lg-4">
                <div class="box box-body">
                    <div class="flexbox">
                        <div id="lineAnalytics2" >1,4,3,7,6,4,8,9,6,8,12</div>
                        <div class="text-right">
                            <span>Paquetes de Mensajes</span><br>
                            <span>
                                <i class="ion-ios-arrow-up text-success"></i>
                                <span class="font-size-18 ml-1">{{ count($message) }}</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-md-6 col-lg-4">
                <div class="box box-body">
                    <div class="flexbox">
                        <div id="lineAnalytics3" >1,4,3,7,6,4,8,9,6,8,12</div>
                        <div class="text-right">
                            <span>Analityc</span><br>
                            <span>
                                <i class="ion-ios-arrow-up text-success"></i>
                                <span class="font-size-18 ml-1">113</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div> -->
        
        </div>

        <!-- Tabla -->
        <div class="row">

            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Historial</h3>
                    </div>
                    <div class="box-body">
                    @if (count($message) >= 1)  
                        <table id="table_smsList" class="table table-bordered table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Codigo de lote</th> 
                                    <th>Fecha</th>
                                    <th>Cuenta</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Codigo de lote</th> 
                                    <th>Fecha</th>
                                    <th>Cuenta</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            @foreach ($message as $message)
                                <tr>
                                    <td>{{ $message->id }}</td>
                                    <td>{{ $message->name }}</td>
                                    <td>{{ $message->created_at }}</td>
                                    <td>{{ $message->account_id }}</td> 
                                    <td> 
                                    <div class="btn-group">
                                        <a class="btn btn-info" href="{{ url('/messageItem/' . $message->id) }}"><i class="fas fa-sms" aria-hidden="true"></i> Ver batch</a>
                                        
                                    </div>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <div class="text-center">
                                    <i class="fa fa-grav font-size-70"></i><br><br>
                                    ¡No hay listas de mensajes registradas aún! <br>
                                    Agrega una lista de mensajes para continuar. 
                                    </div>   
                                @endif              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        
    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
    </div>
    
@endsection