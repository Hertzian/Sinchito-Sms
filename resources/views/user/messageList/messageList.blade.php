@extends('user.layouts.app')

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
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit-modal-sms"><i class="fas fa-sms" aria-hidden="true"></i> Ver batch</button>
                                </div>
                                </td>
                            </tr>              
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
        
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="edit-modal-sms" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Edit modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body ">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-3"><h4>Something</h4></div>
                <div class="col-4"><input class="form-control" type="text" placeholder="Default input"></div>
            </div><br>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-3"><h4>Something</h4></div>
                <div class="col-4"><input class="form-control" type="text" placeholder="Default input"></div>
            </div>      
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default "  data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-info float-right" onclick="ok()">Save changes</button>
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