<link rel="shortcut icon" href="../img/fav.png">
<title> Log In Page </title>


<link rel="stylesheet" href="../css/linearicons.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<link rel="stylesheet" href="../css/nice-select.css">
<link rel="stylesheet" href="../css/magnific-popup.css">
<link rel="stylesheet" href="../css/ion.rangeSlider.css" />

<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css2/main.css">

<script>
	function checkemail() {
		jQuery.ajax({
			url: "checkname.php",
			data: 'email=' + $("#email").val(),
			type: "POST",
			success: function(data) {
				$("#emailmsg").html(data);
			}


		});

	}
</script>
<script>
	function checkpass() {
		jQuery.ajax({
			url: "checkpass.php",
			data: {
				password: $("#password").val(),
				email: $("#email").val()

			},
			type: "POST",
			success: function(data) {
				$("#message").html(data);
			}


		});

	}
</script>
<?php
include "../head.php";
include "../menu.php";
?>
<?php

if (!isset($_SESSION)) {
	session_start();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "realestate";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">




	<style type="text/css">
		body {
			background: #dfe7e9;
			font-family: 'Roboto', sans-serif;
		}

		.form-control {
			font-size: 16px;
			transition: all 0.4s;
			box-shadow: none;
		}

		.form-control:focus {
			border-color: #5cb85c;
		}

		.form-control,
		.btn {
			border-radius: 50px;
			outline: none !important;
		}

		.signup-form {
			width: 480px;
			margin: 0 auto;
			padding: 30px 0;
		}

		.signup-form form {
			border-radius: 5px;
			margin-bottom: 20px;
			background: #fff;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			padding: 40px;
		}

		.signup-form a {
			color: #5cb85c;
		}

		.signup-form h2 {
			text-align: center;
			font-size: 34px;
			margin: 10px 0 15px;
		}

		.signup-form .hint-text {
			color: #999;
			text-align: center;
			margin-bottom: 20px;
		}

		.signup-form .form-group {
			margin-bottom: 20px;
		}

		.signup-form .btn {
			font-size: 18px;
			line-height: 26px;
			font-weight: bold;
			text-align: center;
		}

		.signup-btn {
			text-align: center;
			border-color: #5cb85c;
			transition: all 0.4s;
		}

		.signup-btn:hover {
			background: #5cb85c;
			opacity: 0.8;
		}

		.or-seperator {
			margin: 50px 0 15px;
			text-align: center;
			border-top: 1px solid #e0e0e0;
		}

		.or-seperator b {
			padding: 0 10px;
			width: 40px;
			height: 40px;
			font-size: 16px;
			text-align: center;
			line-height: 40px;
			background: #fff;
			display: inline-block;
			border: 1px solid #e0e0e0;
			border-radius: 50%;
			position: relative;
			top: -22px;
			z-index: 1;
		}

		.social-btn .btn {
			color: #fff;
			margin: 10px 0 0 15px;
			font-size: 15px;
			border-radius: 50px;
			font-weight: normal;
			border: none;
			transition: all 0.4s;
		}

		.social-btn .btn:first-child {
			margin-left: 0;
		}

		.social-btn .btn:hover {
			opacity: 0.8;
		}

		.social-btn .btn-primary {
			background: #507cc0;
		}

		.social-btn .btn-info {
			background: #64ccf1;
		}

		.social-btn .btn-danger {
			background: #df4930;
		}

		.social-btn .btn i {
			float: left;
			margin: 3px 10px;
			font-size: 20px;
		}
	</style>
</head>

<body>


	<div class="signup-form">
		<form action="" method="post">
			<h2>Login</h2>
			<p class="hint-text">Login with your social media account or email address</p>
			<div class="social-btn text-center">
				<a href="#" class="btn btn-primary btn-lg"><i class="fa fa-facebook"></i> Facebook</a>

			</div>
			<div class="or-seperator"><b>or</b></div>


			<div class="form-group">
				<input type="email" class="form-control input-lg" name="email" placeholder="Email Address" required="required" id='email' onKeyup='checkemail()'>
				<div id='emailmsg'></div>
			</div>

			<div class="form-group">
				<input type="password" class="form-control input-lg" name="password" placeholder="Password" required="required" id="password">
				<div id='message'>
				</div>
			</div>

			<div id="msg"></div>
			<div class="form-group">
				<button type="button" class="btn btn-success btn-lg btn-block signup-btn" name="submit" onclick='checkpass()'>Login</button>
			</div>
			<div class="form-group">
				<input type="reset" class="btn btn-success btn-lg btn-block signup-btn">
			</div>
		</form>
		<div class="text-center">Don't have an account? <a href="signup.php">signup here</a> , <a href="../index.php">Cancel </a> </div>
	</div>



	<script src="../js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="../js/vendor/bootstrap.min.js"></script>
	<script src="../js/jquery.ajaxchimp.min.js"></script>
	<script src="../js/jquery.nice-select.min.js"></script>
	<script src="../js/jquery.sticky.js"></script>
	<script src="../js/ion.rangeSlider.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/main.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<?php include "../script.php"; ?>

</body>

</html>