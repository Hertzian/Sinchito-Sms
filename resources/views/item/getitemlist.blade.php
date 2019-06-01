@extends('layouts.app')

@section('content')

@section('title')
<h1>Lista de contactos</h1>    
@endsection

<br>
<a href="{{ url('/getaccount/' . $batch->id) }}" class="btn btn-danger">Regresar</a>
<h3>Nombre de lista: {{ $batch->name }}</h3>
<a href="{{ url('/newitem/' . $batch->id) }}" class="btn btn-primary">Nuevo contacto</a>
<hr>

@if (count($items) >= 1)
    @foreach ($items as $item)
        <p>{{ $item->name }}, {{ $item->number }}</p>
    @endforeach
@else
    <p>no hay items aquí :(</p>
@endif

<form action="{{ url('/send/' . $batch->id) }}" method="post">
    @csrf
    {{-- <label for="tel">Numero:</label>
    <input type="text" name="tel"> --}}
    <label for="texto_personalizado">Contenido del mensaje:</label>
    <br>
    <input type="text" name="texto_personalizado">
    <br>
    <br>
    <button class="btn btn-success" type="submit">Send</button>
</form>

@endsection