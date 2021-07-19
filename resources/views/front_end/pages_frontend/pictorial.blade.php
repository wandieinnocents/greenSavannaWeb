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
                       
                    </li>
                </ul>
            </div>
        </nav>
    </div>
<!-- end nav -->
<div class="sections" >
        <div class="container">
            <div class="pages-title">
                <h1>Gallery</h1>
                <!-- Breadcrumbs -->
                <ul class="breadcrumb">
                    <li>Home</li>
                    <li class="current">Gallery</li>
                </ul>
                <!--/ Breadcrumbs -->
            </div>
        </div>
    </div>
</header>
 
<section>
<br><br>
<div class="section-title home-v2">
            <h2>What We Do</h2>
            <p>We specialise in intelligent & effective Search and believes in the power of partnerships to grow business.</p>
</div>

        <!-- PROJECT GRID START -->
        <div class="container">
            <!-- <div class="filter-container">
                <ul class="filter">
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".land">Land</li>
                    <li data-filter=".equipment">Equipment</li>
                    <li data-filter=".farm">Farm</li>
                </ul>
            </div> -->

            <div class="grid" id="kehl-grid">
                    <div class="grid-sizer">

                    </div>            
                       <!-- COL -->
                       @foreach($pictorials as $pictorial)
                            <div class="grid-box ">
                                    <div class="image-mask">

                                    </div>
                                    <img src="{{ Storage::url($pictorial->gallery_image) }}" alt="img" width="75">
                                    <h3>{{ $pictorial->title }}</h3>
                                   
                             </div>
                      @endforeach
                        <!-- COL -->
             </div>
           </div>
        <!-- PROJECT GRID END -->
    </section>




<!-- END OF CONTENT -->
@stop 