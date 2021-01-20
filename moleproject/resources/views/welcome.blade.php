@extends('layouts.header')
@section('content')
       
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/images/d.jpg" alt="First slide">
    
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/images/e.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/images/f.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
  <!-- slider End -->

  <!--================Blog Area =================-->

<section  class="blog_area section-padding">
     <div  id="gallery" class="our-memories-area section-padding2">
          <div   class="container">
              <!-- section tittle -->
              <div class="row ">
                  <div class="col-lg-12">
                      <div class="section-tittle text-center">
                      
                          <h2>OUR MEMORIES</h2>
                      </div>
                  </div>
              </div>
              <div class="row no-gutters">

                  <div class="col-lg-4 col-md-4">
                      <div class="memory">
                    <img src="assets/images/a.jpg" alt="">
                         </div>

                  </div> 
                  <div class="col-lg-4 col-md-4">
                      <div class="memory">
                              <img src="assets/images/a.jpg" alt="">
                            </div>
                     </div> 

                       <div class="col-lg-4 col-md-4">
                      <div class="memory">
                    <img src="assets/images/a.jpg" alt="">
                         </div>
                       </div> 

                       <br>
                  <div class="col-lg-4 col-md-4">
                      <div class="memory">
                              <img src="assets/images/a.jpg" alt="">
                            </div>
                     </div> 

                       <div class="col-lg-4 col-md-4">
                      <div class="memory">
                    <img src="assets/images/a.jpg" alt="">
                         </div>

                  </div> 
                  <div class="col-lg-4 col-md-4">
                      <div class="memory">
                              <img src="assets/images/a.jpg" alt="">
                            </div>
                     </div> 
                     <br>
                      <div class="col-lg-4 col-md-4">
                      <div class="memory">
                              <img src="assets/images/a.jpg" alt="">
                            </div>
                     </div> 

                       <div class="col-lg-4 col-md-4">
                      <div class="memory">
                    <img src="assets/images/a.jpg" alt="">
                         </div>

                  </div> 
                  <div class="col-lg-4 col-md-4">
                      <div class="memory">
                              <img src="assets/images/a.jpg" alt="">
                            </div>
                     </div> 

  </section>

  <footer>
    <!-- Footer Start-->
    <div class="footer-main footer-bg">
    <div id="about" style="text-align: center; " class="footer-area footer-padding">
       
                            <h4 style="text-align: center; font-size: 40px; ">ABOUT US</h4>
                         <p style="text-align: center; padding: 30px; color: #555;"> 
                            The main goal of this idea is to reduce the kidnapping and loss of children.
                             This is achieved by ensuring that the site guarantees to the
                              person in charge of the playroom clear data on all children present in it,
                               the time of arrival of each child, the end date of each child's game,
                                and a way to communicate with the mother of the child to reach her easily in 
                                case A problem occurs with the child.
                            </p> 
                    </div>
                
            </div>
        </div>
    </div>
  
</footer>




        @endsection

      
          
      