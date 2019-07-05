@extends('layouts.app')

@section('content')

@section('title')
<h1>Mensaje sencillo</h1>    
@endsection

{{-- <br>
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
</form> --}}

{{-- 
<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
</div>        
--}}
    <div class="row">
        <div class="col-12">
            <div class="info-box"><br><br>
                <form action="{{ url('/single') }}" method="post">
                    @csrf                 
                    <div class="form-group row">
                        <div class="col-1"></div>
                        <label for="tel" class="col-xl-2 col-md-2 col-3 col-form-label">Numero:</label>
                        <div class="col-xl-4 col-md-4 col-7">
                            <input id="tel" class="form-control" name="number" type="text" placeholder="Introduce el teléfono" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-1"></div>
                        <label for="text-message" class="col-xl-2 col-md-2 col-3 col-form-label">Texto:</label>
                        <div class="col-xl-4 col-md-4 col-7">
                            <textarea class="form-control" name="texto_personalizado" rows="6" placeholder="Introduce el mensaje" required id="texto_personalizado" onkeyup="valTextMessage(this);"></textarea><br>
                            <p id="letters">Mensaje Cararcteres: 0 </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-3 col-md-3 col-3"></div>
                        <button type="button" class="btn btn-warning col-xl-2 col-md-2 col-3" onclick="limpiar_single();">Limpiar</button>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" class="btn btn-success col-xl-2 col-md-2 col-3">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection