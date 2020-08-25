@extends('frontLayout.app')

@section('headSection')
    <link rel="stylesheet" type="text/css" href="{{ ('dataTables/css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ ('dataTables/css/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ ('dataTables/css/responsive.bootstrap4.min.css') }}" />
@endsection

@section('main-content')

<section id="contact" class="contact-area pt-120 pb-120">
    <div class="container">
    	<div class="row">
    	  <div class="col-md-12 col-sm-12"> 
			<div class="card">
				<div class="card-header">
					Search Complain Status
				</div>
	    	    <div class="card-body">
					<form action="#" method="post">
						<select name="" class="status_select" id="assets">
							<option hidden>Select Assets</option>
							@foreach($assets as $asset)
							<option value="{{ $asset->id }}">{{ $asset->asset }}</option>	
							@endforeach
						</select>

						<select name="" class="status_select" id="services" disabled>
							<option hidden> Select Services</option>
						</select>

						<select name="" class="status_select" id="location" disabled>
							<option >Select Location</option>

						</select>

						{{-- <button type="button" id="search" class="btn btn-outline-primary" disabled style="padding: 5px 15px 5px 15px;margin-left: 10px;">Search</button> --}}
					</form>
    	        </div>
    
    	    </div>
    	</div>
	</div>

    </div> <!-- container -->

    <div class="container">
		<br><br>
        <div class="row">

            <div class="col-md-12">

                <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Services</th>
                            <th>Location</th>
                            <th>Sub Location</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                </table>

            </div>
        </div>
    </div>

</section>

@endsection



@section('footerSection')
	<script language="JavaScript" src="{{ ('dataTables/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
	<script language="JavaScript" src="{{ ('dataTables/js/dataTables.bootstrap4.min.js') }}" type="text/javascript"></script>
	<script language="JavaScript" src="{{ ('dataTables/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
	<script language="JavaScript" src="{{ ('dataTables/js/responsive.bootstrap4.min.js') }}" type="text/javascript"></script>
@endsection
