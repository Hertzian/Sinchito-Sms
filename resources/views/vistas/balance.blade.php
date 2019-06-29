@extends('layouts.app')

@section('title')
    <h1>Balance</h1>
@endsection

@section('content')
<div class="row">

    <div class="col-md-6 col-lg-6">
        <div class="box">
			<div class="box-header with-border">
      		    <h5 class="box-title">Historial</h5>
			</div>
		    <div class="box-body p-0">
				<div class="media-list media-list-hover media-list-divided">
			        <a class="media media-single" href="#">
					    <span class="avatar avatar-sm bg-info"><i class="fa fa-usd"></i></span>
					    <div class="media-body">
					        <p>Se agrego $200.00 MNX a tu credito.</p>
				            <time datetime="2017-07-14 20:00">24 min ago</time>
			            </div>
			        </a>

                    <a class="media media-single" href="#">
                        <span class="avatar avatar-sm bg-danger"><i class="fa fa-usd"></i></span>
                        <div class="media-body">
                            <p>Se Desconto $50.00 MNX de tu credito.</p>
                            <time datetime="2017-07-14 20:00">2 hours ago</time>
                        </div>
                    </a>

                    <a class="media media-single" href="#">
                        <span class="avatar avatar-sm bg-danger"><i class="fa fa-usd"></i></span>
                        <div class="media-body">
                            <p>Se Desconto $50.00 MNX de tu credito.</p>
                            <time datetime="2017-07-14 20:00">2 hours ago</time>
                        </div>
                    </a>
                            
                    <a class="media media-single" href="#">
			            <span class="avatar avatar-sm bg-info"><i class="fa fa-usd"></i></span>
					    <div class="media-body">
				            <p>Se agrego $200.00 MNX a tu credito.</p>
				            <time datetime="2017-07-14 20:00">24 min ago</time>
			            </div>
				    </a>
                </div>
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
                            <a class="dropdown-item active" href="#">Today</a>
                            <a class="dropdown-item" href="#">Yesterday</a>
                            <a class="dropdown-item" href="#">Last week</a>
                            <a class="dropdown-item" href="#">Last month</a>
                        </div>
                    </div>
                    <h6 class="text-white"><i class="ion-android-arrow-dropup"></i> %20</h6>
                </div>
                <div class="font-size-50 font-weight-200">${{ $balance }}</div>
                    <p>Credito</p>
                </div>
                <h6 class="text-uppercase text-center mb-30">Recarga tu credito aqui</h6>
                    <ul class="flexbox flex-justified text-cente mb-15">
                        <li class="br-1 botder-light text-center">
                            <div class="font-size-18">953</div>
                            <a href=""><p><span class="badge badge-pill badge-warning">New York</span></p></a>
                        </li>
                        <li class="br-1 botder-light text-center">
                            <div class="font-size-18">813</div>
                            <p>Mercado pago</p>
                        </li>
                        <li class="text-center">
                            <div class="font-size-18">369</div>
                            <p>Dallas</p>
                        </li>
                    </ul>
                <div id="lineIncrease">1,8,6,5,6,8,7,9,7,8,10,16,14,10</div>
            </div>
        </div>
    </div>

</div>
    
@endsection