@extends('layouts.app')

@section('title')
    <h1>Super sección</h1>
@endsection

@section('content')
    <p>El cotorreo que va en la seccion</p>

    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
    </div>
    
@endsection

