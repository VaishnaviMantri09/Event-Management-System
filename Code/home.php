<?php
require_once("config.php");
$result = mysqli_query($conn, "SELECT * FROM user1 ORDER BY id DESC");
?>

<html>
<head>
	<title>HOMEPAGE</title>
</head>
<body>
<a href="add1.php">Add users</a><br/><br/>
	<table width='80%' border=1>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Prn</th>
		<th>Department</th>
		<th>Year</th>
		<th>Address</th>
		<th>Action</th>
	</tr>		

	<?php
	while($data = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$data['fname']."</td>";
		echo "<td>".$data['lname']."</td>";
		echo "<td>".$data['prn']."</td>";
		echo "<td>".$data['department']."</td>";
		echo "<td>".$data['year']."</td>";
		$id = mysqli_real_escape_string($conn,$data['id']);
		echo "<td><a href='edit1.php?id=$id'>Edit</a> | <a href='delete1.php?id=$data[id]'>Delete</a></td></tr>";
	}
	?>
	</table>
</body>
</html>