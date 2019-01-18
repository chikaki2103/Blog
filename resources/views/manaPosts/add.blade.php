@extends('layouts.masteradmin')


@section('content')
<div class="container invoice" style="background-color: transparent!important;border: 1px solid #f4f4f400!important;margin: 0 8px!important;"> <div class="btn-group btn-breadcrumb">
            <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-home"></i></a>
            <a href="/admin/post" class="btn btn-primary">Posts</a>
            <a href="#" class="btn btn-primary">Add New Post</a>
            
        </div>
		</div>
<section class="invoice">
	<!-- title row -->

		
		
		<div class="row">
			<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
				 {{ csrf_field() }}
				<div class="col-md-8">
					<div class="form-group">
					    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Title" name="title" value="{{old('title')}}">
					    @if($errors->has('title'))   
				                 
					        <span style="color: red;font-size: 15px;margin: 8px 0px 0px 15px;display: inline-block;">{{ $errors->first('title') }}</span>
					   
					   
						@endif
					 </div>
					<br>
					<textarea class="form-control" placeholder="Description" name="description">{{old('description')}}</textarea>
					@if($errors->has('description'))		         
					  <span style="color: red;font-size: 15px;margin: 8px 0px 0px 15px;display: inline-block;">{{ $errors->first('description') }}</span>
					@endif
					<br>

					<textarea name="content" placeholder="Nội Dung">{{old('content')}}</textarea>@if($errors->has('content'))		         
					  <span style="color: red;font-size: 15px;margin: 8px 0px 0px 15px;display: inline-block;">{{ $errors->first('content') }}</span>
					@endif
				
				</div>
				<div class="col-md-4">
					<div class="row invoice">
						<h4 style="color: #3c8dbc;"><i class="fa fa-bookmark"></i> &nbsp;Status</h4><hr>
						<select class="form-control" name="cars" style="margin : 0px;">
					    <option value="volvo">Volvo</option>
					    <option value="saab">Saab</option>
					    <option value="fiat">Fiat</option>
					    <option value="audi">Audi</option>
					 	</select>
					 	<div class="checkbox">
					  		<label><input type="checkbox" value="">Bài Viết Nổi Bật</label>
						</div>
					<br>
					</div>
					<div class="row invoice">
						<h4 style="color: #3c8dbc;"><i class="fa fa-bars"></i> &nbsp;Categories</h4><hr>
						
								<select class="form-control" name="category_id[]" style="margin : 0px;">
								@foreach($categories as $category)
							    <option value="{{$category->id}}">{{$category->name}}</option>
							  
							    @endforeach
							 	</select>
								

							
					</div>
					<div class="row invoice">
						<h4 style="color: #3c8dbc;"><i class="fa fa-picture-o"></i> &nbsp;Thumbnail</h4><hr>

						

						<img id="blah" src="{{ asset('upload/no-img.png') }}" alt="your image" style="width: 180px;height: 125px;border-radius: 10%;margin-top: 10px;"/>
						<input name="thumbnail" type="file" id="image" onchange="readURL(this);" style="margin-top: 10px;" />
						@if($errors->has('thumbnail'))		         
						  <div style="color: red;font-size: 15px;margin: 8px 0px 0px 15px;display: inline-block;">{{ $errors->first('thumbnail') }}</div>
						@endif

					</div>
					<div class="row invoice">
						<h4 style="color: #3c8dbc;"><i class="fa fa-tags"></i> &nbsp;Tags</h4><hr>
								
								@foreach($tags as $tag)
								<div class="checkbox">
							  		<label><input id="your_textarea" name="tag_id[]" type="checkbox" value="{{$tag->id}}">{{$tag->name}}</label>
								</div>

								{{-- <input class="input-tags" name="tag_id[]" type="text" value="{{$tag->name}}" data-role="tagsinput" /> --}}
								@endforeach
								@if($errors->has('tag_id'))		         
								  <div style="color: red;font-size: 15px;margin: 2px 0px 0px 15px;display: inline-block;">{{ $errors->first('tag_id') }}</div>
								@endif
								{{-- <select class="js-example-basic-multiple" name="state">
								  <option value="AL">Alabama</option>
								    ...
								  <option value="WY">Wyoming</option>
								</select> --}}
							
					</div>
					{{-- <div class="radio" style="margin:0px;">
						<label for="">
						  <input type="radio" name="radioGroup" id="radio1" value="option1"> 1 </label>
						</div> --}}
					<div class="row invoice">
						<div class="col-md-4"></div>
						<div class="col-md-4"><button type="submit" class="btn btn-danger" value="upload">ADD</button></div>
						<div class="col-md-4"></div>
								
							
					</div>	
				</div>
				
			</form>
		</div> {{-- end-row --}}
	
</section>



@endsection	