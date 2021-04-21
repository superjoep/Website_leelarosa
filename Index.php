<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/2196dac718.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="Index.css">

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "400px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<body>
<div id="Home">
<div class="flex-container2 sticky">
<div><a><span class="navbutton" style="font-size:50px;cursor:pointer" onclick="openNav()">&#9776;</span></a></div>
<div><a href="https://www.instagram.com/leelarosa.mp3/?hl=en"><i class="fab fa-instagram" style="margin-top 50%; margin-top: 35%; font-size: 40px;display: inline-block;"></i></a></div>
<div><a href="#"><i class="fab fa-youtube" style="margin-top: 2%; font-size: 30px; display: inline-block;"></i></a></div>
<div><a href="#"><i class="fab fa-spotify" style="margin-top: 2%; font-size: 35px; display: inline-block;"></i></a></div>
</div>
<div class="sticky2">
<div class="header-bg">  
<img src="img/LOGO_zwart.svg" id="logo_img">
<button class="button button5">Contact</button>
</div> 
</div>
</div>      

<section>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#Home">Home</a>
  <a href="#TourData">Tour Data</a>
  <a href="#Memories">Memories</a>
  <a href="#Contact">Contact</a>
  </div>
    <div id="axis" class="one">
        <img class="van object" src="img/Plaat.png"/>
    </div>
    <div id="axis" class="two">
        <img class="object van move-left" style="" src="img/Plaathoes.png"/>
    </div>
    </div>
    </div>   
    <div class="flex-container5">
    <div><button class="button button6">Listen Now</button> </div>
    <div><button class="button button7">Order Now</button> </div>
    </div>
    
    
<div id="TourData">
  <div class="tourdatatitle">Tour data</div>
  <div class="tourbox"></div>
</div>

<div id="Memories">
  <h2>Memories</h2>
</div>  

<div id="Contact">
<div class="footertitle">Contact</div>
<div class="flex-container4">
<div class="flex-container">
  <div id="Titlefooter">Booking</div>
  <a id="linkfooter" href="url">randomemail@gmail.com</a>
  <a id="linkfooter" href="url">randomemail@gmail.com</a>
 
</div>
<div class="flex-container">
<div class="round-star-label"><div id="Titlefooter">Socials</div></div>
  <a id="linkfooter" href="url">Instagram</a>
  <a id="linkfooter" href="url">Facebook</a>
  <a id="linkfooter" href="url">Youtube</a>
  <a id="linkfooter" href="url">Spotify</a>
  <a id="linkfooter" href="url">Tiktok</a>
</div>
</div> 
</div>  
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>$(document).ready(function(){
        $(window).scroll(function(){
            $('.header-bg').css("opacity", 1- $(window).scrollTop() / 700)
        })
    })</script>
</body>
