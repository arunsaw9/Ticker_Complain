@extends('layouts.myapp')
@section('headSection')
@endsection
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

                    <h4 class="mb-0"></h4>
                    {{-- <h4 class="mb-0"><a href="{{ route('registration.create') }}" class="btn btn-primary mr-1 mb-1">Create</a></h4> --}}
                  </div>
                   <section class="row flexbox-container">
    <div class="col-xl-12 col-10 d-flex justify-content-center">
        <div class="card bg-authentication rounded-0 mb-0">
            <div class="row m-0">
                <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                    <img src="{{ asset('app-assets/images/pages/register.jpg') }}" alt="branding logo">
                </div>
                <div class="col-lg-6 col-12 p-0">
                    <div class="card rounded-0 mb-0 p-2">
                        <div class="card-header pt-50 pb-1">
                            <div class="card-title">
                                <h4 class="mb-0">Create Account</h4>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body pt-0">
                                <form method="POST" action="{{ route('registration.store') }}">
                                    @csrf
                                    <div class="form-label-group">
                                        <input type="text" id="inputName" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="inputName">Name</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="inputEmail">Email</label>
                                    </div>

                                    <div class="form-label-group">
                                        <input type="number" id="inputName" class="form-control @error('CPF_no') is-invalid @enderror" name="CPF_no" value="{{ old('CPF_no') }}" required autocomplete="CPF_no" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="inputName">CPF No</label>
                                    </div>

                                    <div class="form-label-group">
                                        <select name="role" class="custom-select" id="customSelect">
                                            <option selected="">Select One</option>
                                            <option value="Admin">Admin</option>
                                            <option value="User">User</option>
                                        </select>
                                    </div>

                                    <div class="form-label-group">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="inputPassword">Password</label>
                                    </div>
                                    <div class="form-label-group">
                                    <div class="form-label-group">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        <label for="inputConfPassword">Confirm Password</label>
                                    </div>

                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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

@endsection

