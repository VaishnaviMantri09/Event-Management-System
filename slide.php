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

</style>
</head>
<body>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
  <a class=""  href="welcome.php">Home</a>
  <a href="gallery.php">Gallery</a>
  <a href="">Academic analysis</a>
  <a href="">Attendance</a>
  <a href="c.php">Teachers Profile</a>
  <a href="b.php">Student Profile</a>
  <a href="flip.php">Faculty</a>
  <a href="notification.php">Notification</a>
  </div>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>



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
     
</body>
</html>
