<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
      @yield('title') | Admin Dashboard
  </title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/css/mdb.min.css') }}">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <style>
    .sidebar-fixed{height:100vh;width:270px;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);z-index:1050;background-color:#fff;padding:0 1.5rem 1.5rem}.sidebar-fixed .list-group .active{-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);-webkit-border-radius:5px;border-radius:5px}.sidebar-fixed .logo-wrapper{padding:2.5rem}.sidebar-fixed .logo-wrapper img{max-height:50px}@media (min-width:1200px){.navbar,.page-footer,main{padding-left:270px}}@media (max-width:1199.98px){.sidebar-fixed{display:none}}

    .container-for-admin{
    background-color: #eee!important;
    }

    .map-container{
    overflow:hidden;
    padding-bottom:56.25%;
    position:relative;
    height:0;
    }
    .map-container iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
    }
  </style>
</head>
<body>
    <!--Main Navigation-->
    <header>
        @include('layout.include.admin-nav')
        @include('layout.include.admin-sidebar')
    </header>
    <!-- end navigation -->
  <!-- Start your project here-->
  <main class="pt-5 mx-lg-5">
    @yield('content')
  </main>  
  <!-- End your project here-->

  <!-- footer -->
  @include('layout.include.admin-footer')
  <!-- end footer -->

  <!-- jQuery -->
  <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('assets/js/mdb.min.js') }}"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
