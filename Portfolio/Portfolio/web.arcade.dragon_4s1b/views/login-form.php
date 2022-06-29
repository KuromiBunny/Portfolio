<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="./views/css/login-style.css" rel="stylesheet" type="text/css" />
	<title>Web Arcade - Login</title>
</head>

<body>

	<div class="login-container">
		<form action="./actions/login.php" method="post" id="frmLogin" onSubmit="return validate();">	
				<h2>Login</h2>

				<?php
					if(isset($_SESSION["errorMessage"])) {
				?>
						<div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
				<?php 
						unset($_SESSION["errorMessage"]);
					}
				?>
				
				<div>
					<div id="user_name_error" style="margin: 0;"></div>	
					<label for="username">Username</label>
				</div>
				<div>
					<input name="user_name" id="user_name" type="text" class="frm-input" >
				</div>
				<div>
				<div id="password_error" style="margin: 0;"></div>
					<label for="password">Password</label>
				</div>
				<div>
					<input name="password" id="password" type="password" class="frm-input" >
				</div>
				<div>
					<input type="submit" name="login" value="Login" class="login-btn"></span>
				</div>
				<br>
				<br>
				<div>
					<a href="./views/register-form.php"><button type="button" action="register-form.php" class="submit-btn">Register</button></a>
					
				</div>
		</form>
	</div>
	<script>
		function validate() {
			userNameError = document.getElementById('user_name_error')
			passwordError = document.getElementById('password_error')

			if (document.getElementById('user_name').value == "" && document.getElementById('password').value == ""){
				userNameError.classList.add("error-message");
				passwordError.classList.add("error-message");

				userNameError.innerHTML = "user name required";
				passwordError.innerHTML = "password required";

				return false;
			}
			if (document.getElementById("user_name").value == ""){
				userNameError.classList.add("error-message");
				passwordError.classList.remove("error-message");

				userNameError.innerHTML = "user name required";
				passwordError.innerHTML = "";
			
				return false;
			}
			if (document.getElementById("password").value == ""){
				userNameError.classList.remove("error-message");
				passwordError.classList.add("error-message");

				userNameError.innerHTML = "";
				passwordError.innerHTML = "password required";

				return false;
			}
		return true;
	}

		
    </script>
</body>
</html>