@extends('layouts.app')

@section('content')

@section('title')
<h1>ID Cuenta: {{ $account->id }}</h1>  
<a href="{{ url('/getaccounts') }}" class="float btn"><i class="fa fa-fw fa-arrow-left"></i></a>
@endsection


<!-- <div class="col-xl-3 col-lg-6 col-12">
    <div class="box box-body bg-success">
        <div class="flexbox">
            <span class="ion ion-ios-person-outline font-size-50"></span>
            <span class="font-size-30 font-weight-200">{{ $user->name }}</span>
        </div>
        <div class="text-right">{{ $user->id }}</div>
    </div>
</div> -->

<!-- 
<div class="col-xl-4 col-lg-6 col-12">
    <div class="box box-widget widget-user-2">
        <div class="widget-user-header bg-success">
            <div class="widget-user-image">
                <img class="rounded-circle" src="{{ asset('images/user7-128x128.jpg') }}" alt="User Avatar">
            </div>
            <h4 class="widget-user-username">{{ $user->name }} </h4>
            <h6 class="widget-user-desc">ID: {{ $user->id }}</h6>
        </div>
    </div>
</div> -->

<div class="row">

    <div class="col-xl-4 col-md-12 col-12">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>0</h3>
                <p>Listas de contactos</p>
            </div>
            <div class="icon">
                <i class="fa fa-window-maximize"></i>
            </div>
            <a href="#add-modal" class="small-box-footer" data-target="#add-modal" data-toggle="modal">Nueva lista<i class="fa fa-arrow-right"></i></a>
        </div>
    </div>

</div>

<div class="row">

    @if (count($batches) >= 1)
        @foreach ($batches as $batch)
            <div class="col-xl-3 col-md-6 col-12 ">
                <div class="box box-body text-center">
                    <div class="font-size-40 font-weight-200">{{ $user->id }}</div>
                    <div>ID de Usuario</div>
                </div>
            </div>
            <p><a href="{{ url('/getitems/' . $batch->id) }}">{{ $batch->name }}</a></p>
        @endforeach
    @else
        <div class="col-xl-3 col-md-6 col-12 ">
                <div class="box box-body text-center">
                    <div class="font-size-40 font-weight-200"><i class="fa fa-grav"></i></div>
                    <div>No hay listas guardadas</div>
                </div>
            </div>  
    @endif

</div>

<div class="row">

    <div class="col-12">
        <h3>Informacion de cuenta</h3>
    </div>

    <div class="col-xl-3 col-md-6 col-12 ">
        <div class="box box-body text-center">
            <div class="font-size-40 font-weight-200">{{ $user->id }}</div>
            <div>ID de Usuario</div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 col-12 ">
        <div class="box box-body text-center">
            <div class="font-size-40 font-weight-200">{{ $user->name }}</div>
            <div>Nombre de usuario</div>
        </div>
    </div>    

    <div class="col-xl-3 col-md-6 col-12 ">
        <div class="box box-body text-center">
            <div class="font-size-40 font-weight-200">{{ $account->id }}</div>
            <div>ID de cuenta</div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 col-12 ">
        <div class="box box-body text-center">
            <div class="font-size-40 font-weight-200">{{ $account->type }}</div>
            <div>Tipo de cuenta</div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6 col-12 ">
        <div class="box box-body text-center">
            <div class="font-size-40 font-weight-200">{{ $account->message_limit }}</div>
            <div>Limite de mensajes</div>
        </div>
    </div>    

    <div class="col-xl-3 col-md-6 col-12 ">
        <div class="box box-body text-center">
            <div class="font-size-40 font-weight-200">{{ $account->balance }}</div>
            <div>Balance</div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 col-12 ">
        <div class="box box-body text-center">
            <div class="font-size-40 font-weight-200">{{ $account->status }}</div>
            <div>Status</div>
        </div>
    </div>
    
</div>

<!-- <h3>Datos de cuenta</h3>
    <label for="type">id: {{ $account->id }}</label>
    <br>
    <label for="type">Tipo: {{ $account->type }}</label>
    <br>
    <label for="message_limit">limite de mensajes: {{ $account->message_limit }}</label>
    <br>
    <label for="balance">Balance: {{ $account->balance }}</label>
    <br>
    <label for="status">Status: {{ $account->status }}</label>
<hr> -->
<h3>Listas de contactos</h3>
<a href="{{ url('/newlist/' . $account->id) }}" class="btn btn-primary">Nueva lista</a>
<br>
<br>

@if (count($batches) >= 1)
    @foreach ($batches as $batch)
        <p><a href="{{ url('/getitems/' . $batch->id) }}">{{ $batch->name }}</a></p>
    @endforeach
@else
    <p>No hay listas guardadas</p>    
@endif

@endsection