@extends('user.layouts.app')

@section('title')
  <h1>Lista de Envíos</h1>
  @endsection
  
  @section('content')
  <a href="{{ url('/user/sendmessagelist') }}" class="btn btn-secondary mb-5"><i class="fas fa-chevron-left"></i> Regresar</a>
    
<div class="row">
  {{-- Modal 1 --}}
  <div class="col-xl-6 col-md-12 col-12">
    <div class="small-box bg-primary">
      <div class="inner">
        <h4>Mensaje:</h4>
          <p>{{ $content }}</p>              
      </div>
      
      <div class="icon">
        {{-- <i class="fa fa-address-book"></i> --}}
      </div>
      <span class="small-box-footer">
        <i class="fa fa-envelope"></i>
      </span>
    </div>
  </div>

  <div class="col-12">
    <div id="box" class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Contactos a los que se envió el mensaje</h3>
      </div>
      <div class="box-body">

        @if (count($messages) >= 1)  
        <table id="table_template" class="table table-bordered table-striped table-responsive">
          <thead>
            <tr>
              <th>#</th>
              <th>Recipiente</th>
              {{-- <th>Contenido</th> --}}
              <th>Creado</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>#</th>
                <th>Recipiente</th>
                {{-- <th>Contenido</th> --}}
                <th>Creado</th>
            </tr>
          </tfoot>

          <tbody>
                            
            @foreach ($messages as $message)
              <tr>
                <td>{{ $message->id }}</td>
                <td>{{ $message->recipient }}</td>
                <td>{{ $message->created_at }}</td>
                <td> 
                  <div class="btn-group">
                    {{-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit-modal"><i class="fa fa-pencil" aria-hidden="true"></i></button> --}}
                    {{-- <a href="{{ url('/user/getsenditems/' ) }}" class="btn btn-info mx-5"><i class="fa fa-users" aria-hidden="true"></i> Ver contenido</a> --}}
                    {{-- <form action="#" method="post">
                      @csrf
                      <button type="submit" class="btn btn-danger mx-5" id="sa-warning" onclick="deleteElement()"><i class="fa fa-remove" aria-hidden="true"></i></button> 
                    </form> --}}
                    </div>
                </td>
              </tr>
            @endforeach

        @else
          <div class="text-center">
            <i class="fa fa-grav font-size-70"></i>
          </div>   
          <div class="text-center">
            ¡No hay envíos registrados aún!
          </div>
        @endif

          </tbody>
        </table>
        {{ $messages->onEachSide(1)->links() }}
      </div>
    </div>
  </div>
  <!-- /.box-header -->
  
  
</div>

@endsection