<form action="{{ route('login') }}" method="post" class="loginForm" name="login">
	
	@csrf
	 <div class="form-group">
		<label for="email"> 
	    	<input type="text" class="form-control" id="username" name="username" placeholder="Username" @if(isset($_COOKIE["username"])) value="{{$_COOKIE['username']}}" @endif required>
		</label>
	 </div>
	 <div class="form-group">
		<label for="Password">
	    	<input type="password" class="form-control" id="password" name="password" placeholder="Password" @if(isset($_COOKIE["password"])) value="{{$_COOKIE['password']}}" @endif required>
		</label>
	 </div>
	 <div class="form-group">
		 <label for="rememberme" class="rememberme">
		<input type="checkbox" id="remember" name="remember" @if(isset($_COOKIE["login"])) checked @endif >
		Keep me signed in
		</label> 
	</div>

	<input type="submit" id="loginFormSubmit" name="submit" value="Sign In" class="button primary" >
	<p class="not-registered">
		Forgot Password ?<a href="" class="omnCamp omnrg_login">Forgot</a>
	</p>

	@if(session('error')!='')
		<div class="customize_alert_message alert alert-danger" role="alert">{{ session('error') }}</div>
	@endif

</form>