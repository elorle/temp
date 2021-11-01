<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Posts</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<style type="text/css">
		h1 {
			text-align: center;
			font-size: 200%;
		}

		.container {
			max-width: 100%;
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			justify-content: space-between;
			align-items: stretch;
		}

		.post {
			background: #eee;
			margin: 10px;
			flex: 1 0 29%;
			padding-bottom: 30px;
			position: relative;
		}

		.post h2 {
			text-align: center;
			background: #ddd;
			margin: 10px;
		}

		.post footer {
			position: absolute;
			bottom: 10px;
			right: 10px;
			font-size: 80%;
			font-style: italic;
		}

		.pagination {
			padding: 10px;
		}
	</style>
</head>
<body>
	<h1><a href="/">МикроБлог</a></h1>
	<div class="container">
		@foreach ($posts as $post)
			<div class="post"> 
				<a href="{{route('post.show', ['id' => $post->id])}}"><h2>{{ $post->title }}</h2></a>
				<div class="content" style="margin: 10px;">{{$post->body}}</div>
				<footer>comments: {{$post->commentsCount}}</footer>

			</div>
		@endforeach
	</div>
	
	<div class="pagination">{{ $posts->links() }}</div>
</body>
</html>