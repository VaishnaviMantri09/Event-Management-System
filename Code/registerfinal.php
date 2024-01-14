<?php
	require 'config.php';
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<head>
	<title>REGISTRATION PAGE</title>
	<style type="text/css">

		#main-wrapper{
			width:500px;
			margin:0 auto;
			background:white;
			padding: 5px; 
			border-radius: 10px;
			border: 2px solid #2c3e50;
			margin-top: 70px;
		}
		.avatar{
			width:150px;
			text-align: center;
		}

		.myform{
			width: 450px;
			margin: 0 auto;
		}

		.inputvalues{
			width: 430px;
			margin: 0 auto;
			padding: 5px;
		}

		#signup_btn{
			margin-top: 10px;
			background-color: #3498db;
			padding: 5px;
			color:white;
			width: 100%;
			text-align: center;
			font-size: 18px;
			font-weight: bold;
		}

		#back_btn{
			margin-bottom: 20px;
			margin-top: 10px;
			background-color: #e74c3c;
			padding: 5px;
			color:white;
			width: 30%;
			text-align: center;
			font-size: 18px;
			font-weight: bold;
		}
	</style>
</head>
<body style="background-color: #bdc3c7">
	<div id="main-wrapper">
		<center><h2>REGISTRATION FORM</h2>
		<img src="avatar.png" class="avatar"/>
		</center>
	

	<form class="myform" action="registerfinal.php" method="post">
		<label><b>Full name:</b></label><br>
		<input name="fullname" type="text" class="inputvalues" placeholder="type your fullname" required/><br>
		<label><b>Gender:</b></label>
		<input name="gender" type="radio" class="radiobtns" value="male" checked required>Male
		<input name="gender" type="radio" class="radiobtns" value="female" required>Female<br>
		<label><b>Qualification:</b></label>
		<select class="qualification" name="qualification">
			<option value="BSCIT">BSCIT</option>
			<option value="BMS">BMS</option>
			<option value="BE-IT">BE-IT</option>
			<option value="MCA">MCA</option>
		</select><br>
		<label><b>Username:</b></label><br>
		<input name="username" pattern="[a-z]{3,15}" title="use lowercase eg.jin" type="text" class="inputvalues" placeholder="type your username" required/><br>
		<label><b>Password:</b></label><br>
		<input name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" type="password" class="inputvalues" placeholder="type your password" required/><br>
		<label><b>Confirm Password:</b></label><br>
		<input name="cpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" type="password" class="inputvalues" placeholder="re-type your password" required /><br>
		
		<input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/><br>

		<a href="loginfinal.php"><input type="button" id="back_btn" value="Back To Login"/></a>
		
	</form>
	<?php
		if(isset($_POST['submit_btn']))
		{
			//echo '<script type="text/javascript"> alert("signup button clicked")</script>';

			$fullname = $_POST['fullname'];
			$gender = $_POST['gender'];
			$qualification = $_POST['qualification'];


			$username = $_POST['username'];
			$password = $_POST['password'];
			$cpassword = $_POST['cpassword'];

			if($password==$cpassword)
			{
				$encrypted_password = md5($password);

				$query="select * from userinfotable WHERE username='$username'";

				$query_run = mysqli_query($conn,$query);

				if(mysqli_num_rows($query_run)>0)
				{
					//there is already user with this username
					echo '<script type="text/javascript"> alert("User already exists try another username")</script>';
				}
				else
				{
					$query="insert into userinfotable values('','$username','$fullname','$gender','$qualification','$encrypted_password')";
						
					$query_run = mysqli_query($conn,$query);				
					
					if($query_run)	
					{
						echo '<script type="text/javascript"> alert("User registered...Click on Back To Login for Login")</script>';
					}
					else
					{
						echo '<script type="text/javascript"> alert("Error")</script>';
					}
				}
			}
			else{
				echo '<script type="text/javascript"> alert("password does not match")</script>';
			}

		}
	?>
	</div>
</body>
</html>