@extends('layouts.app2')

@section('content')

<body class="register-page-back hold-transition">        
    <div class="register-box ">
        <div class="register-logo">
            <a href="{{ route('register') }}"><b>Sms</b>Dynamic Registro</a>
        </div>
        <div class="register-box-body">
            <h3 class="login-box-msg">Bienvenido</h3> 
            <p class="login-box-msg">Registro nuevo</p>
            

            <form method="POST" class="form-element" action="{{ route('register') }}">
            @csrf

                <div class="form-group has-feedback">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nombre" required autocomplete="name" autofocus>
                    <span class="fa fa-user form-control-feedback"></span>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group has-feedback">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
                    <span class="fa fa-user form-control-feedback"></span>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group has-feedback">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                    <span class="fa fa-user form-control-feedback"></span>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group has-feedback">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar password" required autocomplete="new-password">
                    <span class="ion ion-log-in form-control-feedback "></span>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="checkbox">
                            <input type="checkbox" id="basic_checkbox_1" required>
                            {{-- <label for="basic_checkbox_1"><a href="#terms-Modal" data-toggle="modal" data-target="#terms-Modal"><b>Acepto los Términos y condiciones</b></a></label> --}}
                            <label for="basic_checkbox_1"><a href="#"><b>Acepto los Términos y condiciones</b></a></label>
                        </div>
                    </div>
                    <!-- /.col -->
                    {{-- <div id="terms-Modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="terms-Modal" aria-hidden="true">
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
                    </div> --}}
                    <!-- /.modal -->

                    <!-- /.col -->
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                </div>            
            </form>
            <div class="margin-top-20 text-center">
                <p>Ya tienes cuenta?<a href="{{ route('login') }}" class="text-info m-l-5">Ingresa aquí</a></p>
            </div>

        </div>
    </div>
</body>

@endsection
