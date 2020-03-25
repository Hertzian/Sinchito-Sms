@extends('admin.layouts.app')

@section('title')
  <h1>Usuarios</h1>
@endsection

@section('content')
    
<div class="row">

    {{-- Modal 1 --}}
    <div class="col-xl-4 col-md-12 col-12">
        <div class="small-box bg-danger">
        <div class="inner">
            <h3>Usuarios</h3>
            <p>Añadir usuarios</p>
        </div>        
        <div class="icon">
            <i class="fa fa-address-book"></i>
        </div>
            <a href="#add-modal" class="small-box-footer" data-target="#add-modal" data-toggle="modal">Agregar usuario <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>
  
    {{-- Modal body 1--}}
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="add-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Nuevo Usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body ">

                {{--  --}}
                <div class="box">
                    <div class="box-body ">
                        <form action="{{ url('admin/newuser') }}" class="form-element" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nombre:</label>
                                        <input type="text" class="form-control" id="name" name="name" required> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">email:</label>
                                        <input type="email" class="form-control" id="email" name="email" required> 
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Escribe Password:</label>
                                        <input type="password" class="form-control" id="password" name="password" required> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Reescribe password :</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-block btn-warning" onclick="limpiarNusuario();">Limpiar</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-block btn-success">Crear Usuario</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{--  --}}

                
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal -->
  
    
    
  
    
    

    <div class="col-12">
        <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Lista de Usuarios</h3>
        </div>
        <div class="box-body">

            @if (count($users) >= 1)  
            <table id="table_template" class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>#Cuenta</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>#Cuenta</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acción</th>
                </tr>
            </tfoot>

            <tbody>
                                
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    {{-- <td>{{ $user->account }}</td> --}}
                    <td> 
                    <div class="btn-group">
                        {{-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit-modal"><i class="fa fa-pencil" aria-hidden="true"></i></button> --}}
                        <a href="{{ url('/admin/userdetail/' . $user->id) }}" class="btn btn-info mx-5"><i class="fa fa-users" aria-hidden="true"></i> Detalles de cuenta
                        </a>
                        <form action="{{ url('/admin/deleteuser/' . $user->id) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger mx-5" id="sa-warning" onclick="deleteElement()"><i class="fa fa-remove" aria-hidden="true"></i></button> 
                        </form>
                        </div>
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
    </div>
  <!-- /.box-header -->
  
  
</div>

@endsection