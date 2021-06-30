<?php
	session_start();
	$serverName = 'localhost';
	$userName = 'root';
	$password = '';
	$database = 'final';
    $conn = mysqli_connect($serverName,$userName,$password,$database);
	
	if(!isset($_SESSION['email'])){
		echo "<script>window.open('userfront.php','_self');</script>";
	}
		
	
	?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<br></br>
<div class="container">
  <h2>Home</h2>
  <a class = "btn btn-danger" href="logout.php">Logout</a>
  <a class = "btn btn-primary" href="view_vehicle.php">Update Records</a>
  <a class = "btn btn-success" href="add_vehicle.php">Add Records</a>
  
</div>

</body>
</html>
