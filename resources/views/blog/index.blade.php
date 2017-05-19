@extends("layouts.master")
@section("content")
	 <!-- Flash Message -->
	 <!-- adding raw flashmessage -->
	<!--  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach -->
    <!-- addiing flash message by https://github.com/laracasts/flash package -->
    @include('flash::message')

<a href="{{ route('blog.create')}}" class="btn btn-primary">Create New Article</a>
	@foreach($articles as $article)
			<div class="row">
			<div class="col-md-12">
				<!-- strip_tags  -->
				<h1>{{ strip_tags($article->title) }}</h1>
				<p>{{ strip_tags($article->body) }}</p>
				<!-- <p><a href="{{ URL::to('blog/' . $article->id . '/edit') }}" class="btn btn-warning btn-xs">Edit</a></p> -->
				<p><a href="{{ route('blog.edit',$article->id)}}" class="btn btn-warning btn-xs">Edit</a></p>
			</div>
		</div>
		@endforeach
@endsection
@section ('footer')
	<script>
		CKEDITOR.replace('body');
	</script>
@endsection