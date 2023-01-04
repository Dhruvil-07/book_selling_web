<?php

	require_once "config.php";
	
	$usernamel = $passwordl = $errorl = $checkpwd ="";
	$usesrname_errorl = $password_errorl = "";
	$login = False;
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
			
		// USER NAME VALIDATION
		
		if(empty(trim($_POST["usernamel"])))
		{
			$username_errorl = "Enter User Name";
		}
		else if(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["usernamel"])))
		{
			$username_errorl = "Username can only contain letters, numbers, and underscores.";
		}
		else if(empty($username_errorl))
		{
			$usernamel = $_POST["usernamel"];
			$qryul = mysqli_query($link , "select username from users where username='$usernamel'");
			$resultul = mysqli_num_rows($qryul);
			
			if($resultul>0)
			{
				$usernamel = $_POST["usernamel"];
			}
			else
			{
				$username_errorl = "Username not found , plase sign up first";
			}
			
		}
		
		
		
		// PASSWORD VALIDATION 
		
		if(empty(trim($_POST["passwordl"])))
		{
			$password_errorl = "Please enter a password.";     
		} 
		elseif(strlen(trim($_POST["passwordl"])) < 8)
		{
			$password_errorl = "Password must have atleast 8 characters.";
		} 
		else if( !preg_match( '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/' , trim($_POST["passwordl"])))
		{
			$password_errorl = "atleas 1 uppercase , 1 digit , 1 special char , 1 lowercase";
		}
		else if(empty($password_errorl))
		{
			$passwordl = $_POST["passwordl"];
			$qrypl = mysqli_query( $link , "select * from users where username='$usernamel'");
			$resultpl = mysqli_num_rows($qrypl);
			if($resultpl>0)
			{
				while($row = mysqli_fetch_assoc($qrypl))
				{
					if(password_verify($passwordl , $row['password']))
					{
					    $login = True;
					}
					else
					{
						$password_errorl = "Password not match";
					}
				}
			}
		
		}
		
		
		
		// FOR START LOGIN
	
		if( $login == True )
		{
			session_start();
			
			$_SESSION["username"] = $usernamel;
			
				header("location: prd.php");
		}
		
		
	}
	

?>

<html>
<head>
	<link rel="stylesheet" href="loginsheet.css">
</head>

<body>

	<form class="info" method="POST" >
	
		<h1> Login </h1>
		
		<div class="container">
		
			<div class="a">
				<input type="text" name="usernamel" class="email" placeholder="Enter User name">
			</div>
			<span>
			<?php 
				if(!empty($username_errorl))
				{
					echo $username_errorl;
				}
				else if(!empty($password_errorl))
				{
					echo $password_errorl;
				}
				else
				{
					echo $errorl;
				}

			?>
			</span>
		
			<div class="b">
				<input type="password" name="passwordl" class="pass" placeholder="Enter password">
			</div>
		
			<div class="c">
				<input type="submit" name="subimt" class="btn" value="login">
			</div>
		
		</div>
		
	</form>
	
	<div class="d">
		<a class="b1" href="#"> Forgot Password ? </a>
	</div>
	
	<div class="f">
		<h3> Create a new Account. </h3>
	</div>
	
	<div class="e">
		<form action="signup.php">
		<input type="submit" name="signup" class="btn2" value="Signup">
		</form>
	</div>
	
	

</body>
</html>