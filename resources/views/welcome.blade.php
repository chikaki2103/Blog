@extends('layouts.masteradmin')
@section('content')

<section class="invoice">
	<!-- title row -->
	<div class="container">
		<div class="row">
			<form action="">
				<div class="col-md-8">
					<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
					<br>
					<textarea class="form-control" placeholder="Mô Tả"></textarea>
					<br>

					<textarea name="editor1" placeholder="Nội Dung"></textarea>
				
				</div>
				<div class="col-md-4">
					
				</div>
			</form>
		</div> {{-- end-row --}}
	</div>	{{-- end-container --}}
</section>


	
@endsection	