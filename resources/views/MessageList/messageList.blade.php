@extends('layouts.app')

@section('title')
  <h1>Historial de mensajes</h1>
@endsection

@section('content')

        <!-- Estadisticas     -->
        <div class="row">
           
            <div class="col-md-6 col-lg-4">
                <div class="box box-body">
                    <div class="flexbox">
                        <div id="lineAnalytics1" >1,4,3,7,6,4,8,9,6,8,12</div>
                        <div class="text-right">
                            <span>First Data</span><br>
                            <span>
                                <i class="ion-ios-arrow-up text-success"></i>
                                <span class="font-size-18 ml-1">113</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="box box-body">
                    <div class="flexbox">
                        <div id="lineAnalytics2" >1,4,3,7,6,4,8,9,6,8,12</div>
                        <div class="text-right">
                            <span>Second Data</span><br>
                            <span>
                                <i class="ion-ios-arrow-up text-success"></i>
                                <span class="font-size-18 ml-1">113</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
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
            </div>
        
        </div>

        <!-- Tabla -->
        <div class="row">

            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Mensajes</h3>
                    </div>
                    <div class="box-body">
                        <table id="table_sms" class="table table-bordered table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th>Batch Name</th>
                                    <th>Cliente</th> 
                                    <th>Fecha</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Batch Name</th>
                                    <th>Cliente</th> 
                                    <th>Fecha</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>Edinburgh</td>
                                    <td>Tiger Nixon</td>
                                    <td>2011/04/25</td> 
                                    <td> 
                                    <div class="btn-group">
                                        <a class="btn btn-info" href="{{ url('/messageItem/' ) }}"><i class="fas fa-sms" aria-hidden="true"></i> Ver batch</a>
                                        
                                    </div>
                                    </td>
                                </tr>              
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