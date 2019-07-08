@extends('layouts.app')

<!-- @section('title')
  <h1>Enviar Sms</h1>
@endsection -->

@section('content')

        <!-- Estadisticas -->
        <div class="row">
           
            <div class="col-xl-4 col-md-6 col-12 ">
                <div class="box box-body">
                    <a href="{{ url('/getTemplate') }}">
                        <div class="font-size-18 flexbox align-items-center">
                            <span><i class="fas fa-chevron-left"></i></span>
                            <span>Regresar</span>
                        </div>
                        <div class="progress progress-xxs mt-10 mb-0">
                            <div class="progress-bar" role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>
                </div>
            </div> 
        
        </div>

    <div class="row">
        <div class="col-12">
            <div class="info-box"><br><br>
            @if (count($template) >= 1) 
            @foreach ($template as $template)
                <form action="{{ url('/send/' . $account->id) }}" method="post">
                    @csrf 
                    <div class="form-group row">
                        <div class="col-1"></div>
                        <label for="recupient-input" class="col-xl-2 col-md-2 col-3 col-form-label">Lote de contactos</label>
                        <div class="col-xl-4 col-md-6 col-6">
                            <select class="form-control" name="item_list_id" id="">
                                <option value="">Selecciona un lote</option>
                                @if (count($batches) >= 1)
                                    @foreach ($batches as $batch) 
                                    <option value=" {{ $batch->id }} "> {{ $batch->name }} </option>          
                                @endforeach
                                @else 
                                    <option value="">Sin lotes</option>
                                @endif
                            </select>
                            <input type="text" style="display:none;" value="{{ $template->content }}" id="texto_personalizado" name="texto_personalizado">
                        </div>
                    </div>                
                    <div class="form-group row">
                        <div class="col-1"></div>
                        <label for="tel" class="col-xl-2 col-md-2 col-3 col-form-label">Plantilla</label>
                        <div class="col-xl-4 col-md-4 col-7">
                            <p>{{ $template->name }}</p>
                            <!-- <input id="tel" class="form-control" name="name" type="text" value="{{ $template->name }}" placeholder="{{ $template->name }}" required> -->
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-1"></div>
                        <label for="text-message" class="col-xl-2 col-md-2 col-3 col-form-label"></label>
                        <div class="col-xl-4 col-md-4 col-7">
                            <p>{{ $template->content }}</p>
                            <!-- <textarea class="form-control"  name="content" rows="6" placeholder="Escribe el contenido de plantilla" required id="texto_personalizado" onkeyup="valTextMessage(this);">{{ $template->content }}</textarea><br> -->
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-3 col-md-3 col-3"></div>
                        <button type="button" class="btn btn-warning col-xl-2 col-md-2 col-3" onclick="limpiar_single();">Limpiar</button>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" class="btn btn-success col-xl-2 col-md-2 col-3">Enviar</button>
                    </div>
                </form>
            @endforeach
                @else 
                <div class="text-center">
                    <i class="fa fa-grav font-size-70"></i><br><br>
                    ¡No hay listas de mensajes registradas aún! <br>
                    Agrega una lista de mensajes para continuar. 
                </div>   
                @endif 
            </div>
        </div>
    </div>



        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
        </div>
    
@endsection