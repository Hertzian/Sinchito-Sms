@extends('layouts.app')

@section('content')

@section('title')
<h1>Get batches</h1>    
@endsection

<a href="{{ url('/newlist') }}" class="btn btn-primary">Nuevo Batch</a>
<br>

<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio voluptas ab deleniti doloremque optio, ex alias et, fugit rem recusandae sunt eveniet deserunt sapiente quaerat eaque fugiat magni? Illum, distinctio?</p>

<p>Aqui van las listas</p>

<p>{{ $batches }}</p>

<p>arriba!</p>

@endsection