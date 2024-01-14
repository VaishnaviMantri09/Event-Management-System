<?php 
	session_start();
	require_once("config.php");

	// initialize variables
	$name = "";
	$prn = "";
	$email = "";
	$branch = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$prn = $_POST['prn'];
		$email = $_POST['email'];
		$branch = $_POST['branch'];


		mysqli_query($conn, "INSERT INTO info1 (name, prn,email,branch) VALUES ('$name', '$prn','$email','$branch')"); 
		$_SESSION['message'] = "Information saved"; 
		header('location: b.php');
	}

	if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$prn = $_POST['prn'];
	$email = $_POST['email'];
	$branch = $_POST['branch'];

	mysqli_query($conn, "UPDATE info1 SET name='$name', prn='$prn',email='$email',branch='$branch' WHERE id=$id");
	$_SESSION['message'] = "Information updated!"; 
	header('location: b.php');
}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM info1 WHERE id=$id");
	$_SESSION['message'] = "Information deleted!"; 
	header('location: b.php');
}