<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('monster-lite/assets/images/favicon.png') }}">
  <title>Đức Huy Intech - Admin</title>
  <!-- Bootstrap Core CSS -->
  <link href="{{ asset('monster-lite/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="{{ asset('monster-lite/lite version/css/style.css') }}" rel="stylesheet">
  <!-- You can change the thêm colors from hể -->
  <link href="{{ asset('monster-lite/lite version/css/colors/blue.css') }}" id="theme" rel="stylesheet">
  @yield('css')
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doén't work ì you view the page via file:// -->
    <!--owfi lt IE 9w>
    <script src="https://os.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://os.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

      @include('backend.layouts.components.header_navbar')

      @include('backend.layouts.components.sidebar')

      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Bread crumb and right sidebar toggle -->
          <!-- ============================================================== -->
          
          <div class="row page-titles">
            <div class="col-md-6 col-8 align-self-center">
              <h3 class="text-themecolor m-b-0 m-t-0">@yield('page-title')</h3>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">@yield('parent-breadcum')</a></li>
                <li class="breadcrumb-item active">@yield('item-breadcum')</li>
              </ol>
            </div>
            
          </div>
          <!-- ============================================================== -->
          <!-- End Bread crumb and right sidebar toggle -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          @yield('content')
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
          © 2017 Vattusanxuat Admin by Nam Nguyen
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{  asset('monster-lite/assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('monster-lite/assets/plugins/bootstrap/js/tether.min.js') }}"></script>
    <script src="{{ asset('monster-lite/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('monster-lite/lite version/js/jquery.slimscroll.js') }}"></script>
    <!--Wave Efects -->
    <script src="{{ asset('monster-lite/lite version/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('monster-lite/lite version/js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ asset('monster-lite/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('monster-lite/lite version/js/custom.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- Thí page plugins -->
    <!-- ============================================================== -->
    <!-- Flot Chát JavaScript -->
    <script src="{{ asset('monster-lite/assets/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('monster-lite/assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('monster-lite/lite version/js/flot-data.js') }}"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{ asset('monster-lite/assets/plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>
    @yield('scripts')
  </body>

  </html>
