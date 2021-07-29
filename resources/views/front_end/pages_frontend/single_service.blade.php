@extends('front_end.layouts.layout_master_frontend')

@section('title')

@stop 

@section('content')
<!-- assets/frontendassets/img/images/pages-bg.jpg -->
<!-- CONTENT -->

<header class="pages-header" style="background:url('{{ asset('assets/frontendassets/img/images/pages-bg.jpg') }}')">
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
                    <li><a href="{{ route('orders.create') }}">ORDER</a>
                       
                    </li>
                </ul>
            </div>
        </nav>
    </div>
<!-- end nav -->
<div class="sections" >
        <div class="container">
            <div class="pages-title">
                <h1>{{ $service->service_name }}</h1>
                <!-- Breadcrumbs -->
                <ul class="breadcrumb">
                    <li>Home</li>
                    <li class="current">Service</li>
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
                  <h5>Service Details</h5>
                  <h2>{{ $service->service_name }}</h2>
                  <p>{{ $service->service_description }}</p>
                </div>
              </div>
              <div class="col-lg-6 space-break">
                <figure class="about-img">
                
                    <img class="card-img-top img-fluid" src="{{ asset($service->service_image)  }}" alt="Card image cap">
                </figure>
              </div>
            </div>
            <hr class="section-divider">
          
        </div>
        <!-- ABOUT SECTION END -->
        
     
        
     
  
        
       
        
    </section> 




<!-- END OF CONTENT -->
@stop 