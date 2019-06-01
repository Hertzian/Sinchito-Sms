@extends('layouts.app')

@section('title')
    <h1>My Contacts</h1>
@endsection

@section('content')

    </section>
    <!-- Main content -->
    <section class="content">
      <!-- row -->
      <div class="row">
        <!-- ./col -->
        <div class="col-xl-4 col-md-6 col-12">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>3</h3>
              <p>Registrations</p>
            </div>
          <div class="icon">
            <i class="fa fa-address-book"></i>
          </div>
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#add-modal">Add to addressbook <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
              
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="add-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Address</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body ">
                <div class="row">
                  <div class="col-1"></div>
                  <h5 class="col-4">BASIC SETTINGS</h5>
                </div>
                <form action="" method="" class="">
                  <div class="form-group row">
                    <div class="col-2"></div>
                    <label for="recupient-input" class="col-xl-2 col-md-4 col-4 col-form-label">Scope</label>
                    <div class="col-xl-4 col-md-6 col-6">
                      <div class="form-group">
                        <select class="form-control select2" style="width: 100%;">
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
                      <label for="recupient-input" class="col-xl-2 col-md-4 col-4 col-form-label">Address book name*</label>
                      <div class="col-xl-4 col-md-6 col-6">
                        <input class="form-control" type="text" value="" placeholder="" id="recupient-input">
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-1"></div>
                    <h5 class="col-4">COLUMNS</h5>
                  </div>
                  <div class="form-group row">
                    <div class="col-2"></div>
                    <label for="recupient-input" class="col-xl-2 col-md-4 col-4 col-form-label">Name</label>
                    <div class="col-xl-4 col-md-6 col-6">
                        <label for="recupient-input" class="col-form-label">Column type</label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-2"></div>
                    <label for="recupient-input" class="col-xl-2 col-md-4 col-4 col-form-label">Name</label>
                    <div class="col-xl-4 col-md-6 col-6">
                      <div class="form-group">
                        <select class="form-control select2" disabled style="width: 100%;">
                          <option selected="selected">Text</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-2"></div>
                    <label for="recupient-input" class="col-xl-2 col-md-4 col-4 col-form-label">MSISDN</label>
                    <div class="col-xl-4 col-md-6 col-6">
                      <div class="form-group">
                        <select class="form-control select2" disabled style="width: 100%;">
                          <option selected="selected">Text</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-2"></div>
                    <a href="#">+ Add column</a>
                  </div>
                  <div class="row">
                    <div class="col-1"></div>
                    <h5 class="col-4">SUMMARY</h5>
                  </div>
                  <div class="row">
                    <div class="col-2"></div>
                    <h5 class="col-xl-4 col-md-6 col-6">BASIC SETTINGS</h5>
                  </div>
                  <div class="form-group row">
                    <div class="col-2"></div>
                    <label for="recupient-input" class="col-xl-2 col-md-4 col-4 col-form-label">Scope</label>
                    <div class="col-xl-4 col-md-4 col-4">
                      <p>info</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-2"></div>
                    <label for="recupient-input" class="col-xl-2 col-md-4 col-4 col-form-label">Address book name</label>
                    <div class="col-xl-4 col-md-4 col-4">
                      <p>info</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-2"></div>
                    <label for="recupient-input" class="col-xl-2 col-md-4 col-4 col-form-label">Enable SMS subscription</label>
                    <div class="col-xl-4 col-md-4 col-4">
                      <p>info</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-2"></div>
                    <h5 class="col-xl-4 col-md-6 col-6">Columns</h5>
                  </div>
                  <div class="form-group row">
                    <div class="col-2"></div>
                    <div class="col-xl-4 col-md-4 col-4">
                      <label for="recupient-input" class="col-form-label">Column name</label>
                    </div>
                    <div class="col-xl-4 col-md-4 col-4">
                      <label for="recupient-input" class="col-form-label">Column type</label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-2"></div>
                    <p class="col-xl-4 col-md-4 col-4 col-form-label">Name</p>
                    <p class="col-xl-4 col-md-4 col-4 col-form-label">Text</p>
                  </div>
                  <div class="form-group row">
                    <div class="col-2"></div>
                    <p class="col-xl-4 col-md-4 col-4 col-form-label">Name</p>
                    <p class="col-xl-4 col-md-4 col-4 col-form-label">Text</p>
                  </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default "  data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info float-right" onclick="ok()">Save changes</button>
                </div>
            </form>
            </div>
          <!-- /.modal-content -->
          </div>
        <!-- /.modal-dialog -->
        </div>
      <!-- /.modal -->

      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="edit-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myLargeModalLabel">Add modal</h4>
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
      </div>

      <div class="row">
        <div class="col-xl-4 col-lg-6 col-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-success">
              <div class="widget-user-image">
                <img class="rounded-circle" src="../images/user7-128x128.jpg" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
                <h3 class="widget-user-username">Amanda Clark </h3>
                <h6 class="widget-user-desc">Developer</h6>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav d-block nav-stacked">
                <li class="nav-item"><a href="#" class="nav-link">Entries: <span class="pull-right badge bg-info">1310</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link">Columns: <span class="pull-right badge bg-success">120</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link">Saved filters: <span class="pull-right badge bg-warning">8K</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link">Related batches: <span class="pull-right badge bg-danger">58</span></a></li>
                <li class="nav-item"><a href="#edit-modal" class="nav-link" data-target="#edit-modal" data-toggle="modal">Edit <span class="pull-right badge bg-info"><i class="fa fa-pencil" aria-hidden="true"></i></span></a></li>
                <li class="nav-item"><a href="#" class="nav-link" onclick="deleteElement()">Delete <span class="pull-right badge bg-danger"><i class="fa fa-remove" aria-hidden="true"></i></span></a></li>
              </ul>
            </div>
          </div>
        <!-- /.widget-user -->
        </div>
  
        <div class="col-xl-4 col-lg-6 col-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-success">
              <div class="widget-user-image">
                <img class="rounded-circle" src="../../images/user7-128x128.jpg" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
                <h3 class="widget-user-username">Amanda Clark </h3>
                <h6 class="widget-user-desc">Developer</h6>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav d-block nav-stacked">
                <li class="nav-item"><a href="#" class="nav-link">Entries: <span class="pull-right badge bg-info">1310</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link">Columns: <span class="pull-right badge bg-success">120</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link">Saved filters: <span class="pull-right badge bg-warning">8K</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link">Related batches: <span class="pull-right badge bg-danger">58</span></a></li>
                <li class="nav-item"><a href="#edit-modal" class="nav-link" data-target="#edit-modal" data-toggle="modal">Edit <span class="pull-right badge bg-info"><i class="fa fa-pencil" aria-hidden="true"></i></span></a></li>
                <li class="nav-item"><a href="#" class="nav-link" onclick="deleteElement()">Delete <span class="pull-right badge bg-danger"><i class="fa fa-remove" aria-hidden="true"></i></span></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
  
        <div class="col-xl-4 col-lg-6 col-12">
        <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
          <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-success">
              <div class="widget-user-image">
                <img class="rounded-circle" src="../../images/user7-128x128.jpg" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Amanda Clark </h3>
              <h6 class="widget-user-desc">Developer</h6>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav d-block nav-stacked">
                <li class="nav-item"><a href="#" class="nav-link">Entries: <span class="pull-right badge bg-info">1310</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link">Columns: <span class="pull-right badge bg-success">120</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link">Saved filters: <span class="pull-right badge bg-warning">8K</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link">Related batches: <span class="pull-right badge bg-danger">58</span></a></li>
                <li class="nav-item"><a href="#edit-modal" class="nav-link" data-target="#edit-modal" data-toggle="modal">Edit <span class="pull-right badge bg-info"><i class="fa fa-pencil" aria-hidden="true"></i></span></a></li>
                <li class="nav-item"><a href="#" class="nav-link" onclick="deleteElement()">Delete <span class="pull-right badge bg-danger"><i class="fa fa-remove" aria-hidden="true"></i></span></a></li>
                  </ul>
            </div>
          </div>
        <!-- /.widget-user -->
        </div>
      </div>
    </section>

@endsection