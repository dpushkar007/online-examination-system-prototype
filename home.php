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
	<link rel="stylesheet" href="bootstrap/css/glyphicon.css">
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<!-- Fonts -->	

	<!-- Styles -->
	<style type="text/css">

		* {box-sizing: border-box;}
		body {font-family: Verdana, sans-serif;}
		.mySlides {display: none;}
		img {vertical-align: middle;}

		/* Slideshow container */
		.slideshow-container {
			max-width: 1000px;
			position: relative;
			margin: auto;
			padding: 0;
			margin:0;
			text-align:center;
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
		.text{
			background-color: white;
			text-align: center;
			margin: 0%;
			width: auto;
			font-size: 20px;
		}

		/*thumbnail*/
		.thumbnail{
			width: 100%;
			height: auto;
		}
	</style>
</head>
<body>
	<?php include_once("header.php"); ?>

	<!-- navigation bar starts -->
	<div class="navigation col-sm-12">
		<button>Home</button>
		<button>Resources</button>
		<button>Improve Yourself</button>
		<button>Tech Triathlon</button>
		<button>ABOUT</button>
	</div>
	<!-- navigation bar ends -->

	<!-- news -->
	<div class="news row">
		<div class="col-sm-2">
			<button>Latest Update</button>	
		</div>
		<div class="col-sm-10">
			<marquee>This is news</marquee>	
		</div>
	</div>

	<!-- main body -->
	<div class="row">
		<div class="col-sm-3">
			abc
		</div>
		<div class="col-sm-6">
			<div class="slideshow-container">

				<div class="mySlides fade">
					<div class="numbertext">1 / 3</div>
						<img src="media/event.png" style="width:100%">
					<div class="text"><a href="">Enroll Now</a></div>
				</div>

				<div class="mySlides fade">
					<div class="numbertext">2 / 3</div>
						<img src="media/books.jpg" style="width:100%">
					<div class="text"><a href="">Learn More</a></div>
				</div>

				<div class="mySlides fade">
					<div class="numbertext">3 / 3</div>
						<img src="media/quiz.jpg" style="width:100%">
					<div class="text"><a href="">Solve Now</a></div>
				</div>

			</div>
			<br>

			<div style="text-align:center">
				<span class="dot"></span> 
				<span class="dot"></span> 
				<span class="dot"></span> 
			</div>


			<!-- video lectures -->
			<h3><span class="glyphicon glyphicon-cd"></span> Video Lectures</h3>
			<div class="row">
				<div class="col-sm-6">
					<div class="card">
						<img class="card-img-top" src="media/c++.jpeg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">C/C++</h5>
							<p class="card-text">It is very easy to learn C and C++ completely from scratch, go through the lecture for more info.</p>
							<a href="#" class="btn btn-primary">Learn now</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="card">
						<img class="card-img-top" src="media/py.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Python</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Learn now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			xyz
		</div>
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
