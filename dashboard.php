<?php 

	session_start();
	if (!isset($_SESSION["email"])) {
		header("Location: index.php");
	}



 ?>



<!DOCTYPE html>
<html>
<head>
	<title>WBPUU System | Final Year Project 2018</title>
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- Navbar Custom CSS -->
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<style type="text/css">
		body{
			margin: 0px;
			background-color: #f9f9f9;
		}
		.without-border{
			border: none;
		}
		.totalunit-bottom{
			margin-bottom: 40px;
		}
		.bg-primary{
			background-color: #0D47A1 !important;
		}
		footer{
			margin-top: 30px;
			background-color: #616161;
			width: 100%;
			height: 90px;
			position: relative;
			bottom: -29px;
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
		.btn-danger{
			background-color: #E91E63 !important;
		}
	</style>
</head>
<body>
	<!-- navigation Menu -->
	<nav class="navbar navbar-expand-md navbar-dark bg-success">
	 <div class="container">
      <a class="navbar-brand" href="#">WBPUU System</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Welcome <?php echo $_SESSION["lastname"]." ".$_SESSION["firstname"]; ?> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>


    <!-- Main content -->
    <div class="container">
    	<div class="row">
    		<div class="col-md-6 offset-md-3">
    			<form>
    				<!-- Socket Headings -->
				  <div class="form-group row">
				    <label class="col-sm-4 col-form-label"><h4>SOCKETS</h4></label>
				    <div class="col-sm-8 text-center">
				      <label class="col-form-label"><h4>POWER UNITS</h4></label>
				    </div>
				  </div>
    				<!-- Socket A -->
				  <div class="form-group row">
				    <label class="col-sm-4 col-form-label">Socket A</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" placeholder="Socket A">
				    </div>
				  </div>
				  <!-- Socket b -->
				  <div class="form-group row">
				    <label class="col-sm-4 col-form-label">Socket B</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" placeholder="Socket B">
				    </div>
				  </div>
				  <!-- Socket C -->
				  <div class="form-group row totalunit-bottom">
				    <label class="col-sm-4 col-form-label">Socket C</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" placeholder="Socket C">
				    </div>
				  </div>
				  <!-- Total Power Units -->
				  <div class="form-group row totalunit-bottom">
				    <label class="col-sm-4 col-form-label"><h6>TOTAL UNITS</h6></label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" placeholder="Total Units">
				    </div>
				  </div>

				  <!-- Switching Buttons -->
				  <div class="form-group row">
				    <div class="col-sm-6">
					    <div class="dropdown">
						  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    TURN ON SOCKETS
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						    <a class="dropdown-item" href="#">Socket A</a>
						    <a class="dropdown-item" href="#">Socket B</a>
						    <a class="dropdown-item" href="#">Socket C</a>
						  </div>
						</div>
					</div>
				    <div class="col-sm-6">
				      <div class="dropdown">
						  <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    TURN OFF SOCKETS
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						    <a class="dropdown-item" href="#">Socket A</a>
						    <a class="dropdown-item" href="#">Socket B</a>
						    <a class="dropdown-item" href="#">Socket C</a>
						  </div>
						</div>
				    </div>
				  </div>



				</form>
    		</div>
    	</div>
    </div>

    <!-- footer -->
    <footer>
    	<p>&copy; Copyright - WBPUU System - 2018</p>
    </footer>


	<script src="jquery/jquery.min.js"></script>
	<script src="popperjs/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>