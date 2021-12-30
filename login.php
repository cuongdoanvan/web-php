
<?php
ob_start();
session_start();
include_once('db/connect.php');



?>
<?php
if(isset($_POST["login"])){
	$username = $_POST["username"];
	$password = md5($_POST["password"]);
 $sql = "SELECT * FROM  tbl_user WHERE use_name = '$username' AND password = '$password'"; 
	$result = mysqli_query($conn,$sql);
	$roww =mysqli_fetch_row($result);
	if(($roww)){
		$_SESSION["login"] = $roww;
		header("location:baitap2web.php");
	}
}
?>
s
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng nhập</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
	
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Tài Khoản
				</span>
				<form action = "login.php" method = "POST">

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="username" id ="username" placeholder="Tài Khoản">
						
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="password" name="password" id = "password" placeholder="Mật Khẩu">
						
					</div>

					<button type = "submit" name = "login" class = "btn btn-primary btn-lg btn-block">Đăng nhập</button>

				</form>
			</div>
		</div>
	</div>
	
	

	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>