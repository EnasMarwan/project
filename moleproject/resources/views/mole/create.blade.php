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
  <link rel="stylesheet" href="assets/css/jquery.bxslider.css" />
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body >
 <style>
* {
	margin: 0px; 
	padding: 0px; 
	box-sizing: border-box;
}

body, html {
	height: 100%;
	font-family: SourceSansPro-Regular, sans-serif;
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

input {
	outline: none;
	border: none;
}

textarea {
  outline: none;
  border: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}

input::-webkit-input-placeholder { color: #504f50;}
input:-moz-placeholder { color: #4b2354;}
input::-moz-placeholder { color: #4b2354;}
input:-ms-input-placeholder { color: #4b2354;}

textarea::-webkit-input-placeholder { color: #4b2354;}
textarea:-moz-placeholder { color: #4b2354;}
textarea::-moz-placeholder { color: #4b2354;}
textarea:-ms-input-placeholder { color: #4b2354;}

/*---------------------------------------------*/
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
  color: #ec7c1a;
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

.input100:focus + .focus-input100 {
  box-shadow: 0 5px 30px 0px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 5px 30px 0px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0 5px 30px 0px rgba(0, 0, 0, 0.2);
  -o-box-shadow: 0 5px 30px 0px rgba(0, 0, 0, 0.2);
  -ms-box-shadow: 0 5px 30px 0px rgba(0, 0, 0, 0.2);
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
  background-color: #e09c5f;
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

  box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
  -moz-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
  -webkit-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
  -o-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
  -ms-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
}

.login100-form-btn:hover {
  background-color: #dd7820;
  box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
  -moz-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
  -webkit-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
  -o-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
  -ms-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
}


/*------------------------------------------------------------------
[ Alert validate ]*/

.validate-input {
  position: relative;
}

.alert-validate .focus-input100 {
  box-shadow: 0 5px 30px 0px rgba(250, 66, 81, 0.1);
  -moz-box-shadow: 0 5px 30px 0px rgba(250, 66, 81, 0.1);
  -webkit-box-shadow: 0 5px 30px 0px rgba(250, 66, 81, 0.1);
  -o-box-shadow: 0 5px 30px 0px rgba(250, 66, 81, 0.1);
  -ms-box-shadow: 0 5px 30px 0px rgba(250, 66, 81, 0.1);
}

.alert-validate::before {
  content: attr(data-validate);
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  position: absolute;
  width: 100%;
  min-height: 62px;
  background-color: #fff;
  border-radius: 20px;
  top: 0px;
  left: 0px;
  padding: 0 45px 0 22px;
  pointer-events: none;

  font-family: SourceSansPro-Bold;
  font-size: 16px;
  color: #fa4251;
  line-height: 1.2;
}

.btn-hide-validate {
  font-family: Material-Design-Iconic-Font;
  font-size: 15px;
  color: #fa4251;
  cursor: pointer;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  height: 62px;
  top: 0px;
  right: 23px;
}

.rs1-alert-validate.alert-validate::before {
  background-color: #fff;
}

.true-validate::after {
  content: "\f269";
  font-family: Material-Design-Iconic-Font;
  font-size: 15px;
  color: #57b846;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  height: 62px;
  top: 0px;
  right: 23px;
}
/*//////////////////////////////////////////////////////////////////
[ Social item ]*/

.login100-social-item {
  font-size: 25px;
  color: #3b5998;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background-color: #fff;
  margin: 5px;
  box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.1);
  -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.1);
}

@media (max-width: 480px) {
  .wrap-login100 {
    padding-left: 15px;
    padding-right: 15px;
  }
}
</style>

  <div class="container-login100"  style="background-image:url('assets/images/1.jpg');padding:20px">
  <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30" style=" width:500px !important;">
  <form class="login100-form validate-form" action="/mole" method="POST">
                    @csrf
      <span class="login100-form-title p-b-37" style="padding-top: 35px;"> Children data registration </span>
<br>
<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
        <input class="input100" type="text" name="name" placeholder="The child's name ">
        <span class="focus-input100"></span>
      </div>
<br>
<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
  <input class="input100" type="text" name="age" placeholder=" Child's age">
  <span class="focus-input100"></span>
</div>
     
<br>
<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
        <input class="input100" type="text" name="mother" placeholder="  Guardian's name">
        <span class="focus-input100"></span>
      </div>
<br>
<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
  <input class="input100" type="text" name="mobile" placeholder="phone number">
  <span class="focus-input100"></span>
</div>
<br>
<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
  <input class="input100" type="text" name="ident" placeholder="Identification Number" style="width: 250px !important;">
  <span class="focus-input100"></span>
</div>

<br>
<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
  <input class="input100" type="text" name="time_arrive" placeholder="Baby's arrival time">
  <span class="focus-input100"></span>
</div>

<br>
<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
  <input class="input100" type="text" name="play_num" placeholder="Hours of play" style="width: 260px !important;">
  <span class="focus-input100"></span>
</div>
<br>
<label style="color: rgb(83, 81, 81); font-weight:200; font-family: Arial, Helvetica, sans-serif; ">Selected games:</label>
<br>
<br>
<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
  <textarea class="input100" type="text" name="game_sellect"  style="height:100px !important; width: 100%; color: #4b2354; padding-top: 10px;"></textarea>
  <span class="focus-input100"></span>
</div>
<br>
<br>
      <div class="container-login100-form-btn">
        <button class="login100-form-btn">
          <a> submit </a>
        </button>
      </div>
<br>
<br>
    </form>
  </div>
</div>

</body>
</html>
