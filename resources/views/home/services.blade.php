<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Services</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> 
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assetshome/css/bootstrap.min.css')}}">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assetshome/css/style.css')}}">
<!-- Responsive-->
<link rel="stylesheet" href="{{ asset('assetshome/css/responsive.css')}}">
<!-- fevicon -->
<link rel="icon" href="{{ asset('assetshome/images/fevicon.png')}}" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="{{ asset('assetshome/css/jquery.mCustomScrollbar.min.css')}}">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="{{ asset('assetshome/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('assetshome/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>
  <!--header section start -->
    <div class="header_section header_bg">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="logo"><a href="index.html"><img src="{{ asset('assetshome/images/logo.png')}}"></a></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @include('home.partials.menu')
          </div>
        </nav>
    </div>
    <!--header section end -->
    <!--services section start -->
    <div class="what_we_do_section layout_padding">
      <div class="container">
        <h1 class="what_taital">WHAT WE DO</h1>
        <p class="what_text">It is a long established fact that a reader will be distracted by the readable content of a </p>
        <div class="what_we_do_section_2">
          <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="box_main">
              <div class="icon_1"><img src="{{ asset('assetshome/images/icon-1.png')}}"></div>
              <h3 class="accounting_text">Accounting</h3>
              <p class="lorem_text">Lorem Ipsum is simply dummy text of the printing and</p>
              <div class="moremore_bt_1"><a href="#">Read More </a></div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box_main active">
              <div class="icon_1"><img src="{{ asset('assetshome/images/icon-2.png')}}"></div>
              <h3 class="accounting_text">Advisor</h3>
              <p class="lorem_text">Lorem Ipsum is simply dummy text of the printing and</p>
              <div class="moremore_bt_1"><a href="#">Read More </a></div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box_main">
              <div class="icon_1"><img src="{{ asset('assetshome/images/icon-3.png')}}"></div>
              <h3 class="accounting_text">Investment</h3>
              <p class="lorem_text">Lorem Ipsum is simply dummy text of the printing and</p>
              <div class="moremore_bt_1"><a href="#">Read More </a></div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box_main">
              <div class="icon_1"><img src="{{ asset('assetshome/images/icon-4.png')}}"></div>
              <h3 class="accounting_text">Financial</h3>
              <p class="lorem_text">Lorem Ipsum is simply dummy text of the printing and</p>
              <div class="moremore_bt_1"><a href="#">Read More </a></div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <!--services section end -->
        @include('home.partials.footer')
    <!--footer section end -->
    <!-- Javascript files-->
    <script src="{{ asset('assetshome/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assetshome/js/popper.min.js')}}"></script>
    <script src="{{ asset('assetshome/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assetshome/js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{ asset('assetshome/js/plugin.js')}}"></script>
    <!-- sidebar -->
    <script src="{{ asset('assetshome/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{ asset('assetshome/js/custom.js')}}"></script>
    <!-- javascript --> 
    <script src="{{ asset('assetshome/js/owl.carousel.js')}}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> 
</body>
</html>