<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">​
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  {{-- <meta name="csrf-token" content="{{ csrf_token() }}">​ --}}
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('admin_assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin_assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('admin_assets/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin_assets/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="{{asset('admin_assets/dist/css/skins/skin-blue.min.css')}}">
   <link rel="stylesheet" href="{{asset('admin_assets/dist/css/profile.css')}}">

{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" /> --}}
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"/>
  <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css" />
<link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.css" />
<style>
.label-info {
    background-color: #795548!important;
    font-size: 12px!important;
}
.btn-app {
    border-radius: 3px;
    position: relative;
    padding: 8px 7px !important;
    min-width: 51px !important;
    height: 38px !important;
    text-align: center;
    color: #666;
    border: 1px solid #ddd;
    background-color: #f4f4f4;
    font-size: 12px;
}
.overflow-centered img {
    position: absolute;
    top: -9999px;
    bottom: -9999px;
    left: -9999px;
    right: -9999px;
    margin: auto;
}

.overflow-centered {
    position:relative;
    overflow:hidden;
}
.profile-container {
    width: 20%; 
    height: 100%; 
    top: 0;
    left: 0;
    right: 0;
    margin-left: 5%; 
    position: absolute;
}
.profile-image {
    padding-top: 100%;
    width: 100%;
    bottom:0;
    left: 0;
    right: 0;
    border-top-left-radius: 5%;
    border-top-right-radius: 5%;
    border: 2px solid;
    border-bottom: 0px;
    border-color: #ccc;
    position: absolute;
    margin-left: auto;
    margin-right: auto;
}

.element-nav{
    height: 65px;
    border-top: 3px solid;
    border-color: #ccc;
    position: relative;
}

.banner {
    height: 300px;
    width: 100%;
    overflow: hidden;
    position: relative;
    border-bottom: 2px solid;
    border-color: #ccc;
    margin-bottom: 20px;
}

.banner-image {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
}

.banner-title {
    position: relative;
    height: 100%;
    width: 100%;
    padding-left: 28%;
    color: white;
    background: -webkit-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.2));
    background: -o-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.2));
    background: -moz-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.2));
    background: linear-gradient(to bottom, rgba(0,0,0,0), rgba(0,0,0,0.2));
}

.banner-title h1 {
    position: absolute;
    bottom: 10%;
    font-size: 3.5em;
}

.tab-option {
    font-size: 18px;
    padding-top: 10px;
    padding-bottom: 10px;
}



.portrait {
    width: 100%;
}
.landscape {
    height: 100%;
}
/** The Magic **/
.btn-breadcrumb .btn:not(:last-child):after {
  content: " ";
  display: block;
  width: 0;
  height: 0;
  border-top: 17px solid transparent;
  border-bottom: 17px solid transparent;
  border-left: 10px solid white;
  position: absolute;
  top: 50%;
  margin-top: -17px;
  left: 100%;
  z-index: 3;
}
.btn-breadcrumb .btn:not(:last-child):before {
  content: " ";
  display: block;
  width: 0;
  height: 0;
  border-top: 17px solid transparent;
  border-bottom: 17px solid transparent;
  border-left: 10px solid rgb(173, 173, 173);
  position: absolute;
  top: 50%;
  margin-top: -17px;
  margin-left: 1px;
  left: 100%;
  z-index: 3;
}

/** The Spacing **/
.btn-breadcrumb .btn {
  padding:6px 12px 6px 24px;
}
.btn-breadcrumb .btn:first-child {
  padding:6px 6px 6px 10px;
}
.btn-breadcrumb .btn:last-child {
  padding:6px 18px 6px 24px;
}
/** Primary button **/
.btn-breadcrumb .btn.btn-primary:not(:last-child):after {
  border-left: 10px solid #428bca;
}
.btn-breadcrumb .btn.btn-primary:not(:last-child):before {
  border-left: 10px solid #357ebd;
}
.btn-breadcrumb .btn.btn-primary:hover:not(:last-child):after {
  border-left: 10px solid #3276b1;
}
.btn-breadcrumb .btn.btn-primary:hover:not(:last-child):before {
  border-left: 10px solid #285e8e;
}

