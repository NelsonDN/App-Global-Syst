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
<title>Global Syst</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> 
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assetshome/css/bootstrap.min.css') }}">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assetshome/css/style.css') }}">
<!-- Responsive-->
<link rel="stylesheet" href="{{ asset('assetshome/css/responsive.css') }}">
<!-- fevicon -->
<link rel="icon" href="{{ asset('assetshome/images/fevicon.png')}}')}}" type="image/gif" />
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
    <div class="header_section">
      <div class="header_left">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="logo"><a href="index.html"><img src="{{ asset('assetshome/images/logo.png')}}"></a></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @include('home.partials.menu')
          </div>
        </nav>
        <div class="banner_main">
          <h1 class="banner_taital">financial <br>Service</h1>
          <p class="banner_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever </p>
          <div class="btn_main">
            <div class="more_bt"><a href="#">Read More </a></div>
            <div class="contact_bt"><a href="#">Contact Us</a></div>
          </div>
        </div>
      </div>
      <div class="header_right">
        <img src="{{ asset('assetshome/images/banner-img.png')}}" class="banner_img">
      </div>
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
    <!--project section start -->
    <div class="project_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="project_main">
              <h1 class="services_taital">Our projects</h1>
              <p class="services_text">It is a long established fact that a reader will be distracted by the readable content of a </p>
              <div class="moremore_bt"><a href="#">Read More </a></div>
              <div class="image_6"><img src="{{ asset('assetshome/images/img-6.png')}}"></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="images_main">
              <div class="images_left">
                <div class="container_1">
                  <img src="{{ asset('assetshome/images/img-2.png')}}" alt="Avatar" class="image" style="width:100%">
                  <div class="middle">
                    <div class="text"><img src="{{ asset('assetshome/images/search-icon.png')}}"></div>
                    <h2 class="fact_text">Established Fact</h2>
                  </div>
                </div>
                <div class="container_1">
                  <img src="{{ asset('assetshome/images/img-3.png')}}" alt="Avatar" class="image" style="width:100%">
                  <div class="middle">
                    <div class="text"><img src="{{ asset('assetshome/images/search-icon.png')}}"></div>
                    <h2 class="fact_text">Established Fact</h2>
                  </div>
                </div>
              </div>
              <div class="images_right">
                <div class="container_1">
                  <img src="{{ asset('assetshome/images/img-4.png')}}" alt="Avatar" class="image" style="width:100%">
                  <div class="middle">
                    <div class="text"><img src="{{ asset('assetshome/images/search-icon.png')}}"></div>
                    <h2 class="fact_text">Established Fact</h2>
                  </div>
                </div>
                <div class="container_1">
                  <img src="{{ asset('assetshome/images/img-5.png')}}" alt="Avatar" class="image" style="width:100%">
                  <div class="middle">
                    <div class="text"><img src="{{ asset('assetshome/images/search-icon.png')}}"></div>
                    <h2 class="fact_text">Established Fact</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="project_section_2 layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="icon_1"><img src="{{ asset('assetshome/images/icon-3.png')}}"></div>
            <h3 class="accounting_text_1">1000+</h3>
            <p class="yers_text">Years of Business</p>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="icon_1"><img src="{{ asset('assetshome/images/icon-4.png')}}"></div>
            <h3 class="accounting_text_1">20000+</h3>
            <p class="yers_text">Projects Delivered</p>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="icon_1"><img src="{{ asset('assetshome/images/icon-2.png')}}"></div>
            <h3 class="accounting_text_1">10000+</h3>
            <p class="yers_text">Satisfied Customers</p>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="icon_1"><img src="{{ asset('assetshome/images/icon-1.png')}}"></div>
            <h3 class="accounting_text_1">1500+</h3>
            <p class="yers_text">Services</p>
          </div>
        </div>
      </div>
    </div>
    <!--project section end -->
    <!--team section start -->
    <div class="team_section layout_padding">
      <div class="container">
        <h1 class="what_taital">Our Team and experts</h1>
        <p class="what_text_1">It is a long established fact that a reader will be distracted by the readable content of a </p>
        <div class="team_section_2 layout_padding">
          <div class="row">
            <div class="col-sm-3">
              <img src="{{ asset('assetshome/images/img-7.png')}}" class="image_7">
              <p class="readable_text">Readable</p>
              <p class="readable_text_1">Follow Us</p>
              <div class="social_icon">
                <ul>
                  <li><a href="#"><img src="{{ asset('assetshome/images/fb-icon.png')}}"></a></li>
                  <li><a href="#"><img src="{{ asset('assetshome/images/twitter-icon.png')}}"></a></li>
                  <li><a href="#"><img src="{{ asset('assetshome/images/linkedin-icon.png')}}"></a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3">
              <img src="{{ asset('assetshome/images/img-8.png')}}" class="image_7">
              <p class="readable_text">Content</p>
              <p class="readable_text_1">Follow Us</p>
              <div class="social_icon">
                <ul>
                  <li><a href="#"><img src="{{ asset('assetshome/images/fb-icon.png')}}"></a></li>
                  <li><a href="#"><img src="{{ asset('assetshome/images/twitter-icon.png')}}"></a></li>
                  <li><a href="#"><img src="{{ asset('assetshome/images/linkedin-icon.png')}}"></a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3">
              <img src="{{ asset('assetshome/images/img-9.png')}}" class="image_7">
              <p class="readable_text">Readable</p>
              <p class="readable_text_1">Follow Us</p>
              <div class="social_icon">
                <ul>
                  <li><a href="#"><img src="{{ asset('assetshome/images/fb-icon.png')}}"></a></li>
                  <li><a href="#"><img src="{{ asset('assetshome/images/twitter-icon.png')}}"></a></li>
                  <li><a href="#"><img src="{{ asset('assetshome/images/linkedin-icon.png')}}"></a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3">
              <img src="{{ asset('assetshome/images/img-10.png')}}" class="image_7">
              <p class="readable_text">Content</p>
              <p class="readable_text_1">Follow Us</p>
              <div class="social_icon">
                <ul>
                  <li><a href="#"><img src="{{ asset('assetshome/images/fb-icon.png')}}"></a></li>
                  <li><a href="#"><img src="{{ asset('assetshome/images/twitter-icon.png')}}"></a></li>
                  <li><a href="#"><img src="{{ asset('assetshome/images/linkedin-icon.png')}}"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--team section end -->
    <!--client section start -->
    <div class="client_section layout_padding">
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <h1 class="what_taital">what is syas our clients</h1>
              <div class="client_section_2 layout_padding">
                <ul>
                  <li><img src="{{ asset('assetshome/images/round-1.png')}}" class="round_1"></li>
                  <li><img src="{{ asset('assetshome/images/img-11.png')}}" class="image_11"></li>
                  <li><img src="{{ asset('assetshome/images/round-2.png')}}" class="round_2"></li>
                </ul>
                <p class="dummy_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
              </div>
            </div>
            <div class="carousel-item">
              <h1 class="what_taital">what is syas our clients</h1>
              <div class="client_section_2 layout_padding">
                <ul>
                  <li><img src="{{ asset('assetshome/images/round-1.png')}}" class="round_1"></li>
                  <li><img src="{{ asset('assetshome/images/img-11.png')}}" class="image_11"></li>
                  <li><img src="{{ asset('assetshome/images/round-2.png')}}" class="round_2"></li>
                </ul>
                <p class="dummy_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
              </div>
            </div>
            <div class="carousel-item">
              <h1 class="what_taital">what is syas our clients</h1>
              <div class="client_section_2 layout_padding">
                <ul>
                  <li><img src="{{ asset('assetshome/images/round-1.png')}}" class="round_1"></li>
                  <li><img src="{{ asset('assetshome/images/img-11.png')}}" class="image_11"></li>
                  <li><img src="{{ asset('assetshome/images/round-2.png')}}" class="round_2"></li>
                </ul>
                <p class="dummy_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--client section end -->
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