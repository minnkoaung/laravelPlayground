@extends("layouts.master")
@section("content")
	  @section("content")
	<div class="row">
		<div class="col-md-12">
			@foreach($articles as $article)
			<form action="{{ route('blog.update',$article->id)}}" method="PUT">
				<!-- {{ csrf_field() }} -->
					<!-- <input type="hidden" name="id" id="id" class="form-control" value="{{ $article->id }}"> -->
					<div class="form-group">
					    <label for="title">Title:</label>
					    <input type="text" name="title" id="title" class="form-control" value="{{ $article->title }}">
					</div>
					<div class="form-group">
					    <label for="body">Body:</label>
					    <textarea name="body" id="body" class="form-control">{{ $article->body }}</textarea>
					</div>
					<div class="form-group">
					    <button type="submit" class="btn btn-primary">Update</button>
					</div>
			</form>
			@endforeach
		</div>

	</div>
@endsection

@endsection

@section ('footer')
	<script>
		CKEDITOR.replace('body');
	</script>
@stop