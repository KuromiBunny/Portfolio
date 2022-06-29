<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="./css/login-style.css" rel="stylesheet" type="text/css" />
	
	<title>Web Arcade - Register</title>
</head>



<body>
	<div class="login-container">
		<form action="../actions/register.php" method="post" id="frmLogin" onSubmit="return validate();">
				<h2>Register account</h2>

				<div>
				<div id="user_name_error" style="margin: 0;"></div>
					<label for="username">Username</label>
				</div>
				<div>
					<input name="user_name" id="user_name" type="text" class="frm-input">
				</div>
                <div>
				<div id="screen_name_error" style="margin: 0;"></div>
					<label for="schermnaam">Displayname</label>
				</div>
				<div>
					<input name="scherm_name" id="scherm_name" type="text" class="frm-input">
				</div>
                <div>
				<div id="email_error" style="margin: 0;"></div>
					<label for="email">Email</label>
				</div>
				<div>
					<input name="email" id="email" type="text" class="frm-input">
				</div>
				<div>
				<div id="password_error" style="margin: 0;"></div>
					<label for="password">Nieuw Wachtwoord</label>
				</div>
				<div>
					<input name="password" id="password" type="password" class="frm-input">
				</div>
                <div>
					<label for="password">Wachtwoord Herhalen</label>
				</div>
				<div>
					<input name="repeatpassword" id="repeat_password" type="password" class="frm-input">
				</div>
				<div>
					<input type="submit" name="submit" value="Verzenden" class="submit-btn"></span>
				</div>
				</form>
				<script>
		function validate() {
			// debugger;
			userNameError = document.getElementById('user_name_error')
			passwordError = document.getElementById('password_error')
			emailError = document.getElementById('email_error')
			screenNameError = document.getElementById('screen_name_error')
			repeatPasswordError = document.getElementById('password_error')

			let userNameValue = document.getElementById('user_name').value;

			if (userNameValue == "" && document.getElementById('password').value == "" && document.getElementById('email').value == "" && document.getElementById('schermnaam').value == "" && document.getElementById('repeatpassword').value == ""){
				userNameError.classList.add("error-message");
				passwordError.classList.add("error-message");
				emailError.classList.add("error-message");
				screenNameError.classList.add("error-message");
				repeatPasswordError.classList.add("error-message");


				userNameError.innerHTML = "user name required";
				passwordError.innerHTML = "password required";
				emailError.innterHTML = "email required";
				screenNameError.innerHTML = "screen name required";
				repeatPasswordError.innerHTML = "password required";

				return false;
			}
			// if (document.getElementById("user_name").value == ""){
			// 	userNameError.classList.add("error-message");
			// 	passwordError.classList.remove("error-message");
			// 	emailError.classList.remove("error-message");
			// 	screenNameError.classList.remove("error-message");
			// repeatPasswordError.classList.remove("error-message");

			// 	userNameError.innerHTML = "user name required";
			// 	passwordError.innerHTML = "";
			// 	emailError.innterHTML = "";
			// 	screenNameError.innerHTML = "";
			// 	repeatPasswordError.innerHTML = "";
			
			// 	return false;
			// }
			// if (document.getElementById("password").value == ""){
			// 	userNameError.classList.remove("error-message");
			// 	passwordError.classList.add("error-message");
			// 	emailError.classList.remove("error-message");
			// 	screenNameError.classList.remove("error-message");
			// repeatPasswordError.classList.remove("error-message");

			// 	userNameError.innerHTML = "";
			// 	passwordError.innerHTML = "password required";
			// 	emailError.innterHTML = "";
			// 	screenNameError.innerHTML = "";
			// 	repeatPasswordError.innerHTML = "";

			// 	return false;
			// }
			// if (document.getElementById("email").value == ""){
			// 	userNameError.classList.remove("error-message");
			// 	passwordError.classList.remove("error-message");
			// 	emailError.classList.add("error-message");
			// 	screenNameError.classList.remove("error-message");
			// repeatPasswordError.classList.remove("error-message");

			// 	userNameError.innerHTML = "";
			// 	passwordError.innerHTML = "";
			// 	emailError.innterHTML = "email required";
			// 	screenNameError.innerHTML = "";
			// 	repeatPasswordError.innerHTML = "";

			// 	return false;
			// }
			// if (document.getElementById("schermnaam").value == ""){
			// 	userNameError.classList.remove("error-message");
			// 	passwordError.classList.remove("error-message");
			// 	emailError.classList.remove("error-message");
			// 	screenNameError.classList.add("error-message");
			// repeatPasswordError.classList.remove("error-message");

			// 	userNameError.innerHTML = "";
			// 	passwordError.innerHTML = "";
			// 	emailError.innterHTML = "";
			// 	screenNameError.innerHTML = "screen name required";
			// 	repeatPasswordError.innerHTML = "";

			// 	return false;
			// }
			// if (document.getElementById("repeatpassword").value == ""){
			// 	userNameError.classList.remove("error-message");
			// 	passwordError.classList.remove("error-message");
			// 	emailError.classList.remove("error-message");
			// 	screenNameError.classList.remove("error-message");
			// 	repeatPasswordError.classList.add("error-message");

			// 	userNameError.innerHTML = "";
			// 	passwordError.innerHTML = "";
			// 	emailError.innterHTML = "";
			// 	screenNameError.innerHTML = "";
			// 	repeatPasswordError.innerHTML = "password required";

			// 	return false;
			// }
		return true;
	}

		
    </script>
				</body>
</html>