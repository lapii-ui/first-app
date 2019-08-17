@php 
	$isRegister = request()->is('register'); 
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/util-login.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="POST" action=" @if($isRegister) {{ route('register') }} @else {{ route('login') }} @endif" class="login100-form validate-form">
                    @csrf

					<span class="login100-form-title p-b-43">
						{{ $isRegister ? 'Register User Login' : 'Security Login' }}
					</span>
					
					@if($isRegister)
						<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
							<input id="name" type="text" class="input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
							<span class="focus-input100"></span>
							<span class="label-input100">Name</span>
						</div>
						<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
							<input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
							<span class="focus-input100"></span>
							<span class="label-input100">Email</span>
						</div>
						<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
							<input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
							<span class="focus-input100"></span>
							<span class="label-input100">Password</span>
						</div>
						<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
							<input id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password">
							<span class="focus-input100"></span>
							<span class="label-input100">Confirm Password</span>
						</div>
						<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
							<input id="name" type="text" class="input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
							<select name="" id="">
								
							</select>
							<span class="focus-input100"></span>
							<span class="label-input100">Position</span>
						</div>

					@else
						<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
							<input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
							<span class="focus-input100"></span>
							<span class="label-input100">Email</span>
						</div>
						
						
						<div class="wrap-input100 validate-input" data-validate="Password is required">
							<input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
							<span class="focus-input100"></span>
							<span class="label-input100">Password</span>
						</div>
	
						<div class="flex-sb-m w-full p-t-3 p-b-32">
							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
								<label class="label-checkbox100" for="remember">
									Remember me
								</label>
							</div>
	
							@if (Route::has('password.request'))
								<div>
									<a href="{{ route('password.request') }}" class="txt1">
										Forgot Password?
									</a>
								</div>
							@endif
						</div>
					@endif

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							{{ $isRegister ? 'Register' : 'Login' }}
						</button>
					</div>
					<div class="login-or-register">
						<a href="{{ route('login') }}"><i class="fa fa-angle-double-left"></i> Back</a>
						<span class="margin-custom">||</span>
						<a href="{{ route('register') }}"> Register!</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images/icon/security.jpg');">
				</div>
			</div>
		</div>
	</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="js/login.js"></script>

</body>
</html>