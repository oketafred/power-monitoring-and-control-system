<?php 
	
	session_start();
	if (isset($_SESSION["email"])) {
		header("Location: dashboard.php");
	}

	//Database Connection
	$conn = mysqli_connect("localhost", "root", "", "unit_usage");

	//Checking for errors
	if (mysqli_connect_error()) {
		die("Connection failed ");
	}

	if (isset($_POST['login'])) {
		$email = $_POST["email"];
		$password = $_POST["password"];

		if (strlen($password) > 4) {
			echo "string";
		}

		$query = "SELECT * FROM users WHERE user_email = '$email' AND user_password = '$password'";


		$result = mysqli_query($conn, $query);

		if (!$result) {
			echo "Its not working";
		}
	

		while ($row = mysqli_fetch_array($result)) {
			$db_user_id = $row["user_id"];
			$db_user_firstname = $row["user_firstname"];
			$db_user_lastname = $row["user_lastname"];
			$db_user_email = $row["user_email"];
			$db_user_password = $row["user_password"];

		}

		if ($email !== $db_user_email AND $password !== $db_user_password) {
			header("Location: index.php");
		}
		if ($email == $db_user_email AND $password == $db_user_password) {

			$_SESSION["firstname"] = $db_user_firstname;
			$_SESSION["lastname"] = $db_user_lastname;
			$_SESSION["email"] = $db_user_email;
			$_SESSION["password"] = $db_user_password;


			header("Location: dashboard.php");
		}else{
			header("Location: index.php");
		}



	}



 ?>








<!DOCTYPE html>
<html>
<head>
	<title>Unit Usage | Login Page</title>
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style>
		h1{
			font-size: 32px;
			font-weight: 600px;
		}
		body{
			background-color: #f9f9f9;
			font-size: 14px;
		}
		.wrapper{
			margin-top: 60px;
		}
		span svg{
			margin-left: 650px;
			margin-bottom: 20px;
		}
		h1{
			margin-bottom: 20px;
		}
		.card-2{
			margin-top: 16px;
		}
		footer{
			margin-top: 30px;
			background-color: #616161;
			width: 100%;
			height: 90px;
			position: relative;
			bottom: -47px;
		}
		footer p{
			color: white;
			text-align: center;
			font-size: 18px;
			padding-top: 30px;
		}
		.bg-success{
			background-color: #009688 !important;
		}
		button{
			background-color: #009688 !important;
			color: #fff;
		}
	</style>
</head>
<body>
<!-- navigation Menu -->
	<nav class="navbar navbar-expand-md navbar-dark bg-success">
      <div class="container">
      <a class="navbar-brand" href="#">Web Based Power Unit Usage Monitoring and Control System</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  </div>
    </nav>
	<div class="wrapper">

		<span><svg aria-hidden="true" class="octicon octicon-mark-github" height="48" version="1.1" viewBox="0 0 16 16" width="48"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path></svg></span>

		<h1 class="text-center">Account Login</h1>
		<div class="container">
			<div class="row">
				<div class="col-md-4 offset-md-4">
					<div class="card">
					  <div class="card-body">
					    <form method="POST">
						  <div class="form-group">
						    <label for="email">Email address</label>
						    <input type="email" name="email" class="form-control form-control-sm" placeholder="Enter email">
						  </div>
						  <div class="form-group">
						    <label for="password">Password</label>
						    <input type="password" class="form-control form-control-sm" name="password" placeholder="Password">
						  </div>
						  <div class="form-group">
						  	<button type="submit" name="login" class="btn btn-block">Login</button>
						  </div>
						</form>
					  </div>
					</div>

					</div>
			</div>
		</div>
	</div>
<!-- footer -->
    <footer>
    	<p>&copy; Copyright - WBPUU System - 2018</p>
    </footer>
</body>
</html>