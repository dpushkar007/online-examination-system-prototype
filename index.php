<!DOCTYPE html>

<html>
<head>
	<!-- Title related tags -->
	<title>wow2learn - Learn to Compete</title>
	<link rel="shortcut icon" href="media/favicon.ico">

	<!-- SEO related things -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Bootstrap includes -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/glyphicon.min.css">
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="styles/style.css">

	<!-- Fonts -->	

	<!-- Styles -->
	<style type="text/css">
		body{
			background-image: url("media/back2.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}
		.mySlides {
			display: none;
		}
		/* Slideshow container */
		.slideshow-container {
			max-width: 1000px;
			position: relative;
			margin: auto;
			padding: 0;
			margin:0;
			text-align:center;
			box-shadow: 0 0 15px 1px rgba(4,0,0,1);
		}
		/* Caption text */
		.text {
			color: #333;
			background-color: white;
			font-size: 100%;
			padding: 8px 12px;
			position: absolute;
			bottom: 8px;
			width: auto;
			text-align: center;
		}

		/* Number text (1/3 etc) */
		.numbertext {
			color: #fff;
			font-size: 12px;
			padding: 8px 12px;
			position: absolute;
			top: 0;
		}

		/* The dots/bullets/indicators */
		.dot {
			height: 10px;
			width: 10px;
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
			-webkit-animation-duration: 7s;
			animation-name: fade;
			animation-duration: 7s;
		}

		@-webkit-keyframes fade {
			from {opacity: 1} 
			to {opacity: 1}
		}

		@keyframes fade {
			from {opacity: 1} 
			to {opacity: 1}
		}
		/* On smaller screens, decrease text size */
		@media only screen and (max-width: 300px) {
			.text {
				font-size: 20px;
			}
		}

		h3{
			margin 0;
			background-color: whitesmoke;
			text-decoration: none;
			padding: 1%;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<?php include_once("header.php"); ?>	

		<div class="navigation">
			<i class="glyphicon glyphicon-equalizer"></i>
			<button>Home</button>
			<i class="glyphicon glyphicon-equalizer"></i>
			<button>Resources</button>
			<i class="glyphicon glyphicon-equalizer"></i>
			<a href="improve/improve.php"><button>Improve Yourself</button></a>
			<i class="glyphicon glyphicon-equalizer"></i>
			<button>Tech Triathlon</button>
			<i class="glyphicon glyphicon-equalizer"></i>
			<button>Forum</button>
			<i class="glyphicon glyphicon-equalizer"></i>
			<a href="about/about.php"><button>About</button></a>
			<i class="glyphicon glyphicon-equalizer"></i>
		</div>


		<!-- news -->
		<div class="row news">
			<div class="col-sm-2" style="background-color: #500000; color: #fff; padding: 5px; text-align: center; font-weight: bold;">
				Latest News
			</div>
			<div class="col-sm-10" style="font-size: 18px;">
				<marquee>Notifications</marquee>
			</div>
		</div>
		<!-- End News -->

		<!-- Body -->
		<div class="row">
			<div class="col-sm-3">
				<div class="card rankers" style="padding: 5%">
					<div class="card-title" style="font-weight: bold;"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Weekly Top Rankers</div>
					1 <br>
					2 <br>
					3 <br>
				</div>
				<div class="card winners" style="padding: 5%">
					<div class="card-title" style="font-weight: bold;"><span class="glyphicon glyphicon-education" aria-hidden="true"></span> Last Month Winners</div>
					1 <br>
					2 <br>
					3 <br>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="slideshow-container">
					<div class="mySlides fade">
						<div class="numbertext">1 / 3</div>
						<img src="media/event.png" style="width: 100%;">
						<div class="text">Enroll Now <span class="glyphicon glyphicon-chevron-right"></div>
					</div>
					<div class="mySlides fade">
						<div class="numbertext">2 / 3</div>
						<img src="media/books.png" style="width: 100%;">
						<div class="text">Learn Now <span class="glyphicon glyphicon-chevron-right"></div>
					</div>
					<div class="mySlides fade">
						<div class="numbertext">3 / 3</div>
						<img src="media/explore.png" style="width: 100%;">
						<div class="text">Explore Now <span class="glyphicon glyphicon-chevron-right"></div>
					</div>
				</div>
				<br>
				<div style="text-align:center">
					<span class="dot"></span> 
					<span class="dot"></span> 
					<span class="dot"></span> 
				</div>
			</div>
			<div class="col-sm-3">
				<?php include_once("login/login.php"); ?>
			</div>
		</div>
		<?php include_once("footer.html"); ?>
	</div>
</body>
</html>
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
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}
</script>
