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

                    <h4 class="mb-0">Kpi Information</h4>
                    <h4 class="mb-0"><a href="{{ route('registration.create') }}" class="btn btn-primary mr-1 mb-1">Create</a></h4>
                  </div>
                  <div class="card-content">
                    <div class="table-responsive mt-1">
                      <table class="table table-hover-animation mb-0">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>Email</th>
                            <th>CPF No</th>
                            <th>Update</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($users as $user)
                          <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td><a href="{{ route('registration.show',$user->id) }}">{{$user->name}}</a>
                            </td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->cpf_no }}</td>
                            <td><a href="{{ route('registration.edit',$user->id) }}" class="btn btn-outline-primary mr-1">
                              <i class="ficon feather icon-edit-2"></i></a></td>
                            <td>
                              <form id="delete-form-{{ $user->id }}" method="post" action="{{ route('registration.destroy',$user->id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                              </form>
                              <a href="" class="btn btn-outline-warning mr-1 " onclick="
                              if(confirm('Are you sure, You Want to delete this?'))
                                  {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $user->id }}').submit();
                                  }
                                  else{
                                    event.preventDefault();
                                  }" ><i class="ficon feather icon-trash"></i></a>
                            </td>
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

