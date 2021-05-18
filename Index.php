<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/2196dac718.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="Index.css">
<link rel="stylesheet" href="style.css"/>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css"
    />
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
<div><a href="https://www.instagram.com/leelarosa.mp3/?hl=en"><i class="fab fa-instagram" style="margin-top: 1500%; font-size: 40px;display: inline-block;"></i></a></div>
<div><a href="https://www.youtube.com/channel/UC9athHaOcXpY0mWKxkOAnbA"><i class="fab fa-youtube" style="margin-top: 50%; font-size: 30px; display: inline-block;"></i></a></div>
<div><a href="https://open.spotify.com/artist/1ljyZt4G3QAhA5WPBL7r66?si=0MxchgxgRpiRlBeWM1FjrQ"><i class="fab fa-spotify" style="margin-top: 50%; font-size: 35px; display: inline-block;"></i></a></div>
</div>
<div class="sticky2">
<div class="header-bg">  
<img src="img/LOGO_wit.svg" id="logo_img">
<button onclick="location.href='#Contact'"class="button5">Contact</button>
<video autoplay muted loop id="myVideo">
  <source src="Video/Main_1.mp4" type="video/mp4">
</video>
</div> 
</div>
</div>      

<section>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)"  id="myBtn" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#" onclick="topFunction()">Home</a>
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
<div class="MemorieTitle">Memories</div>
<div class="MemoriesBox">
  
<a class="popup-youtube" href="https://www.youtube.com/watch?v=hNDEqs00Ics">
      <img id="imgb" src="img/Youtube_link_img.png" alt="Youtube link image"/></a>
    <div class="cassette">
        <img src="img/cassette.png" alt="cassette">
    </div>
    <br>
    <div class="vhssticker">
        <img src="img/VHSSticker_LR.png" alt="VHS sticker" />
      </div>
      <div class="studiofoto">
          <img class="studiotest" src="img/leelaimage.png" alt="studiofoto">
      </div>
    <br/>
    <script>
      $(function () {
        $(".popup-youtube").magnificPopup({
          disableOn: 700,
          type: "iframe",
          mainClass: "mfp-fade",
          removalDelay: 200,
          preloader: false,
          fixedContentPos: false,
        });
      });
    </script>
    <div class="happynote">
      <img id="imgc" src="img/happy_note.jpg" alt="happy note" />
    </div>
    <div class="polaroid">
      <img src="img/polaroid.jpg" alt="polaroid" />
    </div>
    <div class="paper">
      <img src="img/paper.png" alt="paper" />
    </div>
  

    <div class="audiobar"> 
      <audio controls>
        <source id="mp3player"
          src="Music/sound.mp3"
          type="audio/mpeg"
        />
       
      </audio>
    </div>
</div>
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
  <a id="linkfooter" href="https://www.instagram.com/leelarosa.mp3/?hl=en">Instagram</a>
  <a id="linkfooter" href="https://www.facebook.com/LEELAROSAMUSIC/">Facebook</a>
  <a id="linkfooter" href="https://www.youtube.com/channel/UC9athHaOcXpY0mWKxkOAnbA">Youtube</a>
  <a id="linkfooter" href="https://open.spotify.com/artist/1ljyZt4G3QAhA5WPBL7r66?si=0MxchgxgRpiRlBeWM1FjrQ">Spotify</a>
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
    })
    
    
    //Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
    </script>
    
</body>
