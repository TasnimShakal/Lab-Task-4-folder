 <!DOCTYPE html>
<html>
<head>
<title>Password Change</title>

</head>
<body>

	<fieldset>
            <legend>CHNAGE PASSWORD</legend>
            <br>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>
		
		<label for="Current Password" class="inpLabel"> Current Password: </label>
		<input type="password" placeholder="" name="psw" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*?[0-9])(?=.*?[!@#$%^&*+`~=?\|<>/]).{8,}" required>
		

		<br><br>
		<label for="New Password" class="inpLabel">New Password: </label>
		<input type="password" placeholder="" name="psw" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*?[0-9])(?=.*?[!@#$%^&*+`~=?\|<>/]).{8,}" required>
		
		<br><br>
		<label for="Retype New Password" class="inpLabel">Retype New Password: </label>
		<input type="password" placeholder="" name="psw" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*?[0-9])(?=.*?[!@#$%^&*+`~=?\|<>/]).{8,}" required>
		
		<br><br>

		<input type="submit" name="submit" value="Submit" class="submit">
		<a href="home.php">Home</a>
	</form>
	</fieldset>

</body>
</html>     
