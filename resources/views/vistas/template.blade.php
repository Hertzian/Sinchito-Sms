@extends('layouts.app')

@section('title')
    <h1>Palntillas</h1>
@endsection

@section('content')

    <div class="row">

      <!-- Contenido agregar plantillas -->
      <div class="col-xl-4 col-md-12 col-12">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{-- {{ count($template) }} --}}0</h3>
            <p>Pantillas</p>
          </div>
          <div class="icon">
            <i class="fa fa-window-maximize"></i>
          </div>
          <a href="#add-modal" class="small-box-footer" data-target="#add-modal" data-toggle="modal">Agregar plantillas<i class="fa fa-arrow-right"></i></a>
        </div>
      </div>

    </div> 

    <div class="row">

    @if (count($template) >= 1)
      @foreach ($template as $template)
    
        <div class="col-xl-4 col-md-6 col-12">
          <div class="media align-items-center py-30 bg-white">
            <span class="info-box-icon bg-info"><i class="fa fa-window-maximize font-size-40"></i></span>
            <div class="media-body">
              <span class="info-box-number">{{ $template -> name}}</span>
              <p class="text-light font-size-12 my-3">{{ $template -> content}}</p>
              <div class="gap-items font-size-16">
                <a class="text-dark" href="#edit-modal" data-target="#edit-modal" data-toggle="modal"><i class="fa fa-pencil"></i></a>
                <a class="text-dark" href="#"><i class="fa fa fa-remove"></i></a>
              </div>
            </div>
          </div>
        </div>

      @endforeach
    @else

      <div class="col-xl-4 col-md-6 col-12">
        <div class="media align-items-center py-30 bg-white">
        <span class="fa fa-grav font-size-50"></span>
          <!-- <span class="info-box-icon bg-info"><i class="fa fa-grav font-size-40"></i></span> -->
          <div class="media-body">
            <span class="info-box-number">Sin plantillas</span>
          </div>
        </div>
      </div>

      @endif
    
    </div>

    <form  action="{{ url('/newTemplate/' ) }}" method="post">

    <!-- Contenido de Modal agregar plantilla  -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="add-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Agregar Contacto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="" method="post">
                @csrf
                <div class="modal-body ">
                  <div class="form-group row">
                      <div class="col-2"></div>
                      <label for="name" class="col-3 col-form-label">Nombre</label>
                      <div class="col-xl-4 col-md-6 col-6">
                          <input type="hidden" name="item_list_id" value="">  
                          <input class="form-control" type="text" id="name" name="name" placeholder="Nombre de Plantilla" required >
                      </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-2"></div>
                      <label for="text-message" class="col-3 col-form-label">Mensaje</label>
                      <div class="col-xl-4 col-md-6 col-6">
                        <textarea class="form-control" rows="5" placeholder="Texto de mensajes" required name="texto_personalizado" id="texto_personalizado" onkeyup="valTextMessage(this);"></textarea><br>
                        <p id="letters">Mensaje, Caracters: 0 </p>
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
   
      <!-- Contenido de Modal Editar plantilla  -->
      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="edit-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myLargeModalLabel">Editar Pantilla</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body ">
              <form action="" method="post" class="">
                <div class="form-group row">
                  <div class="col-2"></div>
                  <label for="recupient-input" class="col-3 col-form-label">Nombre de plantilla</label>
                  <div class="col-xl-4 col-md-6 col-6">
                    <input class="form-control" type="text" value="" placeholder="Template name" required id="temaplate-name">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-2"></div>
                    <label for="text-message" class="col-3 col-form-label">Pantilla</label>
                    <div class="col-xl-4 col-md-6 col-6">
                      <textarea class="form-control" rows="5" placeholder="Texto de plantilla" required id="texto_personalizado" onkeyup="valTextMessage(this);"></textarea><br>
                      <p id="letters">Mensaje, Caracters: 0 </p>
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default"  data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-info float-right" onclick="ok()">Guardar Lista</button>
                <button type="button" class="btn btn-warning float-right" onclick="limpiar_newitem();">Limpiar</button>
              </div>
            </div>
          </div>
        </div>
      </div>


@endsection