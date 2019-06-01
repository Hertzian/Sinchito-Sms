@extends('layouts.app')

@section('title')
    <h1>My Profile</h1>
@endsection

@section('content')
    <p>El cotorreo que va en la seccion</p>

    <section class="content">  
      <!-- row -->
      <div class="content row">

        <div class="box-body ">
          <form action="#" class="form-element content">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="firstName">First Name :</label>
                  <input type="text" class="form-control" id="firstName" name="firstName"> 
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lastName">Last Name :</label>
                  <input type="text" class="form-control" id="lasttName" name="lasttName"> 
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="emailaddress">Email address :</label>
                  <input type="text" class="form-control" id="emailaddress" name="emailaddress" disabled> 
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="phoneNumber">Phone number :</label>
                  <input type="number" class="form-control" id="phoneNumber" name="phoneNumber"> 
                </div>
              </div>
              <div class="col-md-6">
							  <div class="form-group">
								  <label for="country">Select Country :</label>
								  <select class="custom-select form-control" id="country" name="country">
									  <option value="">Country</option>
  									<option value="Amsterdam">India</option>
	  								<option value="Berlin">USA</option>
		  							<option value="Frankfurt">Dubai</option>
			  					</select>
						  	</div>
					  	</div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="state">Select State :</label>
                    <select class="custom-select form-control" id="state" name="state">
                      <option value="">State</option>
                      <option value="Amsterdam">India</option>
                      <option value="Berlin">USA</option>
                      <option value="Frankfurt">Dubai</option>
                    </select>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="city">Select City :</label>
                    <select class="custom-select form-control" id="city" name="city">
                      <option value="">City</option>
                      <option value="Amsterdam">India</option>
                      <option value="Berlin">USA</option>
                      <option value="Frankfurt">Dubai</option>
                    </select>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="address">Address :</label>
                  <input type="text" class="form-control" id="address" name="address"> 
                </div>
              </div>
              <div class="col-md-9"></div>
              <div class="col-md-2">
                <button type="submit" class="btn btn-block btn-success">Update</button>
              </div>
            </div>
            </form>
            <form action="#" class="form-element content">
              <div class="row">
                <div class="col-md-12">
                  <h3>Change you'r password</h3>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="oldPass">Type you'r old Password :</label>
                    <input type="password" class="form-control" id="oldPass" name="oldPass" required> 
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="newpass">Type you'r new password :</label>
                    <input type="password" class="form-control" id="newpass" name="newpass" required onkeyup="valPass()" onfocus=""> 
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="rNewPass">Retype you'r new password :</label>
                    <input type="password" class="form-control" id="rNewPass" name="rNewPass" required onkeyup="" onfocus="valPass()"> 
                  </div>
                </div>
                <div class="alert alert-warning col-md-10 hide" role="alert" id="alert">
                  <p>
                    The password must have a minimum of 8 characters and at least one upper case letter
                  </p> 
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-9"></div>
                <div class="col-md-3">
                  <button type="submit" disabled class="btn btn-block btn-warning" id="change-pass">Change Password</button>
                </div>               
              </div>
            </form>
          </div>
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