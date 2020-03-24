@extends('user.layouts.app')

@section('title')
  <h1>Lista de Envíos</h1>
@endsection

@section('content')
    
<div class="row">

  {{-- Modal 1 --}}
  <div class="col-xl-4 col-md-12 col-12">
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>{{ count($messageList) }}</h3>
        @if (count($messageList) >= 2 || count($messageList) < 1)
          <p>Listas</p>
        @else
          <p>Lista</p>              
        @endif
      </div>
      
      <div class="icon">
        <i class="fa fa-address-book"></i>
      </div>
        <a href="#box" class="small-box-footer"><i class="fa fa-arrow-down"></i></a>
    </div>
  </div>

  <div class="col-12">
    <div id="box" class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Lista de envíos</h3>
      </div>
      <div class="box-body">

        @if (count($messageList) >= 1)  
        <table id="table_template" class="table table-bordered table-striped table-responsive">
          <thead>
            <tr>
              <th>#</th>
              <th>Identificador</th>
              <th>Contenido</th>
              <th>Creado</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Identificador</th>
              <th>Contenido</th>
              <th>Creado</th>
              <th>Acciones</th>
            </tr>
          </tfoot>

          <tbody>
                            
            @foreach ($messageList as $list)
              <tr>
                <td>{{ $list->id }}</td>
                <td>{{ $list->name }}</td>
                <td>{{ $list->body }}</td>
                <td>{{ $list->created_at }}</td>
                <td> 
                  <div class="btn-group">
                    {{-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit-modal"><i class="fa fa-pencil" aria-hidden="true"></i></button> --}}
                    <a href="{{ url('/user/getsenditems/' . $list->id) }}" class="btn btn-info mx-5"><i class="fa fa-users" aria-hidden="true"></i> Ver contenido</a>
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
            ¡No hay listas registradas aún!
          </div>   
        @endif

          </tbody>
        </table>
        {{ $messageList->onEachSide(1)->links() }}
      </div>
    </div>
  </div>
  <!-- /.box-header -->
  
  
</div>

@endsection