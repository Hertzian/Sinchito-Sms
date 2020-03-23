@extends('user.layouts.app')

@section('title')
  <h1>Listas de Contactos</h1>
@endsection

@section('content')
    
<div class="row">

  {{-- Modal 1 New list --}}
  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
    <div class="small-box bg-success">
      <div class="inner">
        <h3>{{ count($batches) }}</h3>
        @if (count($batches) >= 2 || count($batches) < 1)
          <p>Listas</p>
        @else
          <p>Lista</p>              
        @endif
      </div>
      
      <div class="icon">
        <i class="fas fa-list-alt"></i>
      </div>
        <a href="#add-modal" class="small-box-footer" data-target="#add-modal" data-toggle="modal">Nueva lista <i class="fa fa-arrow-right"></i></a>
    </div>
  </div>
  
  {{-- Modal 1 body New list--}}
  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="add-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myLargeModalLabel">Nueva lista</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body ">

          <form action="{{ url('/user/newlist/' . $account->id) }}" method="post" class="">
            @csrf
            <div class="form-group row">
              <div class="col-2"></div>
              <label for="recupient-input" class="col-3 col-form-label">Nombre de lista</label>
              <div class="col-xl-4 col-md-6 col-6">
                <input class="form-control" type="text" name="name" placeholder="Nombre de lista" required id="temaplate-name">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-2"></div>
            </div>
            
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default "  data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-info float-right" onclick="ok()">Guardar lista</button>
          </form>
          
          <button type="button" class="btn btn-warning col-xl-2 col-md-2 col-3 float-right" onclick="limpiar_template();">Limpiar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- /.modal -->

  @if (count($batches) >= 1)          
      
    {{-- Modal 2 Contacts --}}
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>Contactos</h3>
          <p>Agregar contactos</p>
        </div>
        <div class="icon">
          <i class="fas fa-address-card"></i>
        </div>
        <a href="#contact-modal" class="small-box-footer" data-target="#contact-modal" data-toggle="modal">Agregar a lista de contactos <i class="fa fa-arrow-right"></i></a>
      </div>
    </div>
  
    {{-- Modal 2 body Contacts --}}
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="contact-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <div class="modal-header">
            <h4 class="modal-title" id="myLargeModalLabel">Agregar contacto</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          
          <div class="modal-body ">                
            <form action="{{ url('/user/newitem/' . $account->id) }}" method="post" class="">
              @csrf
              {{-- <input type="hidden" name="item_list_id" value="{{ $account->id }}"> --}}
              <div class="form-group row">
                <div class="col-2"></div>
                <label for="recupient-input" class="col-3 col-form-label">Nombre de lista</label>
                <div class="col-xl-4 col-md-6 col-6">                      
                  <select class="form-control" name="item_list_id">
                    <option value=""></option>                        
                    @if (count($batches) >= 1)
                      @foreach ($batches as $batch)
                        <option value="{{ $batch->id }}">{{ $batch->name }}</option>          
                      @endforeach
                    @else
                      <option value="">No hay listas registradas aún</option>
                    @endif
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-2"></div>
                <label for="recupient-input" class="col-3 col-form-label">Nombre de contacto</label>
                <div class="col-xl-4 col-md-6 col-6">
                  <input class="form-control" type="text" name="name" placeholder="Nombre de contacto" required id="contact-name">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-2"></div>
                <label for="recupient-input" class="col-3 col-form-label">Número de contacto</label>
                <div class="col-xl-4 col-md-6 col-6">
                  <input class="form-control" type="text" name="number" placeholder="Número de contacto" required id="contact-number">
                </div>
              </div>                  
            </div>

            <div class="modal-footer">
              {{-- <button type="button" class="btn btn-default "  data-dismiss="modal">Close</button> --}}
              <button type="submit" class="btn btn-info float-right" onclick="ok()">Agregar contacto</button>
              <button type="button" class="btn btn-warning col-xl-2 col-md-2 col-3 float-right mx-5" onclick="limpiar_agregarContacto();">Limpiar</button>
            </div>
            </form>


          <div class="modal-header">
            <h4 class="modal-title" id="myLargeModalLabel">Agregar contactos con archivo CSV</h4>
          </div>

          <form action="{{ url('/user/newcsv/' . $account->id) }}" method="post" class="p-5" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
              <div class="col-2"></div>
              <label for="recupient-input" class="col-3 col-form-label">Nombre de lista</label>
              <div class="col-xl-4 col-md-6 col-6">                      
                <select class="form-control  mt-5" name="item_list_id">
                  <option value=""></option>                        
                  @if (count($batches) >= 1)
                    @foreach ($batches as $batch)
                      <option value="{{ $batch->id }}">{{ $batch->name }}</option>          
                    @endforeach
                  @else
                    <option value="">No hay listas registradas aún</option>
                  @endif
                </select>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-2"></div>
              <label for="text-message" class="col-3 col-form-label">Selecciona un archivo con extension .csv</label>
              <div class="col-xl-4 col-md-6 col-6">
                <input type="file" name="csv" class="form-control">
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default "  data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-info float-right" onclick="ok()">Guardar</button>
            </div>
          </form>


        </div>
      </div>
    </div>

    {{-- Modal 3 Message --}}
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
      <div class="small-box bg-warning">
        <div class="inner">              
          <h3>Mensajes</h3>
          <p>Enviar mensajes</p>
        </div>
        <div class="icon">
          <i class="fas fa-envelope-open-text"></i>
        </div>
        <a href="#send-messages-modal" class="small-box-footer" data-target="#send-messages-modal" data-toggle="modal">Enviar mensajes a lista de contactos <i class="fa fa-arrow-right"></i></a>
      </div>
    </div>
    
    {{-- Modal 3 body Message --}}
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="send-messages-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myLargeModalLabel">Enviar mensajes</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>

          <div class="modal-body ">            
            <form action="{{ url('/user/send/' . $account->id) }}" method="post" class="">
              @csrf
              <div class="form-group row">
                <div class="col-2"></div>
                <label for="recupient-input" class="col-3 col-form-label">Nombre de lista</label>
                <div class="col-xl-4 col-md-6 col-6">                  
                  <select class="form-control" name="item_list_id">
                    <option value=""></option>
                    
                    @if (count($batches) >= 1)
                      @foreach ($batches as $batch)
                        <option value="{{ $batch->id }}">{{ $batch->name }}</option>          
                      @endforeach
                    @else
                      <option value="">No hay listas registradas aún</option>
                    @endif

                  </select>
                </div>
              </div>

            <div class="form-group row">
              <div class="col-2"></div>
              <label for="text-message" class="col-3 col-form-label">Mensaje</label>
              <div class="col-xl-4 col-md-6 col-6">
                <textarea class="form-control" rows="5" placeholder="Escribe tu mensaje" required name="texto_personalizado" id="texto_personalizado" onkeyup="valTextMessage(this);"></textarea><br>
              </div>
            </div>
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-default "  data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success float-right" onclick="ok()">Enviar</button>
            <button type="button" class="btn btn-warning col-xl-2 col-md-2 col-3 float-right" onclick="limpiar_template();">Limpiar</button>
          </form>
          </div>

        </div>
      </div>
    </div>


    {{-- Modal 4 Template --}}
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
      <div class="small-box bg-primary">
        <div class="inner">              
          <h3>Plantillas</h3>
          <p>Plantillas de mensajes</p>
        </div>
        <div class="icon">
          <i class="fa fa-copy"></i>
        </div>
        <a href="#send-messages-modal" class="small-box-footer" data-target="#send-template-modal" data-toggle="modal">Enviar mensajes con plantilla <i class="fa fa-arrow-right"></i></a>
      </div>
    </div>
    
    {{-- Modal 4 body Template --}}
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="send-template-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myLargeModalLabel">Plantillas personalizadas</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>

          <div class="modal-body ">            
            <form action="{{ url('/user/sendtemplate/' . $account->id) }}" method="post" class="">
              @csrf
              <div class="form-group row">
                <div class="col-2"></div>
                <label for="recupient-input" class="col-3 col-form-label">Nombre de lista</label>
                <div class="col-xl-4 col-md-6 col-6">                  
                  <select class="form-control" name="item_list_id">
                    <option value=""></option>
                    
                    @if (count($batches) >= 1)
                      @foreach ($batches as $batch)
                        <option value="{{ $batch->id }}">{{ $batch->name }}</option>          
                      @endforeach
                    @else
                      <option value="">No hay listas registradas aún</option>
                    @endif

                  </select>
                </div>
              </div>

            <div class="form-group row">
              <div class="col-2"></div>
              <label for="text-message" class="col-3 col-form-label">Plantillas</label>
              <div class="col-xl-4 col-md-6 col-6">                  
                <select class="form-control" name="template_id">
                  <option value=""></option>
                  
                  @if (count($account->template) >= 1)
                    @foreach ($account->template as $template)
                      <option value="{{ $template->id }}">{{ $template->name }}</option>          
                    @endforeach
                  @else
                    <option value="">No hay plantillas registradas</option>
                  @endif

                </select>
              </div>
            </div>
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-default "  data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success float-right" onclick="ok()">Enviar</button>
          </form>
          </div>

        </div>
      </div>
    </div>

  @endif

  <div class="col-12">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Listas de Contactos</h3>
      </div>
      <div class="box-body">

        @if (count($batches) >= 1)  
        <table id="table_template" class="table table-bordered table-striped table-responsive">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre de lista</th>
              <th>Creado</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Nombre de lista</th>
              <th>Creado</th>
              <th>Acciones</th>
            </tr>
          </tfoot>

          <tbody>
                            
            @foreach ($batches as $batch)
              <tr>
                <td>{{ $batch->id }}</td>
                <td><button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#editContactListName-{{ $batch->id }}" aria-expanded="false" aria-controls="collapseExample">
                  <i class="far fa-edit"></i>
                </button> {{ $batch->name }} 
                <div class="collapse" id="editContactListName-{{ $batch->id }}">
                  <form class="form-inline" action="{{ url('/user/contact-list-name/' . $batch->id) }}" method="post">
                    @csrf
                    <input type="hidden" name="account_id" value="{{ $account->id }}">
                    <input class="form-control-plaintext" type="text" name="name" value="{{ $batch->name }}" required id="editContactListName-{{ $batch->id }}">
                    <input class="btn btn-primary btn-sm mx-5" type="submit" value="Editar">
                  </form>
                </div>


              </td>
                <td>{{ $batch->created_at }}</td>
                <td> 
                  <div class="btn-group">

                    {{-- btn modal --}}
                    <a class="btn btn-info" href="#viewContact-{{ $batch->id }}" class="small-box-footer" data-target="#viewContact-{{ $batch->id }}" data-toggle="modal"><i class="fa fa-users" aria-hidden="true"></i> Ver contactos</a>

                    {{-- Modal body Contacts --}}
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="viewContact-{{ $batch->id }}" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                          <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Lista: {{ $batch->name }}</h4>
                            
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          </div>
                          
                          <div class="modal-body "> 
                            
                            <div class="m-5">

                              {{-- send sms mini button --}}
                              <div class="col-md-3 col-sm-12 m-3">
                                <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#sendSmsThis-{{ $batch->id }}" aria-expanded="false" aria-controls="collapseExample">
                                  <i class="fas fa-share"></i> Enviar SMS a esta lista
                                </button>
                              </div>

                              {{-- new contact mini button --}}
                              <div class="col-md-3 col-sm-12 m-3">
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#mewContactMini-{{ $batch->id }}" aria-expanded="false" aria-controls="collapseExample">
                                  <i class="fas fa-plus"></i> Agregar contacto a esta lista
                                </button>
                              </div>

                              {{-- send template mini button --}}
                              <div class="col-md-3 col-sm-12 m-3">
                                <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#sendTemplate-{{ $batch->id }}" aria-expanded="false" aria-controls="collapseExample">
                                  <i class="fas fa-paste"></i> Utilizar plantilla
                                </button>
                              </div>

                              {{-- send sms mini modal --}}
                              <div class="collapse" id="sendSmsThis-{{ $batch->id }}">
                                <div class="card card-body">
                                  <h3>Sms para esta lista</h3>

                                  <form action="{{ url('/user/send/' . $account->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="item_list_id" value="{{ $batch->id }}">
                                    <div class="form-group row">
                                      <div class="col-2"></div>
                                      <label for="text-message" class="col-3 col-form-label">Mensaje</label>
                                      <div class="col-xl-4 col-md-6 col-6">
                                        <textarea class="form-control" rows="5" placeholder="Escribe tu mensaje" required name="texto_personalizado" id="texto_personalizado" onkeyup="valTextMessage(this);"></textarea><br>
                                      </div>
                                    </div>                
                      
                                    {{-- <button type="button" class="btn btn-default "  data-dismiss="modal">Close</button> --}}
                                    <button type="submit" class="btn btn-info float-right" onclick="ok()">Enviar</button>
                                    <button type="button" class="btn btn-warning col-xl-2 col-md-2 col-3 float-right mx-5" onclick="limpiar_agregarContacto();">Limpiar</button>
                                  </form>
                                </div>
                              </div>

                              {{-- new contact mini modal --}}
                              <div class="collapse" id="mewContactMini-{{ $batch->id }}">
                                <div class="card card-body">
                                  <h3>Agregar contacto a esta lista</h3>

                                  <form action="{{ url('/user/newitem/' . $batch->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="item_list_id" value="{{ $batch->id }}">
                                    
                      
                                    <div class="form-group row">
                                      <div class="col-2"></div>
                                      <label for="recupient-input" class="col-3 col-form-label">Nombre de contacto</label>
                                      <div class="col-xl-4 col-md-6 col-6">
                                        <input class="form-control" type="text" name="name" placeholder="Nombre de contacto" required id="contact-name-{{ $batch->id }}">
                                      </div>
                                    </div>
                      
                                    <div class="form-group row">
                                      <div class="col-2"></div>
                                      <label for="recupient-input" class="col-3 col-form-label">Número de contacto</label>
                                      <div class="col-xl-4 col-md-6 col-6">
                                        <input class="form-control" type="text" name="number" placeholder="Número de contacto" required id="contact-number-{{ $batch->id }}">
                                      </div>
                                    </div>                  
                      
                                    <button type="submit" class="btn btn-info float-right" onclick="ok()">Agregar contacto</button>
                                    <button type="button" class="btn btn-warning col-xl-2 col-md-2 col-3 float-right mx-5" onclick="limpiar_agregarContacto();">Limpiar</button>
                                  </form>
                                </div>
                              </div>

                              {{-- send template mini modal --}}
                              <div class="collapse" id="sendTemplate-{{ $batch->id }}">
                                <div class="card card-body">
                                  <h3>Usar plantilla</h3>

                                  <form action="{{ url('/user/newitem/' . $batch->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="item_list_id" value="{{ $batch->id }}">
                                    
                      
                                    <div class="form-group row">
                                      <div class="col-2"></div>
                                      <label for="recupient-input" class="col-3 col-form-label">Plantilla:</label>
                                      <div class="col-xl-4 col-md-6 col-6">
                                        <input class="form-control" type="text" name="name" placeholder="Nombre de contacto" required id="contact-name-{{ $batch->id }}">
                                      </div>
                                    </div>
                      
                      
                                    <button type="submit" class="btn btn-info float-right" onclick="ok()">Agregar contacto</button>
                                    <button type="button" class="btn btn-warning col-xl-2 col-md-2 col-3 float-right mx-5" onclick="limpiar_agregarContacto();">Limpiar</button>
                                  </form>
                                </div>
                              </div>

                            </div>

                            <table id="table_template" class="table table-bordered table-striped table-responsive">             
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Nombre</th>
                                  <th>Número</th>
                                </tr>
                              </thead>
                              <tfoot>
                                <tr>
                                  <th>#</th>
                                  <th>Nombre</th>
                                  <th>Número</th>
                                </tr>
                              </tfoot>
                  
                              <tbody>
                                @if (count($batch->item) >= 1)
                                  @foreach ($batch->item as $item)
                                    <tr>
                                      <td>{{ $item->id }}</td>
                                      <td>{{ $item->name }}</td>
                                      <td>{{ $item->number }}</td>
                                    </tr>
                                  @endforeach
                                @else
                                  <tr>
                                    <td></td>
                                    <td>No hay números en esta lista</td>
                                    <td><i class="fa fa-grav font-size-40"></i></td>
                                  </tr>
                                  @endif
                                
                              <tbody>
                            </table>

                            </div>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-default "  data-dismiss="modal">Cerrar</button>
                            </div>
                            </form>
                        </div>
                      </div>
                    </div>
                    
                    <a href="{{ url('/user/getitems/' . $batch->id) }}" class="btn btn-warning"><i class="fas fa-info-circle"></i> Editar</a>
                    <a href="#" class="btn btn-danger" data-target="#deleteContactList-{{ $batch->id }}" data-toggle="modal"><i class="fa fa-remove" aria-hidden="true"></i> Borrar</a>
                    {{-- Modal body Contacts --}}
                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" id="deleteContactList-{{ $batch->id }}" aria-labelledby="deleteContactList" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                          <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Eliminar: {{ $batch->name }}</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          </div>
                          
                          <div class="modal-body ">   
                            <p>¿Estas seguro de querer eliminarlo de forma permanente?</p>
                            <p>Esta acción no se puede deshacer.</p>

                            
                          </div>

                          <div class="modal-footer">
                            <form action="{{ url('/user/deletebatch/' . $batch->id) }}" method="post">
                              @csrf
                              <button type="submit" class="btn btn-danger mx-5 float-right" id="sa-warning-{{ $batch->id }}" onclick="deleteElement()">Eliminar permanentemente</button> 
                            </form>
                            <button type="button" class="btn btn-default "  data-dismiss="modal">Cerrar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </td>
              </tr>
            @endforeach

        @else
          <div class="text-center">
            <i class="fa fa-grav font-size-70"></i>
          </div>   
          <div class="text-center">
            ¡No hay listas registradas aún!
          </div>   
        @endif

          </tbody>
        </table>
        {{ $batches->onEachSide(1)->links() }}
      </div>
    </div>
  </div>
  <!-- /.box-header -->
  
  
</div>

@endsection

@section('scripts')
  <script>

  </script>    
@endsection