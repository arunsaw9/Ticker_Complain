 <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
      <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-right d-none d-md-block">Crafted by<a class="text-bold-800 grey darken-2" href="https://ongcindia.com/wps/wcm/connect/en/home/" target="_blank">ONGC,</a></span>

        
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
      </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS--> 
    <script src="{{ asset('app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/tether.min.js') }}"></script>
   {{--  <script src="{{ asset('app-assets/vendors/js/extensions/shepherd.min.js') }}"></script> --}}
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/components.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/customizer.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/footer.min.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/pages/dashboard-analytics.min.js') }}"></script>
    <!-- END: Page JS-->

    @section('footerSection')
    @show