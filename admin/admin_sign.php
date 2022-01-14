<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from emr.dreamguystech.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jul 2021 09:34:00 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Bigil House - Dashboard</title>

<!-- <link rel="shortcut icon" href="assets/img/favicon.png"> -->

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper login-body">
<div class="login-wrapper">
<div class="container">
<img class="img-fluid logo-dark mb-2" src="assets/img/bigilhouse14.png" alt="Logo">
<div class="loginbox">
<div class="login-right">
<div class="login-right-wrap">
<h1>Login</h1>
<p class="account-subtitle">Access to our dashboard</p>
<form action="admin_signup.php" method="post">
<div class="form-group">
<label class="form-control-label">User Name</label>
<input type="text" name="name" class="form-control">
</div>
<div class="form-group">
<label class="form-control-label">Password</label>
<div class="pass-group">
<input type="password" name="password" class="form-control pass-input">
<span class="fas fa-eye toggle-password"></span>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-6">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="cb1">
<label class="custom-control-label" for="cb1">Remember me</label>
</div>
</div>
<!-- <div class="col-6 text-right">
<a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
</div> -->
</div>
</div>
<button class="btn btn-lg btn-block btn-primary" type="submit">Login</button>
<!-- <div class="login-or">
<span class="or-line"></span>
<span class="span-or">or</span>
</div> -->

<!-- <div class="social-login mb-3">
<span>Login with</span>
<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
</div> -->


</form>
</div>
</div>
</div>
</div>
</div>
</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from emr.dreamguystech.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jul 2021 09:34:00 GMT -->
</html>