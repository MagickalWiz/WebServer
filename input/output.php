<?php
if(isset($_POST['submit'])) {
$name = $_POST['name'];
$num = $_POST['num'];
$photo = $_POST['photo'];
$file = file_get_contents('input.html');
$file = str_replace('%name%', $file);
$file = str_replace('%num%', $val);
$file = str_replace('%photo%', '<img src='.$file.' alt="" />');
/*
$ext = pathinfo($photo, PATHINFO_EXTENSION);
if ($ext !== '.png'){
	echo 'error'
}
else{
	file_put_contents('/home/magickalwiz/http/pics/img/',$photo,FILE_USE_INCLUDE_PATH);
}*/
file_put_contents('/home/magickalwiz/http/pics/'.$name.'.png',$photo,FILE_USE_INCLUDE_PATH);
move_uploaded_file($name.'.png','home/magickalwiz/http/pics/img/')
/*$image='/img/'.$name.'.png';
$data = fopen ($image, 'rb');
$size=filesize ($image);
$contents= fread ($data, $size);
fclose ($data);
$encoded= base64_encode($contents);
$src= 'http://192.18.1.93/pics/img/'.$name.'.png';
$final= imagecreatefromstring(file_get_contents($src);
file_put_contents('/home/magickalwiz/http/pics/img/'.$name.'.png',$final,FILE_USE_INCLUDE_PATH);
*/
#$countfiles = count(array_filter($_FILES['file']['name']));
file_put_contents('/home/magickalwiz/http/pics/'.$name.'.html',$file,FILE_USE_INCLUDE_PATH | FILE_APPEND);
file_put_contents('/home/magickalwiz/http/pics/'.$name.'.html','
<html>
<style>
.rotateimg180 {
	-webkit-transform:rotate(180deg);
	-moz-transform: rotate(180deg);
	-ms-transform: rotate(180deg);
	-o-transform: rotate(180deg);
	transform: rotate(180deg);
}
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}
</style>
<body style="background-color:gray;">
<ul class="breadcrumb">
  <li class="breadcrumb-item"><a href="http://192.168.1.93/pics.html"> Pics</a></li>
  <li class="breadcrumb-item active"> Select</li>
</ul> 
<head>
  <title>Slideshow '.$name.'</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Open Slideshow
</button>

<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
		<script>
		jQuery(window).load(function() {
 
		/*
        Stop carousel
		*/
		$(".carousel").carousel("pause");
 
		});
		</script>

      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <head>
		<style>
		  /* Make the image fully responsive */
		  .carousel-inner img {
			width: 100%;
			height: 100%;
		  }
		  </style>
		</head>
		<body>

		<div id="demo" class="carousel slide" data-ride="carousel">

		  <ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
			<li data-target="#demo" data-slide-to="3"></li>
		  </ul>
		  
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img src="/pics/img/'.$encoded.'.png" width="100%" height="100%" usemap="#map">
			  <map name="map">
			  <area shape="rect" coords="0,0,3268,2448" href="http://192.168.1.93/pics.html" target = "_blank">
			  </map>
			</div>
			<div class="carousel-item">
			  <img src="/img/Beach.png" class="rotateimg180" width="100%" height="100%" usemap="#map">
			  <map name="map">
			  <area shape="rect" coords="0,0,3268,2448" href="http://192.168.1.93/pics.html" target = "_blank">
			  </map>
			</div>
			<div class="carousel-item">
			  <img src="/img/Crane.png" width="100%" height="90%" usemap="#map">
			  <map name="map">
			  <area shape="rect" coords="0,0,3268,2448" href="http://192.168.1.93/pics.html" target = "_blank">
			  </map>
			</div>
			<div class="carousel-item">
			  <img src="/img/Lake.png" class="rotateimg180" width="100%" height="100%" usemap="#map">
			  <map name="map">
			  <area shape="rect" coords="0,0,3268,2448" href="http://192.168.1.93/pics.html" target = "_blank">
			  </map>
			</div>
		  </div>
		  
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		  </a>
		</div>
		</body>
      </div>
    </div>
  </div>
</div>
</html>',FILE_USE_INCLUDE_PATH);
}

header('Location: http://192.168.1.93/pics/'.$name.'.html');
?>
