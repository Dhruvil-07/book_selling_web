<?php

	require_once "config.php";
	
	$username = $password = $confirmpassword = $email = $error = $hash = "";
	$username_error = $password_error = $confirmpassword_error = $email_error = "";
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		// USER NAME VALIDATION 
		
		if(empty(trim($_POST["username"])))
		{
			$username_error = "Enter User Name";
		}
		else if(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"])))
		{
			$username_error = "Username can only contain letters, numbers, and underscores.";
		}
		else if(empty($username_error))
		{
			$username = $_POST["username"];
			$qryu = mysqli_query($link , "select username from users where username='$username'");
			$resultu = mysqli_num_rows($qryu);
			
			if($resultu>0)
			{
				$username_error = "Username already taken , plase try Another user name";
			}
		}
		else
		{
			$username = $_POST["username"];
		}



	// PASSWORD VALIDATION
	
	if(empty(trim($_POST["password"])))
    {
        $password_error = "Please enter a password.";     
    } 
	elseif(strlen(trim($_POST["password"])) < 8)
    {
        $password_error = "Password must have atleast 8 characters.";
    } 
	else if( !preg_match( '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/' , trim($_POST["password"])))
	{
		$password_error = "atleas 1 uppercase , 1 digit , 1 special char , 1 lowercase";
	}
	else if(empty($password_error))
	{
		$password = $_POST["password"];
		$qryp = mysqli_query( $link , "select password from users where password='$password'");
		$resultp = mysqli_num_rows($qryp);
		if($resultp > 0)
		{
			$password_error = "plase try another password";
		}
	}
	else
    {
        $password = trim($_POST["password"]);
    }
	
	
	// CONFIRM PASSWORD VALIDATION
	
	if(empty(trim($_POST["confirmpass"])))
	{
        $confirmpassword_error = "Please confirm password.";     
    } 
	else
	{
        $confirmpass = trim($_POST["confirmpass"]);
        if(empty($password_error) && ($password != $confirmpass))
		{
            $confirmpassword_error = "Password did not match.";
        }
		else
		{
			$hash = password_hash($password , PASSWORD_DEFAULT);
		}
    }
	
	// Email VALIDATION
	
	if(empty(trim($_POST["email"])))
	{
		$email_error = "Enter Email";
	}
	else if( !preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", trim($_POST["email"])) )
	{
		$email_error = "Invalild email";
	}
	else if(empty($email_error))
	{
		
		$email = $_POST["email"];
		$qrye = mysqli_query( $link , "select email from users where email='$email'");
		$resulte = mysqli_num_rows($qrye);
		if($resulte>0)
		{
			$email_error = "This email address is already register";
		}
	}
	else
	{
		$email = $_POST["email"];
	}


	
	// INSERT Qury FIRE .
	
	if(empty($username_error) && empty($password_error) && empty($email_error) && empty($confirmpassword_error))
	{
		$sql = "insert into users(username,password,email) values ('$username' , '$hash' ,'$email')";
		
		if(mysqli_query($link , $sql))
		{
			header("location: login2.php");
		}
		else
		{
			$error = "Something went wrong";
		}
	}



	// connection close.
	mysqli_close($link);
	}
?>



<html>
<head>
	<link rel="stylesheet" href="signupstyle.css">
</head>

<body>

	<form class="info2" method="POST">
	
		<h1> Sign Up </h1>
		
		<div class="container2">
		
			<div class="sa">
				<input type="text" name="username" class="semail" placeholder = "Enter User Name" >
			</div>
			<span>
			<?php 
				if(!empty($username_error))
				{
					echo $username_error;
				}
				else if(!empty($password_error))
				{
					echo $password_error;
				}
				else if(!empty($confirmpassword_error))
				{
					echo $confirmpassword_error;
				}
				else if(!empty($email_error))
				{
					echo $email_error;
				}
				else
				{
					echo $error;
				}

			?>
			</span>
			
			<div class="sb">
				<input type="password" name="password" class="sfname" placeholder="Enter Password">
			</div>
			
		
			<div class="sc">
				<input type="password" name="confirmpass" class="lname" placeholder="Re-Enter Password">
			</div>
			
			<div class="sp">
				<input type="email" name="email" class="sphone" placeholder="Enter Email">
			</div>
			
			<div class="b">
				<input type="submit" name="subimt" class="sbtn" value="Sign Up">
			</div>
		
		</div>
		
	</form>
	
	

</body>
</html>