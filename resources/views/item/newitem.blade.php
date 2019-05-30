@extends('layouts.app')

@section('content')

@section('title')
<h1>Nuevo contacto</h1>    
@endsection

<br>
<a href="{{ url('getitems/' . $itemlist->id) }}" class="btn btn-danger">Regresar</a>
<br>
<br>
<form action="{{ url('/newitem/' . $itemlist->id) }}" method="post">
    @csrf
    <input type="hidden" name="item_list_id" value="{{ $itemlist->id }}">    
    <label for="name">Nombre:</label>
    <input type="text" name="name"><br>
    <label for="number">Numero:</label>
    <input type="text" name="number"><br><br>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>



@endsection