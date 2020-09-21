@extends('layouts.myapp')

@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
          
          <section id="basic-horizontal-layouts">
          	@include('includes.messages')
          	<div class="row">
          		

          	    	<div class="col"><img src="{{ asset('images/change_pass.png') }}" width="450" height="450" class="Avatar" ></div>
          	    	<div class="col">

          	    	<form class="login100-form validate-form" method="post" action="{{ route('store.password') }}">
          	    		@csrf
  	    		 		<br> <br> <br>
  						<h3 align="center">Change Password</h3> <br>	
  						<div class="container">
  							<i class="fa fa-key"></i>
  							<label for="">New Password</label>
  							<input type="password" class="form-control" id="password" name="New_password" required>
  							<br>
  							<i class="fa fa-key"></i>
  							<label for="">Confirm Password</label>
  							<input type="password" class="form-control" id="confirm_password" name="Confirm_password" required>
  							<span id='message'></span>
  						</div>
  						<br>
  						<div class="col">
  							<button class="btn btn-success btn-lg btn-block">
  								Submit
  							</button>
  						</div>

          			</form>
          			</div>
          	 	</div>
          </section>

        </div>
      </div>
    </div>
    <!-- END: Content-->


@endsection
@section('footerSection')
<script>
	$('#password, #confirm_password').on('keyup', function () {
	  if ($('#password').val() == $('#confirm_password').val()) {
	    $('#message').html('Matching').css('color', 'green');
	  } else 
	    $('#message').html('Not Matching').css('color', 'red');
	});
</script>
@endsection




