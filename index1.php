<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        .page-footer {
 

 
  color: green;
 
  background-color: #333 ;
  
  height: 2.5%;
  margin-top:70%;
  bottom: 0%;
 
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

.topnav {
  overflow: hidden;
  background-color: #333;
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

    </style>
</head>


<?php
// Load the database configuration file
include_once 'config.php';

// Get status message
if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusType = 'alert-success';
            $statusMsg = 'Members data has been imported successfully.';
            break;
        case 'err':
            $statusType = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusType = 'alert-danger';
            $statusMsg = 'Please upload a valid CSV file.';
            break;
        default:
            $statusType = '';
            $statusMsg = '';
    }
}
?>

<!-- Display status message -->
<?php if(!empty($statusMsg)){ ?>
<div class="col-xs-12">
    <div class="alert <?php echo $statusType; ?>"><?php echo $statusMsg; ?></div>
</div>
<?php } ?>
<body>
    <div class="topnav" id="myTopnav">
 <a class="" href="welcome.php">Home</a>

  <a href="index1.php">Academic analysis</a>
  <a href="index.php">Attendance</a>
  <a href="c.php">Teachers Profile</a>
  <a href="b.php">Student Profile</a>
  <div class="dropdown">
    <button class="dropbtn">More
      <i class=""></i>
    </button>

    <div class="dropdown-content">
    
        <a href="gallery.php">Gallery</a>

      <a href="notification.php">Notification</a>
      <a href="loginfinal.php">Logout</a>
    
    </div>
  </div> 
 
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

<center>
<div class="row">
    <!-- Import link -->
    <div class="col-md-12 head">
        <div class="float-right">
            <a href="javascript:void(0);" class="btn btn-success" onclick="formToggle('importFrm');"><i class="plus"></i><h1 style="color: black;"> IMPORT</h1></a>
        </div>
    </div>
    <!-- CSV file upload form -->
    <div class="col-md-12" id="importFrm" style="display: none;">
        <form action="importData1.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" />
            <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
        </form>
    </div>

    <!-- Data list table --> 
    <table class="table table-striped table-bordered"   style="border: 1px solid black;border-collapse: collapse;width: 80%;">
        <thead class="thead-dark">
            <tr style="border: 1px solid black;border-collapse: collapse;">
                <th style="border: 1px solid black;border-collapse: collapse;background-color: #FA8072;">#ID</th>
                <th style="border: 1px solid black;border-collapse: collapse;background-color: #FA8072;">Name</th>
                <th style="border: 1px solid black;border-collapse: collapse;background-color: #FA8072;">Email</th>
                <th style="border: 1px solid black;border-collapse: collapse;background-color: #FA8072;">Ut1</th>
                 <th style="border: 1px solid black;border-collapse: collapse;background-color: #FA8072;">Ut2</th>
                <th style="border: 1px solid black;border-collapse: collapse;background-color: #FA8072;">Status</th>
            </tr>
        </thead>
        <tbody>
        </center>
        <?php
        // Get member rows
        $result = $conn->query("SELECT * FROM members1 ORDER BY id DESC");
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
        ?>
            <tr>
                <td style="border: 1px solid black;border-collapse: collapse;"><?php echo $row['id']; ?></td>
                <td style="border: 1px solid black;border-collapse: collapse;"><?php echo $row['name']; ?></td>
                <td style="border: 1px solid black;border-collapse: collapse;"><?php echo $row['email']; ?></td>
                <td style="border: 1px solid black;border-collapse: collapse;"><?php echo $row['ut1']; ?></td>
                <td style="border: 1px solid black;border-collapse: collapse;"><?php echo $row['ut2']; ?></td>
                <td style="border: 1px solid black;border-collapse: collapse;"><?php echo $row['status']; ?></td>
            </tr>
        <?php } }else{ ?>
            <tr><td colspan="5">No member(s) found...</td></tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<center><button onclick="goBack()" class="btn" style="margin-top: 13px;">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>
</center>
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
<!-- Show/hide CSV upload form -->
<script>
function formToggle(ID){
    var element = document.getElementById(ID);
    if(element.style.display === "none"){
        element.style.display = "block";
    }else{
        element.style.display = "none";
    }
}
</script>
</body>