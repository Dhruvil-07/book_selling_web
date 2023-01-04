<?php

	if(isset($_POST["submit"]))
	{
		session_destroy();
		
		unset($_SESSION["username"]);
		header("location:login2.php");
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
	
		<h1> Logout </h1>
		
		<div class="container">
		
			<div class="a">
				<label class="email"> <h1> Are You Sure You Want to logout ? </h1></label>
			</div>
		
			<div class="b">
			
				<ul>
				<li>
				<div class="btns">
					<input type="submit" name="submit" value="Logout" class="btns">
				</div>
				</li>
				<li>
				<div class="btnb">
					<input type="submit" name="back" value="back" class="btnb">
				</div>
				</li>
				</ul>
				
			</div>
			
			
		
		</div>
		
	</form>
	

</body>
</html>