@extends('front_end.layouts.layout_master_frontend')

@section('title')

@stop 

@section('content')


<header >
<!-- nav -->
<div class="container main-nav">
        <nav id="navigation1" class="navigation">
            <div class="nav-header">
                <a class="nav-logo" href="/">

                    <!-- <img src="assets/frontendassets/img/master/logo_new.png"  class="white-logo" alt=""> -->
                    <h3 class="white-logo" style="color:#ffffff; margin-top:25px;"><strong>GREEN SAVANNAH</strong></h3>
                    <img src="assets/frontendassets/img/master/logo_new.png"  class="dark-logo" alt="">

                </a>
                <div class="nav-toggle"></div>
            </div>
            <div class="nav-menus-wrapper">
                <ul class="nav-menu align-to-right">
                    <li><a href="/">HOME</a>
                        
                    </li>
                    <li><a href="#">KNOW US</a>
                        <ul class="nav-dropdown">
                            <li><a href="/about">ABOUT US</a></li>
                            <!-- <li><a href="/team">TEAM</a></li> -->
                            <li><a href="/project">PROJECTS</a></li>
                            
                        </ul>
                    </li>
                    <li><a href="/pricing">PRICING</a>
                    <li><a href="/service">SERVICES</a>
                        
                    </li>
                    <li><a href="pictorial">PICTOGRAPHY</a></li>
                   
                    <li><a href="{{ route('contacts.create') }}">CONTACT</a>
                    <li><a href="{{ route('orders.create') }}">ORDER</a>
                       
                    </li>
                </ul>
            </div>
        </nav>
    </div>
<!-- end nav -->

</header>



<div class="home-slider">
        <!-- SLIDER REVOLUTION START -->
       @include('front_end.includes_frontend.slider')
        <!-- SLIDER REVOLUTION END -->
</div>

<!-- CONTENT -->
<section>
<br><br>
<div class="section-title home-v2">
            <h2>What We Do</h2>
            <p>we are invested in the production of eucalyptus hybrid clones, seedlings of eucalyptus grandis, many indigenous tree species.</p>
</div>


    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail-card">
                    <figure class="card-img overlay"><img  src="assets/frontendassets/img/images/seedlings.png" alt="" ></figure>

                    <div class="card-caption">
                        <h3>Seedlings Productin</h3>
                        <p>Production of high-quality seedlings/plantlets inlcuding Eucalyptus & Hass avocado.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 center-box">
                <div class="thumbnail-card">
                    <figure class="card-img overlay"><img src="assets/frontendassets/img/images/forestcontracting.jpeg" alt="" ></figure>
                    <div class="card-caption">
                        <h3>Forestry contracting</h3>
                        <p>We also do Commercial forest establishment , and Commercial forestry harvesting.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail-card">
                    <figure class="card-img overlay"><img src="assets/frontendassets/img/images/trainings.png" alt="" ></figure>
                    <div class="card-caption">
                        <h3>Trainings</h3>
                        <p>We also handle Hands on training of the communities interested . </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

          <!-- ABOUT SECTION START -->
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="about-info">
                  <h5>KNOW US </h5>
                  <h2>OUR BACKGROUND</h2>
                  <p><strong>GREEN SAVANNAH is very passionate about the agroforestry as a route to sustainable income.</strong></p>
                  <p>We are GREEN SAVANNA HOLDINGS LTD with interests in agroforestry, horticulture and echo tourism in Uganda since 2017. 
                      Specifically, we are invested in the production of eucalyptus hybrid clones, seedlings of eucalyptus grandis, many indigenous
                       tree species and fruit trees such as Hass Avocado. We are based in Mubende and Buhweju districts where we have been working
                        on raising quality tree seedlings/plantlets .
                    
                    
                    </p>
                </div>
              </div>
              <div class="col-lg-6 space-break">
                <figure class="about-img"><img src="assets/frontendassets/img/images/aboutimgone.png" alt="" style="border-radius:100px 0px 100px 0px ;"></figure>
              </div>
            </div>
</div

            <!-- about end  -->
  
    
    <div class="container-fluid inner-color">
        <div class="container mt-4 mb-4">
        <div class="section-title home-v2">
            <h2>KNOW MORE ABOUT US</h2>
            <p>GREEN SAVANNAH is very passionate about the agroforestry as a route to sustainable income, employment creation and climate change mitigation.</p>
        </div>
        <div class="text-center">
            <div class="row clear-problem">
                <!-- EACH FEATURE -->
                <div class="col-md-6 col-lg-4">
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <div class="features-info">
                            <h4 class="title">Mission</h4>
                            <p>To be a leading stakeholder in the agroforestry value chain for sustainable economic development and climate change mitigation.  </p>
                        </div>
                    </div> <!-- //features-item -->
                </div> <!-- //.col-sm-6 col-md-4 -->

                <!-- EACH FEATURE -->
                <div class="col-md-6 col-lg-4">
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="fas fa-magic"></i>
                        </div>
                        <div class="features-info">
                            <h4 class="title">Vision</h4>
                            <p>Our vision is To be the leading producers of quality seedlings/plantlets and forestry contactors in Uganda.</p> <br>
                        </div>
                    </div> <!-- //features-item -->
                </div> <!-- //.col-sm-6 col-md-4 -->

                <!-- EACH FEATURE -->
                <div class="col-md-6 col-lg-4">
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="fas fa-lemon"></i>
                        </div>
                        <div class="features-info">
                            <h4 class="title">Core Values</h4>
                            <p>Our core values are Quality, Honesty,Transparency ,Trustworthiness , Hard work ,Customer Experience , Learning</p><br>
                        </div>
                    </div> <!-- //features-item -->
                </div> <!-- //.col-sm-6 col-md-4 -->

              

              
            </div> <!-- //row -->
        </div>
    </div> <!-- //container -->
    </div>
    
    
    <!-- CLIENTS START -->
        <!-- <div class="container-fluid clients-bar">
            <div class="container">
                <div class="clients-carousel slider">
                  <div class="slide">
                      <figure class="clients-logo"><img src="img/images/client-1.png" alt=""></figure>
                  </div>
                  <div class="slide">
                      <figure class="clients-logo"><img src="img/images/client-2.png" alt=""></figure>
                  </div>
                  <div class="slide">
                      <figure class="clients-logo"><img src="img/images/client-3.png" alt=""></figure>
                  </div>
                  <div class="slide">
                      <figure class="clients-logo"><img src="img/images/client-5.png" alt=""></figure>
                  </div>
                  <div class="slide">
                      <figure class="clients-logo"><img src="img/images/client-6.png" alt=""></figure>
                  </div>
                  <div class="slide">
                      <figure class="clients-logo"><img src="img/images/client-7.png" alt=""></figure>
                  </div>
                  <div class="slide">
                      <figure class="clients-logo"><img src="img/images/client-8.png" alt=""></figure>
                  </div>
                  <div class="slide">
                      <figure class="clients-logo"><img src="img/images/client-1.png" alt=""></figure>
                  </div>
                </div>
            </div>
        </div> -->
        <!-- CLIENTS END -->

</section>
<!-- END OF CONTENT -->
@stop 