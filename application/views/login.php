<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>
<body>
	<h1>Login</h1>
	
	<?php echo validation_errors();?>
	<?php echo form_open('LoginController/checkLogin');?>
	Username: </br>
	<input type="text" name="username"/></br>
	Password: </br>
	<input name="password" type="password"/></br>
	<input type="submit" value="login" name="submit"/>
	</form>
</body>
</html>