@extends('layouts.app')

@section('content')

@section('title')
<h1>Account {{ $account->id }}</h1>    
@endsection

<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio voluptas ab deleniti doloremque optio, ex alias et, fugit rem recusandae sunt eveniet deserunt sapiente quaerat eaque fugiat magni? Illum, distinctio?</p>

<p>Aqui van las cuentas</p>
<p>id: {{ $user->id }}</p>
<p>user: {{ $user->name }}</p>
<p>arriba!</p>
<hr>
{{-- <form action="{{ url('/newaccount') }}" method="post"> --}}
    @csrf
    <label for="type">id: {{ $account->id }}</label>
    <label for="type">Tipo: {{ $account->type }}</label>
    <label for="message_limit">limite de mensajes: {{ $account->message_limit }}</label>
    <input type="text" name="message_limit" value="{{ $account->message_limit }}"><br>
    <label for="balance">Balance: {{ $account->balance }}</label>
    <input type="text" name="balance" value="{{ $account->balance }}"><br>
    <label for="status">Status: {{ $account->status }}</label>
    <input type="text" name="status" value="{{ $account->status }}"><br>
    {{-- <input class="btn btn-primary" type="submit" value="Enviar"> --}}
{{-- </form> --}}

@endsection