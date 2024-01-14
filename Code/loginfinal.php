<?php
session_start();
	require 'config.php';
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<head>
	<title>LOGIN PAGE</title>
	<style type="text/css">
		@media screen and (min-width: 260px){
		#main-wrapper{
				width: 460px;
   			display: block;
			margin:0 auto;
			background:white;
			padding: 5px; 
			border-radius: 10px;
			border: 2px solid #2c3e50;
			margin-top: 70px;
		}
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

		#login_btn{
			margin-top: 10px;
			background-color: #27ae60;
			padding: 5px;
			color:white;
			width: 100%;
			text-align: center;
			font-size: 18px;
			font-weight: bold;
		}

		#register_btn{
			margin-bottom: 20px;
			margin-top: 10px;
			background-color: #3498db;
			padding: 5px;
			color:white;
			width: 100%;
			text-align: center;
			font-size: 18px;
			font-weight: bold;
		}
	</style>
</head>
<body style="background-color: #bdc3c7">
	<div id="main-wrapper">
		<center><h2>LOGIN FORM</h2>
		<img src="avatar.png" class="avatar"/>
		</center>
	

	<form class="myform" action="loginfinal.php" method="post">
		<label><b>Username:</b></label><br>
		<input name="username" type="text" class="inputvalues" placeholder="type your username" required /><br>
		<label><b>Password:</b></label><br>
		<input name="password" type="password" class="inputvalues" placeholder="type your password" required /><br>

		<input name="login" type="submit" id="login_btn" value="Login"/><br>

		<a href="registerfinal.php"><input type="button" id="register_btn" value="Register"/></a>
		
	</form>
	<?php
	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];

		$encrypted_password = md5($password);
		$query="select * from userinfotable WHERE username='$username' AND password='$encrypted_password'";

		$query_run = mysqli_query($conn,$query);
		if(mysqli_num_rows($query_run)>0)
		{
			$_SESSION['username']=$username;
			header('location:welcome.php');
		}
		else
		{
			echo '<script type="text/javascript"> alert("invalid credentials")</script>';
		}
	}
	?>
	</div>
</body>
</html>