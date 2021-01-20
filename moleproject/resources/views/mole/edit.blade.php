<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Serving games in mall</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/edit.css" />
       
</head>


  <style>
    * {
      margin: 0px; 
      padding: 0px; 
      box-sizing: border-box;
    }
    
    body, html {
      height: 100%;
      font-family: SourceSansPro-Regular, sans-serif;
      background-image: url("https://images.pexels.com/photos/1001914/pexels-photo-1001914.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260");
      
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
    
    
    input {
      outline: none;
      border: none;
    }
    
    
    /---------------------------------------------/
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
    
    }
  
        @media (max-width: 480px) {
      .wrap-login100 {
        padding-left: 15px;
        padding-right: 15px;
      }
    }
    </style>
 
 <body>

<div class="container-login100"  >
    <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30" style=" width:500px !important;">

    <form class="login100-form validate-form" action="{{route('mole.update',$mole->id)}}" method="post" >
    <span class="login100-form-title p-b-37" style="padding-top: 35px;">Edit Children data  </span>
        @csrf
        @method('PUT')
        <br>
        <div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
        <input class="input100" type="text" name="name" placeholder="The child's name " value="{{$mole->name}}">
        <span class="focus-input100"></span>
      </div>
<br>
<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
  <input class="input100" type="text" name="age" placeholder=" Child's age" value="{{$mole->age}}">
  <span class="focus-input100"></span>
</div>
     
<br>
<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
        <input class="input100" type="text" name="mother" placeholder="  Guardian's name" value="{{$mole->mother }}">
        <span class="focus-input100"></span>
      </div>
<br>
<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
  <input class="input100" type="text" name="mobile" placeholder="phone number" value="{{$mole->mobile }}">
  <span class="focus-input100"></span>
</div>
<br>
<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
  <input class="input100" type="text" name="ident" placeholder="Identification Number" style="width: 250px !important;" value="{{$mole->ident }}">
  <span class="focus-input100"></span>
</div>

<br>
<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
  <input class="input100" type="text" name="time_arrive" placeholder="Baby's arrival time" value="{{$mole->time_arrive }}">
  <span class="focus-input100"></span>
</div>

<br>
<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
  <input class="input100" type="text" name="play_num" placeholder="Hours of play" style="width: 260px !important;" value="{{$mole->play_num }}">
  <span class="focus-input100"></span>
</div>
<br>
<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
  <input class="input100" type="text" name="game_sellect" placeholder="Select the game" style="width: 260px !important;">
  <span class="focus-input100"></span>
</div>
<br>
<br>
         <section style="margin-top:15px; text-align: center; " >

              <div class="container-login100-form-btn">
                <button class="login100-form-btn">
                  <a> update </a>
                </button>
                <button class="login100-form-btn">
                  <a href="/mole" class="btn btn-defult" > back </a>
                </button>
              </div>
           </section>
    </form>
</div> 
</div>
</body>
</html>