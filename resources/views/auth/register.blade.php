@extends('layouts.app2')

@section('content')

<body class="register-page-back hold-transition">        
    <div class="register-box ">
        <div class="register-logo">
            <a href="../../index.html"><b>Sinchito</b>Admin</a>
        </div>
        <div class="register-box-body">
        <h3 class="login-box-msg">Bienvenido</h3> 
            <p class="login-box-msg">Registro nuevo</p>  

            {{-- <form action="../scripts/login/register.php" method="post"  class="form-element" onsubmit="validar()"> --}}
            <form method="POST" class="form-element" action="{{ route('register') }}">
                @csrf

            <div class="form-group has-feedback">                
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nombre" value="{{ old('name') }}" required autocomplete="name" autofocus>
                <span class="fa fa-user form-control-feedback "></span>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group has-feedback">                
                <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" placeholder="Apellido Paterno" value="{{ old('lname') }}" required autocomplete="lname" autofocus>
                <span class="fa fa-user-o form-control-feedback "></span>

                @error('lname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group has-feedback">                
                <input id="slname" type="text" class="form-control @error('slname') is-invalid @enderror" name="slname" placeholder="Apellido Materno" value="{{ old('slname') }}" required autocomplete="slname" autofocus>
                <span class="fa fa-user-o form-control-feedback "></span>

                @error('slname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group has-feedback">                
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <span class="ion ion-email form-control-feedback "></span>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group has-feedback">                
                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Teléfono" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                <span class="fa fa-mobile-phone form-control-feedback "></span>

                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group has-feedback">                
                <input id="pais" type="text" class="form-control @error('pais') is-invalid @enderror" name="pais" placeholder="País" value="{{ old('pais') }}" required autocomplete="pais" autofocus>
                <span class="fa fa-map form-control-feedback "></span>

                @error('pais')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group has-feedback">                
                <input id="estado" type="text" class="form-control @error('estado') is-invalid @enderror" name="estado" placeholder="Estado" value="{{ old('estado') }}" required autocomplete="estado" autofocus>
                <span class="fa fa-map-pin form-control-feedback "></span>

                @error('estado')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group has-feedback">                
                <input id="ciudad" type="text" class="form-control @error('ciudad') is-invalid @enderror" name="ciudad" placeholder="Ciudad" value="{{ old('ciudad') }}" required autocomplete="ciudad" autofocus>
                <span class="fa fa-map-signs form-control-feedback "></span>

                @error('ciudad')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group has-feedback">                
                <input id="domicilio" type="text" class="form-control @error('domicilio') is-invalid @enderror" name="domicilio" placeholder="Domicilio" value="{{ old('domicilio') }}" required autocomplete="domicilio" autofocus>
                <span class="fa fa-map-marker form-control-feedback "></span>

                @error('domicilio')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group has-feedback">                
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                <span class="ion ion-locked form-control-feedback"></span>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group has-feedback">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirma tu password" required autocomplete="new-password">
                <span class="ion ion-log-in form-control-feedback "></span>
            </div>
          
            

            

            <div class="row">
                <div class="col-12">
                    <div class="checkbox">
                        <input type="checkbox" id="basic_checkbox_1" required>
                        <label for="basic_checkbox_1"><a href="#terms-Modal" data-toggle="modal" data-target="#terms-Modal"><b>Acepto los Términos y condiciones</b></a></label>
                    </div>
                </div>
                <!-- /.col -->
                <div id="terms-Modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="terms-Modal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Terminos y condiciones</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <h4>Overflowing text to show scroll behavior</h4>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                    <!-- /.modal -->


                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-info btn-block margin-top-10">Enviar</button>
                </div>
                    <!-- /.col -->
            </div>
            </form>
        </div>
            <div class="margin-top-20 text-center">
                <p>Ya tienes cuenta?<a href="{{ route('login') }}" class="text-info m-l-5">Ingresa aquí</a></p>
            </div>         
        </div>
        <!-- /.form-box -->
    </div>
            
</body>


@endsection