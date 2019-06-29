@extends('layouts.app')

@section('title')
  <h1>Batches list</h1>
@endsection

@section('content')
    
<div class="row">

  {{-- Modal 1 --}}
  <div class="col-xl-4 col-md-12 col-12">
    <div class="small-box bg-success">
      <div class="inner">
        <h3>{{ count($batches) }}</h3>
        @if (count($batches) >= 2 || count($batches) < 1)
          <p>Batches</p>
        @else
          <p>Batch</p>              
        @endif
      </div>
      <div class="icon">
        <i class="fa fa-address-book"></i>
      </div>
      <a href="#add-modal" class="small-box-footer" data-target="#add-modal" data-toggle="modal">Add batch <i class="fa fa-arrow-right"></i></a>
    </div>
  </div>
  
  {{-- Modal body --}}
  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="add-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myLargeModalLabel">New batch</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body ">

          <form action="{{ url('/newlist/' . $account->id) }}" method="post" class="">
            @csrf
            <div class="form-group row">
              <div class="col-2"></div>
              <label for="recupient-input" class="col-3 col-form-label">Batch name</label>
              <div class="col-xl-4 col-md-6 col-6">
                <input class="form-control" type="text" name="name" placeholder="Batch name" required id="temaplate-name">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-2"></div>
            </div>
            
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default "  data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-info float-right" onclick="ok()">Save template</button>
          </form>
          
          <button type="button" class="btn btn-warning col-xl-2 col-md-2 col-3 float-right" onclick="limpiar_template();">Limpiar</button>
        </div>
      </div>
    </div>
  </div>
  
    @if (count($batches) >= 1)
      
      {{-- Modal 2 --}}
      <div class="col-xl-4 col-md-12 col-12">
        <div class="small-box bg-info">
          <div class="inner">
            <h3>Contactos</h3>
            <p>Añadir contactos</p>
          </div>
          <div class="icon">
            <i class="fa fa-address-card"></i>
          </div>
          <a href="#contact-modal" class="small-box-footer" data-target="#contact-modal" data-toggle="modal">Add contact to batch <i class="fa fa-arrow-right"></i></a>
        </div>
      </div>
  
      {{-- Modal body --}}
      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="contact-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myLargeModalLabel">Add contact</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body ">                
              <form action="{{ url('/newitem/' . $account->id) }}" method="post" class="">
                @csrf
                {{-- <input type="hidden" name="item_list_id" value="{{ $account->id }}"> --}}
                <div class="form-group row">
                  <div class="col-2"></div>
                  <label for="recupient-input" class="col-3 col-form-label">Batch name</label>
                  <div class="col-xl-4 col-md-6 col-6">                      
                    <select class="form-control" name="item_list_id" id="">
                      <option value=""></option>                        
                      @if (count($batches) >= 1)
                        @foreach ($batches as $batch)
                          <option value="{{ $batch->id }}">{{ $batch->name }}</option>          
                        @endforeach
                      @else
                        <option value="">There are no batches</option>
                      @endif
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-2"></div>
                  <label for="recupient-input" class="col-3 col-form-label">Contact name</label>
                  <div class="col-xl-4 col-md-6 col-6">
                    <input class="form-control" type="text" name="name" placeholder="Contact name" required id="temaplate-name">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-2"></div>
                  <label for="recupient-input" class="col-3 col-form-label">Contact number</label>
                  <div class="col-xl-4 col-md-6 col-6">
                    <input class="form-control" type="text" name="number" placeholder="Contact number" required id="temaplate-name">
                  </div>
                </div>                  
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-default "  data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-info float-right" onclick="ok()">Add contact</button>
              </form>
              <button type="button" class="btn btn-warning col-xl-2 col-md-2 col-3 float-right" onclick="limpiar_template();">Limpiar</button>
            </div>
          </div>
        </div>
      </div>

      {{-- Modal 3 --}}
      <div class="col-xl-4 col-md-12 col-12">
        <div class="small-box bg-warning">
          <div class="inner">              
            <h3>Mensajes</h3>
            <p>Enviar mensajes</p>
          </div>
          <div class="icon">
            <i class="fa fa-window-maximize"></i>
          </div>
          <a href="#send-messages-modal" class="small-box-footer" data-target="#send-messages-modal" data-toggle="modal">Send messages to batches <i class="fa fa-arrow-right"></i></a>
      </div>
    </div>
      
    {{-- Modal body --}}
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="send-messages-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myLargeModalLabel">Send messages</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body ">
            <form action="{{ url('/send/' . $account->id) }}" method="post" class="">
              @csrf
              <div class="form-group row">
                <div class="col-2"></div>
                <label for="recupient-input" class="col-3 col-form-label">Batch name</label>
                <div class="col-xl-4 col-md-6 col-6">
                  <select class="form-control" name="item_list_id" id="">
                    <option value="">Select batch</option>
                    @if (count($batches) >= 1)
                      @foreach ($batches as $batch)
                        <option value="{{ $batch->id }}">{{ $batch->name }}</option>          
                      @endforeach
                    @else
                      <option value="">There are no batches</option>
                    @endif
                   </select>
                  {{-- <input class="form-control" type="text" name="name" placeholder="Batch name" required id="temaplate-name"> --}}
                </div>
              </div>
              <div class="form-group row">
                <div class="col-2"></div>
                  <label for="text-message" class="col-3 col-form-label">Text</label>
                  <div class="col-xl-4 col-md-6 col-6">
                    <textarea class="form-control" rows="5" placeholder="Enter ..." required name="texto_personalizado" id="texto_personalizado" onkeyup="valTextMessage(this);"></textarea><br>
                    <p id="letters">Message parts: 1, Characters: 0 </p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default "  data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success float-right" onclick="ok()">Send</button>
                <button type="button" class="btn btn-warning col-xl-2 col-md-2 col-3 float-right" onclick="limpiar_template();">Limpiar</button>
              </div>
            </form>
        </div>
      </div>
    </div>

  @endif

  <div class="col-12">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Batches list</h3>
      </div>
      <div class="box-body">
      @if (count($batches) >= 1)  
        <table id="table_template" class="table table-bordered table-striped table-responsive">
          <thead>
            <tr>
                <th>#</th>
                <th>Batch name</th>
                <th>Created</th>
                <th>Contactos</th>
                <th>Eliminar lista</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>#</th>
                <th>Batch name</th>
                <th>Created</th>
                <th>Contactos</th>
                <th>Eliminar lista</th>
            </tr>
          </tfoot>
          <tbody>
                            
              @foreach ($batches as $batch)
                <tr>
                  <td>{{ $batch->id }}</td>
                  <td>{{ $batch->name }}</td>
                  <td>{{ $batch->created_at }}</td>
                  <td> 
                    <div class="btn-group">
                      {{-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit-modal"><i class="fa fa-pencil" aria-hidden="true"></i></button> --}}
                      <a href="{{ url('/ContactList/' . $batch->id) }}" class="btn btn-info mx-5"><i class="fa fa-users" aria-hidden="true"></i> Ver contactos</a>
                    </div>
                  </td>
                  <td> 
                    <form action="{{ url('/deletebatch/' . $batch->id) }}" method="post">
                      @csrf
                      <button type="submit" class="btn btn-danger mx-5" id="sa-warning" onclick="deleteElement()"><i class="fa fa-remove" aria-hidden="true"></i> Eliminar</button> 
                    </form>
                  </td>
                </tr>
              @endforeach
              @else
              <div class="text-center">
                  <i class="fa fa-grav font-size-70"></i><br><br>
                  ¡No hay listas registradas aún! <br>
                  Agrega una lista para continuar. 
                </div>   
            @endif
          </tbody>
        </table>
      </div>
    </div>
  <!-- /.box-header -->


  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="edit-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myLargeModalLabel">Edit template</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body ">
          <form action="" method="post" class="">
            <div class="form-group row">
              <div class="col-2"></div>
                <label for="recupient-input" class="col-3 col-form-label">Template name</label>
                <div class="col-xl-4 col-md-6 col-6">
                  <input class="form-control" type="text" value="" placeholder="Template name" required id="temaplate-name">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-2"></div>
                  <label for="text-message" class="col-3 col-form-label">Text</label>
                  <div class="col-xl-4 col-md-6 col-6">
                    <textarea class="form-control" rows="5" placeholder="Enter ..." required id="texto_personalizado" onkeyup="valTextMessage(this);"></textarea><br>
                    <p id="letters">Message parts: 1, Characters: 0 </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default "  data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-info float-right" onclick="ok()">Save template</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection