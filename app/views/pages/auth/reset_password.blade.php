<form action="/user/reset/password" method="POST">
	<input name="password" type="password" placeholder="New Password"></input>
	<!-- <input name="confirm_password" type="password" placeholder="Confirm Password" /> -->
	<input type="hidden" name="code" value="{{ Input::get('code')}}" />
	<input type="hidden" name="email" value="{{ Input::get('email')}}">
	<input type="submit" />
</form>
