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

                    <h4 class="mb-0">Complains</h4>

                    <form action="{{ route('complain.search') }}" method="post" novalidate="novalidate">
                      @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 {{ $errors->has('name') ? 'has-error' : ''}}">
                                        <select name="asset" class="form-control" id="assets" required>
                                          <option value="" hidden>Select Assets</option>
                                          @foreach($Assets as $asset)
                                            <option value="{{ $asset->id }}">{{ $asset->asset }}</option> 
                                          @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                                        <button type="submit" class="btn btn-danger wrn-btn">Search</button>
                                    </div>
                                    {!! $errors->first('asset', '<p class="help-block" style="color: red;">:message</p>') !!}
                                </div>
                            </div>
                        </div>
                    </form>
                  </div>



                  <div class="card-content">
                    <div class="table-responsive mt-1">
                      <table class="table table-hover-animation mb-0">
                        <thead>
                          <tr>
                            {{-- <th>S.N.</th> --}}
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
                           {{--  <td>{{ $loop->index + 1 }}</td> --}}
                            <td>{{ $complain->name }}</td>
                            <td>{{ $complain->mobile }}</td>

                            <td>{{ $complain->assets->asset }}</td>
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
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </section>
          <div class="d-flex justify-content-center">
              {!! $complains->links() !!}
          </div>
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

