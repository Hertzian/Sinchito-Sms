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
            <h3>{{ count($template) }}</h3>
            <p>Pantillas</p>
          </div>
          <div class="icon">
            <i class="fa fa-window-maximize"></i>
          </div>
          <a href="#add-modal" class="small-box-footer" data-target="#add-modal" data-toggle="modal">Agregar plantillas<i class="fa fa-arrow-right"></i></a>
        </div>
      </div>

      <!-- Contenido de Modal agregar plantilla  -->
      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="add-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="myLargeModalLabel">Agregar Contacto</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <form action="{{ url('/newTemplate/' .  $account->id ) }}" method="post">
                  @csrf
                  <div class="modal-body ">
                    <div class="form-group row">
                        <div class="col-2"></div>
                        <label for="name" class="col-3 col-form-label">Nombre</label>
                        <div class="col-xl-4 col-md-6 col-6">
                            <input type="hidden" name="" value="">  
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
      
      <!-- {{-- Modal 3 --}}
      <div class="col-xl-4 col-md-12 col-12">
        <div class="small-box bg-warning">
          <div class="inner">              
            <h3>Mensajes</h3>
            <p>Enviar mensajes</p>
          </div>
          <div class="icon">
            <i class="fas fa-sms"></i>
          </div>
          <a href="#send-messages-modal" class="small-box-footer" data-target="#send-messages-modal" data-toggle="modal">Enviar mensajes <i class="fa fa-arrow-right"></i></a>
        </div>
      </div>
        
      {{-- Modal body --}}
      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="send-messages-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myLargeModalLabel">Enviar mensajes</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body ">
              <form action="{{ url('/send/' . $account->id) }}" method="post" class="">
                @csrf
                <div class="form-group row">
                  <div class="col-2"></div>
                  <label for="recupient-input" class="col-3 col-form-label">Lote de contactos</label>
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
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-2"></div>
                  <label for="recupient-input" class="col-3 col-form-label">Nombre de lote</label>
                  <div class="col-xl-4 col-md-6 col-6">
                    <select class="form-control" name="texto_personalizado" id="texto_personalizado">
                      <option value="">Selecciona un lote</option>
                      @if (count($temitem) >= 1)
                         @foreach ($temitem as $temitem) 
                          <option value="{{ $temitem->name }}"> {{ $temitem->name }} </option>          
                      @endforeach
                      @else 
                        <option value="">Sin lotes</option>
                      @endif
                    </select>
                  </div>
                </div>
                  
                <div class="modal-footer">
                  <button type="button" class="btn btn-default "  data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-success col-xl-2 col-md-2 col-3 float-right" onclick="ok()">Enviar</button>
                  <button type="button" class="btn btn-warning col-xl-2 col-md-2 col-3 float-right" onclick="limpiar_template();">Limpiar</button>
                </div>
              </form>
          </div>
        </div>
      </div> -->

  </div> 

  <!-- Tabla -->
  <div class="row">

    <div class="col-12">
      <div class="box">
          <div class="box-header with-border">
              <h3 class="box-title">Historial</h3>
          </div>
          <div class="box-body">
          @if (count($template) >= 1)  
              <table id="table_sms" class="table table-bordered table-striped col-12 table-responsive">
                  <thead>
                      <tr>
                          <th>Nombre</th> 
                          <th>Contenido</th>
                          <th>SMS</th>
                          <th>Acciones</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                          <th>Nombre</th> 
                          <th>Contenido</th>
                          <th>SMS</th>
                          <th>Acciones</th>
                      </tr>
                  </tfoot>
                  <tbody>
                  @foreach ($template as $template)
                      <tr>
                        <td>{{ $template->name }}</td>
                        <td>{{ $template->content }}</td>
                        <td>
                        <a class="btn btn-warning" href="{{ url('/gettemplatesms/' . $template -> id) }}" ><i class="fas fa-sms" aria-hidden="true"></i> Enviar mensaje</a>
                        </td>
                        <td> 
                          <div class="btn-group">
                            <a class="btn btn-info" href="{{ url('/gettemplateitem/' . $template -> id) }}" ><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                            <form action="{{ url('/deleteTemplate/' . $template -> id ) }}" method="post">
                              @csrf
                              <button type="submit" class="btn btn-danger " href="#"><i class="fa fa fa-remove"></i> Eliminar</button>
                            </form>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                      @else 
                      <div class="text-center">
                        <i class="fa fa-grav font-size-70"></i><br><br>
                        ¡No hay listas de mensajes registradas aún! <br>
                        Agrega una lista de mensajes para continuar. 
                      </div>   
                      @endif              
                  </tbody>
              </table>
          </div>
      </div>
    </div>

  </div>

@endsection