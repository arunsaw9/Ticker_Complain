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
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="mb-0">Search Result</h4>
                  </div>

                  <div class="card-content">
                    <div class="table-responsive mt-1">
                      <table class="table table-hover-animation mb-0">
                        <thead>
                          <tr>  
                            <th>S.N.</th>
                            <th>NAME</th>
                            <th>Mobile</th>
                            <th>Asset</th>
                            <th>Location</th>
                            <th>Subject</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($complains as $complain)
                          <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $complain->name }}</td>
                            <td>{{ $complain->mobile }}</td>

                            <td>{{ $complain->assets->asset }}</td>
                            <td>{{ $complain->sub_location }}</td>

                            <td><a href="{{ route('complain.single', $complain->id) }}">{{ $complain->subject }}</a></td>
                            <td>{{ $complain->status }}</td>
                            <td style="width: 15%;">{{ date('d-m-Y', strtotime($complain->created_at)) }}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
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

