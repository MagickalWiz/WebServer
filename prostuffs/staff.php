<?php $randomboss = rand(1,2); echo $random;
 $randommedia = rand(1,2); echo $random;
  $randomimportant = rand(1,2); echo $random;
   $randomsecure = rand(1,2); echo $random;
echo"
<html>
<title>FancyPro Staff</title>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js'></script>
<style>
html{
	scroll-behavior: smooth;
}

p {text-align: center;}

body {
  font-family: sans-serif;
}

.card {display:inline-block}

.col-6

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px;
  font-size: 28px;
  padding: 0px 10px;
}

@media screen and (max-height: 1080px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<body style='background-color:#bfbfbf'>

<div class='sidenav'>
  <a href='http://192.168.1.93/pro.html'>Home</a>
  <a href='http://192.168.1.93/pro.html#about'>About</a>
  <a href='http://192.168.1.93/pro.html#contact'>Contact</a>
</div>

<img src='/img/widepro.png' width='1900' height='300' class='center'>

<body>

<p style='font-size:45px'><b>The Experienced and Professional staff of FancyPro<sup>&reg;</sup></b></p><hr>

<div class='container'>
	<div class='row justify-content-center'>
		<div class='card col-6' style='width:400px'>
		  <img class='card-img-top' src='/img/boss/boss_".$randomboss.".png' alt='[ Random Image ]' height='400' width='300' />
		  <div class='card-body'>
			<h4 class='card-title'>The Boss</h4>
			<p class='card-text'></p>
			</div>
		</div>
		<br>

		<div class='card col-6' style='width:400px'>
		  <img class='card-img-top' src='/img/media/media_".$randommedia.".png' alt='[ Random Image ]' height='400' width='300' />
		  <div class='card-body'>
			<h4 class='card-title'>Professional Media</h4>
			<p class='card-text'></p>
			</div>
		</div>
		<br>
	  
		<div class='card col-6' style='width:400px'>
		  <img class='card-img-top' src='/img/important/important_".$randomimportant.".png' alt='[ Random Image ]' height='400' width='300' />
		  <div class='card-body'>
			<h4 class='card-title'>Employee of the Day</h4>
			<p class='card-text'></p>
			</div>
		</div>
		<br>
		
		<div class='card col-6' style='width:400px'>
		  <img class='card-img-top' src='/img/secure/secure_".$randomsecure.".png' alt='[ Random Image ]' height='400' width='300' />
		  <div class='card-body'>
			<h4 class='card-title'>Reliable Security</h4>
			<p class='card-text'></p>
			</div>
		</div>
		<br>
	</div>
</div>
</body>
</html>"?>
