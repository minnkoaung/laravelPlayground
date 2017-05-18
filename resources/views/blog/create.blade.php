@extends("layouts.master")
@section("content")
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('blog.store') }}" method="POST">
				{{ csrf_field() }}
					<div class="form-group">
					    <label for="title">Title:</label>
					    <input type="text" name="title" id="title" class="form-control">
					</div>

					<div class="form-group">
					    <label for="body">Body:</label>
					    <textarea name="body" id="body" class="form-control"></textarea>
					</div>

					<div class="form-group"> 
					    <button type="submit" class="btn btn-primary">Create Blog</button>
					</div>
			</form>
		</div>

	</div>
@endsection

@section ('footer')
	<script>
		CKEDITOR.replace('body');
	</script>
@stop