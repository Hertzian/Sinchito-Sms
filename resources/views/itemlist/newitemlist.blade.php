@extends('layouts.app')

@section('content')

@section('title')
<h1>New batch</h1>    
@endsection

<form action="{{ url('/newlist') }}" method="POST">
    @csrf
    {{-- <input type="hidden" name="account_id" value="{{ $account->id }}">     --}}
    <label for="name">Nombre de batch</label>
    <input type="text" id="name">
    <br>
    <input class="btn btn-primary" type="submit" value="Enviar">
</form>

@endsection

@section('scripts')


    
@endsection