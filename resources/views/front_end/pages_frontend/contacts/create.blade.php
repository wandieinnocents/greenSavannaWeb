@extends('front_end.layouts.layout_master_frontend')

@section('title')

@stop 

@section('content')
<!-- assets/frontendassets/img/images/pages-bg.jpg -->
<!-- CONTENT -->

<header class="pages-header" style="background:url('{{ asset('assets/frontendassets/img/images/aa.png') }}')">

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
                       
                    </li>
                </ul>
            </div>
        </nav>
    </div>
<!-- end nav -->
<div class="sections" >
        <div class="container">
            <div class="pages-title">
                <h1>Contact Us</h1>
                <!-- Breadcrumbs -->
                <ul class="breadcrumb">
                    <li>Home</li>
                    <li class="current">Contact Us</li>
                </ul>
                <!--/ Breadcrumbs -->
            </div>
        </div>
    </div>
</header>



<section>
        <!-- CONTACT START -->
        <div class="container">
            <div class="row">
                
              <div class="col-lg-6">
              <br><br><br><br>
                <div class="contact-info">
                    <h5>OUR OFFICE</h5>
                    <h2>Get In Touch</h2> 
                    <form  action="{{ route('contacts.store') }}"  method="post" >
                    @csrf 
                    <div class="messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="fullname" class="form-control customize-contact-alt" placeholder="Fullname" required="required" data-error="Fullname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_email" type="email" name="email" class="form-control customize-contact-alt" placeholder="Email address" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_phone" type="tel" name="phone" class="form-control customize-contact-alt" placeholder="Please enter your phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="form_message" name="description" class="form-control customize-contact-alt" placeholder="Your message" rows="7" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 submit-btn">
                                    <p><input type="submit" class="btn btn-contact" value="Send message"></p>
                                </div>
                            </div>
                        </div>
                    </form> 
                </div>  
              </div>
              <div class="col-lg-6 space-break">
                <div class="contact-info-right">
                    <h5>Talk to us </h5>
                    <h3>We have a quick response team </h3>
                    <p>We have a quick response team that will respond to you anytime you have any inquiries for us , kindly leave us a message in the form. <p>
                    <hr class="contact-divider">
                    <div class="box-contact">
                        <div class="bc-icon"><i class="fas fa-map-marker"></i></div>
                        <div class="bc-caption">
                            <p>PO Box 33195 NW 56th St Miami, Florida, US</p>
                        </div>
                    </div>
                    <hr class="contact-divider">
                    <div class="box-contact">
                        <div class="bc-icon phone-icon"><i class="fas fa-phone-volume"></i></div>
                        <div class="bc-caption">
                            <p>Operations Manager <br>Julius Amumpe +256773717636</p>
                        </div>

                        <div class="bc-icon phone-icon"><i class="fas fa-phone-volume"></i></div>
                        <div class="bc-caption">
                            <p>Marketing and Sales Manager <br>Ingrid Ainembabazi +256703700630</p>
                            <br>
                            <hr class="contact-divider">

                            <p>Whatsapp; +256701186436</p>
                            <p>Twitter; @greensavannah</p>
                            <p>Instagram; Green Savannah Clonal Nursery</p>
                            <p>Facebook; Green Savannah Clonal Nursery</p>

                        </div>

                        
                    </div>
                    <hr class="contact-divider">
                    <div class="box-contact">
                        <div class="bc-icon phone-icon"><i class="fas fa-envelope"></i></div>
                        <div class="bc-caption">
                            <p>info@greensavanah.com.com</p>
                        </div>
                    </div>
                </div>  
              </div>
            </div>
        </div>
        <!-- CONTACT END -->
        
        <!-- MAP START -->
        <div class="bottom-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31917.012692915036!2d31.369957747212137!3d0.5617098874043176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1763241c7be83eb1%3A0x4704f8c044e3382c!2sMubende!5e0!3m2!1sen!2sug!4v1625921671492!5m2!1sen!2sug" class="map-iframe-alt" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!-- MAP END -->
    </section>




<!-- END OF CONTENT -->
@stop 