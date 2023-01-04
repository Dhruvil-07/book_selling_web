<<?php
	
	require_once "config.php";
	session_start();
	$user = $_SESSION["username"];
	
	if(isset($_POST["submit"]))
	{
		$sql = "delete from users where username = '$user'";
		if(mysqli_query($link,$sql))
		{
			header("location:login2.php");
		}
		else
		{
			$error = "Somthing went wrong";
		}
	}
	else if($_POST["back"])
	{
		header("location:prd.php");
	}

?>

<html>
<head>
	<link rel="stylesheet" href="logout.css">
</head>

<body>

	<form class="info" method="POST" >
	
		<h1> Delete Account </h1>
		
		<div class="container">
		
			<div class="a">
				<label class="email"> <h1> You Want to delete your account ? </h1></label>
			</div>
		
			<div class="b">
			
				<ul>
				<li>
				<div class="btns">
					<input type="submit" name="submit" value="Delete" class="btns">
				</div>
				</li>
				<li>
				<div class="btnb">
					<input type="submit" name="back" value="back" class="btnb">
				</div>
				</li>
				</ul>
				
			</div>
			
			
			<span>
			<?php

				if(!empty($error))
				{
					echo $error;
				}
				
			?>
			</span>
			
			
		
		</div>
		
	</form>
	

</body>
</html>