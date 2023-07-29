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
<title>About</title>
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
    <!--about section start -->
    <div class="services_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1 class="services_taital">WELCOME TO FINAnCIAL SERVICES</h1>
            <p class="services_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it </p>
            <div class="moremore_bt"><a href="#">Read More </a></div>
          </div>
          <div class="col-md-4">
            <div><img src="{{ asset('assetshome/images/img-1.png')}}" class="image_1"></div>
          </div>
        </div>
      </div>
    </div>
    <!--about section end -->
    <!--footer section start -->
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