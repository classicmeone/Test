<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width"> 
    <title> @yield('title')</title>
    
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/css/style.css')}}" type="text/css">

    <link href="{{asset('css/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/css/bootstrap.css')}}" rel="stylesheet" type="text/css">  
    <link rel="stylesheet" type="text/css" href="{{asset('css/css/bootstrap-responsive.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css/slick.css')}}">          
    <link id="switcher" type="text/css" href="{{ asset('css/css/theme-color/default-theme.css')}}" rel="stylesheet">          
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css/sl-slide.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css/default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css/component.css')}}">
    <script src="{{ asset('js/js/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
   
    <script src="{{asset('js/js/jquery.js')}}"></script>
    <script src="{{asset('js/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/js/main.js')}}"></script>
    <script src="{{asset('js/js/jquery.ba-cond.min.js')}}"></script>
    <script src="{{asset('js/js/jquery.slitslider.js')}}"></script>
    <!-- Slider -->
    <script type="text/javascript"> 
    $(function() {
        var Page = (function() {
            var $navArrows = $( '#nav-arrows' ),
            slitslider = $( '#slider' ).slitslider( {
                autoplay : true
            } ),
            init = function() {
                initEvents();
            },
            initEvents = function() {
                $navArrows.children( ':last' ).on( 'click', function() {
                    slitslider.next();
                    return false;
                });
                $navArrows.children( ':first' ).on( 'click', function() {
                    slitslider.previous();
                    return false;
                });
            };
            return { init : init };
        })();
        Page.init();
    });
    </script>
    <!-- /Slider -->
    <style>
              body {
                background-color: #fff;
                color: blue !important;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .arrow {
               
                border: solid white;
                border-width: 0 3px 3px 0;
                display: inline-block;
                padding: 3px;
	            

                
            }
            .right {
                transform: rotate(-45deg);
               -webkit-transform: rotate(-45deg);
            }
            .left {

                transform: rotate(135deg);
                -webkit-transform: rotate(135deg);
            }
            .newsevt li {
            list-style:none;
            margin-bottom:20px;
            margin-left:30px;

            }
        .@yield('active') {

           color:red !important; 
        }
        </style>
 </head>
  <body> 
      @include('Sawi.menu')
    
    @yield('content')
    <footer class="footer-section spad pb-0">
            <div class="container">
                <div class="text-center">
                    <a href="#" class="site-btn">Course Categories <i class="fa fa-angle-right"></i></a>
                </div>
                <div class="row text-white spad">
                    <div class="col-lg-3 col-sm-6 footer-widget">
                        <h4>Beginner</h4>
                        <ul>
                                <li><a href="#">Course1</a></li>
                                <li><a href="#">Course 2</a></li>
                                <li><a href="#">Course 3</a></li>
                                <li><a href="#">Course 4</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6 footer-widget">
                        <h4>Special</h4>
                        <ul>
                                <li><a href="#">Course1</a></li>
                                <li><a href="#">Course 2</a></li>
                                <li><a href="#">Course 3</a></li>
                                <li><a href="#">Course 4</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6 footer-widget">
                        <h4>Weekend</h4>
                        <ul>
                                <li><a href="#">Course1</a></li>
                                <li><a href="#">Course 2</a></li>
                                <li><a href="#">Course 3</a></li>
                                <li><a href="#">Course 4</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6 footer-widget">
                        <h4>Advanced</h4>
                        <ul>
                            <li><a href="#">Course1</a></li>
                            <li><a href="#">Course 2</a></li>
                            <li><a href="#">Course 3</a></li>
                            <li><a href="#">Course 4</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-bottom">
                    
                        <div class="social">
                                <a href=""><i> <img class="fa fa-pinterest" src="" alt="Twitter" /></i></a>
                                <a href=""><i class="fa fa-facebook"><img class="fa fa-pinterest" src="" alt="FB" /></i></a>
                                <a href=""><i class="fa fa-twitter"> <img class="fa fa-pinterest" src="" alt="IN" /></i></a>
                            </div>
                    <ul class="footer-menu">
                            <li><a href="{{ route('home')}}">Home</a></li>
                            <li><a href="{{ route('about')}}">About us</a></li>
                            <li><a href={{ route('gallery')}}>Gallery</a></li>
                            <li><a href="{{ route('admission')}}">Admission</a></li>
                            <li><a href="{{ route('contact')}}">Contact</a></li>
                        </ul>
                       
                        <div class="footer-logo">
                            <a href="#">
                                <img src="img/footer-logo.png" alt="Logo is Here with address">
                            </a>
                        </div> 
                        
                    </div>
        
                    

                        <div class="col-12">
                            <p class="text-white  text-center">
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with love by <a href="#" target="_blank">Classic</a>
        </p>	
                        </div>
                        
                    
                </div>
            </div>
    
    
    
        </footer>    
    </body>
    </html>