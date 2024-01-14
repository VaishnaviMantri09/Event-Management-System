<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: 'Lato', sans-serif;
}


*{
			margin: 0px;
			padding: 0px;
		}

		.content{
			
			margin: 100px auto;
			box-shadow: 1px 1px 10px 2px #333;
			border-radius: 5px;
			overflow: hidden;
			width: 80%;
   			display: block;
		}
		.header{
			background:green;
			color: white;
			padding: 15px 0px; 
		}
		.moving-body{
			padding: 4px;
			height: 300px;
		}
		.m-par{
			text-align: center;;
			padding: 8px;
			border-bottom: 3px solid #afafaf;
			color: blue;
			font-size: 24px;
		}
.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
  color:purple;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
.r{
  margin-top: 30px;
}

.page-footer {
 

 
  color: green;
 
  background-color: #333 ;
  
  height: 2.5%;
  margin-top: 10%;
 
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
.page-footer {
 

 
  color: green;
 
  background-color: #333 ;
  
  height: 0.5%;
 
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
  background-color: #4CAF50;
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

.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
    margin-top: 0.5px;
}
</style>
</head>
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


<div>
 <center><h1 class="r">Notifications regarding academic year 2019-2020</h1></center>
</div>


<div class="content">
        <h1 class="header" align="center">NOTIFICATION</h1>
        <marquee behavior="scroll" direction="up" scrollamount="2" onmouseover="this.setAttribute('scrollamount',0,0); this.stop()";
            onmouseout="this.setAttribute('scrollamount',4,0); this.start()";
          class="moving-body">
            <script >
                for(var i=1;i<=1;i++){
                    document.write('<p class="m-par">EXAMS: UNIT- 1: 19/8/19 TO 21/8/19</p>')
                    document.write('<p class="m-par">EXAMS: UNIT- 2: 19/9/19 TO 21/9/19</p>')
                    document.write('<p class="m-par">ANNUAL-MEETING: 21/8/19</p>')
                    document.write('<p class="m-par">PARENTS-TEACHER MEETING 1: 15/8/19</p>')
                    document.write('<p class="m-par">PARENTS-TEACHER MEETING 2: 15/9/19</p>')
                    document.write('<p class="m-par">DEFAULTER-1:20/8/19</p>')
                    document.write('<p class="m-par">DEFAULTER-2:22/10/19</p>')
                    document.write('<p class="m-par">MID TERM SUBMISSION:30/8/19</p>')
                    document.write('<p class="m-par">FINAL SUBMISSION:24/10/19</p>')

                }
            </script>
        </marquee>
    </div>

 <center><button onclick="goBack()" class="btn">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script></center>
<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
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
