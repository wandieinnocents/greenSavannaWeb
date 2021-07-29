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
                    <li><a href="/service">SERVICES</a></li>
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
                <h1>Services</h1>
                <!-- Breadcrumbs -->
                <ul class="breadcrumb">
                    <li>Home</li>
                    <li class="current"> Services </li>
                </ul>
                <!--/ Breadcrumbs -->
            </div>
        </div>
    </div>
</header>


<section>
<br><br>
<div class="section-title home-v2">
            <h2>OUR SERVICES</h2>
            <p>WE ARE INVESTED IN THE PRODUCTION OF EUCALYPTUS HYBRID CLONES, SEEDLINGS OF EUCALYPTUS GRANDIS, MANY INDIGENOUS TREE SPECIES.</p>
</div>

<div class="container">
        <div class="row">
            @foreach($all_services as $fetch_service)
            <!-- project -->
            <div class="col-md-4">
                <div class="thumbnail-card">

                    <figure class="card-img overlay">

                    <img src="{{ $fetch_service->service_image }}" alt="img"  width="75">

                    <div class="card-caption">
                        
                        <h3>{{ $fetch_service->service_name }} </h3>
                        <p>{{ $fetch_service->service_description }}</p>
                    </div>

                    
                </div>
                <div class="row">

                <div class="col-md-12 submit-btn">
                <a href="services/{{ $fetch_service->id }}"><button class="btn btn-contact"> View Details</button></a>
                <br><br>

                </div>
               </div>
                </div>
            @endforeach
            <!-- project -->
           
            
        </div>
    </div>
        
    </section> 




<!-- END OF CONTENT -->
@stop 