@extends('layouts.masteradmin')
@section('content')

<section class="invoice">
    <div style="background-color: transparent!important;border: 1px solid #f4f4f400!important;margin: 0 8px!important;"> <div class="btn-group btn-breadcrumb">
            <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-home"></i></a>
            <a href="/admin/post" class="btn btn-primary">Posts</a>
            <a href="#" class="btn btn-primary">Post Detail</a>
            
        </div>
        </div>
<table class="table table-hover">

<h2 style="text-align: center; color: #677d84;">Post Detail</h2>
<div class="containerfluid">
    <div class="banner" style="width:100%;">
        <img src="https://i.imgur.com/TNEJezP.jpg" class="fit banner-image" >
       
        <div class="profile-container" style="">
            <div class="profile-image overflow-centered">
                <img src="{{ asset($detailPost->thumbnail) }}" class="fit" alt="Avatar" />
            </div>  
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
    {{-- <ul class="nav nav-pills nav-stacked col-md-1">
      <li role="presentation" class="active text-center"><a href="#">A</a></li>
      <li role="presentation" class="text-center"><a href="#">B</a></li>
      <li role="presentation" class="text-center"><a href="#">C</a></li>
    </ul> --}}
    <!--<div class="element-nav">
        <div class="row">
            <div class="tab-option col-md-3 text-center">Option 1</div>
            <div class="tab-option col-md-3 text-center">Option 1</div>
            <div class="tab-option col-md-3 text-center">Option 1</div>
            <div class="tab-option col-md-3 text-center">Option 1</div>
        </div>
    </div>-->
    <div class="content col-md-10" style="font-size: 16px">
     <h2 style="text-align: center;">{{$detailPost->title}}</h2>  
     <h3 style="text-align: center;">{{$detailPost->description}}</h3> 
	<p>{{$detailPost->content}}</p>
    </div>
    </div>
</div>
		


				
	


</section>


@endsection	