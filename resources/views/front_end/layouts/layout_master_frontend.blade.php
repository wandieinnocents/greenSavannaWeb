<!DOCTYPE html>
<html lang="en-US" class="no-js">
	
<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        
		<!-- TITLE -->
		<title>Green Savannah</title>
        
        <!-- META TAGS -->
        <meta name="keywords" content="">

		<!--  FAVICON  -->
        <link rel="shortcut icon" href="{{ asset('assets/frontendassets/img/master/favicon.png') }}">
             
        <!-- REVOLUTION ADDONS -->
        <link href="http://fonts.googleapis.com/css?family=Roboto%3A700%2C300" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontendassets/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontendassets/revolution/fonts/font-awesome/css/font-awesome.css') }}">
		
        <!-- REVOLUTION STYLE SHEETS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontendassets/revolution/css/settings.css') }}">
		
        <!-- REVOLUTION LAYERS STYLES -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontendassets/revolution/css/layers.css') }}">
		
        <!-- REVOLUTION NAVIGATION STYLES -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontendassets/revolution/css/navigation.css') }}">
        
        <!-- LOADING FONTS AND ICONS -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400%7CMontserrat:600%2C400" rel="stylesheet" property="stylesheet" type="text/css" media="all">
		<link href="http://fonts.googleapis.com/css?family=Roboto+Slab%3A400" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
        <link href="http://fonts.googleapis.com/css?family=Roboto%3A900%2C700" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
        
        <!-- BOOTSTRAP FRAMEWORK STYLES -->
        <link rel="stylesheet" href="{{ asset('assets/frontendassets/css/bootstrap.min.css') }}">
        
        <!-- FONT AWESOME ICONS LIBRARY -->
        <link rel="stylesheet" href="{{ asset('assets/frontendassets/fonts/css/all.min.css') }}">
        
        <!-- MAIN CSS STYLE SHEET -->
        <link rel="stylesheet" href="{{ asset('assets/frontendassets/css/navigation.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontendassets/css/stylesheet.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontendassets/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontendassets/css/farmite.min.css') }}"> 
        
        <!-- MODERNIZR LIBRARY -->
        <script src="{{ asset('assets/frontendassets/js/modernizr-custom.js') }}"></script>
        
	</head>
    
<body>
    
    <!-- PRELOADER START -->
    <div id="loader-wrapper">
        <div class="loader">
           <div class="ball"></div>
           <div class="ball"></div>
           <div class="ball"></div>
           <div class="ball"></div>
           <div class="ball"></div>
           <div class="ball"></div>
           <div class="ball"></div>
           <div class="ball"></div>
           <div class="ball"></div>
           <div class="ball"></div>
        </div> 
    </div>
    <!-- PRELOADER END -->
     
<!-- HEADER START -->
<header>
    <!-- NAVBAR START -->
    @include('front_end.includes_frontend.nav')
    <!-- NAVBAR END -->

     
</header>
<!-- HEADER END -->
    
<!-- content area -->
    @yield('content')
<!-- end of content area -->
    
    <!-- FOOTER START -->
   @include('front_end.includes_frontend.footer')
    <!-- FOOTER END -->
    
    <!-- SCROLL TOP -->
    <a href="#0" class="cd-top">Top</a>
	
    <!-- TEMPLATE MAIN JAVASCRIPT FILES -->
    <script src="{{ asset('assets/frontendassets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/frontendassets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontendassets/js/main.js') }}"></script>
    <script src="{{ asset('assets/frontendassets/js/navigation.js') }}"></script>
    <script src="{{ asset('assets/frontendassets/js/navigation.fixed.min.js') }}"></script>
    
    <!-- FIXED NAVIGATION -->
    <script>
        $("#navigation1").fixed();
    </script>

    <!-- REVOLUTION JS FILES -->
	<script src="{{ asset('assets/frontendassets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
	<script src="{{ asset('assets/frontendassets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  -->	
	<script src="{{ asset('assets/frontendassets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
	<script src="{{ asset('assets/frontendassets/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/frontendassets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
	<script src="{{ asset('assets/frontendassets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
	<script src="{{ asset('assets/frontendassets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
	<script src="{{ asset('assets/frontendassets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
	<script src="{{ asset('assets/frontendassets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
	<script src="{{ asset('assets/frontendassets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
	<script src="{{ asset('assets/frontendassets/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
     <!-- REQUIRE JS FOR SLIDER REVOLUTION -->
    <script src="{{ asset('assets/frontendassets/js/rev-slider-h2.js') }}"></script>
    
    <script>
        $('#play-video').on('click', function(e){
              e.preventDefault();
              $('#video-overlay').addClass('open');
              $("#video-overlay").append('<iframe width="560" height="315" src="https://www.youtube.com/embed/ngElkyQ6Rhs" frameborder="0" allowfullscreen></iframe>');
            });

            $('.video-overlay, .video-overlay-close').on('click', function(e){
              e.preventDefault();
              close_video();
            });

            $(document).keyup(function(e){
              if(e.keyCode === 27) { close_video(); }
            });

            function close_video() {
              $('.video-overlay.open').removeClass('open').find('iframe').remove();
            };
    </script>

    <!-- GOOGLE ANALITYCS  -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-101241150-1', 'auto');
      ga('send', 'pageview');
    </script> 
    
    </body>
    

</html>