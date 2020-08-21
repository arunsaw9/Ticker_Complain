<header class="header-area">
        <div class="navbar-area headroom" style="    border-bottom: 1px solid #eee;">
            <div class="container">
                <div class="row" >
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="{{ route('front') }}">
                                <h2 style="color: #a21045">SCADA <span style="font-size: 20px;color: #bc044f;margin-left: -10px;">Complain</span></h2>
                                {{-- <img src="assets/images/logo.png" alt="Logo"> --}}
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <div class="navbar-btn d-sm-inline-block">
                                        <a class="btn btn-outline-primary" data-scroll-nav="0" 
                                        style="padding: 5px 20px 5px 20px; margin: 0px 10px 0 0px;" href="{{ route('complain.status') }}">Complain Status</a>
                                    </div>
                                    <div class="navbar-btn d-sm-inline-block">
                                        <a class="btn btn-outline-primary" data-scroll-nav="0" 
                                        style="padding: 5px 20px 5px 20px;" href="{{ route('login') }}">Login</a>
                                    </div>
                                </ul>
                            </div> <!-- navbar collapse -->
                            
                            

                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->

    </header>