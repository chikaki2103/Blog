@extends('layouts.masteradmin')


@section('content')
<div class="container invoice" style="background-color: transparent!important;border: 1px solid #f4f4f400!important; margin: 0 8px!important;"> <div class="btn-group btn-breadcrumb">
            <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-home"></i></a>
            <a href="/admin/post" class="btn btn-primary">Posts</a>
            <a href="#" class="btn btn-primary">Edit Post</a>

            
        </div>
		</div>
<section class="invoice">
	<!-- title row -->
		<h2 style="text-align: center;margin-bottom: 20px;">Edit POST</h2>
		<div class="row">
			<form action="{{ asset('/admin/update/'.$editPost->id)}}" method="POST" enctype="multipart/form-data">
				 {{ csrf_field() }}
				<div class="col-md-8">
					<div class="form-group">
					    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Title" name="title" value="{{$editPost->title}}">
					     @if($errors->has('title'))   
				                 
					        <span>{{ $errors->first('title') }}</span>
					   
					   
						@endif
					 </div>
					<br>
					<textarea class="form-control" placeholder="Description" name="description" >{{$editPost->description}}</textarea>
					@if($errors->has('description'))		         
					  <span>{{ $errors->first('description') }}</span>
					@endif
					<br>

					<textarea name="content" placeholder="Nội Dung">{{$editPost->content}}</textarea>
					@if($errors->has('content'))		         
					  <span>{{ $errors->first('content') }}</span>
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
							<!-- 	{{-- @foreach($categories as $category)
								<div class="checkbox">
							  		<label><input id="your_textarea" name="category_id[]" type="checkbox" value="{{$category->id}}">{{$category->name}}</label>
								</div>
								@endforeach --}} -->

								@foreach($categories as $category)
								<div class="radio">
							  		<label><input id="your_textarea" name="category_id" type="radio" value="{{$category->id}}" <?php if($category['id']==$editPost['category_id']){echo 'checked';} ?>>{{$category->name}}</label>
								</div>

								@endforeach

								{{-- <select class="form-control" name="cars" style="margin : 0px;">
								@foreach($categories as $category)
							    	<option value="{{$category->id}}" name="category_id[]" >{{$category->name}}</option>
								@endforeach
							   
							 	</select> --}}
							
					</div>
					<div class="row invoice">
						<h4 style="color: #3c8dbc;"><i class="fa fa-picture-o"></i> &nbsp;Thumbnail</h4><hr>
						<div class="form-group">
						<input class="form-control" name="thumbnail" type="file" id="imgInp" value="{{$editPost->thumbnail}}" />
						</div>
						{{-- <input type="" value="{{ $editPost->thumbnail }}"> --}}
						<img id="blah" src="{{ asset($editPost->thumbnail) }}" alt="your image" style="width: 150px;height: 150px; border-radius: 10%;margin-top: 10px; " />
						{{--  <input type='file' id="imgInp" />
  						<img id="blah" src="#" alt="your image" /> --}}
					</div>
					<div class="row invoice">
						<h4 style="color: #3c8dbc;"><i class="fa fa-tags"></i> &nbsp;Tags</h4><hr>
								
								@foreach($tags as $tag)
								<div class="checkbox">
							  		<label><input id="your_textarea" name="tag_id[]" type="checkbox" value="{{$tag->id}}"  
							  			<?php 
							  				if($editPost->tagOfPost->containsStrict('id',$tag->id)){echo 'checked';} 
							  			

							  			?>
							  			>{{$tag->name}}</label>
								</div>

								
								@endforeach
								@if($errors->has('tag_id'))		         
								  <div>{{ $errors->first('tag_id') }}</div>
								@endif
								{{-- <input class="input-tags" name="tag_id[]" type="text" value="{{$tag->name}}" data-role="tagsinput" /> --}}
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
						<div class="col-md-4"><button type="submit" class="btn btn-danger" value="upload">Edit</button></div>
						<div class="col-md-4"></div>
								
							
					</div>	
				</div>
				
			</form>
		</div> {{-- end-row --}}
	
</section>



@endsection	