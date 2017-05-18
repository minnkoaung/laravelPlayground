<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrat.min.css') }}">
</head>
<body>
	<div class="container">
		@yield("content")
	</div>
	<script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
	@yield ('footer')
</body>
</html>