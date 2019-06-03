@extends('layouts.app')

@section('title')
  <h1>Batches/Listas de contactos</h1>
@endsection

@section('content')

        <!-- Main content -->
        <section class="content">
      <!-- row -->
      <div class="row">
        <!-- ./col -->
        <div class="col-xl-4 col-md-6 col-12">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>78</h3>
              <p>Registrations</p>
            </div>
              <div class="icon">
                <i class="fa fa-envelope"></i>
              </div>
              <a href="#add-modal-sms" class="small-box-footer" data-target="#add-modal-sms" data-toggle="modal">Add <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="add-modal-sms" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Add modal</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body ">
                <form action="" method="post">
                  <div class="row">
                    <div class="col-1"></div>
                    <h5 class="col-4">BASIC CONFIGURATION</h5>
                  </div>
                  <div class="row">
                      <div class="col-2"></div>
                      <label for="clientSelect" class="col-xl-3 col-md-4 col-4 col-form-label">Client*</label>
                      <div class="col-xl-4 col-md-6 col-6">
                        <div class="form-group">
                          <select class="form-control select2" id="clientSelect" style="width: 100%;">
                            <option selected="selected">Select</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-2"></div>
                      <label for="delivery-account" class="col-xl-3 col-md-4 col-4 col-form-label">Delivery account*</label>
                      <div class="col-xl-4 col-md-6 col-6">
                        <div class="form-group">
                          <select class="form-control select2" id="delivery-account" style="width: 100%;">
                            <option selected="selected">Select</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-2"></div>
                      <label for="recupient-input" class="col-xl-3 col-md-4 col-4 col-form-label">Batch name*</label>
                      <div class="col-xl-4 col-md-6 col-6">
                        <input class="form-control" type="text" value="" placeholder="" required id="recupient-input">
                      </div>
                    </div>  
                    <div class="row">
                      <div class="col-1"></div>
                      <h5 class="col-4">INPUT DATA CONFIGURATION</h5>
                    </div>
                    <div class="row">
                      <div class="col-2"></div>
                      <label for="source" class="col-xl-3 col-md-4 col-4 col-form-label">Source*</label>
                      <div class="col-xl-4 col-md-6 col-6">
                        <div class="form-group">
                          <select class="form-control select2" id="source" style="width: 100%;">
                            <option selected="selected">Select</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-2"></div>
                      <label for="format" class="col-xl-3 col-md-4 col-4 col-form-label">Choose format*</label>
                      <div class="col-xl-4 col-md-6 col-6">
                        <div class="form-group">
                          <select class="form-control select2" id="format" style="width: 100%;">
                            <option selected="selected">Select</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-2"></div>
                      <label for="encoding" class="col-xl-3 col-md-4 col-4 col-form-label">Input file encoding*</label>
                      <div class="col-xl-4 col-md-6 col-6">
                        <div class="form-group">
                          <select class="form-control select2" id="encoding" style="width: 100%;">
                            <option selected="selected">Select</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-2"></div>
                      <label for="file" class="col-xl-3 col-md-4 col-4 col-form-label">File*</label>
                      <div class="col-xl-4 col-md-6 col-6">
                          <input type="file" name="file" class="form-control" id="file" required>
                      </div>
                    </div> 
                </form>     
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default "  data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info float-right" onclick="ok()">Save changes</button>
                </div>
            </div>
          <!-- /.modal-content -->
          </div>
        <!-- /.modal-dialog -->
        </div>
      <!-- /.modal -->
      </div>
      <!-- row -->
      <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-header with-border">
            <h3 class="box-title">Listas Contactos </h3>
          </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="table_sms" class="table table-bordered table-striped table-responsive">
            <thead>
              <tr>
                <th>Batch Name</th>
                {{-- <th>Client</th> --}}
                {{-- <th>Delivery Account</th> --}}
                <th>No. de contactos</th>
                {{-- <th>Start</th> --}}
                <th>Actions</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Batch Name</th>
                {{-- <th>Client</th> --}}
                {{-- <th>Delivery Account</th> --}}
                <th>No. de contactos</th>
                {{-- <th>Start</th> --}}
                <th>Actions</th>
              </tr>
            </tfoot>
            <tbody>
              <tr>
                <td>Tiger Nixon</td>
                {{-- <td>System Architect</td> --}}
                {{-- <td>Edinburgh</td> --}}
                <td>61</td>
                {{-- <td>2011/04/25</td> --}}
                <td> 
                  <div class="btn-group">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit-modal-sms"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                    <button type="button" class="btn btn-success" id="sa-warning" onclick="deleteElement()"><i class="fa fa-remove" aria-hidden="true"></i></button>
                  </div>
                </td>
              </tr>              
            </tbody>
          </table>
        </div>

        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="edit-modal-sms" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Edit modal</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body ">
                <div class="row">
                  <div class="col-2"></div>
                  <div class="col-3"><h4>Something</h4></div>
                  <div class="col-4"><input class="form-control" type="text" placeholder="Default input"></div>
                </div><br>
                <div class="row">
                  <div class="col-2"></div>
                  <div class="col-3"><h4>Something</h4></div>
                  <div class="col-4"><input class="form-control" type="text" placeholder="Default input"></div>
                </div>      
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default "  data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info float-right" onclick="ok()">Save changes</button>
                </div>
            </div>
          <!-- /.modal-content -->
          </div>
        <!-- /.modal-dialog -->
        </div>
      <!-- /.modal -->


    </section>
    <!-- /.content -->

    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
    </div>
    
@endsection