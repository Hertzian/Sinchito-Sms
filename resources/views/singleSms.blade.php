@extends('layouts.app')

@section('title')
    <h1>Single Sms</h1>
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
    <div class="row">
        <div class="col-12">
            <div class="box content"><br><br>
                <form action="#" method="POST">
                    <div class="form-group row">
                        <div class="col-1"></div>
                        <label for="recupient-input" class="col-xl-2 col-md-2 col-4 col-form-label">Client*</label>
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
                        <label for="recupient-input" class="col-xl-2 col-md-2 col-4 col-form-label">Delivery account*</label>
                        <div class="col-xl-4 col-md-4 col-6">
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
                        <div class="col-1"></div>
                        <label for="recupient-input" class="col-xl-2 col-md-2 col-4 col-form-label">Recipient*</label>
                        <div class="col-xl-4 col-md-4 col-6">
                        <input class="form-control" type="text" value="" placeholder="" required id="recupient-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-1"></div>
                        <label for="originator-input" class="col-xl-2 col-md-2 col-4 col-form-label">Originator*</label>
                        <div class="col-xl-4 col-md-4 col-6">
                            <input class="form-control" type="text" value="" placeholder="" required id="originator-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-1"></div>
                            <label for="" class="col-xl-2 col-md-2 col-4 col-form-label">Message encoding*</label>
                            <div class="col-xl-4 col-md-4 col-6">
                                <input name="optradio" type="radio" id="latin-alphabet" />
                                <label for="latin-alphabet" class="col-form-label">Latin alphabet(GSM-7)</label>
                                <input name="optradio" type="radio" id="other-alphabet" />
                                <label for="other-alphabet" class="col-form-label" checked>Other alphabets(UCS-2)</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-1"></div>
                            <label for="text-message" class="col-xl-2 col-md-2 col-4 col-form-label">Text</label>
                            <div class="col-xl-4 col-md-4 col-6">
                                <textarea class="form-control" rows="6" placeholder="Enter ..." required id="text-message" onkeyup="valTextMessage(this);"></textarea><br>
                                <p id="letters">Message parts: 1, Characters: 0 </p>
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
        </div>
    </section>
    
@endsection