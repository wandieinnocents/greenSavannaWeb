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
                <h1>Order</h1>
                <!-- Breadcrumbs -->
                <ul class="breadcrumb">
                    <li>Home</li>
                    <li class="current">Orders</li>
                </ul>
                <!--/ Breadcrumbs -->
            </div>
        </div>
    </div>
</header>



<section>
        <!-- CONTACT START -->
        <div class="container" style="margin-top:-50px;">
            <div class="row">
                 <!-- col -->
              <div class="col-lg-3 col-md-3">
               
               </div>
             <!-- col -->

             <!-- orders colunm -->
              <div class="col-lg-6 col-md-6">
              <br><br><br><br>
                <div class="contact-info">
                    <h5>FILL THE FORM TO</h5>
                    <h2>PLACE YOUR ORDER </h2> 
                    <form  action="{{ route('orders.store') }}"  method="post" >
                    @csrf 
                    <div class="messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="fullname" class="form-control customize-contact-alt" placeholder="Fullname" required="required" data-error="Fullname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input  type="text" name="location" class="form-control customize-contact-alt" placeholder="Location" required="required" data-error="Location is required.">
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
                                    <p><input type="submit" class="btn btn-contact"style="width:100%;background-color:green;color:#ffffff;" value="ORDER"></p>
                                </div>
                            </div>
                        </div>
                    </form> 
                </div>  
              </div>
              <!-- end of orders column -->
              <!-- col -->
              <div class="col-lg-1 col-md-1">
               
              </div>
            <!-- col -->
            </div>
        </div>
        <!-- CONTACT END -->
       
    </section>




<!-- END OF CONTENT -->
@stop 