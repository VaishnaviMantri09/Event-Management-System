<?php 
	session_start();
	require_once("config.php");

	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];

		

		mysqli_query($conn, "INSERT INTO info (name, address) VALUES ('$name', '$address')"); 
		$_SESSION['message'] = "Information saved"; 
		header('location: a.php');
	}

	

	if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];

	mysqli_query($conn, "UPDATE info SET name='$name', address='$address' WHERE id=$id");
	$_SESSION['message'] = "Information updated!"; 
	header('location: a.php');
}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM info WHERE id=$id");
	$_SESSION['message'] = "Information deleted!"; 
	header('location: a.php');
}
?>