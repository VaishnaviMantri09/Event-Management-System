<?php

  session_start();

?>

<!DOCTYPE html>
<html>
<head>

 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WELCOME TO SIES COLLEGE</title>
  <style type="text/css">
  * {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
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

        top: 100%;

       

        font-size: 18px;

          }
              
              
              
      a:hover { 
  background-color: #008080;
}
body {margin: 0;}

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

</style>
</head>
<body >


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
<h1>Welcome 
<?php echo $_SESSION['username'] ?>
</h1>

<h1>SIES GRADUATE SCHOOL OF TECHNOLOGY</h1>


</center>

<form class="myform" action="welcome.php" method="post">
  
</form>

<?php 
  if(isset($_POST['logout']))
  {
    session_destroy();
  
    header('location:loginfinal.php');
  }
  ?>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="r9.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="r6.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="r5.jpg" style="width:100%">
  <div class="text"></div>
</div>


</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<div>
<center>
<h1 style="color: #696969;margin-top: 70px "><b>ABOUT US</b></h1></center>
<p>SIES GST College is a private engineering college in Mumabai City. Established in 2000, Sies is the oldest institution of higher education in Mumbai and the fifth-oldest institution of higher learning in the India. It has been ranked by numerous major education publications as among the top ten universities in the world.</p>
<p>The SIES Arts, Science and Commerce College was inaugurated on 20th of June 1960 by Shri Y. B. Chavan, the first Chief Minister of Maharashtra to serve the ever-growing educational needs of students from North and Central Mumbai Suburbs, and was the gift of the South Indians in Mumbai to the then newly-born State of Maharashtra. The Commerce Stream at the Degree level was started in 1980-81. Affiliated to the University of Mumbai, the college has an impressive strength of over 4,000 students drawn from all sections of this cosmopolitan city.</p>

<p>Excellent results at various University and Board examinations, and coveted awards and merit positons bagged by the students have placed the S.I.E.S. College among the most outstanding institutions in the city. The college has attained its position due to committment and dedication of Principals like Prof. A. B. Shah (1960-63), Prof. Ram Joshi (1963-77), who later became the Vice-Chancellor, University of Mumbai, Prof. P. S. Ramaswamy (1977-87), Prof. K. M. Apte (1987-89), Prof. S. Ramanathan (1989-1996), Prof. V. Padmanaban (1996-2003), Prof. R. Gopalkrishnan (in charge Principal 2003-2005), Dr. Harsha Mehta (2005-2016) and unstinted support from their competent and highly qualified colleagues who have given their very best to the students and to the institution.</p>
<p>
This illustrious line is continued with the appointment of Dr. Uma Shankar as the Principal of the college with effect from 1st September 2016. The students of the college, with their exemplary discipline, serious academic, extra and co-curricular pursuits and excellent rapport with their teachers, have greatly contributed to make this college a name to reckon with in academics and other fields.
</p>
</div>
<footer class="page-footer">
 
  <div class="container">
 
    <div class="row">
 
   
      <div class="col l4 offset-l2 m4 l3">
 
        <h3 class="white-text"><b>Phone:</b></h3>
 
        <a href="tel:123-456-7890">9167587396</a>
 
 
 
      
    </div>
     <div class="col l4 offset-l2 m4 l3">
 
        <h3 class="white-text"><b>E-mail:</b></h3>
 <a href="mailto: praveena.viswarajan17@siesgst.ac.in"> Click here to send me an email</a>
 
 
      
    </div>

     <div class="col l6 m4 l6">
 

 
        <p class="grey-text text-lighten-5"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15085.90265873353!2d73.023078!3d19.042813!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xef26c52d7d73816e!2sSIES%20Graduate%20School%20of%20Technology!5e0!3m2!1sen!2sin!4v1568307946711!5m2!1sen!2sin" width="290" height="300" frameborder="0" style="border:0;" allowfullscreen></iframe></p>
 
   
 
      </div>
 
 
  </div>

 
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