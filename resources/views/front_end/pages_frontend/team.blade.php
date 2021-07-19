@extends('front_end.layouts.layout_master_frontend')

@section('title')

@stop 

@section('content')
<!-- assets/frontendassets/img/images/pages-bg.jpg -->
<!-- CONTENT -->

<header class="pages-header" style="background:url('assets/frontendassets/img/images/pages-bg.jpg')">
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
                    <li><a href="/service">SERVICES</a>
                        
                    </li>
                    <li><a href="/pricing">PRICING</a></li>
                    <li><a href="/pictorial">PICTOGRAPHY</a></li>
                   
                    <li><a href="/contact">CONTACT</a>
                       
                    </li>
                </ul>
            </div>
        </nav>
    </div>
<!-- end nav -->
<div class="sections" >
        <div class="container">
            <div class="pages-title">
                <h1>Team</h1>
                <!-- Breadcrumbs -->
                <ul class="breadcrumb">
                    <li>Home</li>
                    <li class="current">Team</li>
                </ul>
                <!--/ Breadcrumbs -->
            </div>
        </div>
    </div>
</header>

<section>
        <!-- TEAM START -->
        <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="team-portrait">
                    <figure class="tp-headshot"><img src="assets/frontendassets/img/images/headshot1.jpg" alt=""></figure> 
                    <div class="tp-caption">
                        <div class="inner-tp-caption">
                            <h3>Byan Smith</h3>
                            <p>Stocker</p>
                            <div class="tp-social">
                                <div class="social-icon"><p><a href="#"><i class="fab fa-facebook-f"></i></a></p></div>
                                <div class="social-icon"><p><a href="#"><i class="fab fa-twitter"></i></a></p></div>
                                <div class="social-icon"><p><a href="#"><i class="fab fa-linkedin-in"></i></a></p></div>
                            </div>
                        </div>
                    </div>
                 </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 tm-view">
                <div class="team-portrait">
                    <figure class="tp-headshot"><img src="assets/frontendassets/img/images/headshot2.jpg" alt=""></figure> 
                    <div class="tp-caption">
                        <div class="inner-tp-caption">
                            <h3>Laura Smith</h3>
                            <p>Food Production</p>
                            <div class="tp-social">
                                <div class="social-icon"><p><a href="#"><i class="fab fa-facebook-f"></i></a></p></div>
                                <div class="social-icon"><p><a href="#"><i class="fab fa-twitter"></i></a></p></div>
                                <div class="social-icon"><p><a href="#"><i class="fab fa-linkedin-in"></i></a></p></div>
                            </div>
                        </div>
                    </div>
                 </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 tt-view">
                <div class="team-portrait">
                    <figure class="tp-headshot"><img src="assets/frontendassets/img/images/headshot3.jpg" alt=""></figure> 
                    <div class="tp-caption">
                        <div class="inner-tp-caption">
                            <h3>Tin Douglas</h3>
                            <p>Laborer</p>
                            <div class="tp-social">
                                <div class="social-icon"><p><a href="#"><i class="fab fa-facebook-f"></i></a></p></div>
                                <div class="social-icon"><p><a href="#"><i class="fab fa-twitter"></i></a></p></div>
                                <div class="social-icon"><p><a href="#"><i class="fab fa-linkedin-in"></i></a></p></div>
                            </div>
                        </div>
                    </div>
                 </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 td-view">
                <div class="team-portrait">
                    <figure class="tp-headshot"><img src="assets/frontendassets/img/images/headshot4.jpg" alt=""></figure> 
                    <div class="tp-caption">
                        <div class="inner-tp-caption">
                            <h3>Robert Jones</h3>
                            <p>Warehouse</p>
                            <div class="tp-social">
                                <div class="social-icon"><p><a href="#"><i class="fab fa-facebook-f"></i></a></p></div>
                                <div class="social-icon"><p><a href="#"><i class="fab fa-twitter"></i></a></p></div>
                                <div class="social-icon"><p><a href="#"><i class="fab fa-linkedin-in"></i></a></p></div>
                            </div>
                        </div>
                    </div>
                 </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 td-view">
                <div class="team-portrait">
                    <figure class="tp-headshot"><img src="assets/frontendassets/img/images/headshot5.jpg" alt=""></figure> 
                    <div class="tp-caption">
                        <div class="inner-tp-caption">
                            <h3>Albert Cimino</h3>
                            <p>Laborer</p>
                            <div class="tp-social">
                                <div class="social-icon"><p><a href="#"><i class="fab fa-facebook-f"></i></a></p></div>
                                <div class="social-icon"><p><a href="#"><i class="fab fa-twitter"></i></a></p></div>
                                <div class="social-icon"><p><a href="#"><i class="fab fa-linkedin-in"></i></a></p></div>
                            </div>
                        </div>
                    </div>
                 </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 td-view">
                <div class="team-portrait">
                    <figure class="tp-headshot"><img src="assets/frontendassets/img/images/headshot6.jpg" alt=""></figure> 
                    <div class="tp-caption">
                        <div class="inner-tp-caption">
                            <h3>Sara Thomas</h3>
                            <p>Marketing</p>
                            <div class="tp-social">
                                <div class="social-icon"><p><a href="#"><i class="fab fa-facebook-f"></i></a></p></div>
                                <div class="social-icon"><p><a href="#"><i class="fab fa-twitter"></i></a></p></div>
                                <div class="social-icon"><p><a href="#"><i class="fab fa-linkedin-in"></i></a></p></div>
                            </div>
                        </div>
                    </div>
                 </div>
              </div>
            </div>
        </div>
        <!-- TEAM END -->
    </section>



<!-- END OF CONTENT -->
@stop 