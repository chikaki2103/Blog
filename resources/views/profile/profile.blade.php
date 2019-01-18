@extends('layouts.masteradmin')
@section('content')

    	<div class="container invoice" style="background-color: transparent!important;border: 1px solid #f4f4f400!important;margin: 0 8px!important;"> <div class="btn-group btn-breadcrumb">
            <a href="/admin/home" class="btn btn-primary"><i class="glyphicon glyphicon-home"></i></a>
            <a href="#" class="btn btn-primary">Profile</a>
            
        </div>
		</div>
       
<section class="invoice">

	
<div class="row">
      <div class="col-xs-12 col-sm-9">
        
        <!-- User profile -->
        <div class="panel panel-default">
          <div class="panel-heading">
          <h4 class="panel-title">User profile</h4>
          </div>
          <div class="panel-body">
            <div class="profile__avatar">
              <img src="{{asset('admin_assets/dist/img/user2-160x160.jpg')}}" alt="...">
            </div>
            <div class="profile__header">
              <h4>{{ Auth::user()->name }} <small>Administrator</small></h4>
              <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non nostrum odio cum repellat veniam eligendi rem cumque magnam autem delectus qui.
              </p>
              <p>
                <a href="/blog">http://hw.blog.laravel.com/blog</a>
              </p>
            </div>
          </div>
        </div>

        <!-- User info -->
        <div class="panel panel-default">
          <div class="panel-heading">
          <h4 class="panel-title">User info</h4>
          </div>
          <div class="panel-body">
            <table class="table profile__table">
              <tbody>
                <tr>
                  <th><strong>Location</strong></th>
                  <td>United States</td>
                </tr>
                <tr>
                  <th><strong>Company name</strong></th>
                  <td>Simpleqode.com</td>
                </tr>
                <tr>
                  <th><strong>Position</strong></th>
                  <td>Front-end developer</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Community -->
        <div class="panel panel-default">
          <div class="panel-heading">
          <h4 class="panel-title">Community</h4>
          </div>
          <div class="panel-body">
            <table class="table profile__table">
              <tbody>
                <tr>
                  <th><strong>Total Posts</strong></th>
                  <td>{{$countPost}}</td>
                </tr>
                <tr>
                  <th><strong>Member since</strong></th>
                  <td>{{ Auth::user()->created_at }}</td>
                </tr>
                <tr>
                  <th><strong>Last login</strong></th>
                  <td>1 day ago</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Latest posts -->
        <div class="panel panel-default">
          <div class="panel-heading">
          <h4 class="panel-title">Latest posts</h4>
          </div>
          @foreach($userPost as $upost)
          <div class="panel-body">
            <div class="profile__comments">
              <div class="profile-comments__item">
                <div class="profile-comments__controls">
                  <a href="#"><i class="fa fa-share-square-o"></i></a>
                  <a href="#"><i class="fa fa-edit"></i></a>
                  <a href="#"><i class="fa fa-trash-o"></i></a>
                </div>
                <div class="profile-comments__avatar">
                  <img src="{{asset($upost->thumbnail)}}" alt="...">
                </div>
                <div class="profile-comments__body">
                  <h5 class="profile-comments__sender">
                    {{$upost->title}}<small>{{$upost->created_at->diffforHumans()}}</small>
                  </h5>
                  <div class="profile-comments__content">
                    {{$upost->description}}
                  </div>
                </div>
              </div>             
            </div>
          </div>  {{-- 1post --}}
		@endforeach
        </div>

      </div>
      <div class="col-xs-12 col-sm-3">
        
        <!-- Contact user -->
        <p>
          <a href="#" class="profile__contact-btn btn btn-lg btn-block btn-info" data-toggle="modal" data-target="#profile__contact-form">
            Contact user
          </a>
        </p>

        <hr class="profile__contact-hr">
        
        <!-- Contact info -->
        <div class="profile__contact-info">
          <div class="profile__contact-info-item">
            <div class="profile__contact-info-icon">
              <i class="fa fa-phone"></i>
            </div>
            <div class="profile__contact-info-body">
              <h5 class="profile__contact-info-heading">Work number</h5>
              (000)987-65-43
            </div>
          </div>
          <div class="profile__contact-info-item">
            <div class="profile__contact-info-icon">
              <i class="fa fa-phone"></i>
            </div>
            <div class="profile__contact-info-body">
              <h5 class="profile__contact-info-heading">Mobile number</h5>
              (000)987-65-43
            </div>
          </div>
          <div class="profile__contact-info-item">
            <div class="profile__contact-info-icon">
              <i class="fa fa-envelope-square"></i>
            </div>
            <div class="profile__contact-info-body">
              <h5 class="profile__contact-info-heading">E-mail address</h5>
              <a href="mailto:admin@domain.com">{{ Auth::user()->email }}</a>
            </div>
          </div>
          <div class="profile__contact-info-item">
            <div class="profile__contact-info-icon">
              <i class="fa fa-map-marker"></i>
            </div>
            <div class="profile__contact-info-body">
              <h5 class="profile__contact-info-heading">Work address</h5>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </div>
          </div>
        </div>

      </div>
    </div>



</section>

	
@endsection	
