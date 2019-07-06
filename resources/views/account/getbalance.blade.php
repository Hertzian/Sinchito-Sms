@extends('layouts.app')

@section('title')
    <h1>Balance</h1>
@endsection

@section('content')
<div class="row">

    <div class="col-md-6">
        <div class="box">
            <div class="box-header with-border">
                <h5 class="box-title">Historial</h5>
            </div>
            <div class="box-body p-0">
				<div class="media-list media-list-hover media-list-divided inner-user-div" style="overflow: auto; height: 350px">

                    <div class="media media-single">
                        <a href="#" class="">
                            <span class="avatar avatar-sm bg-info"><i class="fa fa-usd"></i></span>
                        </a>

                        <div class="media-body">
                            <h6><a href="#">Agregaste $200.00 MNX a tu credito.</a></h6>
                            <time datetime="2017-07-14 20:00">24 min ago</time>
                        </div>
                    </div>

                    <div class="media media-single">
                        <a href="#">
                            <span class="avatar avatar-sm bg-info"><i class="fa fa-usd"></i></span>
                        </a>

                        <div class="media-body">
                            <h6><a href="#">Agregaste $200.00 MNX a tu credito.</a></h6>
                            <time datetime="2017-07-14 20:00">24 min ago</time>
                        </div>
                    </div>

                    <div class="media media-single">
                        <a href="#">
                            <span class="avatar avatar-sm bg-info"><i class="fa fa-usd"></i></span>
                        </a>

                        <div class="media-body">
                            <h6><a href="#">Agregaste $200.00 MNX a tu credito.</a></h6>
                            <time datetime="2017-07-14 20:00">24 min ago</time>
                        </div>
                    </div>

                    <div class="media media-single">
                        <a href="#">
                            <span class="avatar avatar-sm bg-info"><i class="fa fa-usd"></i></span>
                        </a>

                        <div class="media-body">
                            <h6><a href="#">Agregaste $200.00 MNX a tu credito.</a></h6>
                            <time datetime="2017-07-14 20:00">24 min ago</time>
                        </div>
                    </div>

                    <div class="media media-single">
                        <a href="#">
                            <span class="avatar avatar-sm bg-info"><i class="fa fa-usd"></i></span>
                        </a>

                        <div class="media-body">
                            <h6><a href="#">Agregaste $200.00 MNX a tu credito.</a></h6>
                            <time datetime="2017-07-14 20:00">24 min ago</time>
                        </div>
                    </div>

                    <div class="media media-single">
                        <a href="#">
                            <span class="avatar avatar-sm bg-info"><i class="fa fa-usd"></i></span>
                        </a>

                        <div class="media-body">
                            <h6><a href="#">Agregaste $200.00 MNX a tu credito.</a></h6>
                            <time datetime="2017-07-14 20:00">24 min ago</time>
                        </div>
                    </div>

                    <div class="media media-single">
                        <a href="#">
                            <span class="avatar avatar-sm bg-info"><i class="fa fa-usd"></i></span>
                        </a>

                        <div class="media-body">
                            <h6><a href="#">Agregaste $200.00 MNX a tu credito.</a></h6>
                            <time datetime="2017-07-14 20:00">24 min ago</time>
                        </div>
                    </div>

                </div>
            </div>
            <div class="text-center bt-1 border-light p-2">
                <a class="text-uppercase d-block font-size-12" href="#">&nbsp;</a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-6">
        <div class="box bg-blue">
            <div class="box-body text-white">
                <div class="flexbox mb-20">
                    <div class="dropdown">
                        <h6 class="text-uppercase text-white dropdown-toggle" data-toggle="dropdown">Today</h6>
                        <div class="dropdown-menu">
                            <!-- <a class="dropdown-item active" href="#">Today</a>
                            <a class="dropdown-item" href="#">Yesterday</a>
                            <a class="dropdown-item" href="#">Last week</a>
                            <a class="dropdown-item" href="#">Last month</a> -->
                        </div>
                    </div>
                    <h6 class="text-white"><i class="ion-android-arrow-dropup"></i> </h6>
                </div>
                    <div class="font-size-50 font-weight-200">${{ $balance }}</div>
                        <p class="font-size-20">Credito</p>
                    </div>
                    
                <h6 class="text-uppercase text-center mb-30"><a href="#add-modal" data-target="#add-modal" data-toggle="modal" class="btn btn-dark showbottom">Recarga tu credito aqui</a></h6>
                    <ul class="flexbox flex-justified text-cente mb-15">
                         <li class="br-1 botder-light text-center">
                            <!-- <div class="font-size-18">369</div>
                            <small>Dallas</small> -->
                        </li>
                        <li class="br-1 botder-light text-center">
                            <div class="font-size-18">
                            <!-- <span class="badgbadge badge-darke lg "> -->
                            
                            {{-- @if ($account->balance < .65) --}}
                                {{-- 0 --}}
                            {{-- @else     --}}
                                {{ $account->message_limit }}                
                            {{-- @endif --}}
                            <!-- </span> -->
                            </div>
                            <span class="badge badge-pill "><h6>Mensajes Disponibles</h6></span>
                        </li>
                       
                        <li class="text-center">
                            <!-- <div class="font-size-18">369</div>
                            <small>Dallas</small> -->
                        </li>
                    </ul>
                <div id="lineIncrease">1,8,6,5,6,8,7,9,7,8,10,16,14,10</div>
            </div>
        </div>
    </div>

</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="add-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myLargeModalLabel">Agregar Credito</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body ">
            
            <form action="{{ url('/addcredit') }}" method="post" class="">
            @csrf
            <div class="form-group row">
              <div class="col-2"></div>
              <label for="balance" class="col-3 col-form-label">Agregar balance</label>
              <div class="col-xl-4 col-md-6 col-6">
                <input class="form-control" type="text" name="balance" placeholder="¿Cuánto credito quieres añanir?" required id="temaplate-name">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-2"></div>
            </div>
            
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default "  data-dismiss="modal">Carrar</button>
            <button type="submit" class="btn btn-info float-right" onclick="ok()">Agregar Crédito</button>
          </form>
          
          <button type="button" class="btn btn-warning col-xl-2 col-md-2 col-3 float-right" onclick="limpiar_template();">Limpiar</button>
        </div>
      </div>
    </div>
  </div>
    
@endsection