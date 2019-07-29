<link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
<div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		
		<form class="form" method="post" action="{{ route('login') }}">
            @csrf
			<input type="text" name="email" placeholder="Username" >
			<input type="password" name="password" placeholder="Password">
			<button type="submit" id="login-button">Login</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>