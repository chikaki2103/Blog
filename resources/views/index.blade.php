{{-- kế thừa từ trang master --}}
@extends('layouts.master') 

{{-- thay đổi nội dung phần content --}}
@section('content')

	<!-- CONTENT -->

	<div class="content col-xs-8">
    	<!-- ARTICLE  -->  
    	{{-- kiểm tra sự tồn tại của dữ liệu trước khi dùng --}}
        @if(isset($CatePost))
            @foreach ($CatePost as $cp)
                <article>
                    <div class="post-image">
                        <img src="{{ asset($cp->thumbnail) }}" alt="post image 1">
                        <div class="category"><a href="#">{{$category->name}}</a></div>
                    </div>
                    <div class="post-text">
                        <span class="date">{{ $cp->created_at }}</span>
                        <h2><a href="{{ asset($cp->slug) }}">{{ $cp->title }}</a></h2>
                        <p class="text">
                            {!! $cp->description !!}
                            <a href="#"><i class="icon-arrow-right2"></i></a>
                        </p>                                 
                    </div>
                    <div class="post-info">
                        <div class="post-by">Post By <a href="#">AD-Theme</a></div>
                        <div class="extra-info">
                            <a href="#"><i class="icon-facebook5"></i></a>
                            <a href="#"><i class="icon-twitter4"></i></a>
                            <a href="#"><i class="icon-google-plus"></i></a>
                            <span class="comments">25 <i class="icon-bubble2"></i></span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </article>

            @endforeach
		@elseif(isset($posts))
			{{-- in tất cả bài viết ra bằng foreach --}}
            
			@foreach ($posts as $post)
		    	<article>
		        	<div class="post-image">
		            	<img src="{{ asset($post->thumbnail) }}" alt="post image 1">
		                <div class="category"><a href="#">
                        @foreach($category as $cat)
                           @if ($post->category_id == $cat->id) 
                               <div class="category"><a href="#">{{$cat->name}}</a></div>
                             @endif
                        @endforeach()
                         
                        </a></div>
		            </div>
		            <div class="post-text">
		            	<span class="date">{{ $post->created_at }}</span>
		                <h2><a href="{{ asset($post->slug) }}">{{ $post->title }}</a></h2>
		                <p class="text">
		                	{!! $post->description !!}
                            <a href="#"><i class="icon-arrow-right2"></i></a>
		                </p>                                 
		            </div>
		            <div class="post-info">
		            	{{--  <div class="tags-container" style="text-align: left !important;">TAG: 
                        @if(isset($tags))

                           @foreach($posts as $post)

                                @foreach($tags as $ta)

                                   @if($post->id==$ta->id)

                                      <a href="{{ asset("/blog/tag/{$ta->name}") }}">{{$ta->name}}</a>

                                   @endif

                                @endforeach 

                           @endforeach   

                        @endif      

                    </div> --}}
		                <div class="extra-info">
		                	<a href="#"><i class="icon-facebook5"></i></a>
		            		<a href="#"><i class="icon-twitter4"></i></a>
		            		<a href="#"><i class="icon-google-plus"></i></a>
		                    <span class="comments">25 <i class="icon-bubble2"></i></span>
		                </div>
		                <div class="clearfix"></div>
		            </div>
		        </article>

			@endforeach

        @endif
               

         @if(isset($post_tag))
            {{-- in tất cả bài viết ra bằng foreach --}}
             
            @foreach ($post_tag->postT as $postTg)
                <article>
                    <div class="post-image">
                        <img src="{{ asset($postTg->thumbnail) }}" alt="post image 1">
                        <div class="category"><a href="#">
                        @foreach($category as $cat)
                           @if ($postTg->category_id == $cat->id) 
                               <div class="category"><a href="#">{{$cat->name}}</a></div>
                             @endif
                        @endforeach()
                         
                        </a></div>
                    </div>
                    <div class="post-text">
                        <span class="date">{{ $postTg->created_at }}</span>
                        <h2><a href="{{ asset($postTg->slug) }}">{{ $postTg->title }}</a></h2>
                        <p class="text">
                            {!! $postTg->description !!}
                            <a href="#"><i class="icon-arrow-right2"></i></a>
                        </p>                                 
                    </div>
                    <div class="post-info">
                   <div class="tags-container" style="text-align: left !important;">TAG: 
                        @if(isset($tagP))

                           @foreach($tagP[$postTg->id]->tagg as $tagg)                                 
                                      <a href="{{$tagg->name}}">{{$tagg->name}}</a>
                           @endforeach   

                        @endif      

                    </div>
                <div class="clearfix"></div>
                        
                        <div class="extra-info">

                            <a href="#"><i class="icon-facebook5"></i></a>
                            <a href="#"><i class="icon-twitter4"></i></a>
                            <a href="#"><i class="icon-google-plus"></i></a>
                            <span class="comments">25 <i class="icon-bubble2"></i></span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </article>

            @endforeach

        @endif      
    	<!-- NAVIGATION -->
        @if(isset($posts))
    	<div class="navigation">
        	<a href="{!! $posts->previousPageUrl() !!}" class="prev">prev<i class="icon-arrow-left8"></i> </a>
            <a href="{!! $posts->nextPageUrl() !!}" class="next">next<i class="icon-arrow-right8"></i></a>
            <div class="clearfix"></div>
        </div>
        @elseif(isset($CatePost))
        <div class="navigation">
            <a href="{!! $CatePost->previousPageUrl() !!}" class="prev">prev<i class="icon-arrow-left8"></i> </a>
            <a href="{!! $CatePost->nextPageUrl() !!}" class="next">next<i class="icon-arrow-right8"></i></a>
            <div class="clearfix"></div>
        </div>
        @endif
        
    </div>
   
    
    <!-- SIDEBAR -->
    <div class="sidebar col-xs-4">
    	
        
        <!-- ABOUT ME -->                    
        <div class="widget about-me">
        	<div class="ab-image">
            	<img src="{{asset('blog_assets/img/about-me.jpg')}}" alt="about me">
                <div class="ab-title">About Me</div>
            </div>
            <div class="ad-text">
            	<p>Lorem ipsum dolor sit consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                <span class="signing"><img src="{{asset('blog_assets/img/signing.png')}}" alt="signing"></span>
            </div>
        </div>


        <!-- LATEST POSTS -->                             
        <div class="widget latest-posts">
        	<h3 class="widget-title">
            	Latest Posts
            </h3>
            <div class="posts-container">
           
            	<div class="item">
                	<img src="{{asset('blog_assets/img/latest-posts-1.jpg')}}" alt="post 1" class="post-image">
                    <div class="info-post">
                    	<h5><a href="#">MAECENAS <br> CONSECTETUR</a></h5>
                    	<span class="date">07 JUNE 2016</span>	
                    </div> 
                    <div class="clearfix"></div>   
                </div>

            	<div class="item">
                	<img src="{{asset('blog_assets/img/latest-posts-2.jpg')}}" alt="post 2" class="post-image">
                    <div class="info-post">
                    	<h5><a href="#">MAURIS SIT AMET</a></h5>
                    	<span class="date">06 JUNE 2016</span>                       	
                    </div> 
                    <div class="clearfix"></div>   
                </div>

            	<div class="item">
                	<img src="{{asset('blog_assets/img/latest-posts-3.jpg')}}" alt="post 3" class="post-image">
                    <div class="info-post">
                    	<h5><a href="#">NAM EGET <br> PULVINAR ANTE</a></h5>
                    	<span class="date">05 JUNE 2016</span>                        	
                    </div> 
                    <div class="clearfix"></div>   
                </div>

            	<div class="item">
                	<img src="{{asset('blog_assets/img/latest-posts-4.jpg')}}" alt="post 4" class="post-image">
                    <div class="info-post">
                    	<h5><a href="#">VIVAMUS ET TURPIS LACINIA</a></h5>
                    	<span class="date">04 JUNE 2016</span>                     	
                    </div>    
                    <div class="clearfix"></div>
                </div>
                
                <div class="clearfix"></div>
            </div>
        </div>


        <!-- FOLLOW US -->                             
        <div class="widget follow-us">
        	<h3 class="widget-title">
            	Follow Us
            </h3>
        	<div class="follow-container">
                <a href="#"><i class="icon-facebook5"></i></a>
                <a href="#"><i class="icon-twitter4"></i></a>
                <a href="#"><i class="icon-google-plus"></i></a>
                <a href="#"><i class="icon-vimeo4"></i></a>
                <a href="#"><i class="icon-linkedin2"></i></a>                
            </div>
        	<div class="clearfix"></div>
        </div>            


        <!-- TAGS -->                            
        <div class="widget tags">
        	<h3 class="widget-title">
            	Tags
            </h3>
        	<div class="tags-container">
            @if(isset($tags))
               @foreach($tags as $tag)
                  <a href="{{ asset("/blog/tag/{$tag->name}") }}">{{$tag->name}}</a>
               @endforeach      
            @endif                
            </div>
            {{-- <div class="tags-container">
            @if(isset($post_tag))
               @foreach($tag as $t)
                  <a href="{{ asset("/blog/tag/{$t->name}") }}">{{$t->name}}</a>
               @endforeach      
            @endif                
            </div> --}}
        	<div class="clearfix"></div>
        </div> 


        <!-- ADVERTISING -->                           
        {{-- div class="widget advertising">
			<div class="advertising-container">
            	<img src="{{asset('blog_assets/img/350x300.png')}}" alt="banner 350x300">
            </div>
		</div> --}}


        <!-- NEWSLETTER -->                          
        <div class="widget newsletter">
        	<h3 class="widget-title">
            	Newsletter
            </h3>
        	<div class="newsletter-container">
				<h4>DO NOT MISS OUR NEWS</h4>
                <p>Sign up and receive the <br> latest news of our company</p> 
                <form>
                   <input type="email" class="newsletter-email" placeholder="Your email address...">
                   <button type="submit" class="newsletter-btn">Send</button>
              	</form>                                  
            </div>
        	<div class="clearfix"></div>
        </div>  
        
    </div> <!-- #SIDEBAR -->
    
	<div class="clearfix"></div>

@endsection
