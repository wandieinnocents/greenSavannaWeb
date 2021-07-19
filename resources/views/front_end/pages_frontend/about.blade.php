@extends('front_end.layouts.layout_master_frontend')

@section('title')

@stop 

@section('content')
<!-- assets/frontendassets/img/images/pages-bg.jpg -->
<!-- CONTENT -->

<header class="pages-header" style="background:url('assets/frontendassets/img/images/aa.png')">
<!-- nav -->
<div class="container main-nav">
        <nav id="navigation1" class="navigation">
            <div class="nav-header">
            <a class="nav-logo" href="/">
                <h3 class="white-logo" style="color:#ffffff; margin-top:25px;"><strong>GREEN SAVANNAH</strong></h3>
                <img src="{{ asset('assets/frontendassets/img/master/logo_new.png') }}"  class="dark-logo" alt="">
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
                    <li><a href="/pricing">PRICING</a></li>
                    <li><a href="/service">SERVICES</a>
                        
                    </li>
                    <li><a href="/pictorial">PICTOGRAPHY</a></li>
                   
                    <li><a href="{{ route('contacts.create') }}">CONTACT</a>
                       
                    </li>
                </ul>
            </div>
        </nav>
    </div>
<!-- end nav -->
<div class="sections" >
        <div class="container">
            <div class="pages-title">
                <h1>About Us</h1>
                <!-- Breadcrumbs -->
                <ul class="breadcrumb">
                    <li>Home</li>
                    <li class="current">About Us</li>
                </ul>
                <!--/ Breadcrumbs -->
            </div>
        </div>
    </div>
</header>


<section>
        
        <!-- ABOUT SECTION START -->
         <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="about-info">
                  <h5>ABOUT US</h5>
                  <h2>BACKGROUND</h2>
                  <p><strong>GREEN SAVANNAH is very passionate about the agroforestry as a route to sustainable income.</strong></p>
                  <p>We are GREEN SAVANNA HOLDINGS LTD with interests in agroforestry, horticulture and echo tourism in Uganda since 2017. Specifically, 
                    we are invested in the production of eucalyptus hybrid clones, seedlings of eucalyptus grandis, many indigenous tree species 
                    and fruit trees such as Hass Avocado. We are based in Mubende and Buhweju districts where we have been working on raising 
                    quality tree seedlings/plantlets and commercial forest establishment. Green Savanna Clonal Nursery has an established capacity 
                    of producing over 600,000 eucalyptus clonal seedlings annually majorly GU7&8 and GC 550. We are also forestry contractors 
                    focusing on establishing commercial plantations of both indigenous and exotic tree species.
                    
                    </p>
                </div>
              </div>
              <div class="col-lg-6 space-break"> 
                <br><br><br>
                <figure class="about-img"><img src="assets/frontendassets/img/images/aboutimgone.png" alt=""></figure>
              </div>
            </div>

            <!-- about end  -->
            <hr class="section-divider">
            <div class="about-bar">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="ab-box">
                        <figure class="ab-icon" style="color:green;"><img src="assets/frontendassets/img/master/farmer.svg" alt=""></figure>  
                        <div class="ab-caption">
                            <h4>Qualified Staff</h4>
                            <p>We have qualified staff</p>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4 center-box">
                    <div class="ab-box">
                        <figure class="ab-icon"><img src="assets/frontendassets/img/master/plant.svg" alt=""></figure>  
                        <div class="ab-caption">
                            <h4>Quality Seedlings </h4>
                            <p>Our Seedlings are reliable.</p>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="ab-box">
                        <figure class="ab-icon"><img src="assets/frontendassets/img/master/tools.svg" alt=""></figure>  
                        <div class="ab-caption">
                            <h4>Great Partnerships</h4>
                            <p>We partner with the best.</p>
                        </div>
                    </div>
                  </div>
                </div>
            </div>

            
            <hr class="section-divider">
            <!-- more content -->
            <div class="row">
              <!-- col -->
              <div class="col-lg-6">
                <div class="about-info">
                  <h5>GREEN SAVANNAH</h5>
                  <h2>PASSIONATE ABOUT AGROFORESTRY </h2>
                  <p><strong>GREEN SAVANNAH is very passionate about the agroforestry as a route to sustainable income, employment creation and climate change mitigation.</strong></p>
                  <p>We ensure our customers get the highest quality seedlings/plantlets for their planting needs. 
                    All the forests we establish, it is done as per the international silvicultural standards.
                    We have closely worked with the Ugandan ministry of water and environment, FAO and SPGS III Project and we intend to be the leading producer of hybrid 
                    clonal seedlings in the country and the most reliable forestry contractor in the agroforestry industry. 
                  
                  
                  </p>
                </div>
              </div>
              <!-- col -->
              <div class="col-lg-6 space-break">
              <div class="about-info">
                  <br><br><br>
                  <p>This business was started when even after booking seedlings in the
                     certified nurseries for plantlets well in advance, we would still fail to get 
                     quality plantlets when rains start. You would end up getting either left-over 
                     seedlings from the previous season of very young and immature seedlings that 
                     aren’t well hardened. Other nurseries would deliver plantlets that were not of 
                     the ordered hybrid clones, for instance one nursery supposedly supplied GC 550 
                     which later turned out to be GC 796/1 after planting.
                  
                  
                  </p>
                  <p>We have plans of expanding our scope to include fruit & nut trees’ seedlings production with 
                    major focus on the Hass avocado and macadamia, respectively. 
</p>
                </div>              
              </div>

            </div>
            
        </div>
        <!-- ABOUT SECTION END -->
        
     
  
        
       
        
    </section> 




<!-- END OF CONTENT -->
@stop 