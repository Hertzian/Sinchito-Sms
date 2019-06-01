@extends('layouts.app')

@section('title')
    <h1>Dashboard</h1>
@endsection

@section('content')

<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-12">
					<!-- Default box -->
					  <div class="box bg-success">		
						<div class="box-body">
							<div class="p-15 text-center">
							  <div class="vertical-align-middle">
								<div class="font-size-40">
								  7
								  <span class="font-size-30"></span>
								</div>
								<div class="font-size-20">Running</div>
							  </div>
							</div>
						</div>
						<!-- /.box-body -->		
					  </div>
					<!-- /.box -->
                </div>
                <div class="col-xl-3 col-md-6 col-12">
					<!-- Default box -->
					  <div class="box bg-success">		
						<div class="box-body">
							<div class="p-15 text-center">
							  <div class="vertical-align-middle">
								<div class="font-size-40">
								  3
								  <span class="font-size-30"></span>
								</div>
								<div class="font-size-20">Scheduled</div>
							  </div>
							</div>
						</div>
						<!-- /.box-body -->		
					  </div>
					<!-- /.box -->
                </div>
                <div class="col-xl-3 col-md-6 col-12">
					<!-- Default box -->
					  <div class="box bg-success">		
						<div class="box-body">
							<div class="p-15 text-center">
							  <div class="vertical-align-middle">
								<div class="font-size-40">
								  1
								  <span class="font-size-30"></span>
								</div>
								<div class="font-size-20">Errors</div>
							  </div>
							</div>
						</div>
						<!-- /.box-body -->		
					  </div>
					<!-- /.box -->
                </div>
                <div class="col-xl-3 col-md-6 col-12">
					<!-- Default box -->
					<div class="box bg-success">		
						<div class="box-body">
							<div class="p-15 text-center">
							  <div class="vertical-align-middle">
								<div class="font-size-40">
								  0
								  <span class="font-size-30"></span>
								</div>
								<div class="font-size-20">Finished</div>
							  </div>
							</div>
						</div>
						<!-- /.box-body -->		
					</div>
					<!-- /.box -->
                </div>
            </div>
        </div>
        <div class="box-body">
            <div class="chart">
                <canvas id="mychart" width="80" height="40"></canvas>
            </div>
        </div>
    <!-- /.box-body -->
    </div>
</section>

<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
</div>
    
@endsection