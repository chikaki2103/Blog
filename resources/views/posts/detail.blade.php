@extends('layouts.master') 


    <!-- *****************************************************************
    ** Preloader *********************************************************
    ****************************************************************** -->
@section('content')

	
    
    <!-- *****************************************************************
    ** Header ************************************************************ 
    ****************************************************************** --> 
        
   
    
    <!-- *****************************************************************
    ** Section ***********************************************************
    ****************************************************************** -->
    
	<section class="tada-container content-posts post post-full-width">


    	<!-- CONTENT -->
    	<div class="content col-xs-12">

        
        	<!-- ARTICLE 1 -->        
        	<article>
            	<div class="post-image">
                	<img src="{{ $post->thumbnail }}" alt="post image 1"> 
                </div>
                <div class="category">
                	<a href="#">{{$category->name}}</a>
                </div>
                <div class="post-text">
                	<span class="date">{{ $post->created_at }}</span>
                    <h2>{{ $post->title }}</h2>
                </div>                 
                <div class="post-text text-content">
                	<div class="post-by">Post By <a href="#">AD-Theme</a></div>                    
                	<div class="text">{!! $post->content !!}    
                    <div class="gallery">
                    	<div class="item-gallery-left">
                        	<img src="{{ $post->thumbnail }}">
                          
                        </div>
                       
                            <div class="clearfix"></div> 
                    </div>
                    {{-- <ul class="bullet">
                    	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                        <li>Integer lorem quam, interdum id nulla vel, varius lacinia metus</li>
                        <li>Nunc quis elit scelerisque, dapibus sem et, venenatis nunc</li>
                        <li>Proin eu laoreet augue. Aenean at rutrum nibh</li>
                    </ul> --}}
                    
                    
                    <div class="clearfix"></div>
                    </div>
                </div>
                {{-- <div class="social-post">
                    <a href="#"><i class="icon-facebook5"></i></a>
                    <a href="#"><i class="icon-twitter4"></i></a>
                    <a href="#"><i class="icon-google-plus"></i></a>
                    <a href="#"><i class="icon-vimeo4"></i></a>
                    <a href="#"><i class="icon-linkedin2"></i></a>                  
                </div>
                 --}}
            <div class="tags-container" style="text-align: left !important;">TAG:
                        @if(isset($tag))

                           {{-- @foreach($tags as $tag) --}}

                                @foreach($tag as $ta)

                                   {{-- @if($tag->id==$ta->id)
 --}}
                                      <a href="{{ asset("/blog/tag/{$ta->name}") }}">{{$ta->name}}</a>

                                   {{-- @endif --}}

                                @endforeach 

                         {{--   @endforeach    --}}

                        @endif      

                    </div>
        		<!-- NAVIGATION POST -->
                <div class="navigation-post">
                    <div class="prev-post">
                        <img src="{{asset('blog_assets/img/prev-post.jpg')}}">
                        <a href="#" class="prev">
                            <i class="icon-arrow-left8"></i> Previous Posts
                            <span class="name-post">DUIS FACILISIS AUGUE VITAE</span>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="next-post">                	
                        <a href="#" class="next">
                                Next Posts <i class="icon-arrow-right8"></i>                
                                <span class="name-post">DUIS FACILISIS AUGUE VITAE</span>
                        </a> 
                        <img src="{{asset('blog_assets/img/next-post.jpg')}}">  
                        <div class="clearfix"></div>             
                    </div>
                    <div class="clearfix"></div>
                </div>
                
                
                <!-- AUTHOR POST -->
                <div class="author-post-container">
                    <div class="author-post">
                        <div class="author-image">
                            <img src="{{asset('blog_assets/img/img-author.jpg')}}">
                        </div>
                        <div class="author-info">
                            <span class="author-name">LUCAS NEWAR</span>
                            <span class="author-description">Morbi gravida, sem non egestas ullamcorper, tellus ante laoreet nisl, id iaculis urna eros vel turpis curabitur. Nullam tristique massa faucibus, sodales sapien ac, tincidunt dolor.</span>
                            <span class="author-social">
                                <a href="#"><i class="icon-facebook5"></i></a>
                                <a href="#"><i class="icon-twitter4"></i></a>
                                <a href="#"><i class="icon-google-plus"></i></a>
                                <a href="#"><i class="icon-vimeo4"></i></a>
                                <a href="#"><i class="icon-linkedin2"></i></a>            
                            </span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                        
                </div>
                
                
                <!-- RELATED POSTS -->
                     
                       

                        
                  <!-- COMMENTS -->      
                                                
                
                
                <!-- COMMENT FORM -->
                <div class="comment-form">
                    <h3>Leavy a Reply</h3>
                    <span class="field-name">Your Name (required)</span>
                    <input type="text" class="name">
                    <span class="field-name">Your Name (required)</span>
                    <input type="text" class="email">
                    <span class="field-name">Your Message</span>
                    <textarea class="message"></textarea>
                    
                    <button type="submit">Send Comment</button>
                
                </div>
            
            
       	 	
        
        
        </div>
        
   		<div class="clearfix"></div>
        
        
    </section>


    <!-- *****************************************************************
    ** Footer ************************************************************
    ****************************************************************** -->
        
   
@endsection('content')
