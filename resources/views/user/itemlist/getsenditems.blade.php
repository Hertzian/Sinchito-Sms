@extends('user.layouts.app')

@section('title')
  <h1>Lista de Envíos</h1>
  <a href="{{ url('/user/sendmessagelist') }}" class="btn btn-success mb-5">Regresar</a>
@endsection

@section('content')
    
<div class="row">
  {{-- Modal 1 --}}
  <div class="col-xl-4 col-md-12 col-12">
    <div class="small-box bg-primary">
      <div class="inner">
        <h4>Contenido:</h4>
          <p>{{ $content }}</p>              
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
        <h3 class="box-title">Lista de lotes</h3>
      </div>
      <div class="box-body">

        @if (count($contacts) >= 1)  
        <table id="table_template" class="table table-bordered table-striped table-responsive">
          <thead>
            <tr>
              <th>#Identificador</th>
              <th>Recipiente</th>
              {{-- <th>Contenido</th> --}}
              <th>Creado</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>#Identificador</th>
                <th>Recipiente</th>
                {{-- <th>Contenido</th> --}}
                <th>Creado</th>
            </tr>
          </tfoot>

          <tbody>
                            
            @foreach ($contacts as $contact)
              <tr>
                <td>{{ $id }}</td>
                <td>{{ $contact }}</td>
                <td>{{ $batch->created_at }}</td>
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
            <i class="fa fa-grav font-size-70"></i><br><br>
            ¡No hay listas elementos enviados aún! <br>
          </div>   
        @endif

          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- /.box-header -->
  
  
</div>

@endsection