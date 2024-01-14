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
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 12px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0;}


/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  margin-top:30px;
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

.page-footer {
 

 
  color: green;
 
  background-color: #333 ;
  
  height: 2.5%;
  margin-top: 10%;
 
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
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
    margin-top: 0.5px;
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

<CENTER>
<h1 style="color: #1a0000;margin-top: 30px;">FACULTY PROFILE</h1>
</CENTER>

<div class="row">
  <div class="column">
    <div class="card">
    <div>
      <img src="t1.jpg" alt="Avatar" style="width:140px;height:160px;">
      </div>
      <h3>SEETA JOE</h3>
      <p>Total Experience: 6 Years.<br>
Educational Qualification: B.E.(Computer)<br>
Research area: applied maths<br></p>
     
    </div>
  </div>

  <div class="column">
    <div class="card">
    <div>
      <img src="t4.jpg" alt="Avatar" style="width:140px;height:160px;">
      </div>
      <h3>RACHEL FERNS</h3>
      <p>Total Experience: 16 Years.<br>
Educational Qualification: M.E.(EXTC)<br>
Research area:embedded systems<br></p>
      
    </div>
  </div>
  
  <div class="column">
    
    <div class="card">
    <div>
      <img src="t5.jpg" alt="Avatar" style="width:140px;height:160px;">
      </div>
      
      <h3>CHETAN SINGH</h3>
      <p>Total Experience: 16 Years.<br>
Educational Qualification: M.E.(Computer)<br>
Research area: Data Science<br></p>
      
    </div>
  </div>
  
  <div class="column">
    <div class="card">
<div>
      <img src="t3.jpg" alt="Avatar" style="width:140px;height:160px;">
      </div>
      <h3>PREETI JHA</h3>
      <p>Total Experience: 16 Years.<br>
Educational Qualification: M.E.( Computer)<br>
Research area: Data Mining<br>
</p>
     
    </div>
  </div>
</div>
  
  <div class="column">
    <div class="card">
    <div>
      <img src="t2.jpg" alt="Avatar" style="width:140px;height:160px;">
      </div>
      <h3>RAMESH SINDHU</h3>
      <p>Total Experience: 24 Years.<br>
Educational Qualification: M.E.(IT)<br>
Research area: data warehousing<br></p>
      
    </div>
  </div>
</div>


 <div class="column">
    <div class="card">
    <div>
      <img src="t6.jpg" alt="Avatar" style="width:140px;height:160px;">
      </div>
      <h3>DEEPAK JHA</h3>
      <p>Total Experience: 2 Years.<br>
Educational Qualification: M.E.(IT)<br>
Research area: artificial intelligence<br></p>
      
    </div>
  </div>
</div>


 <div class="column">
    <div class="card">
    <div>
      <img src="t7.jpg" alt="Avatar" style="width:140px;height:160px;">
      </div>
      <h3>DEEPIKA SINDHU</h3>
      <p>Total Experience: 10 Years.<br>
Educational Qualification: B.E.(IT)<br>
<br></p>
      
    </div>
  </div>
</div>


 <div class="column">
    <div class="card">
    <div>
      <img src="t8.jpg" alt="Avatar" style="width:140px;height:160px;">
      </div>
      <h3>SAGAR KOBE</h3>
      <p>Total Experience: 2 Years.<br>
Educational Qualification: M.E.(IT)<br>
Research area: data warehousing<br></p>
      
    </div>
  </div>
</div>


 <div class="column">
    <div class="card">
    <div>
      <img src="t9.jpg" alt="Avatar" style="width:140px;height:160px;">
      </div>
      <h3>Dr. SAGARIKA KADAM</h3>
      <p>Total Experience: 1 Year.<br>
Educational Qualification: PHD<br>
Research area: applied chemistry<br></p>
      
    </div>
  </div>
</div>


 <div class="column">
    <div class="card">
    <div>
      <img src="t10.jpg" alt="Avatar" style="width:140px;height:160px;">
      </div>
      <h3>WALIYAH MALIK</h3>
      <p>Total Experience: 3 Years.<br>
Educational Qualification: MSc.(IT)<br>
Research area: data science<br></p>
      
    </div>
  </div>
</div>


 <div class="column">
    <div class="card">
    <div>
      <img src="t11.jpg" alt="Avatar" style="width:140px;height:160px;">
      </div>
      <h3>SHRAVANI KALE</h3>
      <p>Total Experience: 5 Years.<br>
Educational Qualification: BSc.(IT)<br>
<br></p>
      
    </div>
  </div>
</div>

<div class="column">
    <div class="card">
    <div>
      <img src="t12.jpg" alt="Avatar" style="width:140px;height:160px;">
      </div>
      <h3>RAMESH SHIRKE</h3>
      <p>Total Experience: 12 Years.<br>
Educational Qualification: M.E.(IT)<br>
Research area: data warehousing<br></p>
      
    </div>
  </div>
</div>

<center><button onclick="goBack()" class="btn" style="margin-top: 7%;">Go Back</button>

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
