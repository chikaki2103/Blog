@extends('layouts.masteradmin')
@section('content')

    	<div class="container invoice" style="background-color: transparent!important;border: 1px solid #f4f4f400!important;margin: 0 8px!important;"> <div class="btn-group btn-breadcrumb">
            <a href="/admin/home" class="btn btn-primary"><i class="glyphicon glyphicon-home"></i></a>
            <a href="#" class="btn btn-primary">Posts</a>
            
        </div>
		</div>
       
<section class="invoice">

	<div class="alert-success"></div>

		<a href="{{asset('admin/create')}}" class="btn btn-success btn-add">Add New</a>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Title</th>
						<th>Thumbnail</th>
						<th>Created</th>
						<th>Updated</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					
					{{-- biến $todos được controller trả cho view
					chứa dữ liệu tất cả các bản ghi trong bảng todos. Dùng foreach để hiển
					thị từng bản ghi ra table này. --}}
					
					@foreach ($posts as $post)
					<tr>
						<td>{{$post->id}}</td>
						<td>{{$post->title}}</td>
						{{-- <td><img src="{{ asset($post->thumbnail) }}" alt="" style="width: 110px;height: 100px;"></td> --}}
							<td><img src="{{ asset($post->thumbnail) }}" alt="" style="width: 110px;height: 100px;"></td>

						<td>{{$post->created_at->diffForHumans()}}</td>
						<td>{{$post->updated_at->diffForHumans()}}</td>
						<td style="width: 15%;">
							{{-- <a style="display: inline-block; width: 67px;" class="btn btn-warning btn-edit" data-toggle="modal" href="#modal-edit" data-id="{{$post->id}}" >Edit</a> --}}

								{{-- <a  href="{{ route('detail.show',$post->id) }}" style="display: inline-block; width: 67px;" class="btn btn-info btn-show">Detail</a> --}}
								<a href="{{ asset('/admin/edit/'.$post->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>

								<a href="{{ route('detail.show',$post->id) }}" class="btn btn-info btn-show" data-url="{{ route('detail.show',$post->id) }}"​><i class="fa fa-eye"></i></a>

								<a class="btn btn-danger btn-delete" data-url="{{ route('del.destroy',$post->id) }}"​ ><i class="fa fa-times"></i></a>

							
							{{-- <button type="button" class="btn btn-warning btn-edit">Edit</button> --}}
							

							{{-- <a style="display: inline-block; width: 67px;" href="{{ route('todos.edit',$todo->id) }}" class="btn btn-warning">Edit</a>
							<form style="display: inline-block;" action="{{ route('todos.destroy',$todo->id) }}" method="post" accept-charset="utf-8">
								@csrf
								{{method_field('delete')}}
								<button type="submit" class="btn btn-danger">Delete</button>
							</form> --}}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{{$posts->Links()}}

			<div class="modal fade" id="modal-show">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Show student</h4>
					</div>
					<div class="modal-body" style="text-align: center;">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Title</th>
									<th>Thumbnail</th>
									<th>Description</th>
									<th>Content</th>
									
								</tr>
							</thead>
							<tbody>
								<tr>
									<td id="student-show"></td>
									<td id="gioitinh-show"></td>
									<td id="ngaysinh-show"></td>
									<td id="sdt-show"></td>
									
								</tr>
							</tbody>
						</table>
					</div> 
					<!-- modalbody -->

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>

			</div>
		</div>


</section>

	
@endsection	
