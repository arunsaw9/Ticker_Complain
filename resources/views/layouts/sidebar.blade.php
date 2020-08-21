<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('home') }}">
                <div class="brand-logo">
                  <img src="{{ asset('app-assets/images/logo/vuexy-logo.png') }}" alt="" style="margin-top: -10px;">
                </div>

              <h2 class="brand-text mb-0"> SCADA</h2></a></li>
          {{-- <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li> --}}
        </ul>
      </div>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a href="{{ route('home') }}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Home</span><span class="badge badge badge-warning badge-pill float-right mr-2"></span></a>
            
          </li>
          {{-- <li class=" navigation-header"><span>Workforce summary</span></li> --}}
          @can('isAdmin')
            <li class=" nav-item">
              <a href="{{ route('registration.index') }}">
             
              <i class="feather icon-user-plus"></i><span class="menu-title" data-i18n="Dashboard"> Users </span>
              <span class="badge badge badge-warning badge-pill float-right mr-2"></span></a>
            </li>
          @else
            
          @endcan
          


        </ul>
      </div>
    </div>