<?php 
	session_start();
	require_once("config.php");

	// initialize variables
	$name = "";
	$designation = "";
	$email = "";
	$phone = "";

	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$designation = $_POST['designation'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		


		mysqli_query($conn, "INSERT INTO info2 (name,designation,email,phone) VALUES ('$name','$designation','$email','$phone')"); 
		$_SESSION['message'] = "Information saved"; 
		header('location: c.php');
	}

	if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];

	$designation = $_POST['designation'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	
	

	mysqli_query($conn, "UPDATE info2 SET name='$name',designation='$designation',email='$email',phone='$phone' WHERE id=$id");
	$_SESSION['message'] = "Information updated!"; 
	header('location: c.php');
}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM info2 WHERE id=$id");
	$_SESSION['message'] = "Information deleted!"; 
	header('location: c.php');
}