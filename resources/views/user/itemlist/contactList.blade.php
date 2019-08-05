@extends('user.layouts.app')

@section('title')
    <h1>Lista de contactos</h1>
@endsection

@section('content')

    <div class="row">

         <div class="col-xl-4 col-md-6 col-12 ">
          	<div class="box box-body">
                <a href="{{ url('/user/getlist') }}">
                    <div class="font-size-18 flexbox align-items-center">
                        <span><i class="fas fa-chevron-left"></i></span>
                        <span>Regresar</span>
                    </div>
                    <div class="progress progress-xxs mt-10 mb-0">
                        <div class="progress-bar" role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 col-12 ">
          	<div class="box box-body">
                <a href="#">
                    <div class="font-size-18 flexbox align-items-center">
                        <!-- <span><i class="fas fa-user"></i></span> -->
                        <span>{{ count($items) }} </span>
                        <span>Usuarios</span>
                    </div>
                    <div class="progress progress-xxs mt-10 mb-0">
                        <div class="progress-bar" role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </a>
            </div>
        </div>

        <!-- <div class="col-xl-4 col-md-6 col-12 ">
          	<div class="box box-body">
                <a href="#">
                    <div class="font-size-18 flexbox align-items-center">
                        <span><i class="fas fa-user-plus"></i></span>
                        <span>Agregar Usuarios</span>
                    </div>
                    <div class="progress progress-xxs mt-10 mb-0 contact-menu">
                        <div class="progress-bar" role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </a>
            </div>
        </div> -->

        

    </div>

    <div class="row">
        


    @if (count($items) >= 1)
            @foreach ($items as $item)

                <div class="col-md-6 col-lg-3">
                    <div class="box box-body box-hover-shadow" href="#">
                        <div class="flexbox align-items-center">
                            <form action="{{ url('/user/deleteitem/' . $item->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger mx-5" id="sa-warning" onclick="deleteElement()"><i class="fa fa-remove" aria-hidden="true"></i></button> 
                            </form>
                            <span class="ion ion-ios-person font-size-50"></span>
                            <div class="text-right">
                                <h6 class="mb-0">{{ $item->name }}</h6>
                                <small>{{ $item->number }}</small>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        @else

            <div class="col-md-6 col-lg-3">
                <a class="box box-body box-hover-shadow" href="#">
                    <div class="flexbox align-items-center">
                        <span class="fa fa-grav font-size-50"></span>
                        <div class="text-right">
                            <h6 class="mb-0">Sin Contactos</h6>
                            <small></small>
                        </div>
                    </div>
                </a>
            </div>

        @endif
        
    </div>
    

@endsection