<head>
		<title>MyJournal SignUpPage</title>
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/signUp.css">
	</head>
	<body>
		<div class='whole'>

			<div style="margin-top:30px"></div>
			
			<form class="form-signup" action="/user/registerUser" method="post">

				<h1>L O G O</h1>

				<label for="username" class="username-only"> Username</label>
				<input type="text" name="name" id="name" placeholder="Username" class="validate"
                       value="<?php echo isset($name) ? $name : ''; ?>" required>

				<br>

				<label for="email" class="email-only"> Email Address</label>
				<input type="email" name="email" id="email" placeholder="Please enter your email address" class="validate"
                       value="<?php echo isset($email) ? $email : ''; ?>" required>
				    
				<br>

				<label for="password" class="pwd-only"> Password</label>
				
				<input type="password" name="password" id="password" placeholder="Please enter your password" class="validate" required minlength="8">

				<br>

				<label for="password" class="pwd-only">Password Confirmation</label>

				<input type="password" name="password_confirm" id="password_confirm" placeholder="Please enter your password" class="validate" required minlength="8">

				<div style="margin-top:40px"></div>
				<button type="submit" id="signUpBtn" class="btn btn-su btn-primary btn-block"><a href="/homepage">Sign Up</a> </button>
				
				<br>

				<a href="/logIn" class="hasaccount">Already have an account?</a>
		    
		    </form>
		</div>
	</body>