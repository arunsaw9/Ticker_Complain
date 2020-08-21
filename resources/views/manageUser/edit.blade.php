
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
              <div class="row match-height">
                  
                  <div class="col-md-10 col-12 offset-1">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title">Update User</h4>
                          </div>
                          
                          <div class="card-content">
                              <div class="card-body">
                                @include('includes.messages')
                                  <form class="form form-horizontal" action="{{ route('registration.update', $update->id) }}" method="post">
                                    @csrf
                                    {{ method_field('PUT') }}
                                      <div class="form-body">
                                          <div class="row">
                                              <div class=" col-12">
                                                  <div class="form-group row">
                                                      <div class="col-md-4">
                                                      <span>Name</span>
                                                    </div>
                                                      <div class="col-md-8">
                                                          <div class="position-relative has-icon-left">
                                                              <input type="text" id="fname-icon" class="form-control" name="name" value="{{$update->name }}">
                                                              <div class="form-control-position" style="margin-top: 2.3%;">
                                                             <i class="feather icon-user"></i>
                                                        </div>
                                                      </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-12">
                                                  <div class="form-group row">
                                                      <div class="col-md-4">
                                                          <span>Email</span>
                                                        </div>
                                                      <div class="col-md-8">
                                                          <div class="position-relative has-icon-left">
                                                            <input type="email" id="fname-icon" class="form-control" name="email" value="{{$update->email }}">
                                                              <div class="form-control-position" style="margin-top: 2.3%;">
                                                                <i class="feather icon-mail"></i>
                                                            </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>

                                              <div class="col-12">
                                                  <div class="form-group row">
                                                      <div class="col-md-4">
                                                          <span>CPF No</span>
                                                        </div>
                                                      <div class="col-md-8">
                                                          <div class="position-relative has-icon-left">
                                                            <input type="text" id="fname-icon" class="form-control" name="CPF_No" value="{{$update->cpf_no }}">
                                                              <div class="form-control-position" style="margin-top: 2.3%;">
                                                                {{-- <i class="feather icon-mail"></i> --}}
                                                            </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>

                                              <div class="col-12">
                                                  <div class="form-group row">
                                                      <div class="col-md-4">
                                                          <span>Select Role</span>
                                                        </div>
                                                      <div class="col-md-8">
                                                          <div class="position-relative has-icon-left">
                                                              <select name="role" class="custom-select" id="customSelect">
                                                                  <option selected="">Select One</option>
                                                                  <option value="Admin">Admin</option>
                                                                  <option value="User">User</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>

                                              
                                            <div class="col-md-8 offset-md-4">
                                                  <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                              </div>
                                          </div>
                                      </div>
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

