<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Post</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<style type="text/css">
		h1 {
			text-align: center;
			font-size: 200%;
		}
		
		.container {
			width: 400px;
			margin: 0 auto;
		}

		h2, .content, .comment {
			background: #eee;
			margin: 10px 0;
			padding: 10px;
		}

		h2 {
			text-align: center;
			font-size: 150%;
		}

		.comments h3 {
			text-align: center;
			font-weight: bold;
		}

		.comments footer {
			text-align: right;
			font-style: italic;
			font-size: 70%;
		}
	</style>
</head>
<body>
	<h1><a href="/">МикроБлог</a></h1>
	<div class="container">
		<h2>{{ $post->title }}</h2></a>
		<div class="content">
			{{$post->body}}
		</div>
		<div class="comments">
			<h3>Comments</h3>
			@foreach ($comments as $comment)
				<div class="comment"> 
					{{$comment->body}}
					<footer>{{$comment->created_at}}</footer>
				</div>
			@endforeach
		</div>
	</div>
</body>
</html>