
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
                    <h4 class="mb-0"> <span style="color: #4db2ec;">{{ $Serch_asset[0]['asset'] }}</span> - Search Result </h4>
                  </div>

                  <div class="card-content">
                    <div class="table-responsive mt-1">
                      <table class="table table-hover-animation mb-0 myTable">
                        <thead>
                          <tr>  
                            <th>S.N.</th>
                            <th>NAME</th>
                            <th>Mobile</th>
                            <th>Location</th>
                            <th>Subject</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th>Resolved</th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach($complains as $complain)
                          <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $complain->name }}</td>
                            <td>{{ $complain->mobile }}</td>

                            <td>{{ $complain->sub_location }}</td>

                            <td><a href="{{ route('complain.single', $complain->id) }}">{{ $complain->subject }}</a></td>


                            <td>
                              @if($complain->status=='Success')
                              <strong><p style="color:#00ff25;">{{ $complain->status }}</p></strong>
                              @elseif($complain->status=='Incomplete')
                              <strong><p style="color:#eb9800;">{{ $complain->status }}</p></strong>
                              @else
                              <strong><p style="color:#ff2500;">{{ $complain->status }}</p></strong>
                              @endif
                            </td>



                            <td style="width: 15%;">{{ date('d-m-Y', strtotime($complain->created_at)) }}</td>
                            <td style="width: 15%;">
                               @if( date('d-m-Y', strtotime($complain->resolutions['created_at'])) == '01-01-1970')
                                  00-00-0000
                                @else
                                  {{ date('d-m-Y', strtotime($complain->resolutions['created_at'])) }}
                                @endif
                            </td>
                           
                              
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

<style>
table {

    display: block;
}

thead, tbody {
    display: block;
}
tbody {
    position: absolute;
    height: 350px;
    overflow-y: scroll;
}
td, th {
    min-width: 120px !important;
    height: 25px !important;
    overflow:hidden !important;
    text-overflow: ellipsis !important;
    max-width: 100px !important;
}
</style>
@endsection

