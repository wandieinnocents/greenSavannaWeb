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
                       
                    </li>
                </ul>
            </div>
        </nav>
    </div>
<!-- end nav -->
<div class="sections" >
        <div class="container">
            <div class="pages-title">
                <h1>{{ $project->title }}</h1>
                <!-- Breadcrumbs -->
                <ul class="breadcrumb">
                    <li>Home</li>
                    <li class="current">Projects</li>
                </ul>
                <!--/ Breadcrumbs -->
            </div>
        </div>
    </div>
</header>


<section>
        
        <!-- ABOUT SECTION START -->
         <div class="container">
          <center>
          <div class="row">
              <div class="col-lg-12" >
                    <div class="about-info">
                    <h5>Project Details</h5>
                    <h2>{{ $project->title }}</h2>
                    <p><strong>Customized advice to smallholder farmers with radical efficiency and scalability agricultural.</strong></p>
                    <p>{{ $project->description }}</p>
                    </div>
              </div>
            </div>
            </center>
            <hr class="section-divider">

            <!-- section for more images here -->
            <div class="row">
                    <!-- col1 -->
                    <div class="col-lg-4">
                        <figure class="about-img">
                            <img class="card-img-top img-fluid" src="{{ asset($project->project_image) }}" alt="Add Photo">
                        </figure>
                    </div>

                    <!-- col1 -->
                    <div class="col-lg-4">
                        <figure class="about-img">
                            <img class="card-img-top img-fluid" src="{{ asset($project->project_image_two) }}" alt="Add Photo">
                        </figure>
                    </div>


                    <!-- col1 -->
                    <div class="col-lg-4">
                        <figure class="about-img">
                            <img class="card-img-top img-fluid" src="{{ asset($project->project_image_three) }}" alt="Add Photo">
                        </figure>
                    </div>

            </div>
            <!-- end of section for more images -->

          
        </div>
        <!-- ABOUT SECTION END -->
        
     
        
     
  
        
       
        
    </section> 




<!-- END OF CONTENT -->
@stop 