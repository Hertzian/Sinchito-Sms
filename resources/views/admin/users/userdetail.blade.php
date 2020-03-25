@extends('admin.layouts.app')

@section('title')
<h1>Usuario <strong>{{ $user->name }}</strong></h1>
@endsection

@section('content')
    
<!-- row -->
<div class="content row">
    <div class="box">
        <div class="box-body ">
            <form action="{{  url('/admin/userdetail/' . $user->id) }}" class="form-element" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <h3>Datos de usuario</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input type="text" class="form-control" id="" name="name" value="{{ $user->name }}"> 
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="form-group">
                        <label for="lastName">Last Name :</label>
                        <input type="text" class="form-control" id="lasttName" name="lasttName" value="{{ $user->name }}"> 
                        </div>
                    </div> --}}
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="" name="email" value="{{ $user->email }}"> 
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="form-group">
                        <label for="phoneNumber">Phone number :</label>
                        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" value="{{ $user->name }}"> 
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="country">País:</label>
                            <select class="custom-select form-control" id="country" name="country">
                                <option value="">Country</option>
                                <option value="Amsterdam">India</option>
                                <option value="Berlin">USA</option>
                                <option value="Frankfurt">Dubai</option>
                            </select>
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="state">Estado:</label>
                            <select class="custom-select form-control" id="state" name="state">
                            <option value="">State</option>
                            <option value="Amsterdam">India</option>
                            <option value="Berlin">USA</option>
                            <option value="Frankfurt">Dubai</option>
                            </select>
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="city">Ciudad:</label>
                            <select class="custom-select form-control" id="city" name="city">
                            <option value="">City</option>
                            <option value="Amsterdam">India</option>
                            <option value="Berlin">USA</option>
                            <option value="Frankfurt">Dubai</option>
                            </select>
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Domicilio:</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ $user->name }}"> 
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-9"></div> --}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Escribe Password:</label>
                            <input type="password" class="form-control" id="" name="password"> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Reescribe password :</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"> 
                        </div>
                    </div>
                    <div class="col-md-5">
                        <button type="submit" class="btn btn-block btn-success">Actualizar Usuario</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="box">
        <div class="box-body ">
            <form action="{{ url('/admin/statusaccount/' . $user->id) }}" class="form-element" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <h3>Estado de cuenta</h3>
                    </div>                    
                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="rNewPass">Retype you'r new password :</label>
                            <input type="password" class="form-control" id="rNewPass" name="rNewPass"> 
                        </div>
                    </div> --}}

                    {{-- <div class="col-md-6">
                        <button type="submit" class="btn btn-block btn-warning">Cambiar Password</button>
                    </div>                --}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">*Número de cuenta:</label>
                            <input type="text" class="form-control" id="" name="" value="#{{ $account->id }}" readonly> 
                            {{-- <input type="password" class="form-control" id="" name="">  --}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="type">Tipo:</label>
                            <input type="text" class="form-control" id="" name="type" value="{{ $account->type }}"> 
                            {{-- <input type="password" class="form-control" id="" name="">  --}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">*Límite de mensajes:</label>
                            <input type="text" class="form-control" id="" name="" value="{{ $account->message_limit }}" readonly> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="price">Precio:</label>
                            <input type="text" class="form-control" id="" name="price" value="{{ $account->price }}"> 
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">*Balance:</label>
                            <input type="text" class="form-control" id="" name="" value="{{ $account->balance }}" readonly> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status">Status:</label>
                            <input type="text" class="form-control" id="" name="status" value="{{ $account->status }}"> 
                        </div>
                    </div>
                    <div class="col-md-5">
                        <label for=""><small>* Estos parámetros no son editables desde este formulario.</small></label>
                        <button type="submit" class="btn btn-block btn-warning">Actualizar cuenta</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="box">
        <div class="box-body ">
            <form action="{{ url('/admin/addcredit/' . $user->id) }}" class="form-element" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <h3>Agregar crédito</h3>
                    </div>                    
                    {{-- <form action="" method="POST"> --}}
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="balance">* Agregar Crédito</label><br>
                                <input id="" type="text" class="form-control"name="balance" placeholder="Cuánto deseas adicionar" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for=""><small>* El monto mínimo es .1</small></label>
                            <button type="submit" class="btn btn-block btn-warning">Agregar Crédito</button>
                        </div>                        
                    {{-- </form>                     --}}
                </div>
            </form>
        </div>
    </div>
</div>
  

@endsection