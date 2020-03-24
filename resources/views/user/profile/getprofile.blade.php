@extends('user.layouts.app')

@section('title')
    <h1>Perfil</h1>
@endsection

@section('content')

<div class="box box-body ">
  {{-- <form action="#" class="form-element"> --}}
    <div class="row">
      <div class="col-md-4 info-box-content text-center">
        <span class="info-box-number">{{ $account->message_limit }}</span>
        <span class="info-box-text">Límite de mensajes</span>
      </div>
      <div class="col-md-4 info-box-content text-center">
        <span class="info-box-number">${{ $account->balance }}</span>
        <span class="info-box-text">Crédito disponible</span>
      </div>
    </div>
  {{-- </form> --}}



</div>

<div class="box">
  <div class="box-body ">
    <form action="{{  url('/user/updateprofile') }}" class="form-element" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <h3>Tus datos</h3>
        </div>

        <div class="col-md-12">
          @if ($user->avatar == '0')
            <img src="{{ asset('images/user-128x128.jpg') }}" class="rounded-circle">
          @else
            <img src="{{ url('storage/avatar/' . $user->avatar) }}" style="width:250px;height:auto" class="rounded-circle">
          @endif
          <div class="form-group">
          <label for="avatar">imagen de perfil:</label>
          <input type="file" class="form-control" id="" name="avatar" value="{{ $user->avatar }}"> 
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
          <label for="name">Nombre:</label>
          <input type="text" class="form-control" id="" name="name" value="{{ $user->name }}"> 
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
          <label for="last_name">Apellido Paterno:</label>
          <input type="text" class="form-control" id="" name="last_name" value="{{ $user->last_name }}"> 
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
          <label for="sec_last_name">Apellido Materno:</label>
          <input type="text" class="form-control" id="" name="sec_last_name" value="{{ $user->sec_last_name }}"> 
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" class="form-control" id="" name="email" value="{{ $user->email }}"> 
          </div>
        </div>          
        <div class="col-md-6">
          <div class="form-group">
          <label for="phone">phone:</label>
          <input type="text" class="form-control" id="" name="phone" value="{{ $user->phone }}"> 
          </div>
        </div>  

        <div class="col-md-4">
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="" name="password"> 
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="">Reescribe password :</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"> 
          </div>
        </div>

        <div class="col-md-5">
          <button type="submit" class="btn btn-block btn-success">Actualizar datos</button>
        </div>
      </div>
    </form>
  </div>
</div>

<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
</div>
    
@endsection

