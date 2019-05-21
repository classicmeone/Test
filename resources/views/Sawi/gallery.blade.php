@extends('layouts.sawi')
@section('title','Gallery')
@section('content')
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="{{ asset('css/css/bootstrap.css')}}" />
<link rel="stylesheet" href="{{ asset('css/gallery/animate/animate.css')}}" />
<link rel="stylesheet" href="{{ asset('css/gallery/animate/set.css')}}" />

<!-- gallery -->
<link rel="stylesheet" href="{{ asset('css/gallery/blueimp-gallery.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/gallery/style.css')}}">

        <div id="works"  class=" clearfix grid"> 
                <figure class="effect-oscar  wowload fadeInUp">
                    <img src="{{asset('images/portfolio/1.jpg')}}" alt="img01"/>
                    <figcaption>
                            <h2>Person name</h2>
                            <p>Image Details<br>
                        <a href="{{asset('images/portfolio/1.jpg')}}" title="1" data-gallery>View more</a></p>            
                    </figcaption>
                </figure>
                 <figure class="effect-oscar  wowload fadeInUp">
                    <img src="{{asset('images/portfolio/2.jpg')}}" alt="img01"/>
                    <figcaption>
                            <h2>Person name</h2>
                            <p>Image Details<br>
                        <a href="{{asset('images/portfolio/2.jpg')}}" title="1" data-gallery>View more</a></p>            
                    </figcaption>
                </figure>
                 <figure class="effect-oscar  wowload fadeInUp">
                    <img src="{{asset('images/portfolio/3.jpg')}}" alt="img01"/>
                    <figcaption>
                            <h2>Person name</h2>
                            <p>Image Details<br>
                        <a href="{{asset('images/portfolio/3.jpg')}}" title="1" data-gallery>View more</a></p>            
                    </figcaption>
                </figure>
                 <figure class="effect-oscar  wowload fadeInUp">
                    <img src="{{asset('images/portfolio/4.jpg')}}" alt="img01"/>
                    <figcaption>
                            <h2>Person name</h2>
                            <p>Image Details<br>
                        <a href="{{asset('images/portfolio/4.jpg')}}" title="1" data-gallery>View more</a></p>            
                    </figcaption>
                </figure>
                 
                 <figure class="effect-oscar  wowload fadeInUp">
                    <img src="{{asset('images/portfolio/5.jpg')}}" alt="img01"/>
                    <figcaption>
                            <h2>Person name</h2>
                            <p>Image Details<br>
                        <a href="{{asset('images/portfolio/5.jpg')}}" title="1" data-gallery>View more</a></p>            
                    </figcaption>
                </figure>
                <figure class="effect-oscar  wowload fadeInUp">
                    <img src="{{asset('images/portfolio/6.jpg')}}" alt="img01"/>
                    <figcaption>
                            <h2>Person name</h2>
                            <p>Image Details<br>
                        <a href="{{asset('images/portfolio/6.jpg')}}" title="1" data-gallery>View more</a></p>            
                    </figcaption>
                </figure>
                <figure class="effect-oscar  wowload fadeInUp">
                    <img src="{{asset('images/portfolio/7.jpg')}}" alt="img01"/>
                    <figcaption>
                            <h2>Person name</h2>
                            <p>Image Details<br>
                        <a href="{{asset('images/portfolio/7.jpg')}}" title="1" data-gallery>View more</a></p>            
                    </figcaption>
                </figure>
                 <figure class="effect-oscar  wowload fadeInUp">
                    <img src="{{asset('images/portfolio/8.jpg')}}" alt="img01"/>
                    <figcaption>
                            <h2>Person name</h2>
                            <p>Image Details<br>
                        <a href="{{asset('images/portfolio/8.jpg')}}" title="1" data-gallery>View more</a></p>            
                    </figcaption>
                </figure>
                 <figure class="effect-oscar  wowload fadeInUp">
                    <img src="{{asset('images/portfolio/9.jpg')}}" alt="img01"/>
                    <figcaption>
                            <h2>Person name</h2>
                            <p>Image Details<br>
                        <a href="{{asset('images/portfolio/9.jpg')}}" title="1" data-gallery>View more</a></p>            
                    </figcaption>
                </figure>
                 <figure class="effect-oscar  wowload fadeInUp">
                    <img src="{{asset('images/portfolio/10.jpg')}}" alt="img01"/>
                    <figcaption>
                            <h2>Person name</h2>
                            <p>Image Details<br>
                        <a href="{{asset('images/portfolio/10.jpg')}}" title="1" data-gallery>View more</a></p>            
                    </figcaption>
                </figure>
                 
                 <figure class="effect-oscar  wowload fadeInUp">
                    <img src="{{asset('images/portfolio/11.jpg')}}" alt="img01"/>
                    <figcaption>
                            <h2>Person name</h2>
                            <p>Image Details<br>
                        <a href="{{asset('images/portfolio/11.jpg')}}" title="1" data-gallery>View more</a></p>            
                    </figcaption>
                </figure>
                <figure class="effect-oscar  wowload fadeInUp">
                    <img src="{{asset('images/portfolio/12.jpg')}}" alt="img01"/>
                    <figcaption>
                        <h2>Person name</h2>
                        <p>Image Details<br>
                        <a href="{{asset('images/portfolio/12.jpg')}}" title="1" data-gallery>View more</a></p>            
                    </figcaption>
                </figure>  
            </div>
            <!-- works -->
            
            <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
                <!-- The container for the modal slides -->
                <div class="slides"></div>
                <!-- Controls for the borderless lightbox -->
                <h3 class="title">Title</h3>
                <a class="prev">‹</a>
                <a class="next">›</a>
                <a class="close">×</a>
                <!-- The modal dialog, which will be used to wrap the lightbox content -->    
            </div>
            
            
            <!-- jquery -->
            <script src="{{ asset('js/js/jquery.js')}}"></script>
            
            <!-- wow script -->
            <script src="{{ asset('js/gallery/wow/wow.min.js')}}"></script>

            <!-- boostrap -->
            <script src="{{ asset('js/js/bootstrap.min.js')}}" type="text/javascript" ></script>
            
            <!-- jquery mobile -->
            <script src="{{ asset('js/gallery/mobile/touchSwipe.min.js')}}"></script>
            <script src="{{ asset('js/gallery/respond/respond.js')}}"></script>
            
            <!-- gallery -->
            <script src="{{ asset('js/gallery/jquery.blueimp-gallery.min.js')}}"></script>
            
            
            
            
            <!-- custom script -->
            <script src="{{asset('js/gallery/script.js')}}"></script>
            @endsection()