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
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
    margin-top: 0.5px;
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
 

 
  color: green;
 
  background-color: #333 ;
  
  height: 2.5%;
  margin-top: 10%;
 
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
  color: purple;
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

.mySlides fade img {
      
      width: 100%;
      height: 100%;
      transition: width 2s;
  }


  div.polaroid {
  margin: 0;
  width: 100%;
  height: auto;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
   box-shadow: 10px 10px 5px grey;
   margin-top: 30px;
}

div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 73%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
  font-size: 30px;
}

p{
 font-size: 25px;
 margin-top: 25px;
}

.r{
  margin-top: 30px;
  color: purple;
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
 <center><h1 class="r">Welcome to gst gallery!!!</h1></center>
</div>

<div class="polaroid">
  <a target="_blank" href="r9.jpg">
    <img src="r9.jpg" alt="Cinque Terre" width="600" height= "550" style="width:100%">
  </a>
  <div class="desc"><b>Campus</b></div>
</div>

<div class="polaroid">
  <a target="_blank" href="r7.jpg">
    <img src="r7.jpg" alt="Forest" width="600" height="550" style="width:100%">
  </a>
  <div class="desc"><b>Chemistry Lab</b></div>
</div>

<div class="polaroid">
  <a target="_blank" href="r8.jpg">
    <img src="r8.jpg" alt="Northern Lights" width="600" height="550" style="width:100%">
  </a>
  <div class="desc"><b>Main Building</b></div>
</div>

<div class="polaroid">
  <a target="_blank" href="r5.jpg">
    <img src="r5.jpg" alt="Mountains" width="600" height="550" style="width:100%">
  </a>
  <div class="desc"><b>Gst Audi</b></div>
</div>

<div class="polaroid">
  <a target="_blank" href="r4.jpeg">
    <img src="r4.jpeg" alt="Mountains" width="600" height="550" style="width:100%">
  </a>
  <div class="desc"><b>Canteen</b></div>
</div>

<div class="polaroid">
  <a target="_blank" href="r3.jpg">
    <img src="r3.jpg" alt="Mountains" width="600" height="550" style="width:100%">
  </a>
  <div class="desc"><b>Library</b></div>
</div>

  <div class="polaroid">
  <a target="_blank" href="r6.jpg">
    <img src="r6.jpg" alt="Mountains" width="600" height="550" style="width:100%">
  </a>
  <div class="desc"><b>Classroom</b></div>
</div>



</div>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
<center><button onclick="goBack()" class="btn" style="margin-top: 7%;">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script></center>
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
