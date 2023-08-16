<h1>Input Test</h1>

<form action="{{route('login')}}" method="post">
	@csrf
	<div><input type="text" name="name" id=""></div>
	<span>@error('name'){{$message}}@enderror</span>
	<div><input type="password" name="password" id=""></div>
	<span>@error('password'){{$message}}@enderror</span>
	<div>
		<button type="submit">Login</button>
	</div>
	
</form>