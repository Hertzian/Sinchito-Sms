@extends('layouts.app')

@section('title')
  <h1>My Profile</h1>
@endsection

@section('content')
  <div class="box box-body ">
    <form action="#" class="form-element">
      <div class="row">
        <div class="col-md-4 info-box-content text-center">
          <span class="info-box-number"></span>
          <span class="info-box-text">First Name</span>
        </div>
        <div class="col-md-4 info-box-content text-center">
          <span class="info-box-number"></span>
          <span class="info-box-text">Last Name</span>
        </div>
        <div class="col-md-4 info-box-content text-center">
          <span class="info-box-number"></span>
          <span class="info-box-text">Email address</span>
        </div>
        <div class="col-md-4 info-box-content text-center">
          <span class="info-box-number"></span>
          <span class="info-box-text">Phone number</span>
        </div>
        <div class="col-md-4 info-box-content text-center">
          <span class="info-box-number"></span>
          <span class="info-box-text">Country</span>
        </div>
        <div class="col-md-4 info-box-content text-center">
          <span class="info-box-number"></span>
          <span class="info-box-text">State</span>
        </div>
        <div class="col-md-4 info-box-content text-center">
          <span class="info-box-number"></span>
          <span class="info-box-text">City</span>
        </div>
        <div class="col-md-4 info-box-content text-center">
          <span class="info-box-number"></span>
          <span class="info-box-text">Address</span>
        </div>
      </div>
    </form>
    <form action="#" class="form-element">
      <div class="row">
        <div class="col-md-12">
          <h3>Change you'r password</h3>
        </div>
        <div class="col-md-4 info-box-content text-center">
          <span class="info-box-number">
            <input class="form-control" type="password" value="Johen Doe" id="example-text-input">
          </span>
          <span class="info-box-text">Type you'r Password </span>
        </div>
        <div class="col-md-4 info-box-content text-center">
          <span class="info-box-number">
            <input class="form-control" type="password" value="Johen Doe" id="example-text-input">
          </span>
          <span class="info-box-text">Type you'r new Password </span>
        </div>
        <div class="col-md-4 info-box-content text-center">
          <span class="info-box-number">
            <input class="form-control" type="password" value="Johen Doe" id="example-text-input">
          </span>
          <span class="info-box-text">Reype you'r new Password </span>
        </div>        
        <div class="col-md-4 info-box-content text-center"></div>
        
        <div class="col-6">
      	  <div class="form-group row">
	  		    <label for="example-text-input" class="col-sm-4 col-form-label">Type you'r old Password </label>
	  	      <div class="col-sm-8">
				      <input class="form-control" type="password" value="Johen Doe" id="example-text-input">
				    </div>
          </div>
        </div>
        <div class="col-6">
      	  <div class="form-group row">
	  		    <label for="example-text-input" class="col-sm-4 col-form-label">Type you'r old Password </label>
	  	      <div class="col-sm-8">
				      <input class="form-control" type="password" value="Johen Doe" id="example-text-input">
				    </div>
          </div>
        </div>
        <div class="col-6">
      	  <div class="form-group row">
	  		    <label for="example-text-input" class="col-sm-4 col-form-label">Retype you'r new password </label>
	  	      <div class="col-sm-8">
				      <input class="form-control" type="password" value="Exapmle" id="example-text-input">
				    </div>
          </div>
        </div>
        <div class="alert alert-warning col-md-10 hide" role="alert" id="alert">
          <p>
            The password must have a minimum of 8 characters and at least one upper case letter
          </p> 
        </div>
        <div class="col-md-3">
          <button type="submit" disabled class="btn btn-block btn-warning" id="change-pass">Change Password</button>
        </div>               
      </div>
    </form>
  </div>

  <div class="card-body">
      @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
      @endif
  </div>
    
@endsection