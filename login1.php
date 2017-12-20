<?php
	session_start();
	include_once 'include/class.user.php';
	$user = new User();

	if (isset($_REQUEST['submit'])) { 
		extract($_REQUEST);   
	    $login = $user->check_login($emailusername, $password);
	    if ($login) {
	        // Registration Success
                echo 'Login is successful, you can proceed for payment';
                
	       header("location:checkout.html");
	    } else {
	        // Registration Failed
	        echo 'Wrong username or password';
	    }
	}
?>


<!DOCTYPE html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title> Login </title>
		
<link rel="stylesheet" href="m.css">
		

		<script language="javascript" type="text/javascript">
 
            function submitlogin() {
                var form = document.login;
				if(form.emailusername.value == ""){
					alert( "Enter email or username." );
					return false;
				}
				else if(form.password.value == ""){
					alert( "Enter password." );
					return false;
				}	 
			}
		</script>
	</head>

	<body>
<div class="login">
		<div class="login-screen">
		<div class="app-title">
			<h1 style="margin-left:190px">Login Here</h1>
			</div>
			<form class="form" action="" method="post" name="login" >
				<table>
					<tr>
								<div class="login-form">
				                <div class="control-group">
						<th>UserName or Email:</th>
						<td><input type="text" name="emailusername" default="" required></td>
					</tr>
					<tr>
						<th>Password:</th>
						<td><input type="password" name="password" default="" required></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" id="login-button"  class="btn btn-primary btn-large btn-block"name="submit" value="Login" onclick="return(submitlogin());"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><a href="registration.php">Register new user</a></td>
					</tr>
					
				</table>
			</form>
		</div>

</div>
	</body>
</html>