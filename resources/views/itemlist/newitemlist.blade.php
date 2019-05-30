@extends('layouts.app')

@section('content')

@section('title')
<h1>New batch</h1>    
@endsection
<br>
<a href="{{ url('/getaccount/' . $account->id) }}" class="btn btn-danger">Regresar</a>
<br>
<br>
<form action="{{ url('/newlist/' . $account->id) }}" method="POST">
    @csrf
    <input type="hidden" name="account_id" value="{{ $account->id }}">    
    <label for="name">Nombre de batch</label>
    <input type="text" id="name" name="name">
    <br>
    <br>
    <input class="btn btn-primary" type="submit" value="Enviar">
</form>

@endsection

@section('scripts')

@endsection