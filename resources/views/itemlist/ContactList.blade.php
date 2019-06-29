@extends('layouts.app')

@section('title')
    <h1>Lista de contactos</h1>
@endsection

@section('content')

    <div class="row">

       <div class="col-xl-4 col-md-6 col-12 ">
          	<div class="box box-body">
                <a href="{{ url('/getlist') }}">
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

        <div class="col-xl-4 col-md-6 col-12 ">
          	<div class="box box-body">
                <a href="#contact-modal" class="small-box-footer" data-target="#contact-modal" data-toggle="modal">
                    <div class="font-size-18 flexbox align-items-center">
                        <span><i class="fas fa-user-plus"></i></span>
                        <span>Agregar Usuarios</span>
                    </div>
                    <div class="progress progress-xxs mt-10 mb-0">
                        <div class="progress-bar" role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </a>
            </div>
        </div>          

    </div>

    <div class="row">
        


    @if (count($items) >= 1)
            @foreach ($items as $item)

                <div class="col-md-6 col-lg-3">
                    <a class="box box-body box-hover-shadow" href="#">
                        <div class="flexbox align-items-center">
                            <span class="ion ion-ios-person font-size-50"></span><br>
                            <div class="text-right">
                                <!-- <i class="fas fa-pencil-alt"></i><br> -->
                                <h6 class="mb-0">{{ $item->name }}</h6>
                                <small>{{ $item->number }}</small>
                            </div>
                        </div>
                    </a>
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

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="contact-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myLargeModalLabel">Add contact</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body ">                
              <form action="{{-- {{ url('/newitem/' . $account->id) }} --}}" method="post" class="">
                <!-- @csrf -->
                <div class="form-group row">
                  <div class="col-2"></div>
                  <label for="recupient-input" class="col-3 col-form-label">Batch name</label>
                  <div class="col-xl-4 col-md-6 col-6">                      
                    <select class="form-control" name="item_list_id" id="">
                      <option value="{{ $items }}">{{ $batches->id }}</option>                        
                      
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-2"></div>
                  <label for="recupient-input" class="col-3 col-form-label">Contact name</label>
                  <div class="col-xl-4 col-md-6 col-6">
                    <input class="form-control" type="text" name="name" placeholder="Contact name" required id="temaplate-name">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-2"></div>
                  <label for="recupient-input" class="col-3 col-form-label">Contact number</label>
                  <div class="col-xl-4 col-md-6 col-6">
                    <input class="form-control" type="text" name="number" placeholder="Contact number" required id="temaplate-name">
                  </div>
                </div>                  
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-default "  data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-info float-right" onclick="ok()">Add contact</button>
              </form>
              <button type="button" class="btn btn-warning col-xl-2 col-md-2 col-3 float-right" onclick="limpiar_template();">Limpiar</button>
            </div>
          </div>
        </div>
      </div>

    

@endsection