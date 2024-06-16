<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;
ali}

</style>
<body>

<div class="w3-container">
					 <h2 align="center">CROPS</h2>
  
</div>
<div align="center">
<div class="w3-content w3-section" style="max-width:800px;">

  <img class="mySlides w3-animate-top" src="images/isha2.jpg" style="width:100%;height:30%">

  <img class="mySlides w3-animate-bottom" src="images/ce3b07304d6d3a71807ca489d85857c9-04-19-22-18-00-02.png" style="width:100%">
  <img class="mySlides w3-animate-top" src="images/0246e19acc7cd111c5785b19fd28d707-04-16-22-11-09-27.jpg" style="width:100%">
  <img class="mySlides w3-animate-bottom" src="images/590dbb56f5e8595d53e06e7ec66d3898-04-20-22-18-37-35.jpg" style="width:100%">
</div></div>
<div align="center">
 <img class="mySlides w3-animate-top" src="images/isha4.jpg" style="width:70%;height:30% ">
 </div>
 <div align="center">
  <img class="mySlides w3-animate-bottom" src="images/bef07d0b44d8dd852a8516436e127a0b-04-27-22-10-07-48.png" style="width:35%">
   </div>
  <div align="center">
  <img class="mySlides w3-animate-top" src="images/921a56b5ed132e53174988f79364ecfa-04-22-22-11-36-58.jpg" style="width:35%">
   </div>
  <div align="center">
  <img class="mySlides w3-animate-bottom" src="images/3c6f1c39557a68bbf50a2fadf5829a7c-06-04-22-14-51-07.jpg" style="width:35%">
   </div>
   <div align="center">
 <img class="mySlides w3-animate-top" src="images/6aed8d9c7ffe55f109535d417e46bd5a-04-25-22-11-53-09.jpg" style="width:35% ">
 </div>
 <div align="center">
  <img class="mySlides w3-animate-bottom" src="images/7ccdd399d84250d88a8d5513abc5a190-04-26-22-09-15-55.jpg" style="width:35%">
   </div>
  <div align="center">
  <img class="mySlides w3-animate-top" src="images/58ac2eaacc33bb9d014e88c490281358-04-23-22-12-30-29.png" style="width:35%">
   </div>
  <div align="center">
  <img class="mySlides w3-animate-bottom" src="images/5c06d4c958373e80f9b80ce515998f77-04-26-22-15-30-01.jpg" style="width:35%">
   </div>
<div align="center">
 <img class="mySlides w3-animate-top" src="images/2ce9a4d09495574830d7b4e5ea91738e-08-31-22-15-47-51.jpg" style="width:35% ">
 </div>
 <div align="center">
  <img class="mySlides w3-animate-bottom" src="images/7a0609b0529fe7d9f15642315f55e3fe-04-18-22-10-23-36.jpg" style="width:35%">
   </div>
  <div align="center">
  <img class="mySlides w3-animate-top" src="images/0ee3aef0b59d40ce382f5460c1f52657-03-16-22-11-55-35.jpg" style="width:35%">
   </div>
  <div align="center">
  <img class="mySlides w3-animate-bottom" src="images/abd37f58a1ab6edb0b40560eb13b8f8d-04-23-22-17-22-36.jpg" style="width:50%">
   </div>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2500);    
}
</script>

</body>
</html>
