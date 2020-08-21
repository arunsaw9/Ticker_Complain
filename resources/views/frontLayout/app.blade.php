<!doctype html>
<html class="no-js" lang="en">
@include('frontLayout.head')

<body>
   
    <!--====== HEADER PART START ======-->
    
    @include('frontLayout.header')
    
    <!--====== CONTENT PART START ======-->
    @section('main-content')

    @show

    <!--====== FOOTER PART START ======-->
    @include('frontLayout.footer')
</body>
</html>
