@extends('layouts.app')

@section('content')

@section('title')
<h1>New Accounts</h1>    
@endsection

<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio voluptas ab deleniti doloremque optio, ex alias et, fugit rem recusandae sunt eveniet deserunt sapiente quaerat eaque fugiat magni? Illum, distinctio?</p>

<p>Aqui van las cuentas</p>
<p>id: {{ $user->id }}</p>
<p>user: {{ $user->name }}</p>
<p>arriba!</p>
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