</style>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" style="position: absolute;top: 0px;width: 100%">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="{{asset('admin_assets/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="{{asset('admin_assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::user()->name }} - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="/admin/profile" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                 {{--  @guest --}}
                  <a href="{{ route('logout') }}"class="btn btn-default btn-flat"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                    {{-- @endguest --}}

                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('admin_assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> {{ Auth::user()->name }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li ><a href="{{asset('admin/post')}}"><i class="fa fa-newspaper-o"></i><span>Posts</span></a></li>
        <li><a href="{{asset('admin/tag')}}"><i class="fa fa-tags"></i> <span>Tags</span></a></li>
         <li><a href="{{asset('admin/category')}}"><i class="fa fa-reorder"></i> <span>Categories</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
      
    @yield('content')
  

    <!-- Main content -->
    <section class="content container-fluid">

     

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
 {{--  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside> --}}
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->

<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/[version.number]/[distribution]/ckeditor.js"></script>
<script src="{{asset('admin_assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('admin_assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin_assets/dist/js/adminlte.min.js')}}"></script>
{{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> --}}
<script src="//cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

 {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript" charset="utf-8" async defer></script> --}}
{{-- <script>
  $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script> --}}
  <script type="text/javascript" charset="utf-8">
    

  // $('.btn-delete').click(function() {
  // var _this = $(this);  

  // var url = $(this).attr('data-url');
  // if (confirm("are you sure ?")) {
  //   $.ajax({
  //     url: 'del.destroy',
  //     type: 'get',
  //     success: function(response){
  //      toastr.warning(response.message);
  //      _this.parent().parent().remove();
  //     },
  //    error: function(error){
     
  //    } 

  //   })
    
    
  // }
  // });
  
//tag ajax
      $('#addformtag').submit(function(event) {
      event.preventDefault();

      $.ajax({
        url: '/admin/tag',
        type: 'post',

        data: {
          name: $('#name').val(),   
          _token: $('meta[name="csrf-token"]').attr('content')   
        },
        success: function(response){
          toastr.success('Add new student success!')
                  //ẩn modal add đi
                  $('#modal-add-tag').modal('hide');
                  setTimeout(function () {
                    window.location.href="{{ route('tag.index') }}";
                  },800);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                  //xử lý lỗi tại đây
                }

              });


    });
  
     //bắt sự kiện click vào nút show
          $('.btn-show-tag').click(function () {
              //hiện modal show lên
              $('#tag-show').modal('show');
          //lấy dữ liệu từ attribute data-url lưu vào biến url
          var url=$(this).attr('data-url');
          $.ajax({
            //sử dụng phương thức get
            type: 'get',
            url: url,
            //nếu thực hiện thành công thì chạy vào success
            success: function (response) {
              // console.log(response);
              //hiển thị dữ liệu được controller trả về vào trong modal
              $('#name-show').text(response.data.name);
              $('#slug-show').text(response.data.name);

            },
            error: function (jqXHR, textStatus, errorThrown) {
             
            }
          })
        })  
// delete
          $('.btn-delete-tag').click(function () {

          //lấy dữ liệu từ attribute data-url lưu vào biến url
          var url=$(this).attr('data-url');

          if (confirm("Are you sure?")){
            $.ajax({
              //phương thức delete
              type: 'delete',
              url: url,
              data:{
                _token: $('meta[name="csrf-token"]').attr('content') 
              },
              success: function (response) {
                //thông báo xoá thành công bằng toastr
                toastr.warning('delete student success!')
                setTimeout(function () {
                  window.location.href="{{ route('tag.index') }}";
                },800);
              },
              error: function (error) {
                
              }
            })
          }
        })

// edit

//bắt sự kiện click vào nút edit
        $('.btn-edit-tag').click(function (e) {
        //mở modal edit lên
        $('#modal-edit-tag').modal('show');
        e.preventDefault();
        //lấy data-url của nút edit
        var url=$(this).attr('data-url');
        $.ajax({
          //phương thức get
          type: 'get',
          url: url,
          success: function (response) {
            console.log(response);
            //đưa dữ liệu controller gửi về điền vào input trong form edit.
            $('#name-edit').val(response.data.name);
            $('#slug-edit').val(response.data.slug);
           

            //thêm data-url chứa route sửa todo đã được chỉ định vào form sửa.
            $('#form-edit-tag').attr('data-url','{{ asset('admin/tag/') }}/'+response.data.id)
          },
          error: function (error) {
            
          }
        })
      })
      //bắt sự kiện submit form edit
      $('#form-edit-tag').submit(function (e) {
        e.preventDefault();
        //lấy data-url của form edit
        var url=$(this).attr('data-url');

        $.ajax({
          //phương thức put
          type: 'put',
          url: url,
          //lấy dữ liệu trong form
          data: {
            name: $('#name-edit').val(),
            _token: $('meta[name="csrf-token"]').attr('content'),
           
            
          },

          success: function (response) {
             console.log('aaa');
            //thông báo update thành công
            toastr.success('edit student success!')
            //ẩn modal edit
            $('#modal-edit-tag').modal('hide');
            setTimeout(function () {
              window.location.href="{{ route('tag.index') }}";
            },800);
          },
          error: function (jqXHR, textStatus, errorThrown) {
            //xử lý lỗi tại đây
          }
        })
      })    

//tag ajax
//category ajax
        $('#addformcategory').submit(function(event) {
      event.preventDefault();

      $.ajax({
        url: '/admin/category',
        type: 'post',

        data: {
          name: $('#name').val(),   
          _token: $('meta[name="csrf-token"]').attr('content')   
        },
        success: function(response){
          toastr.success('Add new student success!')
                  //ẩn modal add đi
                  $('#modal-add-category').modal('hide');
                  setTimeout(function () {
                    window.location.href="{{ route('category.index') }}";
                  },800);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                  //xử lý lỗi tại đây
                }

              });


    });

        //bắt sự kiện click vào nút show
          $('.btn-show-category').click(function () {
              //hiện modal show lên
              $('#category-show').modal('show');
          //lấy dữ liệu từ attribute data-url lưu vào biến url
          var url=$(this).attr('data-url');
          $.ajax({
            //sử dụng phương thức get
            type: 'get',
            url: url,
            //nếu thực hiện thành công thì chạy vào success
            success: function (response) {
              // console.log(response);
              //hiển thị dữ liệu được controller trả về vào trong modal
              $('#name-show').text(response.data.name);
              $('#slug-show').text(response.data.name);

            },
            error: function (jqXHR, textStatus, errorThrown) {
             
            }
          })
        })

        // delete
          $('.btn-delete-category').click(function () {

          //lấy dữ liệu từ attribute data-url lưu vào biến url
          var url=$(this).attr('data-url');

          if (confirm("Are you sure?")){
            $.ajax({
              //phương thức delete
              type: 'delete',
              url: url,
              data:{
                _token: $('meta[name="csrf-token"]').attr('content') 
              },
              success: function (response) {
                //thông báo xoá thành công bằng toastr
                toastr.warning('delete student success!')
                setTimeout(function () {
                  window.location.href="{{ route('category.index') }}";
                },800);
              },
              error: function (error) {
                
              }
            })
          }
        })

    // edit

  //bắt sự kiện click vào nút edit
        $('.btn-edit-category').click(function (e) {
        //mở modal edit lên
        $('#modal-edit-category').modal('show');
        e.preventDefault();
        //lấy data-url của nút edit
        var url=$(this).attr('data-url');
        $.ajax({
          //phương thức get
          type: 'get',
          url: url,
          success: function (response) {
            console.log(response);
            //đưa dữ liệu controller gửi về điền vào input trong form edit.
            $('#name-edit').val(response.data.name);
            $('#slug-edit').val(response.data.slug);
           

            //thêm data-url chứa route sửa todo đã được chỉ định vào form sửa.
            $('#form-edit-category').attr('data-url','{{ asset('admin/category/') }}/'+response.data.id)
          },
          error: function (error) {
            
          }
        })
      })
      //bắt sự kiện submit form edit
      $('#form-edit-category').submit(function (e) {
        e.preventDefault();
        //lấy data-url của form edit
        var url=$(this).attr('data-url');

        $.ajax({
          //phương thức put
          type: 'put',
          url: url,
          //lấy dữ liệu trong form
          data: {
            name: $('#name-edit').val(),
            _token: $('meta[name="csrf-token"]').attr('content'),
           
            
          },

          success: function (response) {
             console.log('aaa');
            //thông báo update thành công
            toastr.success('edit student success!')
            //ẩn modal edit
            $('#modal-edit-category').modal('hide');
            setTimeout(function () {
              window.location.href="{{ route('category.index') }}";
            },800);
          },
          error: function (jqXHR, textStatus, errorThrown) {
            //xử lý lỗi tại đây
          }
        })
      })    


  </script>


<script>
        // delete
          $('.btn-delete').click(function () {

          //lấy dữ liệu từ attribute data-url lưu vào biến url
          var url=$(this).attr('data-url');

          if (confirm("Are you sure?")){
            $.ajax({
              //phương thức delete
              type: 'delete',
              url: url,
              data:{
                _token: $('meta[name="csrf-token"]').attr('content') 
              },
              success: function (response) {
                //thông báo xoá thành công bằng toastr
                toastr.warning('delete student success!')
                setTimeout(function () {
                  window.location.href="{{ route('post.PostsAdmin') }}";
                },800);
              },
              error: function (error) {
                
              }
            })
          }
        })

// $('#gioitinh-show').empty().append(<img src="/static/on.png" height="64px" width="64px">)
</script>
<script>
  
 CKEDITOR.config.autoParagraph = false;
  CKEDITOR.replace( 'content', {
    on: {
        instanceReady: function( ev ) {
            // Output paragraphs as <p>Text</p>.
            this.dataProcessor.writer.setRules( 'p', {
                indent: false,
                breakBeforeOpen: true,
                breakAfterOpen: false,
                breakBeforeClose: false,
                breakAfterClose: true
                
            });
        }
    }
} );
  </script>
  <script type="text/javascript">
       function readURL(input) {

          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
              $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
          }
        }

        $("#imgInp").change(function() {
          readURL(this);
        });
      </script>
<script>
    $(document).ready(function() {
    var imgs = $('.overflow-centered img');//jQuery class selector
    imgs.each(function(){
      var img = $(this);
      var width = img.width(); //jQuery width method
      var height = img.height(); //jQuery height method
      if(width < height){
         img.addClass('portrait');
      }else{
         img.addClass('landscape');
      }
    })
});</script>

{{-- <script>
  $(document).ready(function() {
    const cateOldValue = '{{ old('category_id') }}';
    
    if(cateOldValue !== '') {
      $('#cate').val(cateOldValue);
    }
  });
</script> --}}
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->


     {{-- **upload ajax** --}}
    {{--  <script>
    $('#file').change(function () {

      if ($(this).val() != '') {
        
      var form_data = new FormData();
      form_data.append('file', this.files[0]);
      form_data.append('_token', '{{csrf_token()}}');
      $.ajax({
        url: "{{url('ajax-image-upload')}}",
        data: form_data,
        type: 'POST',
        contentType: false,
        processData: false,
        success: function (data) {
          $('#image').attr('src', '{{asset('storage')}}/' + data);
          toastr.success('upload image done');
        },
        error: function (xhr, status, error) {
          $('#image').attr('src', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQVCnWZ3qX7QRykEwVMvRxNDVxUrH31FOhwhNTTzcM7t7BX5WgSA');
        }
      });
    }
  });
  </script> --}}
     {{-- **upload ajax** --}}

</body>
</html>




