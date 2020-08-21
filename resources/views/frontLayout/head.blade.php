<head>
    <meta charset="utf-8">
    <title>Consult | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css_front/bootstrap.min.css">
    {{-- <link rel="stylesheet" type="text/css" href="{{ ('dataTables/css/bootstrap.min.css') }}" /> --}}
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css_front/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css_front/style.css">
    <link rel="stylesheet" type="text/css" href="{{ ('css/core.css') }}" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @section('headSection')
    @show

</head>