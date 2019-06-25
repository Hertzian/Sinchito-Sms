@extends('layouts.app')

@section('content')

@section('title')
<h1>Lista {{ $batch->name }}</h1>    
@endsection

    <div class="row">
        <div class="col-xl-4 col-md-12 col-12">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>0</h3>
                    <p>Nuevo Contacto</p>
                </div>
                <div class="icon">
                    <i class="fa fa-window-maximize"></i>
                </div>
                <a href="#add-modal" class="small-box-footer" data-target="#add-modal" data-toggle="modal">Nueva Contacto<i class="fa fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="add-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">Agregar Contacto</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                 
                    <form action="{{ url('/newitem/' . $batch->id) }}" method="post">
                        @csrf
                        <div class="modal-body ">
                            <div class="form-group row">
                                <div class="col-2"></div>
                                <label for="name" class="col-3 col-form-label">Nombre</label>
                                <div class="col-xl-4 col-md-6 col-6">
                                    <input type="hidden" name="item_list_id" value="{{ $batch->id }}">  
                                    <input class="form-control" type="text" id="name" name="name" placeholder="Nombre de contacto" required >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-2"></div>
                                <label for="number" class="col-3 col-form-label">Numero</label>
                                <div class="col-xl-4 col-md-6 col-6">
                                    <input class="form-control" type="number" id="number" name="number" placeholder="Numero" required >
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default"  data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-info float-right" onclick="ok()">Guardar Lista</button>
                            <button type="button" class="btn btn-warning float-right" onclick="limpiar_newitem();">Limpiar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
    
        @if (count($items) >= 1)
            @foreach ($items as $item)

                <div class="col-md-6 col-lg-4">
                    <a class="box box-body box-hover-shadow" href="#">
                    <div class="flexbox align-items-center">
                        <span class="ion ion-ios-person font-size-50"></span>
                        <div class="text-right">
                        <h6 class="mb-0">{{ $item->name }}</h6>
                        <small>{{ $item->number }}</small>
                        </div>
                    </div>
                    </a>
                </div>

            @endforeach
        @else

            <div class="col-md-6 col-lg-4">
                <a class="box box-body box-hover-shadow" href="#">
                    <div class="flexbox align-items-center">
                        <span class="fa fa-grav font-size-50"></span>
                        <div class="text-right">
                            <h6 class="mb-0">Sin Contactos</h6>
                            <small></small>
                        </div>
                    </div>
                </a>
            </div>

        @endif
        
    </div>

    


    <section class="content">  
        <div class="box content">
            <div class="row content">
                <form action="{{ url('/send/' . $batch->id) }}" method="post">
                <h2>Mensaje</h2>
                    @csrf
                    {{-- 
                        <label for="tel">Numero:</label>
                        <input type="text" name="tel"> 
                    --}}
                    <div class="form-group row">
                        <div class="col-2"></div>
                        <label for="name" class="col-12 col-form-label">Contenido del mensaje:</label>
                        <div class="col-12">
                            <textarea class="form-control" name="texto_personalizado" rows="6" placeholder="Introduce el mensaje..." required id="texto_personalizado" onkeyup="valTextMessage(this);"></textarea>    
                            <p id="letters">Message, Characters: 0 </p>
                        </div>
                    </div>
                    <button class="btn btn-warning" type="button" onclick="limpiar_mensaje_single()">Limpiar</button>
                    <button class="btn btn-success" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </section>

@endsection