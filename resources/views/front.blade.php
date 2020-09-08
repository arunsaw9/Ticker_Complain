@extends('frontLayout.app')


@section('main-content')

<section id="contact" class="contact-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">

                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button> 
                                    <strong>{{ $message }}</strong>
                            </div>
                            @endif

                            <h4 class="contact-title pb-10"><i class="lni-envelope"></i> launch <span> your complaint</span></h4>
                        
                        <form id="contact-form" action="{{ route('complain.store') }}" method="post" >
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-form mt-15 {{ $errors->has('name') ? 'has-error' : ''}}">
                                        <label> Name</label>
                                        <input type="text" name="name" placeholder="Full Name" value="{{ old('username') }}">
                                    </div> <!-- contact-form -->
                                    {!! $errors->first('name', '<p class="help-block" style="color: red;">:message</p>') !!}
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-form mt-15 {{ $errors->has('name') ? 'has-error' : ''}}">
                                        <label> Email</label>
                                        <input type="email" name="email" placeholder="Email" value="{{ old('username') }}">
                                        {!! $errors->first('email', '<p class="help-block" style="color: red;">:message</p>') !!}
                                    </div> <!-- contact-form -->
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6" >
                                    <div class="contact-form mt-15 {{ $errors->has('name') ? 'has-error' : ''}}">
                                        <label>Mobile</label>
                                        <input type="number" class="no-arrow" name="mobile" placeholder="Mobile">
                                        {!! $errors->first('mobile', '<p class="help-block" style="color: red;">:message</p>') !!}
                                    </div> <!-- contact-form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-form mt-15 ">
                                        <label>CPF No.</label>
                                        <input type="number" class="no-arrow" name="cpf_no" placeholder="CPF no">
                                        
                                    </div> <!-- contact-form -->
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-form mt-15 {{ $errors->has('name') ? 'has-error' : ''}}">
                                        <div class="form-group">
                                          <label class="control-label" for="">Assets</label>
                                            <select id="assets_location" class="form-control" name="assets" required >
                                                <option hidden >Select Assets</option>
                                              @foreach($assets as $asset)
                                                <option value="{{ $asset->id }}">{{ $asset->asset }}</option>
                                              @endforeach
                                            </select>
                                          {!! $errors->first('assets', '<p class="help-block" style="color: red;">:message</p>') !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="contact-form mt-15 {{ $errors->has('name') ? 'has-error' : ''}}">
                                        <label for="">Services</label>
                                        <select id="fnivel" class="form-control" name="Services" disabled>
                                          
                                        </select> 
                                        {!! $errors->first('Services', '<p class="help-block" style="color: red;">:message</p>') !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-form mt-15 {{ $errors->has('name') ? 'has-error' : ''}}">
                                        <label for="">Sub Location</label>
                                        <select id="sublocation" class="form-control" name="sub_location">
                                            <option hidden >Select sub location</option>
                                        </select> 
                                        {!! $errors->first('sub_location', '<p class="help-block" style="color: red;">:message</p>') !!}
                                    </div>
                                </div>



                                <div class="col-md-6">
                                    <div class="contact-form mt-15 {{ $errors->has('name') ? 'has-error' : ''}}">
                                        <label for="">Subject</label>
                                        <input name="subject" type=text list=subject>
                                        <datalist id=subject>
                                            <option value="UPS not working">UPS not working </option>
                                            <option value="UPS Battery backup">UPS Battery backup</option>
                                            <option value="Noise in UPS">Noise in UPS</option>
                                            <option value="Noise in Server room">Noise in Server room</option>
                                            <option value="SCADA login Problem">SCADA login Problem </option>
                                            <option value="SCADA HMI/Computer">SCADA HMI/Computer </option>
                                            <option value="SCADA not opening">SCADA not opening</option>
                                            <option value="No value display">No value display</option>
                                            <option value="Historical data not displayed">Historical data not displayed</option>
                                            <option value="Display value strike off">Display value strike off</option>
                                            <option value="Wrong Value Display">Wrong Value Display</option>
                                            <option value="SCADA server Problem">SCADA server Problem</option>
                                            <option value="Display Value not changing">Display Value not changing</option>
                                            <option value="SCADA unavailable">SCADA unavailable</option>
                                            <option value="SCADA data Hanged / freez">SCADA data Hanged / freez</option>
                                        </datalist>
                                        {{-- <select id="" class="form-control" name="subject">
                                          
                                        </select>  --}}

                                        {!! $errors->first('subject', '<p class="help-block" style="color: red;">:message</p>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="contact-form mt-15 {{ $errors->has('name') ? 'has-error' : ''}}">
                                        <label>Your Message</label>
                                        <textarea name="description" placeholder="Enter your message..."></textarea>
                                    </div> <!-- contact-form -->
                                    {!! $errors->first('description', '<p class="help-block" style="color: red;">:message</p>') !!}
                                </div>

                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="contact-form mt-15">
                                        <button type="submit" class="main-btn">Send Now</button>
                                    </div> <!-- contact-form -->
                                </div>
                            </div><!-- row -->
                        </form>

                      </div>

                    </div>
                    <!-- Card -->

                    <div class="contact-wrapper-form wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
                                                
                    </div> <!-- contact wrapper form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

@endsection
