<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Serving games in mall</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- CSS here -->
   <!-- CSS here -->
   <link rel="stylesheet" href="assets/css/jquery.bxslider.css" />
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
  <link rel="stylesheet" href="assets/css/style.css">

</head>
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
                                      <li class="active"><a href="{{ route('home') }}">Home</a></li>
                                        <li> <a href="/mole"> List of existing children</a></li>
                               
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

    
 <style>
* {
	margin: 0px; 
	padding: 0px; 
	box-sizing: border-box;
  
}

body, html {
	height: 100%;
	
    background-repeat: no-repeat;
    background-size: cover;
}

a {
	font-family: SourceSansPro-Regular;
	font-size: 16px;
	line-height: 1.7;
	color: #002e5b;
	margin: 0px;
	transition: all 0.4s;
	-webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

a:focus {
	outline: none !important;
}

a:hover {
  text-decoration: none;
  color: #4b2354;
}
ul, li {
	margin: 20px;
  list-style-type: none;
  float: left;
  
}
.links{
  float: right;
}

input {
	outline: none;
	border: none;
}

button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

iframe {
	border: none !important;
}
.container-login100 {
  width: 100%;  
  min-height: 0vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  position: relative;
  z-index: 1;
  
}
.wrap-login100 {
  width: 390px;
  background: #FFF;
  padding: 0 20px 20px 20px;
  border-radius: 10px;
  margin-bottom: 20px;
  margin-top: 20px;
  overflow: hidden;
  box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
  -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
}
.login100-form {
  width: 100%;
}
.login100-form-title {
  display: block;
  font-family: SourceSansPro-Bold;
  font-size: 30px;
  color: #5d91f1;
  line-height: 1.2;
  text-align: center;
}
/*------------------------------------------------------------------
[ Input ]*/

.wrap-input100 {
  width: 100%;
  position: relative;
  background-color: #fff;
  border-radius: 20px;
}

.input100 {
  font-family: SourceSansPro-Bold;
  font-size: 16px;
  color: #4b2354;
  line-height: 1.2;
  height: 62px;
  background: transparent;
  padding: 0 0px 0 23px;
  
}

/*------------------------------------------------------------------
[ Focus Input ]*/

.focus-input100 {
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
  border-radius: 20px;
  box-shadow: 0 5px 30px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 5px 30px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 5px 30px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0 5px 30px 0px rgba(0, 0, 0, 0.1);
  -ms-box-shadow: 0 5px 30px 0px rgba(0, 0, 0, 0.1);
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}



/*------------------------------------------------------------------
[ Button ]*/
.container-login100-form-btn {
  width: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.login100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  min-width: 160px;
  height: 50px;
  background-color:#5d91f1;
  border-radius: 25px;

  font-family: SourceSansPro-SemiBold;
  font-size: 14px;
  color: #fff;
  line-height: 1.2;
  text-transform: uppercase;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;

}

@media (max-width: 480px) {
  .wrap-login100 {
    padding-left: 15px;
    padding-right: 15px;
  }
}
</style>
<body>
  <div class="container-login100" style="background-image: url(https://images.pexels.com/photos/1001914/pexels-photo-1001914.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260);">
  <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30" style= " width:500px !important;">
  <form class="login100-form validate-form" action="/mole" method="POST">
                    @csrf
      <span class="login100-form-title p-b-37" style="padding-top: 35px;"> Children data registration </span>
<br>
<div class="wrap-input100 validate-input m-b-20" >
        <input class="input100" type="text" name="name" placeholder="The child's name ">
        <span class="focus-input100"></span>
      </div>
<br>
<div class="wrap-input100 validate-input m-b-25" >
  <input class="input100" type="text" name="age" placeholder=" Child's age">
  <span class="focus-input100"></span>
</div>
     
<br>
<div class="wrap-input100 validate-input m-b-25" >
        <input class="input100" type="text" name="mother" placeholder="  Guardian's name">
        <span class="focus-input100"></span>
      </div>
<br>
<div class="wrap-input100 validate-input m-b-25" >
  <input class="input100" type="text" name="mobile" placeholder="phone number">
  <span class="focus-input100"></span>
</div>
<br>
<div class="wrap-input100 validate-input m-b-25" >
  <input class="input100" type="text" name="ident" placeholder="Identification Number" style="width: 250px !important;">
  <span class="focus-input100"></span>
</div>

<br>
<div class="wrap-input100 validate-input m-b-25" >
  <input class="input100" type="text" name="time_arrive" placeholder="Baby's arrival time">
  <span class="focus-input100"></span>
</div>

<br>
<div class="wrap-input100 validate-input m-b-25">
  <input class="input100" type="text" name="play_num" placeholder="Hours of play" style="width: 260px !important;">
  <span class="focus-input100"></span>
</div>
<br>
<div class="wrap-input100 validate-input m-b-25" >
    <input   class="input100" type="text" name="game_sellect" placeholder="Select the game" style="width: 260px !important;">
    <span class="focus-input100"></span>
  </div>
  <br>
  
      <div class="container-login100-form-btn">
        <button class="login100-form-btn">
          <a> submit </a>
        </button>
      </div>
    </form>
  
  </div>
  
</div>

<footer>
        <!-- Footer Start-->
       
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area footer-bg" style="background:  #cccacad0 !important; padding:20px">
            <div class="container">
                <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center" style="color: #978e98;">
                                    <p style="padding-top: 10px;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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
</body>
</html>