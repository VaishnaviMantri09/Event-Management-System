<?php  include('server1.php'); ?>
<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM info1 WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$prn = $n['prn'];
      $email = $n['email'];
      $branch = $n['branch'];
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		body {
    font-size: 19px;
}
table{
    width: 50%;
   
    border-collapse: collapse;
    text-align: left;
     margin:0 auto; /* this will center the page */
   
}
tr {
    border-bottom: 1px solid #cbcbcb;
}
th, td{
    border: none;
    height: 30px;
    padding: 2px;
}
tr:hover {
    background: #F5F5F5;
}

form {
    width: 45%;
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 1px solid #bbbbbb; 
    border-radius: 5px;
}

.input-group {
    margin: 10px 0px 10px 0px;
}
.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}

.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}
.msg {
    margin: 30px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
}

 ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
.mySlides fade img {
      
      width: 100%;
      height: 100%;
      transition: width 2s;
  }

  #logout_btn{

      position: absolute;

        top: 8px;

        right: 16px;

        font-size: 18px;

          }
              
              
              
      a:hover { 
  background-color: #008080;
}

ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #4CAF50;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px) {
  ul.topnav li.right, 
  ul.topnav li {float: none;}
}


div.background {
  background: url(klematis.jpg) repeat;
  border: 2px solid black;
}

div.transbox {
  margin: 30px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.6;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: #000000;
}

body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: #333;
   margin:0 auto; /* this will center the page */
   width:100%; /*  use your width here */
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {

  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
.page-footer {
   margin:0 auto; /* this will center the page */
   width:100%; /*  use your width here */

 
  color: green;
 
  background-color: #333 ;
  
  height: 2.5%;
  margin-top: 10%;
 
}
	</style>
</head>
<body>
<body>

<div class="topnav" id="myTopnav">
  <a href="welcome.php" class="active">Home</a>
  <a href="s.html">Intern Students Details</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

	<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>

<?php $results = mysqli_query($conn, "SELECT * FROM info1"); ?>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Prn</th>
      <th>Email</th>
      <th>Branch</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<thbody>
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['prn']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['branch']; ?></td>
			<td>
				<a href="b.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server1.php?del=<?php echo $row['id']; ?>" class="del_btn">Cut</a>
			</td>
		</tr>
	<?php } ?>
</thbody>
</table>

	<form method="post" action="server1.php" >

		
	<input type="hidden" name="id" value="<?php echo $id; ?>">


		<div class="input-group">
			<label>Name</label>
			

	<input type="text" name="name" pattern="[a-z]{3,15}" title="use lowercase eg.jin" value="<?php echo $name; ?>" required/>

		</div>
		<div class="input-group">
			<label>Prn</label>
		<input type="text" name="prn" pattern="(?=.*\d)(?=.*[A-Z]).{7,}" title="use 7 numbers and one uppsercase eg.117AXXXX"  value="<?php echo $prn; ?>" required/>	
		</div>

    <div class="input-group">
      <label>Email</label>
    <input type="text" name="email" pattern="[0-1-a-zA-Z-@-_].{15,20}" title="email must contain 15 characters eg.prisha@gmail.com" value="<?php echo $email; ?>" required/>  
    </div>
    <div class="input-group">
      <label>Branch</label>
    <input type="text" name="branch" pattern="[a-z].{1,}" title="branch must conatin atleast 2 letters all in lowercase eg.it,comps,extc,mech,ppt" value="<?php echo $branch; ?>" required/>  
    </div>
		<div class="input-group">
			<?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
	<button class="btn" type="submit" name="save" >Save</button>
   <button onclick="goBack()" class="btn">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>
<?php endif ?>
		</div>
	</form>
  <footer class="page-footer">
 
  <div class="container">
 
    <div class="row">
 
   
 
  <div class="footer-copyright">
 
    <div class="container">
 
    <h2>© 2018 Copyright - All Rights Reserved
    </h2> 
    <a class="grey-text text-lighten-4 right" href="terms.php">Terms of Service</a>
 
    </div>
 
  </div>
 
</footer>
</body>
</html>