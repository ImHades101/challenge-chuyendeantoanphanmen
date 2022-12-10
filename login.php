<?php

if(isset($_SESSION['time'])){
if(time()-@$_SESSION['time']>600|| isset($_POST['out'])){
	
	
	$flag=0;
	session_unset();
	session_destroy();
}}
$flag=0;
if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']) ){
	$uname=$_POST['username'];
	$pass=$_POST['password'];

	if($uname=="admin" && $pass=="123456"){
		$fourRandomDigit = rand(1000,9999);
		$_SESSION['tmp_user']=$uname;
		$_SESSION['otp']="1234";
		$_SESSION['time']= time();
		$flag=1;

	}



}
if (isset($_POST['otp']) && !empty($_POST['otp']) && isset($_SESSION['time']) && !empty($_SESSION['time']) ){

	if( time()-$_SESSION['time']<=600 && $_POST['otp'] == $_SESSION['otp']){
		$_SESSION['user']=$_SESSION['tmp_user'];
		
		header('Location: index.php');
		die();
	}
}




?>





<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="login/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(login/images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	
		      	<form method="post" action="index.php?file=login.php" class="signin-form">
		      		<?php if($flag!=1 && !isset($_SESSION['time']) ){   ?>
		      		<h3 class="mb-4 text-center">Have an account?</h3>
		      		<div class="form-group">
		      			<input type="text" class="form-control" name="username" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" name="password" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" style="color: white;background:black" class="form-control btn  submit px-3">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div>

	        <?php }else{if (time()-$_SESSION['time']<=600){  ?>
	        	<h3 class="mb-4 text-center">OTP Validation</h3>
		      		<div class="form-group">
		      			<input type="text" name="otp" class="form-control" placeholder="otp" >
		      		</div>
	            
	            <div class="form-group">
	            	<div class="row" >
	            		
    
    					<div class="col-6">
		            	<button type="submit" style="color: white;background:black" class="form-control btn  submit px-3">Submit</button>
		            	</div><div class="col-6">
		            	<input type="submit" name="out" style="color: white;background:black" class="form-control btn  submit px-3" value="out">
		            	</div>
	            	</div>
	            </div>
	        <?php }}?>
	          </form>
	          
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

