<?php

    include_once 'include/class.user.php';
    $user = new User();

    // Checking for user logged in or not
    /*if (!$user->get_session())
    {
       header("location:index.php");
    }*/
    if (isset($_REQUEST['submit'])){
        extract($_REQUEST);
        $register = $user->reg_user($fullname, $uname,$upass, $uemail);
        if ($register) {
            // Registration Success
            echo 'Registration  successful <a href="login.php">Click here</a> to login';
        } else {
            // Registration Failed
            echo 'Registration failed. Email or Username already exits please try again';
        }
    }
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
      
        <title>Register</title>
		
          <link rel="stylesheet" href="m.css">
		
		<script language="javascript" type="text/javascript"> 
		    function submitreg() {
                var form = document.reg;
				if(form.name.value == ""){
                    alert( "Enter name." );
                    return false;
                }
                else if(form.uname.value == ""){
                    alert( "Enter username." );
                    return false;
                }
                else if(form.upass.value == ""){
                    alert( "Enter password." );
                    return false;
                }
                else if(form.uemail.value == ""){
                    alert( "Enter email." );
                    return false;
                }
            } 
	</script> 
    </head>
    <body>
        <body>
<div class="login">
		<div class="login-screen">
		<div class="app-title">
            <h1 style="margin-left:80px">Registration Here</h1>
            <form class="form" action="#" method="post" name="reg">
                <table style="margin-left:100px">
                    <tr>
                        <th>Full Name:</th>
                        <td><input type="text" name="fullname" pattern="[a-zA-Z]+[ ][a-zA-Z]+" title="Use only letters" required></td>
                    </tr>
                    <tr>
                        <th>User Name:</th>
                        <td><input type="text" name="uname" pattern="[A-Za-z0-9_.]{2,10}" title="Use letters,digits,symbols(_ and .)" required></td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><input type="text" name="uemail" pattern="\b[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[A-Za-z]{2,}\b" title="Compulsorily use @ and . symbols" required></td>
                    </tr>
                    <tr>
                        <th>Password:</th>
                        <td><input type="password" name="upass" pattern="[A-Za-z0-9_.*!@#$%^]{6,12}" title="enter a password with min lenght=6 and max length=12" required></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" id="login-button"  class="btn btn-primary btn-large btn-block" name="submit" value="Register" onclick="return(submitreg());"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><a href="login.php">Already registered! Click Here!</a></td>
                    </tr>
                    
                </table>
            </form>
        </div>

</div>
    </body>
    </body>
</html>
