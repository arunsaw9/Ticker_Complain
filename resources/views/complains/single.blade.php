@extends('layouts.myapp')

<style>

</style>

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
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">

                    <h4 class="mb-0">Complain</h4>
                    <h4 class="mb-0"><a href="{{ route('home') }}" class="btn btn-primary mr-1 mb-1">Back</a></h4>
                  </div>
                  <div class="card-content">
                    <div class="table-responsive mt-1">
                      <table class="table table-hover-animation mb-0">
                        <thead>
                          <tr>
                            <th>NAME</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>CPF No</th>
                            <th>Asset</th>
                            <th>Services</th>
                            <th>sub_location</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{ $single->name }}</td>
                            <td>{{ $single->mobile }}</td>
                            <td>{{ $single->email }}</td>
                            <td>{{ $single->cpf_no }}</td>
                            <td>{{ $single->assets->asset }}</td>
                            <td>{{ $single->project_type }}</td>
                            <td>{{ $single->sub_location }}</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  
                  <!-- Card -->
                  <div >

                    

                    <!-- Card content -->
                    <div class="card-body pb-3">
                      <div class="card-block">
                          <div class="row">
                              <div class="col-md-4">
                                <h4 class="card-title font-weight-bold">Subject</h4>
                                <p class="card-text">{{ $single->subject }}</p>
                              </div>
                              <div class="col-md-4">
                                <h4 class="card-title font-weight-bold">Date</h4>
                                <p class="card-text">{{ date('d-m-Y', strtotime($single->created_at)) }}</p>
                              </div>
                              <div class="col-md-4">
                                <h4 class="card-title font-weight-bold">Status</h4>
                                <p class="card-text">{{ $single->status }}</p>
                              </div>
                          </div>
                      </div>
                      <br>
                      <h4 class="card-title font-weight-bold">Complain Description</h4>
                      <!-- Text -->
                      <p class="card-text">{{ $single->description }}</p>
                      
                      @if (count($errors) > 0)
                        @foreach ($errors->all() as $error)
                          <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                      @endif

                      @if (\Session::has('success'))
                          <div class="alert alert-success">
                              <ul>
                                  <li>{!! \Session::get('success') !!}</li>
                              </ul>
                          </div>
                      @endif

                      <hr>
                      <form action="{{ route('complain.resolution') }}" method="post">
                        @csrf
                        <h4 class="card-title font-weight-bold"> Resolution</h4>
                        <div class="form-group">
                            <textarea name="resolution" class="form-control rounded-0" rows="3" placeholder="Resolution"></textarea>
                        </div>
                        <label for="">Status</label>
                        <select id="" class="form-control" name="status">
                            <option value="" >Select Status</option>
                            <option value="Uncomplete" >Uncomplete</option>
                            <option value="Success" >Success</option>
                        </select> 

                        <input type="hidden" name="complain_id" value="{{ $single->id }}">


                        <br>
                        <h4 class="mb-0"> <button type="submit" class="btn btn-primary">Submit</button></h4>
                        
                      </form>
                      
                    </div>


                  </div>           
  
                </div>
              </div>


            </div>
          </section>

        </div>
      </div>
    </div>
    <!-- END: Content-->


@endsection

@section('footerSection')
<script src="{{ asset('app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/charts/chart-apex.min.js')}}"></script>
<script src="{{ asset('app-assets/js/dashboard.js')}}"></script>

@endsection
