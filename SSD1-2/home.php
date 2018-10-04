<!DOCTYPE html>
<html>
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<body>
	
	<body>
	
	<div class="limiter">
		<div class="container-login100" size="small">
			<div class="wrap-login100" >
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/images.png" alt="IMG">
				</div>

				<form class="login100-form validate-form"    method="post" >
					<span class="login100-form-title">
						<h2>Show Posts </h2>
					</span>

					<div class="wrap-input100 validate-input" >

					
						
						

					<?php

					require_once 'token.php';


					$val = $_POST["token"];


					if(isset($_POST['updatepost'])){
						if(token::checkToken($val,$_COOKIE['csrfCookie'])){
							echo $_POST['updatepost'];
							
							
						}
						else{
						echo "wrong".$_COOKIE['csrfCookie'];
						}
					}
					?>
								
				</form>
			</div>
		</div>
	</div>
	
	

	
	
	<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
