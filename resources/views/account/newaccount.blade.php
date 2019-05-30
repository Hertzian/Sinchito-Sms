@extends('layouts.app')

@section('content')

@section('title')
<h1>Nueva cuenta</h1>    
@endsection

<br>
<a href="{{ url('/getaccounts') }}" class="btn btn-danger">Regresar</a>
<hr>
<h3>Datos de usuario</h3>
<p>id: {{ $user->id }}</p>
<p>user: {{ $user->name }}</p>
<hr>
<form action="{{ url('/newaccount') }}" method="post">
    @csrf
    <label for="type">Tipo:</label>
    <input type="text" name="type"><br>
    <label for="message_limit">limite de mensajes:</label>
    <input type="text" name="message_limit"><br>
    <label for="balance">Balance:</label>
    <input type="text" name="balance"><br>
    <label for="status">Status:</label>
    <input type="text" name="status"><br>
    <input class="btn btn-primary" type="submit" value="Enviar">
</form>

@endsection