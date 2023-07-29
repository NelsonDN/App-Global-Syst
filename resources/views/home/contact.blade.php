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
<title>Contact</title>
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
    <!-- contact section start -->
    <div class="contact_section layout_padding">
      <div class="container-fluid">
        <h1 class="what_taital">Contact us</h1>
        <p class="amet_text">amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
        <div class="contact_section2">
          <div class="row">
            <div class="col-md-6 padding_left_0">
              <div class="mail_section">
                <input type="" class="mail_text_1" placeholder="Name" name="Name">
                <input type="" class="mail_text_1" placeholder="Phone Number" name="Phone Number">
                <input type="" class="mail_text_1" placeholder="Email" name="Email">
                <textarea class="massage_text" placeholder="Message" rows="5" id="comment" name="Message"></textarea>
                <div class="send_bt"><a href="#">send</a></div>
              </div>
            </div>
            <div class="col-md-6 padding_0">
              <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- contact section end -->
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