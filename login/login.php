<html>
<head>
	<style type="text/css">
		.login{
			padding: 5%;	}
		.login h1{
			text-align: center;
			margin-top: 0%;
			margin-bottom: 10%;
		}
		.login label{
			text-align: center;
			font-weight: bold;
		}
		.login label,
		.login input[type = "text"],
		.login input[type = "password"]{
			width: 100%;
			margin-bottom: 3%;
			height: auto;
			padding: 3%;
		}
		.login input[type = "submit"],
		.login input[type = "reset"]{
			height: auto;
			width: auto;
			min-width: 40%;
			margin: 3% 5% 0 5%;
			padding: 1%;
			border-radius: 5px;
		}
		.login input[type = "submit"]{
			background-color: #006400;
			color: white;
			font-weight: bold;
			border:none;
		}
		.login input[type = "reset"]{
			background-color: red;
			color: white;
			font-weight: bold;
			border:none;
		}
		.login input[type = "submit"]:hover,
		.login input[type = "reset"]:hover,
		.login input[type = "submit"]:focus,
		.login input[type = "reset"]:focus{
			background-color: grey;
		}
	</style>
</head>
<body>
	<div class="card login">
		<form class="card-body" method="POST">
			<h1 class="card-title">Login</h1>
			<div class="row">
				<label class="col-sm-4">User Id</label>
				<input class="col-sm-8" type="text" name="userid" placeholder="Enter User Id">
			</div>
			<div class="row">
				<label class="col-sm-4">Password</label>
				<input class="col-sm-8" type="password" name="password" placeholder="Enter password">	
			</div>
			<div class="row">
				<input type="reset" name="reset" value="Reset">
				<input type="submit" name="submit" value="Login">
			</div>
			<label>New user? <a href="">Register Here</a></label>
		</form>
		
	</div>
</body>
</html>