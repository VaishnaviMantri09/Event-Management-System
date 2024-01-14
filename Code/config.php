<?php
$databaseHost= 'localhost';
$databaseName= 'cruddb';
$databaseUsername='root';
$databasePassword ='';

$conn=mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);
if (mysqli_connect_error()){
	echo "database connected successfully";
}
?>