<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blog - Zent</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
    <!-- STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('blog_assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('blog_assets/css/slippry.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('blog_assets/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('blog_assets/css/style.css') }}">
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,300italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Sarina' rel='stylesheet' type='text/css'>
</head>

<body>


    <!-- *****************************************************************
    ** Preloader *********************************************************
    ****************************************************************** -->
{{-- laod --}}
	{{-- <div id="preloader-container">
    	<div id="preloader-wrap">
    		<div id="preloader"></div>
    	</div>
    </div> --}}

    
    <!-- *****************************************************************
    ** Header ************************************************************ 
    ****************************************************************** --> 

    <header class="tada-container">
    
    
    	<!-- LOGO -->    
    	<div class="logo-container">
        	<a href="index.html"><img src="{{ asset('blog_assets/img/logo.png')}}" alt="logo" ></a>
            <div class="tada-social">
            	<a href="#"><i class="icon-facebook5"></i></a>
                <a href="#"><i class="icon-twitter4"></i></a>
                <a href="#"><i class="icon-google-plus"></i></a>
                <a href="#"><i class="icon-vimeo4"></i></a>
                <a href="#"><i class="icon-linkedin2"></i></a>
            </div>
        </div>
        
        
    	<!-- MENU DESKTOP -->
    	<nav class="menu-desktop menu-sticky">
    
            <ul class="tada-menu">
             
                
                   
               
             
                     <li><a href="/blog" class="active">HOME</a>

                    </li>
                   
                    <li><a href="#">CATEGORIES<i class="icon-arrow-down8"></i></a>
                       <ul class="submenu">
                            @foreach($categories as $cate)

                            <li><a href="{{ asset("/category/{$cate->name}") }}">{{$cate->name}}</a></li>
                            
                            @endforeach                                                              
                        </ul>  
                    </li>                                     
                    <li><a href="#">BLOG <i class="icon-arrow-down8"></i></a>
                        <ul class="submenu">
                        	<li><a href="blog-1-column.html">Blog 1 Column</a></li>
                            <li><a href="blog-1-column-with-sidebar.html">Blog + Sidebar</a></li>                            
                            <li><a href="blog-2-columns-with-sidebar.html">Blog 2 Columns + Sidebar</a></li>
                            <li><a href="blog-2-columns.html">Blog 2 Columns</a></li>
                            <li><a href="blog-3-columns.html">Blog 3 Columns</a></li>                                                                      
                        </ul>                
                    </li> 
                    <li><a href="about-us.html">ABOUT US</a></li>
                    <li><a href="contact.html">CONTACT</a></li>

            </ul>
        
        </nav>
        
        
        <!-- MENU MOBILE -->  
        <div class="menu-responsive-container"> 
            <div class="open-menu-responsive">|||</div> 
            <div class="close-menu-responsive">|</div>              
            <div class="menu-responsive">   
                <ul class="tada-menu">
                     <li><a href="#" class="active">HOME <i class="icon-arrow-down8"></i></a>
                        <ul class="submenu">
                        	<li><a href="home-1-column.html">Home 1 Column</a></li>
                            <li><a href="index.html" class="active">Home 1 Column + Sidebar</a></li>                            
                            <li><a href="home-2-columns-with-sidebar.html">Home 2 Columns + Sidebar</a></li>
                            <li><a href="home-2-columns.html">Home 2 Columns</a></li>
                            <li><a href="home-3-columns.html">Home 3 Columns</a></li>                                                                      
                        </ul>
                    </li>
                    <li><a href="#">FEATURES <i class="icon-arrow-down8"></i></a>
                        <ul class="submenu">
                            <li><a href="page.html">Page</a></li>
                            <li><a href="page-with-right-sidebar.html">Page + Right Sidebar</a></li>
                            <li><a href="page-with-left-sidebar.html">Page + Left Sidebar</a></li>                            
                            <li><a href="post.html">Post Full Width</a></li>
                            <li><a href="post-with-right-sidebar.html">Post + Right Sidebar</a></li>
                            <li><a href="post-with-left-sidebar.html">Post + Left Sidebar</a></li>
                            <li><a href="no-sticky.html">No Sticky Menu</a></li>
                            <li><a href="no-slider.html">No Slider</a></li> 
                            <li><a href="#">Submenu <i class="icon-arrow-right8"></i></a>
                                <ul class="submenu">
                                    <li><a href="#">Item 1</a></li>
                                    <li><a href="#">Item 2</a></li>
                                    <li><a href="#">Item 3</a></li>
                                    <li><a href="#">Item 4</a></li>
                                </ul>
                            </li>                                                                                            
                        </ul>                
                    </li>                                     
                    <li><a href="#">BLOG <i class="icon-arrow-down8"></i></a>
                        <ul class="submenu">
                        	<li><a href="blog-1-column.html">Blog 1 Column</a></li>
                            <li><a href="blog-1-column-with-sidebar.html">Blog + Sidebar</a></li>                            
                            <li><a href="blog-2-columns-with-sidebar.html">Blog 2 Columns + Sidebar</a></li>
                            <li><a href="blog-2-columns.html">Blog 2 Columns</a></li>
                            <li><a href="blog-3-columns.html">Blog 3 Columns</a></li>                                                                      
                        </ul>                
                    </li> 
                    <li><a href="about-us.html">ABOUT US</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>                        
            </div>
        </div> <!-- # menu responsive container -->
        
        
        <!-- SEARCH -->
        <div class="tada-search content">
			<form>
            	<div class="form-group-search typeahead">
                    {{-- @csrf --}}
                   
              		<input type="search" name="q" class="search-input" placeholder="Type something..." autocomplete="off">
              		<button type="submit" class="search-btn"><i class="icon-search4"></i></button>
                    </span>
            	</div>
          	</form>
        </div>
        
        
        <!-- SLIDER -->
        <div class="tada-slider">
			<ul id="tada-slider">
				<li>
                	<img src="{{ asset('blog_assets/img/image-slider-1.jpg')}}" alt="image slider 1">
                	<div class="pattern"></div>
                	<div class="tada-text-container">
                    	<h1>AENEAN AC DIAM</h1>
                        <h2>VIVAMUS <span class="main-color">TINCIDUNT</span> FERMENTUM</h2>
                        <span class="button"><a href="#">TEXT BUTTON</a></span>
                    </div>
                </li>
				<li>
                	<img src="{{ asset('blog_assets/img/image-slider-2.jpg')}}" alt="image slider 2">
                    <div class="pattern"></div>
                    <div class="tada-text-container">
                    	<h1>MAECENAS CONSECTETUR</h1>
                        <h2>Lorem <span class="main-color">ipsum dolor</span> sit amet</h2>
                        <span class="button"><a href="#">READ ME</a></span>
                    </div>
                </li>
				<li>
                	<img src="{{ asset('blog_assets/img/image-slider-3.jpg') }}" alt="image slider 3">
                	<div class="pattern"></div>
                    <div class="tada-text-container">
                    	<h1>AENEAN AC DIAM</h1>
                        <h2>VIVAMUS <span class="main-color">TINCIDUNT</span> FERMENTUM</h2>
                        <span class="button"><a href="#">TEXT BUTTON</a></span>
                    </div>                
                </li>
                <li>
                	<img src="{{asset('blog_assets/img/image-slider-4.jpg')}}" alt="image slider 4">
                	<div class="pattern"></div>
                    <div class="tada-text-container">
                    	<h1>AENEAN AC DIAM</h1>
                        <h2>VIVAMUS <span class="main-color">TINCIDUNT</span> FERMENTUM</h2>
                        <span class="button"><a href="#">TEXT BUTTON</a></span>
                    </div>                
                </li>
			</ul>
            
        </div><!-- #SLIDER -->
                
                
    </header><!-- #HEADER -->

    
    <!-- *****************************************************************
    ** Section ***********************************************************
    ****************************************************************** -->
    
	<section class="tada-container content-posts">
    
    
        @yield('content')
        
    </section>

    
    <!-- *****************************************************************
    ** Footer ************************************************************
    ****************************************************************** -->    
    @yield('')
    <footer class="tada-container">
    
    
    	<!-- INSTAGRAM -->    
    	<div class="widget widget-gallery">
    		<h3 class="widget-title">INSTAGRAM</h3>
    		<div class="image">
            	<a href="#"><img src="{{ asset('blog_assets/img/img-gallery-1.jpg')}}" alt="image gallery 1"></a>
                <a href="#"><img src="{{ asset('blog_assets/img/img-gallery-2.jpg')}}" alt="image gallery 2"></a>
                <a href="#"><img src="{{ asset('blog_assets/img/img-gallery-3.jpg')}}" alt="image gallery 3"></a>
                <a href="#"><img src="{{ asset('blog_assets/img/img-gallery-4.jpg')}}" alt="image gallery 4"></a>
                <a href="#"><img src="{{ asset('blog_assets/img/img-gallery-5.jpg')}}" alt="image gallery 5"></a>
                <a href="#"><img src="{{ asset('blog_assets/img/img-gallery-6.jpg')}}" alt="image gallery 6"></a>
            </div>
            <div class="clearfix"></div>
    	</div>
        
        
        <!-- FOOTER BOTTOM -->        
        <div class="footer-bottom">
        	<span class="copyright">Theme Created by <a href="#">AD-Theme</a> Copyright © 2016. All Rights Reserved</span>
        	<span class="backtotop">TOP <i class="icon-arrow-up7"></i></span>
            <div class="clearfix"></div>
        </div>
        
        
    </footer>
    
    
    <!-- *****************************************************************
    ** Script ************************************************************
    ****************************************************************** -->	
	
	<script src="{{ asset('blog_assets/js/jquery-1.12.4.min.js') }}"></script>
	<script src="{{ asset('blog_assets/js/slippry.js') }}"></script>
    <script src="{{ asset('blog_assets/js/main.js') }}"></script>
    <script src="{{ asset('blog_assets/js/bundle.js') }}"></script>
    <script>

        $(document).ready(function($) {
        var engine1 = new Bloodhound({
        remote: {
            url: '/search/title?value=%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('value'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    $(".search-input").typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, [
        {
            source: engine1.ttAdapter(),
            title: 'title',
            display: function(data) {
                return data.title;
            },
            templates: {
                empty: [
                    '<div class="header-title">title</div><div class="list-group search-results-dropdown"><div class="list-group-item">Nothing found.</div></div>'
                ],
                header: [
                    '<div class="header-title">Title</div><div class="list-group search-results-dropdown"></div>'
                ],
                suggestion: function (data) {
                    return '<a href="/search/' + data.id + '" class="list-group-item" style="display:block; text-align: left; padding: 5px;">' + data.title + '</a>';
                }
            }
        }, 
       
    ]);
});
    </script>
    <style>
        .twitter-typeahead{
            width: 50%!important;
        }
        .search-input{
            width: 100%!important;
        }
        .tt-open {
            background-color: #e6e6e6bf6!important;

        }
    </style>
</body>
</html>
