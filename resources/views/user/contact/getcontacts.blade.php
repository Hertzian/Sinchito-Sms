@extends('user.layouts.app')

@section('content')

@section('title')
<h1>Lista: {{ $batch->name }}</h1>    
@endsection

    <a href="{{ url('/user/getlist') }}" class="btn btn-secondary mb-5"><i class="fas fa-chevron-left"></i> Regresar</a>
    <div class="row">

        {{-- Add Contact button --}}
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ count($items) }}</h3>
                    @if (count($items) >= 2 || count($items) < 1)
                        <p>Contactos</p>
                    @else
                        <p>Contacto</p>              
                    @endif
                </div>
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <a href="#add-modal" class="small-box-footer" data-target="#add-modal" data-toggle="modal">Nuevo Contacto<i class="fa fa-arrow-right"></i></a>
            </div>
        </div>

        {{-- if items > 0 buttons --}}
        @if (count($items) != 0)

            {{-- SMS button --}}
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
            <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>SMS</h3>
                            <p>Envía SMS a tus contactos</p>              
                    </div>
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <a href="#add-modal" class="small-box-footer" data-target="#sendSms-modal" data-toggle="modal">Envía SMS´s<i class="fa fa-arrow-right"></i></a>
                </div>
            </div>

            {{-- SMS Template button --}}
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                <!-- small box -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>Plantilla</h3>
                            <p>Utiliza una plantilla</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-copy"></i>
                    </div>
                    <a href="#add-modal" class="small-box-footer" data-target="#sendTemplate-modal" data-toggle="modal">SMS´s con plantilla<i class="fa fa-arrow-right"></i></a>
                </div>
            </div>

            {{-- csv button --}}
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                <!-- small box -->
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h3>CSV</h3>
                            <p>Guarda contactos con un .csv</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-copy"></i>
                    </div>
                    <a href="#csv-modal" class="small-box-footer" data-target="#csv-modal" data-toggle="modal">SMS´s con plantilla<i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        @endif

        
        


        
    </div>

    {{-- Add contact modal --}}
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="add-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Agregar Contacto</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>

                <div class="modal-body">

                    
                    <form action="{{ url('/user/newitem/' . $batch->id) }}" method="post">
                        @csrf
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
                                <input class="form-control" type="text" id="number" name="number" placeholder="Numero" required >
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"  data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-info float-right" onclick="ok()">Guardar</button>
                    <button type="button" class="btn btn-warning float-right" onclick="limpiar_newitem();">Limpiar</button>
                </div>
                    </form>
            </div>
        </div>
    </div>

    {{-- Send SMS modal --}}
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="sendSms-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Enviar SMS a esta lista</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                
                <div class="modal-body">
                
                    <form action="{{ url('/user/send/' . $batch->account_id) }}" method="post">
                        @csrf
                        <input type="hidden" name="item_list_id" value="{{ $batch->id }}">
                        <div class="form-group row">
                            <div class="col-2"></div>
                            <label for="text-message" class="col-3 col-form-label">Mensaje</label>
                            <div class="col-xl-4 col-md-6 col-6">
                            <textarea class="form-control" rows="5" placeholder="Escribe tu mensaje" required name="texto_personalizado" id="texto_personalizado" onkeyup="valTextMessage(this);"></textarea><br>
                            </div>
                        </div>  

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"  data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-info float-right" onclick="ok()">Enviar</button>
                        <button type="button" class="btn btn-warning float-right" onclick="limpiar_newitem();">Limpiar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Send Template modal --}}
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="sendTemplate-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Enviar con plantilla</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
             
                <div class="modal-body ">
                <form action="{{ url('/user/sendtemplate/' . $account->id) }}" method="post">
                    @csrf
                        {{-- <input type="hidden" name="account_id" value="{{ $account->id }}"> --}}
                        <input type="hidden" name="item_list_id" value="{{ $batch->id }}">
                        <div class="form-group row">
                            <div class="col-2"></div>
                            <label for="text-message" class="col-3 col-form-label">Plantillas</label>
                            <div class="col-xl-4 col-md-6 col-6">                  
                                <select class="form-control" name="template_id">
                                <option value="">Selecciona una plantilla</option>
                                
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
                        <button type="button" class="btn btn-default"  data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-info float-right" onclick="ok()">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- CSV modal --}}
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="csv-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">CSV</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
             
                <div class="modal-body ">
                <form action="{{ url('/user/sendtemplate/' . $account->id) }}" method="post">
                    @csrf
                        {{-- <input type="hidden" name="account_id" value="{{ $account->id }}"> --}}
                        <input type="hidden" name="item_list_id" value="{{ $batch->id }}">
                        <div class="form-group row">
                            <div class="col-2"></div>
                            <label for="text-message" class="col-3 col-form-label">Plantillas</label>
                            <div class="col-xl-4 col-md-6 col-6">                  
                                <select class="form-control" name="template_id">
                                <option value="">Selecciona una plantilla</option>
                                
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
                        <button type="button" class="btn btn-default"  data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-info float-right" onclick="ok()">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        
    
        @if (count($items) >= 1)
            @foreach ($items as $item)

                <div class="col-xl-3 col-lg-3 col-12">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-secondary">
                        <div class="widget-user-image">
                        <img class="rounded-circle" src="{{ asset('images/user-128x128.jpg') }}" alt="User Avatar">
                        </div>
                        <!-- /.widget-user-image -->
                        <h3 class="widget-user-username">{{ $item->name}}</h3>
                        <h6 class="widget-user-desc">{{ $item->number }}</h6>
                    </div>
                    <div class="box-footer no-padding">
                        <ul class="nav d-block nav-stacked">
                            <li class="nav-item"><a href="#" class="nav-link">Lista: <span class="pull-right badge bg-secondary">{{ $batch->name }}</span></a></li>

                            {{-- buton delete contact --}}
                            <li class="nav-item"><a href="#" class="nav-link" data-target="#deleteContact-{{ $item->id }}" data-toggle="modal">Eliminar <span class="pull-right badge bg-danger"><i class="fa fa-remove" aria-hidden="true"></i> </span></a></li>
                        </ul>

                        {{-- Modal delete contact --}}
                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" id="deleteContact-{{ $item->id }}" aria-labelledby="deleteContact" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
    
                                <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Eliminar: {{ $item->name }}</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                
                                <div class="modal-body ">   
                                <p>¿Estas seguro de querer eliminar el contacto de forma permanente?</p>
                                <p>Esta acción no se puede deshacer.</p>
    
                                
                                </div>
    
                                <div class="modal-footer">
                                <form action="{{ url('/user/deleteitem/' . $item->id) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger mx-5 float-right" onclick="deleteElement()">Eliminar permanentemente</button> 
                                </form>
                                <button type="button" class="btn btn-default "  data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                <!-- /.widget-user -->
                </div>

            @endforeach
        @else

            <div class="col-md-6 col-lg-4">
                <a class="box box-body box-hover-shadow" href="#">
                    <div class="flexbox align-items-center">
                        <span class="fa fa-grav font-size-50"></span>
                        <div class="text-right">
                            <h6 class="mb-0">No tienes contactos registrados</h6>
                            <small></small>
                        </div>
                    </div>
                </a>
            </div>

        @endif
        
    </div>

    



@endsection