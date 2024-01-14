<html>
<head>
	
	<style type="text/css">
		.h{
			margin-top: 30px;
			margin-bottom: 15px;
			font-size: 20px;
		}
		.k{
			width: 100%;
			font-weight: bold;
			color: blue;
		}
	</style>
</head>
<center>
	<form action="Result.php">

		<table>
			<caption class="h">STUDENT MARKSHEET FORM</caption>
			<tr>
				<td>School Name</td>
				<td><input type=text name=sn size=30 required></td>
			</tr>

			<tr>
				<td>Student Name</td>
				<td><input type=text name=stn size=30 required></td>
			</tr>

			<tr>
				<td>Father's Name</td>
				<td><input type=text name=fn size=30 required></td>
			</tr>

			<tr>
				<td>Dob</td>
				<td><input type=text name=dob size=30 required></td>
			</tr>

			<tr>
				<td>Gender</td>
				<td><input type=radio name=gen size=30 value="Male" required>Male<input type=radio name=gen size=30 value="Female">Female</td>
			</tr>

			<tr>
				<td>Hindi marks</td>
				<td><input type=text name=hin size=30 required></td>
			</tr>

			<tr>
				<td>English marks</td>
				<td><input type=text name=eng size=30 required></td>
			</tr>

			<tr>
				<td>Maths marks</td>
				<td><input type=text name=math size=30 required></td>
			</tr>

			<tr>
				<td>Physics marks</td>
				<td><input type=text name=phy size=30 required></td>
			</tr>

			<tr>
				<td>Chemistry marks</td>
				<td><input type=text name=chem size=30 required></td>
			</tr>

			<tr>
				<td><input class="k" type=submit></td>
				<td><input class="k" type=reset></td>
			</tr>
		</table>

		
	</form>
</center>
	</html>