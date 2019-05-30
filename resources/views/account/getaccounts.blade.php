@extends('layouts.app')

@section('content')

@section('title')
<h1>Get Accounts</h1>    
@endsection

<a href="{{ url('/newaccount') }}" class="btn btn-primary">Nueva Cuenta</a>
<br>

<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio voluptas ab deleniti doloremque optio, ex alias et, fugit rem recusandae sunt eveniet deserunt sapiente quaerat eaque fugiat magni? Illum, distinctio?</p>
<p>id: {{ $user->id }}</p>
<p>name: {{ $user->name }}</p>

<p>Aqui van las cuentas</p>
@if (count($accounts) >= 1)
    @foreach ($accounts as $account)
        <a href="{{ url('getaccount/' . $account->id) }}">ID de cuenta: {{ $account->id }}</a><br>
    @endforeach    
@else
    <p>No hay cuentas registradas</p>
@endif


{{-- <p>Cuentas: {{ $accounts }}</p> --}}

<br>
<p>arriba!</p>

@endsection