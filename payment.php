<?php

	require_once "config.php";
	
	$usernamep = $addp = $phonep = $qty = $cardp = $error = "";
	$usernamep_error = $addp_error = $phonep_error = $qty_error = $cardp_error = "";
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		// USERNAME VALIDATION 
			
		if(empty(trim($_POST["usernamep"])))
		{
			$usernamep_error = "Enter User Name";
		}
		else if(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["usernamep"])))
		{
			$usernamep_error = "Username can only contain letters, numbers, and underscores.";
		}
		else if(empty($usernamep_error))
		{
			$usernamep = $_POST["usernamep"];
			$qryup = mysqli_query($link , "select username from users where username='$usernamep'");
			$resultup = mysqli_num_rows($qryup);
			
			if($resultup>0)
			{
				$usernamep = $_POST["usernamep"];
			}
			else
			{
				$usernamep_error = "Invalid User Name";
			}
		}
		else
		{
			$usernamep = $_POST["usernamep"];
		}
		
		
		// ADDRESS VALIDATION 
		
		if(empty($_POST["addp"]))
		{
			$addp_error = "Enter your shiping Address";
		}
		else
		{
			$addp = $_POST["addp"];
		}
		
		
		
		// PHONE NUMBER VALIDATION
		
		if(empty(trim($_POST["phonep"])))
		{
			$phonep_error = "Enter Phone Number";
		}
		else if(!preg_match('/^[0-9]{10}+$/', trim($_POST["phonep"])))
		{
			$phonep_error = "Phone Number Is Not Valid";
		}
		else
		{
			$phonep = $_POST["phonep"];
		}

		
		//Quantity VALIDATION
		
		if(empty($_POST["qty"]))
		{
			$qty_error = "Enter Quantity";
		}
		else if(empty($qty_error))
		{
			$qty = $_POST["qty"];
			if($qty<=0)
			{
				$qty_error = "Enter Valid Quantity";
			}
			else
			{
				$qty = $_POST["qty"];
			}
		}
		
		
		
		// CARD VALIDATION
		
		if(empty(trim($_POST["cardp"])))
		{
			$cardp_error = "Enter Card Detail";
		}
		else if(!preg_match('/^[0-9]{16}+$/', trim($_POST["cardp"])))
		{
			$cardp_error = "Enter Valid Card Number";
		}
		else
		{
			$cardp = $_POST["cardp"];
		}
				
		

		// INSERT QRY FIR
	
		if(empty($usernamep_error) && empty($addp_error) && empty($phonep_error) && empty($cardp_error) && empty($qty_error))
		{
			$sql = "insert into pay(username , address , pno , qty , cardno) values ('$usernamep' , '$addp' , '$phonep' ,'$qty' , '$cardp')";
			
			if(mysqli_query($link , $sql))
			{
				header("location: thankyou.php");
			}
			else
			{
				$error = "Something went wrong";
			}
			
		}
	}

?>


<html>
<head>
	<link rel="stylesheet" href="payment.css">
</head>

<body>

	<form class="infopay" method="POST">
	
		<h1> Pay </h1>
		
		<div class="containerpay">
		
			<div class="pa">
				<input type="text" name="usernamep" class="pemail" placeholder="Enter Name">
			</div>
			<span>
			<?php 
				if(!empty($usernamep_error))
				{
					echo $usernamep_error;
				}
				else if(!empty($addp_error))
				{
					echo $addp_error;
				}
				else if(!empty($phonep_error))
				{
					echo $phonep_error;
				}
				else if(!empty($qty_error))
				{
					echo $qty_error;
				}
				else if(!empty($cardp_error))
				{
					echo $cardp_error;
				}
				else
				{
					echo $error;
				}

			?>
			</span>
		
			<div class="pb">
				<textarea rows=2 cols=5 name="addp" class="pname"> Enter Shipping Address </textarea>
			</div>
			
			<div class="pp">
				<input type="phone" name="phonep" class="pphone" placeholder="Enter Phone Number">
			</div>
			
			<div class="pq">
				<input type="number" name="qty" class="pqty" placeholder="Enter Quantity">
			</div>
			
			<div class="pc">
				<input type="text" name="cardp" class="pcard" placeholder="Enter card number">
			</div>
			
			<div class="pbt">
				<input type="submit" name="subimt" class="pbtn" value="PAY">
			</div>
		
		</div>
		
	</form>
	
	
	
	

</body>
</html>