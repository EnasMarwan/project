<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Serving games in mall</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    
    
  <!-- CSS here -->
  <link rel="stylesheet" href="assets/css/jquery.bxslider.css" />
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    


    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-2" style="padding-right: 20px; padding-top: 10px;">
                            <div class="logo">
                                <p style="color: black; font-size: 25px" >Mall games</p>
                             <!--   <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>-->
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10" style="padding-left: 400px;">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>                              
                                    <ul class="links" id="navigation">    
                                        
                                        
                                        <li class="active"><a href="#"data-value="Home" >Home</a></li>
                                        <li> <a href="{{ route('register') }}">Register</a></li>
                                        <li> <a href="{{ route('login') }}">Login</a></li>
                                         
                                          <li><a href="#" data-value="gallery">Gallery</a></li>
                                         
                                            <li><a href="#" data-value="about">about us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div> 
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>


    @yield('content')

    
    <footer>
        <!-- Footer Start-->
       
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area footer-bg" style="background:  #cccacad0 !important;">
            <div class="container">
                <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p ><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Footer End-->
    </footer>

        <!-- JS here -->
        <script src="assets/js/jquery-1.11.3.min.js"></script>
        <script src="assets/js/jquery.bxslider.min.js"></script>
        <script src="./assets/js/index.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>
		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>

</body>
</html>
   
