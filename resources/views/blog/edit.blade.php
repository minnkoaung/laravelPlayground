@extends("layouts.master")
@section("content")
	<h1>Edit</h1>
@endsection

@section ('footer')
	<script>
		CKEDITOR.replace('body');
	</script>
@stop