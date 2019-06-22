<?php
header('Content-Type: text/html; charset=utf-8');
if(isset($_POST['submit'])){
    $val1 = htmlentities($_POST['var1']);
    $val2 = htmlentities($_POST['var2']);
    $val3 = htmlentities($_POST['var3']);
    $val4 = htmlentities($_POST['var4']);
   $link=mysqli_connect("localhost","id9151134_abhinav","Abhinav123","id9151134_mini2019");
   $query = "INSERT INTO `trees`(`treeId`, `name`, `latitude`, `longitude`) VALUES ('$val1','$val2','$val3','$val4')";
    
      
    if(mysqli_query($link,$query)){
        echo '<script type="text/javascript">window.onload = function () { alert("Tree Registered!")} </script>'; 
    
    } 
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
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
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<a href="index.html"><img src="images/img-01.png" alt="IMG"></a>
				</div>

				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title">
						Register 
					</span>
						<div class="wrap-input100">
						<input class="input100" type="text" name="var1" id="var1" placeholder="Tree Id">
						<span class="focus-input100"></span>
						
					</div>

						<div class="wrap-input100">
						<input class="input100" type="text" name="var2" id="var2" placeholder="Biological Name">
						<span class="focus-input100"></span>
											</div>
					<div class="wrap-input100">
						<input class="input100" type="text" name="var3" id="var3" placeholder="latitude">
						<span class="focus-input100"></span>
						
						</div>
						<div class="wrap-input100">
						<input class="input100" type="text" name="var4" id="var4" placeholder="longitude">
						<span class="focus-input100"></span>
						
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit" type="submit">Register</button>
					</div>
				</form>
				<div class="container-login100-form-btn">
						<button class="login100-form-btn" >
							<a href="table/index.php">Show Trees</a>
						</button>
					</div>
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
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>