@extends('layouts.app')

@section('title')
    <h1>Settings</h1>
@endsection

@section('content')
    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
    </div>
    
    <section class="content">
    <!-- row -->
        <div class="col-12">
            <div class="box content"><br><br>
                <form action="#" method="POST">
                    <div class="form-group row">
                        <div class="col-1"></div>
                        <label for="recupient-input" class="col-xl-2 col-md-2 col-4 col-form-label">Contractual partner</label>
                        <div class="col-xl-4 col-md-4 col-6">
                            <div class="form-group">
                                <select class="form-control select2"  style="width: 100%;">
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
                        <div class="col-1"></div>
                        <label for="recupient-input" class="col-xl-2 col-md-2 col-4 col-form-label">Client</label>
                        <div class="col-xl-4 col-md-4 col-6">
                            <div class="form-group">
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Select</option>
                                    <option>7 Days</option>
                                    <option>14 Days</option>
                                    <option>30 Days</option>
                                </select>
                            </div>
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        <div class="col-1"></div>
                        <label for="recupient-input" class="col-xl-2 col-md-2 col-4 col-form-label">Dashboard default time range</label>
                        <div class="col-xl-4 col-md-4 col-6">
                            <div class="form-group">
                                <select class="form-control select2"  style="width: 100%;">
                                <option selected="selected">Select</option>
                                    <option>7 Days</option>
                                    <option>14 Days</option>
                                    <option>30 Days</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-1"></div>
                        <label for="recupient-input" class="col-xl-2 col-md-2 col-4 col-form-label">Starting page</label>
                        <div class="col-xl-4 col-md-4 col-6">
                            <div class="form-group">
                                <select class="form-control select2"  style="width: 100%;">
                                    <option selected="selected">Select</option>
                                    <option>Dashboard</option>
                                    <option>Batches</option>
                                    <option>Single SMS</option>
                                    <option>Templates</option>
                                    <option>Settings</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-3 col-md-3 col-3"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" class="btn btn-success col-xl-2 col-md-2 col-3">Sent</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="button" class="btn btn-warning col-xl-2 col-md-2 col-3">Clear</button>
                    </div><br><br><br>
                </form>
            </div>
        </div>
    </section>
    
@endsection


