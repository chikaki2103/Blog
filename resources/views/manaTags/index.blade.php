@extends('layouts.masteradmin')
@section('content')
<div class="container invoice" style="background-color: transparent!important;border: 1px solid #f4f4f400!important;"> <div class="btn-group btn-breadcrumb">
            <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-home"></i></a>
            <a href="#" class="btn btn-primary">Tags</a>
            
        </div>
		</div>
<section class="invoice">

	<div class="alert-success"></div>

		<button class="btn btn-success" data-toggle="modal" href='#modal-add-tag' id="tagbtn">Add</button>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Slug</th>
						<th>Created at</th>
						<th>Updated at</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					
					{{-- biến $todos được controller trả cho view
					chứa dữ liệu tất cả các bản ghi trong bảng todos. Dùng foreach để hiển
					thị từng bản ghi ra table này. --}}
					
					@foreach ($tags as $tag)
					<tr>
						<td>{{$tag->id}}</td>
						<td>{{$tag->name}}</td>
						{{-- <td><img src="{{ asset($post->thumbnail) }}" alt="" style="width: 110px;height: 100px;"></td> --}}
						<td>{{$tag->slug}}</td>	

						<td>{{$tag->created_at->diffForHumans()}}</td>
						<td>{{$tag->updated_at->diffForHumans()}}</td>
						<td style="width: 150px;">
							{{-- <a style="display: inline-block; width: 67px;" class="btn btn-warning btn-edit" data-toggle="modal" href="#modal-edit" data-id="{{$post->id}}" >Edit</a> --}}

								{{-- <a  href="{{ route('detail.show',$post->id) }}" style="display: inline-block; width: 67px;" class="btn btn-info btn-show">Detail</a> --}}
								<a class="btn btn-primary btn-edit-tag" data-url="{{ route('tag.edit',$tag->id) }}"​ ><i class="fa fa-edit"></i></a>

								<a class="btn btn-info btn-show-tag" data-url="{{ route('tag.show',$tag->id) }}"​><i class="fa fa-eye"></i></a>

								<a class="btn btn-danger btn-delete-tag" data-url="{{ route('tag.destroy',$tag->id) }}"​ ><i class="fa fa-times"></i></a>
								{{-- <a href="/admin/a/tag/{{$tag->id}}">del</a>
								 --}}
							
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
			{{$tags->Links()}}

			
{{-- ajax --}}
{{-- add --}}
<div class="modal fade" id="modal-add-tag">
			<div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-body">
						<form action="" method="POST" id="addformtag" class="" role="form" data-url="{{ route('tag.store') }}">
							{{ csrf_field() }}
							<div class="form-group">
								<legend>Add Tag</legend>
							</div>

							<div class="form-group">
								<label class="control-label" for="tag">Tên:</label>
								
								<input name="name" type="text" class="form-control" id="name" placeholder="Enter tag">
								
							</div>
							

							<button type="submit" class="btn btn-primary">Add</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</form>
					</div>

				</div>
			</div>
		</div>
{{-- end-add --}}
 {{-- Modal show chi tiết todo --}}
				<div class="modal fade" id="tag-show">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Show tag</h4>
					</div>
					<div class="modal-body" style="text-align: center;">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th style="text-align: center;">Name</th>
									<th style="text-align: center;">Slug</th>
									
								</tr>
							</thead>
							<tbody>
								<tr>
									<td id="name-show"></td>
									<td id="slug-show"></td>
									
									
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

{{-- Modal sửa todo --}}

	<div class="modal fade" id="modal-edit-tag">
		<div class="modal-dialog">
			<div class="modal-content">

				<form action=""​ id="form-edit-tag" method="POST" role="form" data-url="{{ route('tag.update',$tag->id) }}">
					{{ csrf_field() }}

					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Edit Tag</h4>
					</div>
					<div class="modal-body">

						<div class="form-group">
							<label for="">Tên</label>
							<input type="text" class="form-control" id="name-edit" placeholder="Name">
						</div>
						<div class="form-group">
							<label class="control-label" for="gioitinh">Slug:</label>
							<input readonly name="slug" type="text" class="form-control" id="slug-edit" placeholder="slug">

						</div>
						



						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Edit</button>

						</div>
					</form>
				</div>
			</div>
		</div>		
</section>

{{-- <script type="text/javascript" charset="utf-8">
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$('#addform').submit(function(event) {
			event.preventDefault();

			$.ajax({
				url: '/admin/tag',
				type: 'post',

				data: {
					name: $('#name').val(),				
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


	</script>	 --}}
@endsection	
