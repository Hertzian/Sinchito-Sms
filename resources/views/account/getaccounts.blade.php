@extends('layouts.app')

@section('content')

@section('title')
<h1>Mostrar cuentas</h1>    
@endsection
<br>
<a href="{{ url('/newaccount') }}" class="btn btn-primary">Nueva Cuenta</a>
<br>
<br>

<p>id: {{ $user->id }}</p>
<p>name: {{ $user->name }}</p>

@if (count($accounts) >= 1)
    @foreach ($accounts as $account)
        <a href="{{ url('getaccount/' . $account->id) }}">ID de cuenta: {{ $account->id }}</a><br>
    @endforeach    
@else
    <p>No hay cuentas registradas</p>
@endif

<br>
<p>arriba!</p>

@endsection