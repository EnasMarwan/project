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
  .container {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  position: relative;
  z-index: 1;
  }
  
  .container::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: rgba(93,84,240,0.5);
  background: -webkit-linear-gradient(left, rgba(0,168,255,0.5), rgba(185,0,255,0.5));
  background: -o-linear-gradient(left, rgba(0,168,255,0.5), rgba(50, 4, 66, 0.5));
  background: -moz-linear-gradient(left, rgba(0,168,255,0.5), rgba(185,0,255,0.5));
  background: linear-gradient(left, rgba(0,168,255,0.5), rgba(185,0,255,0.5));
  pointer-events: none;
  }
  .div1{
  direction: rtl;
  padding-right: 10px;
  float: right;
  }
  .div1 div{
  float: right;
  padding-left:20px;
  font-size: large;
  font-weight: bold;
  }
  .input{
  background-color: #FFF;
  color: c;
  padding: 7px;
  border: 0;
  overflow: visible;
  font-family: inherit;
  font-size: 100%;
  line-height: 1.15;
  
  }
  .btn {
  font-weight: bold;
  cursor: pointer;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  min-width: 160px;
  height: 50px;
  background-color: #bd59d4;
  border-radius: 25px;
  font-family: SourceSansPro-SemiBold;
  font-size: 15px;
  color:#fff;
  line-height: 1.2;
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
  
  .btn:hover {
  background-color: #4b2354;
  box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
  -moz-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
  -webkit-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
  -o-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
  -ms-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
  }
  a {
  color: #FFF;
  text-decoration: none
  }
  </style>

            <div class="content">
                     <div class="container" style="background-image: url('assets/images/e.jpg');">
                  <form action="/mole" method="POST" style="background-color: #f0ececd0;padding: 20px; border-radius: 10px;">
                    @csrf
                    <legend style="text-align: center; color:#bd59d4; font-size:30px; "><h1 id="title"></h1> إضافة بيانات الطفل</legend>
                    <br>
                    <br>
                    <div class="div1">
                            <div >
                              <label class="conrol-label"> اسم الطفل الثلاثي :  </label>
                              <input type="text" class="input" name="name"  style="width: 200px !important;" >
                            </div>
                            <div >

                              <label class="conrol-label">  عمر الطفل   :  </label>
                              <input type="text" class="input" name="age" style="width: 120px !important;" >
                            </div>
                    
                            <div >
                              <label class="conrol-label">اسم ولي الأمر  :  </label>
                              <input type="text" class="input"  name="mother" style="width: 190px !important;" >
                            </div>
                            <div >
                              <label class="conrol-label">  رقم الهاتف: </label>
                              <input type="text" class="input" name="mobile" style="width: 200px !important;">
                          </div>       
                    <br>
                    <br>
                    <br>
                    <br>
                            <div>
                              <label class="conrol-label" >  رقم التعريف الخاص بالطفل:  </label>
                              <input type="text" class="input" name="ident" style="width: 120px !important;">
                            </div>
            
            <div >
                              <label class="conrol-label">  وقت وصول الطفل    :  </label>
                              <input type="text" class="input" name="time_arrive" style="width: 120px !important;" >
                            </div>
                            <div >
                              <label class="conrol-label">  عدد ساعات اللعب : </label>
                              <input type="text" class="input" name="play_num" style="width: 120px !important;">
                          </div> 
            <br>
                    <br>
                    <br>
                    <br>  
                    <div> 
                    <label >  الألعاب المختارة: </label>
                    <input type="text" class="input" name="game_sellect" style="width: 450px;"></input>
                  </div>
                  <br>
                  <br>
                  <br>
                  
                  <section style="margin-top:15px; text-align: center; " >
                    <button class="btn" > أدخل</button>
                      </section>
                            
                    </div> 
                  </form>
              </div>
              <script src="assets/js/create.js"></script>

    
             
        
        </body>
        </html>