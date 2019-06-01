@extends('layouts.app')

@section('title')
    <h1>Template</h1>
@endsection

@section('content')
    
        <!-- Main content -->
        <section class="content">
      <!-- row -->
      <div class="row">
        <!-- ./col -->
        <div class="col-xl-4 col-md-12 col-12">
          <!-- small box -->
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
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="add-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">New template</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body ">
                <form action="" method="post" class="">
                  <div class="row">
                    <div class="col-1"></div>
                    <h5 class="col-xl-4 col-md-6 col-6">SCOPE</h5>
                  </div>
                  <div class="row">
                    <div class="col-2"></div>
                    <label for="contractual-partner" class="col-3 col-form-label">Contractual partner</label>
                    <div class="col-xl-4 col-md-6 col-6">
                        <div class="form-group">
                            <select class="form-control select2" style="width: 100%;" id="contractual-partner">
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
                    <label for="recupient-input" class="col-3 col-form-label">Client</label>
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
                  <div class="row">
                      <div class="col-1"></div>
                      <h5 class="col-4">GENERAL</h5>
                  </div>
                  <div class="form-group row">
                    <div class="col-2"></div>
                    <label for="recupient-input" class="col-3 col-form-label">Template name*</label>
                    <div class="col-xl-4 col-md-6 col-6">
                    <input class="form-control" type="text" value="" placeholder="" required id="recupient-input">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-1"></div>
                    <h5 class="col-4">MESSAGE</h5>
                  </div>
                  <div class="form-group row">
                    <div class="col-xl-4 col-md-2 col-2"></div>
                    <label for="recupient-input" class="col-3 col-form-label">Originator</label>
                    <div class="col-xl-4 col-md-6 col-6">
                    <input class="form-control" type="text" value="" placeholder="" required id="recupient-input">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-2"></div>
                    <label for="" class="col-xl-3 col-md-3 col-3 col-form-label">Message encoding*</label>
                    <div class="col-xl-4 col-md-6 col-6">
                        <input name="optradio" type="radio" id="latin-alphabet" />
                        <label for="latin-alphabet" class="col-form-label">Latin alphabet(GSM-7)</label>
                        <input name="optradio" type="radio" id="other-alphabet" />
                        <label for="other-alphabet" class="col-form-label" checked>Other alphabets(UCS-2)</label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-2"></div>
                    <label for="text-message" class="col-3 col-form-label">Text</label>
                    <div class="col-xl-4 col-md-6 col-6">
                        <textarea class="form-control" rows="5" placeholder="Enter ..." required id="text-message" onkeyup="valTextMessage(this);"></textarea><br>
                        <p id="letters">Message parts: 1, Characters: 0 </p>
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
            <h3 class="box-title">Data </h3>
          </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="table_template" class="table table-bordered table-striped table-responsive">
            <thead>
              <tr>
                <th>Template name</th>
                <th>Contractual partner</th>
                <th>Client</th>
                <th>Created</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Template name</th>
                <th>Contractual partner</th>
                <th>Client</th>
                <th>Created</th>
                <th>Actions</th>
              </tr>
            </tfoot>
            <tbody>
              <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td> 
                  <div class="btn-group">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit-modal"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                    <button type="button" class="btn btn-success" id="sa-warning" onclick="deleteElement()"><i class="fa fa-remove" aria-hidden="true"></i></button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td> 
                  <div class="btn-group">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit-modal"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                    <button type="button" class="btn btn-success" id="sa-warning" onclick="deleteElement()" ><i class="fa fa-remove" aria-hidden="true"></i></button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="edit-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">New template</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body ">
                <form action="" method="post" class="">
                  <div class="row">
                    <div class="col-1"></div>
                    <h5 class="col-4">SCOPE</h5>
                  </div>
                  <div class="row">
                    <div class="col-2"></div>
                      <label for="contractual-partner" class="col-3 col-form-label">Contractual partner</label>
                      <div class="col-4">
                        <div class="form-group">
                          <select class="form-control select2" style="width: 100%;" id="contractual-partner">
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
                      <label for="recupient-input" class="col-3 col-form-label">Client</label>
                      <div class="col-4">
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
                    <div class="row">
                      <div class="col-1"></div>
                      <h5 class="col-4">GENERAL</h5>
                    </div>
                    <div class="form-group row">
                      <div class="col-2"></div>
                      <label for="recupient-input" class="col-3 col-form-label">Template name*</label>
                      <div class="col-4">
                      <input class="form-control" type="text" value="" placeholder="" required id="recupient-input">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-1"></div>
                      <h5 class="col-4">MESSAGE</h5>
                    </div>
                    <div class="form-group row">
                      <div class="col-2"></div>
                      <label for="recupient-input" class="col-3 col-form-label">Originator</label>
                      <div class="col-4">
                      <input class="form-control" type="text" value="" placeholder="" required id="recupient-input">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-2"></div>
                      <label for="" class="col-3 col-form-label">Message encoding*</label>
                      <div class="col-4">
                        <input name="optradio" type="radio" id="latin-alphabet" />
                        <label for="latin-alphabet" class="col-form-label">Latin alphabet(GSM-7)</label>
                        <input name="optradio" type="radio" id="other-alphabet" />
                        <label for="other-alphabet" class="col-form-label" checked>Other alphabets(UCS-2)</label>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-2"></div>
                      <label for="text-message" class="col-3 col-form-label">Text</label>
                      <div class="col-4">
                          <textarea class="form-control" rows="5" placeholder="Enter ..." required id="text-message" onkeyup="valTextMessage(this);"></textarea><br>
                          <p id="letters">Message parts: 1, Characters: 0 </p>
                      </div>
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
    </section>
    <!-- /.content -->

@endsection