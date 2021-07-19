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
                <h1>PRICING</h1>
                <!-- Breadcrumbs -->
                <ul class="breadcrumb">
                    <li>Home</li>
                    <li class="current"> Pricing </li>
                </ul>
                <!--/ Breadcrumbs -->
            </div>
        </div>
    </div>
</header>


<section>
<br><br>
<div class="section-title home-v2">
            <h2>OUR PRICING</h2>
            <p>TAKE A LOOK AT OUR PRICING AND GET IN TOUCH WITH US .</p>
            <center> <a href="/contacts/create"><button class="btn btn-contact" style="width:20%;background-color:green;color:#ffffff;">TALK TO US</button></a></center>
</div>

    <div class="container">
        <div class="row">
           
            <table class="table table-bordered table-condensed">
            <tr style="background-color:green;color:#ffffff;">
                <th>ID</th>
                <th>TREE TYPE</th>
                <th>PRICE</th>
                
            </tr>
            
            <!-- TABLE ROW -->
            <tr>
                <td>1</td>
                <td>Eucalyptus Grandis (Fortportal seed)</td>
                <td>200</td>
            </tr>
            <!-- END OF TABLE ROW -->

                   
            <!-- TABLE ROW -->
            <tr>
                <td>2</td>
                <td>Eucalyptus Grandis (South Africa seed)</td>
                <td>300</td>
            </tr>
            <!-- END OF TABLE ROW -->


                   
            <!-- TABLE ROW -->
            <tr>
                <td>3</td>
                <td>Eucalyptus Camaldulensis</td>
                <td>200</td>
            </tr>
            <!-- END OF TABLE ROW -->


                   
            <!-- TABLE ROW -->
            <tr>
                <td>4</td>
                <td>Eucalyptus GU7& GU8 Clones</td>
                <td>800</td>
            </tr>
            <!-- END OF TABLE ROW -->


                   
            <!-- TABLE ROW -->
            <tr>
                <td>5</td>
                <td>Eucalyptus GC550 & GC796/2</td>
                <td>600</td>
            </tr>
            <!-- END OF TABLE ROW -->

           <!-- TABLE ROW -->
           <tr>
                <td>6</td>
                <td>Grivelia</td>
                <td>1000</td>
            </tr>
            <!-- END OF TABLE ROW -->

            <!-- ANIMAL FOODER SECTION  -->
             <!-- TABLE ROW -->
           <tr style="background-color:green;color:#ffffff;">
                <td></td>
                <td>ANIMAL FOODER </td>
                <td></td>
            </tr>
            <!-- END OF TABLE ROW -->


           <!-- TABLE ROW -->
           <tr>
                <td>7</td>
                <td>Calliandra Calothyrsus</td>
                <td>500</td>
            </tr>
            <!-- END OF TABLE ROW -->


           <!-- TABLE ROW -->
           <tr>
                <td>8</td>
                <td>Sesbania Sesban</td>
                <td>500</td>
            </tr>
            <!-- END OF TABLE ROW -->

            <!-- INDEGINOUS TREES  SECTION  -->
             <!-- TABLE ROW -->
           <tr style="background-color:green;color:#ffffff;">
                <td></td>
                <td>INDEGINOUS TREES </td>
                <td></td>
            </tr>
            <!-- END OF TABLE ROW -->


           <!-- TABLE ROW -->
           <tr>
                <td>9</td>
                <td>Khaya Anthotheca (Mahogany)</td>
                <td>1000</td>
            </tr>
            <!-- END OF TABLE ROW -->


           <!-- TABLE ROW -->
           <tr>
                <td>10</td>
                <td>Maesopsis Eminii (Musizi)</td>
                <td>1000</td>
            </tr>
            <!-- END OF TABLE ROW -->
            

           <!-- TABLE ROW -->
           <tr>
                <td>11</td>
                <td> Markamia Lutea  (Omusha/Musambya) </td>
                <td>500</td>
            </tr>
            <!-- END OF TABLE ROW -->


           <!-- TABLE ROW -->
           <tr>
                <td>12</td>
                <td>Afzelia African  (Exotic Mahogany)</td>
                <td>500</td>
            </tr>
            <!-- END OF TABLE ROW -->


           <!-- TABLE ROW -->
           <tr>
                <td>13  </td>
                <td>Prunus African (Entasesa)</td>
                <td>2000</td>
            </tr>
            <!-- END OF TABLE ROW -->


           <!-- TABLE ROW -->
           <tr>
                <td>14</td>
                <td>Bambus Vulgaris (Yellow Bamboo)</td>
                <td>5000</td>
            </tr>
            <!-- END OF TABLE ROW -->

        <!-- FRUIT TREES  SECTION  -->
             <!-- TABLE ROW -->
             <tr style="background-color:green;color:#ffffff;">
                <td></td>
                <td>FRUIT TREES </td>
                <td></td>
            </tr>
            <!-- END OF TABLE ROW -->

            <!-- TABLE ROW -->
           <tr>
                <td>15</td>
                <td>Vines/Grapes</td>
                <td>2500</td>
            </tr>
            <!-- END OF TABLE ROW -->

            <!-- TABLE ROW -->
           <tr>
                <td>16</td>
                <td>Hass Avocado</td>
                <td>6000</td>
            </tr>
            <!-- END OF TABLE ROW -->

            





















            </table>
            
           
            
        </div>
    </div>
        
    </section> 




<!-- END OF CONTENT -->
@stop 