<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Users</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		@foreach ($users as $user)
			{{ $user->name }}
		@endforeach
	</div>

	{{ $users->links() }}
</body>
</html>