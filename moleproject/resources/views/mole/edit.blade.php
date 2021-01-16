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

<body>
    


<div class="content">
    <div class="container" style="background-image:url('assets/images/e.jpg');">

    <form action="{{route('mole.update',$mole->id)}}" method="post" style="background-color: #f0ececd0;padding: 20px; border-radius: 10px;">
        <legend style="text-align: center; color:#bd59d4; font-size:30px; "><h1 id="title"></h1> تعديل بيانات الطفل </legend>
        <br>
        @csrf
        @method('PUT')
        <div class="div1">
            <div >
              <label class="conrol-label"> اسم الطفل الثلاثي :  </label>
              <input type="text" class="input" name="name"  style="width: 200px !important;" value="{{$mole->name}}">
            </div>

            <div >
                <label class="conrol-label">  عمر الطفل   :  </label>
                <input type="text" class="input" name="age" style="width: 120px !important;" value="{{$mole->age}}">
              </div>
      
              <div >
                <label class="conrol-label">اسم ولي الأمر  :  </label>
                <input type="text" class="input"  name="mother" style="width: 190px !important;" value="{{$mole->mother }}" >
              </div>
              <div >
                <label class="conrol-label">  رقم الهاتف: </label>
                <input type="text" class="input" name="mobile" style="width: 200px !important;" value="{{$mole->mobile }}">
            </div>       
      <br>
      <br>
      <br>
      <br>
              <div>
                <label class="conrol-label" >  رقم التعريف الخاص بالطفل:  </label>
                <input type="text" class="input" name="ident" style="width: 120px !important;" value="{{$mole->ident }}">
              </div>

<div >
                <label class="conrol-label">  وقت وصول الطفل    :  </label>
                <input type="text" class="input" name="time_arrive" style="width: 120px !important;" value="{{$mole->time_arrive }}">
              </div>
              <div >
                <label class="conrol-label">  عدد ساعات اللعب : </label>
                <input type="text" class="input" name="play_num" style="width: 120px !important;" value="{{$mole->play_num }}">
            </div> 
<br>
      <br>
      <br>
      <br>  
      <div> 
      <label >  الألعاب المختارة: </label>
      <input type="text" class="input" name="game_sellect" style="width: 450px;" value="{{$mole->game_sellect }}"></input>
    </div>
    <br>
         <br>
         <section style="margin-top:15px; text-align: center; " >
        <button type="submit" class="btn btn-warning">update</button> 
     <button   <a href="/mole" class="btn btn-defult">back </a> </button>
         </section>
</div>
</div> 

</div>
    </div>
</div>


</body>
</html>