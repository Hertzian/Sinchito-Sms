@extends('layouts.app')

@section('title')
    <h1>Template</h1>
@endsection

@section('content')
    
  <section class="content">
        
    <div class="row">

      <!-- Contenido agregar plantillas -->
      <div class="col-xl-4 col-md-12 col-12">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>0</h3>
            <p>Template</p>
          </div>
          <div class="icon">
            <i class="fa fa-window-maximize"></i>
          </div>
          <a href="#add-modal" class="small-box-footer" data-target="#add-modal" data-toggle="modal">Add template<i class="fa fa-arrow-right"></i></a>
        </div>
      </div>

    </div> 

    <div class="row">
    
      <div class="col-xl-6 col-md-6 col-6">
        <div class="media align-items-center py-30 bg-white">
          <span class="info-box-icon bg-info"><i class="fa fa-window-maximize font-size-40"></i></span>
          <div class="media-body">
            <span class="info-box-number">Template name</span>
            <p class="text-light font-size-12 my-3">Continually underwhelm stand-alone relationships via information. Dramatically productivate extensive process improvements for pandemic niches.</p>
            <div class="gap-items font-size-16">
              <a class="text-dark" href="#edit-modal" data-target="#edit-modal" data-toggle="modal"><i class="fa fa-pencil"></i></a>
              <a class="text-dark" href="#"><i class="fa fa fa-remove"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-6 col-md-6 col-6">
        <div class="media align-items-center py-30 bg-white">
          <span class="info-box-icon bg-info"><i class="fa fa-window-maximize font-size-40"></i></span>
          <div class="media-body">
            <span class="info-box-number">Template name</span>
            <p class="text-light font-size-12 my-3">Continually underwhelm stand-alone relationships via information. Dramatically productivate extensive process improvements for pandemic niches.</p>
            <div class="gap-items font-size-16">
              <a class="text-dark" href="#edit-modal" data-target="#edit-modal" data-toggle="modal"><i class="fa fa-pencil"></i></a>
              <a class="text-dark" href="#"><i class="fa fa fa-remove"></i></a>
            </div>
          </div>
        </div>
      </div>
    
    </div><br>

    <!-- Contanido tabla -->
    <div class="row">
      
      <div class="col-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Data </h3>
          </div>
          <div class="box-body">
            <table id="table_template" class="table table-bordered table-striped table-responsive">
              <thead>
                <tr>
                  <th>Template name</th>
                  <th>Countent</th>
                  <th>Created</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Template name</th>
                  <th>Countent</th>
                  <th>Created</th>
                  <th>Actions</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td> 
                    <div class="btn-group">
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit-modal" href="#edit-modal" ><i class="fa fa-pencil" aria-hidden="true"></i></button>
                      <button type="button" class="btn btn-success" id="sa-warning" onclick="deleteElement()"><i class="fa fa-remove" aria-hidden="true"></i></button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td> 
                    <div class="btn-group">
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit-modal" href="#edit-modal"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                      <button type="button" class="btn btn-success" id="sa-warning" onclick="deleteElement()" ><i class="fa fa-remove" aria-hidden="true"></i></button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>




    <!-- Contenido de Modal agregar plantilla  -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="add-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myLargeModalLabel">Agregar Pantilla</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body ">
            <form  action="{{ url('/newTemplate/') }}" method="post">
              @csrf
              <div class="form-group row">
                <div class="col-2"></div>
                <label for="recupient-input" class="col-3 col-form-label">Template name</label>
                <div class="col-xl-4 col-md-6 col-6">
                  <input type="text" style="display:none;" value="{{$account->id}}" id="id" required>
                  <input class="form-control" type="text" placeholder="" required id="name">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-2"></div>
                  <label for="text-message" class="col-3 col-form-label">Text</label>
                  <div class="col-xl-4 col-md-6 col-6">
                    <textarea class="form-control" rows="5" placeholder="Enter ..." required id="content" onkeyup="valTextMessage(this);"></textarea><br>
                    <p id="letters">Message, Characters: 0 </p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default "  data-dismiss="modal">Close</button>
                <button type="sutmit" class="btn btn-info float-right" onclick="ok()">Save template</button>
                <button type="button" class="btn btn-warning col-xl-2 col-md-2 col-3 float-right" onclick="limpiar_template();">Limpiar</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Contenido de Modal Editar plantilla  -->
      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="edit-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myLargeModalLabel">New template</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body ">
              <form action="" method="post" class="">
                <div class="form-group row">
                  <div class="col-2"></div>
                  <label for="recupient-input" class="col-3 col-form-label">Template name</label>
                  <div class="col-xl-4 col-md-6 col-6">
                    <input class="form-control" type="text" value="" placeholder="Template name" required id="temaplate-name">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-2"></div>
                    <label for="text-message" class="col-3 col-form-label">Text</label>
                    <div class="col-xl-4 col-md-6 col-6">
                      <textarea class="form-control" rows="5" placeholder="Enter ..." required id="texto_personalizado" onkeyup="valTextMessage(this);"></textarea><br>
                      <p id="letters">Message, Characters: 0 </p>
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default "  data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info float-right" onclick="ok()">Save template</button>
                <button type="button" class="btn btn-warning col-xl-2 col-md-2 col-3 float-right" onclick="limpiar_template();">Limpiar</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      

    
  </section>

@endsection