<?php
session_start();
if (!isset($_SESSION['usuario'])){
    header("Location: logout.php");
}

?>
<!DOCTYPE html>
<html style="background-color: orange; background-size: cover; background-position: center;">
<head>
   <link rel="shotcut icon" href="img/mytec.png" type="image/x-png">
   <title>Home</title> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

  #conteudo{
                    width: 100%;
                    background-color: rgb(255,255,255);
                    margin: auto;
                    border-radius: 5px 5px 5px 5px;
                    padding: 10px;
                    height: 100%;}

* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: black;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev {
  left: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
  background-color:#e6e6e6;
}


/* Caption text */
.text {
  color: black;
  font-size: 18px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  font-weight: bold;
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
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
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
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>
  <br><br><br><br><br><br>
  <div id="conteudo" style="background-color: rgba( 255, 255, 255,0.5);">
    <br><br>
  <center>
<div class="slideshow-container">

<div class="mySlides fade">
  <a href="perfil.php"><img src="img/perfil.png" style="width:25%"></a>
    <br><br><br><br><br><br>
  <div class="text">Perfil</div>
</div>

<div class="mySlides fade">
  <a href="clientes.php"><img src="img/cliente.png" style="width:25%"></a>
  <br><br><br><br><br><br>
  <div class="text">Clientes</div>
</div>

<div class="mySlides fade">
  <a href="hospedando.php"><img src="img/iconep.png" style="width:25%"></a>
  <br><br><br><br><br><br>
  <div class="text">Editar/Cadastrar Clientes</div>
</div>

<div class="mySlides fade">
  <a href="logout.php"><img src="img/sair.png" style="width:25%"></a>
    <br><br><br><br><br><br>
  <div class="text">Logout</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

</center>
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 
