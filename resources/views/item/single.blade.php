@extends('layouts.app')

@section('content')

@section('title')
<h1>Mensaje sencillo</h1>    
@endsection

<br>
<a href="{{ url('/') }}" class="btn btn-danger">Regresar</a>
<hr>

<form action="{{ url('/single') }}" method="post">
    @csrf
    <label for="tel">Numero:</label>
    <input type="text" name="tel">
    <br>
    <label for="texto_personalizado">Contenido del mensaje:</label>
    <input type="text" name="texto_personalizado">
    <br>
    <br>
    <button class="btn btn-success" type="submit">Send</button>
</form>

@endsection