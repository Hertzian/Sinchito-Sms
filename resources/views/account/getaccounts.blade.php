@extends('layouts.app')

@section('content')

@section('title')
<h1>Mostrar cuentas</h1>    
@endsection
<br>

<div class="col-xl-4 col-md-6 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
        <div class="inner">
            <h3>3</h3>
            <p>Nueva cuenta</p>
        </div>
        <div class="icon">
            <i class="fa fa-address-book"></i>
        </div>
        <a href="{{ url('/newaccount') }}" class="small-box-footer" data-toggle="modal" data-target="#add-modal">Agregar cuenta <i class="fa fa-arrow-right"></i></a>
    </div>
</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="add-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Agregar cuenta</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/newaccount') }}" method="post" class="">
                    @csrf
                    <div class="form-group row">
                        <div class="col-2"></div>
                        <label for="type" class="col-2 col-form-label">Tipo*</label>
                        <div class="col-4">
                            <input class="form-control" type="text" value="" placeholder="" id="type" name="type" require>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-2"></div>
                        <label for="message_limit" class="col-2 col-form-label">Limite de mensajes*</label>
                        <div class="col-4">
                            <input class="form-control" type="text" value="" placeholder="" id="message_limit" name="message_limit" require>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-2"></div>
                        <label for="balance" class="col-2 col-form-label">Balance*</label>
                        <div class="col-4">
                            <input class="form-control" type="text" value="" placeholder="" id="balance" name="balance" require>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-2"></div>
                        <label for="status" class="col-2 col-form-label">Status*</label>
                        <div class="col-4">
                            <input class="form-control" type="text" value="" placeholder="" id="status" name="status" require>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default "  data-dismiss="modal">Close</button>
                        <input type="button" class="btn btn-warning float-right" onclick="limpiar_()" value="Limpiar">
                        <input type="submit" class="btn btn-info float-right" onclick="ok()" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<div class="col-xl-4 col-lg-6 col-12">
    <!-- Widget: user widget style 1 -->
    <div class="box box-widget widget-user-2">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-success">
            <div class="widget-user-image">
                <img class="rounded-circle" src="{{ asset('images/user7-128x128.jpg') }}" alt="User Avatar">
            </div>
            <!-- /.widget-user-image -->
            <h4 class="widget-user-username">{{ $user->name }} </h4><br><br>
            <!-- @if (count($accounts) >= 1)
                @foreach ($accounts as $account)
                    <a href="{{ url('getaccount/' . $account->id) }}" class="nav-link">ID de cuenta: <span class="pull-right badge bg-warning">{{ $account->id }}</span></a>
                @endforeach    
            @else
               <a href="" class="nav-link">ID de cuenta: <span class="pull-right badge bg-warning">sin cuentas registradas</span></a>
            @endif
                 -->
        </div>
        <div class="box-footer no-padding">
            <ul class="nav d-block nav-stacked">
                <li class="nav-item"><a href="#" class="nav-link">ID: <span class="pull-right badge bg-info">{{ $user->id }}</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link">Nombre: <span class="pull-right badge bg-success">{{ $user->name }}</span></a></li>
                
                @if (count($accounts) >= 1)
                    @foreach ($accounts as $account)
                        <li class="nav-item"><a href="{{ url('getaccount/' . $account->id) }}" class="nav-link">Cuenta {{ $account->id }} : <span class="pull-right badge bg-warning">Ver cuenta</span></a></li>
                    @endforeach    
                @else
                <li class="nav-item"><a href="" class="nav-link">ID de cuenta: <span class="pull-right badge bg-warning">Sin cuentas registradas</span></a></li>
                @endif
                
                <li class="nav-item"><a href="#edit-modal" class="nav-link" data-target="#edit-modal" data-toggle="modal">Edit <span class="pull-right badge bg-info"><i class="fa fa-pencil" aria-hidden="true"></i></span></a></li>
                <li class="nav-item"><a href="#" class="nav-link" onclick="deleteElement()">Delete <span class="pull-right badge bg-danger"><i class="fa fa-remove" aria-hidden="true"></i></span></a></li>
            </ul>
        </div>
    </div>
    <!-- /.widget-user -->
</div>

@endsection