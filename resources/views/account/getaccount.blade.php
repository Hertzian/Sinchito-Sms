@extends('layouts.app')

@section('content')

@section('title')
<h1>ID Cuenta: {{ $account->id }}</h1>    
@endsection

<br>
<a href="{{ url('/getaccounts') }}" class="btn btn-danger">Regresar</a>

<h3>Usuario</h3>
<p>id: {{ $user->id }}</p>
<p>user: {{ $user->name }}</p>
<hr>

<h3>Datos de cuenta</h3>
    <label for="type">id: {{ $account->id }}</label>
    <br>
    <label for="type">Tipo: {{ $account->type }}</label>
    <br>
    <label for="message_limit">limite de mensajes: {{ $account->message_limit }}</label>
    <br>
    <label for="balance">Balance: {{ $account->balance }}</label>
    <br>
    <label for="status">Status: {{ $account->status }}</label>
<hr>
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