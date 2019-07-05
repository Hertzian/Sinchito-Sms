@extends('layouts.app')

@section('title')
  <h1>Perfil</h1>
@endsection

@section('content')
  <div class="box box-body ">
    <form action="#" class="form-element">
      <div class="row">
        <div class="col-md-12">
          <h3>Mi perfil <button type="button" href="#" onclick="change_info()"><i class="fa  fa-pencil"></i></button></h3>
        </div>
        <div class="col-md-4 info-box-content text-center">
          <span class="info-box-number">
            <a href="#" id="name-a" class="baseinput">{{ $name }}</a>
            <input class="form-control baseinput" id="name-i" style="text-align:center; display: none;" type="text" value="" >
          </span>
          <span class="info-box-text">Nombre </span>
        </div>
        <div class="col-md-4 info-box-content text-center">
          <span class="info-box-number">
            <a href="#" id="lastname-a" class="baseinput">{{ $Lname }}</a>
            <input class="form-control cambioinput" id="lastname-i" type="text" style="text-align:center; display: none;" value="" id="example-text-input">
          </span>
          <span class="info-box-text">Apellido </span>
        </div>
        <div class="col-md-4 info-box-content text-center">
          <span class="info-box-number">
            <a href="#" id="email-a" class="baseinput">{{ $email }}</a>
            <input class="form-control cambioinput" id="email-i" type="text" style="text-align:center; display: none;" value="" id="example-text-input">
          </span>
          <span class="info-box-text">Correo email </span>
        </div>
        <div class="col-md-4 info-box-content text-center">
          <span class="info-box-number">
            <a href="#" id="phone-a" class="baseinput">{{ $phone }}</a>
            <input class="form-control cambioinput" id="phone-i" type="text" style="text-align:center; display: none;" value="" id="example-text-input">
          </span>
          <span class="info-box-text">Telefono celular</span>
        </div>
        <div class="col-md-4 info-box-content text-center">
          <span class="info-box-number">
            <a href="#" id="country-a" class="baseinput">{{ $email }}</a>
            <input class="form-control cambioinput" id="country-i" type="text" style="text-align:center; display: none;" value="" id="example-text-input">
          </span>
          <span class="info-box-text">Pais </span>
        </div>
        <div class="col-md-4 info-box-content text-center">
          <span class="info-box-number">
            <a href="#" id="state-a" class="baseinput">{{ $email }}</a>
            <input class="form-control cambioinput" id="state-i" type="text" style="text-align:center; display: none;" value="" id="example-text-input">
          </span>
          <span class="info-box-text">Estado </span>
        </div>
        <div class="col-md-4 info-box-content text-center">
          <span class="info-box-number">
            <a href="#" id="city-a" class="baseinput">{{ $email }}</a>
            <input class="form-control cambioinput" id="city-i" type="text" style="text-align:center; display: none;" value="" id="example-text-input">
          </span>
          <span class="info-box-text">Ciudad </span>
        </div>
        <div class="col-md-4 info-box-content text-center">
          <span class="info-box-number">
            <a href="#" id="address-a" class="baseinput">{{ $email }}</a>
            <input class="form-control cambioinput" id="address-i" type="text" style="text-align:center; display: none;" value="" id="example-text-input">
          </span>
          <span class="info-box-text">Direccion </span>
        </div>
      </div>
    </form>
    
  </div>
  <div class="box box-body container">
    <form action="#" class="form-element">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <h3>Cambia contraseña</h3>
        </div>
          <div class="col-4 align-self-center info-box-content text-center">
            <span class="info-box-number">
              <input class="form-control" type="password" style="text-align:center;" value="" id="example-text-input">
            </span>
            <span class="info-box-text">Contraseña actual</span>
          </div>
        
          <div class="col-md-4 info-box-content text-center">
            <span class="info-box-number">
              <input class="form-control" type="password" style="text-align:center;" value="" id="example-text-input">
            </span>
            <span class="info-box-text">Contraseña nueva</span>
          </div>
        
          <div class="col-md-4 info-box-content text-center">
            <span class="info-box-number">
              <input class="form-control" type="password" style="text-align:center;" value="" id="example-text-input">
            </span>
            <span class="info-box-text">Confirma contraseña nueva</span>
          </div>

        <div class="col-md-4 info-box-content text-center">
            <br><button type="submit" class="btn btn-block btn-warning" id="change-pass">Cambiar contraseña</button>
        </div>   

        <div class=" "></div>
        
                    
      </div>
    </form>
  </div>

    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
    </div>

    
@endsection