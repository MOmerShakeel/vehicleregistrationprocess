<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
  <h2>Update Vehicle Record</h2>
  
   <?php

   $conn = mysqli_connect('localhost','root','','vehicles');
   if(isset($_GET['update'])){
		$update_id = $_GET['update'];
		$select = "SELECT * FROM vehicle WHERE vehicle_reg_num = '$update_id";
		$run = mysqli_connect($conn,$select);
		while($row_vehicle = mysqli_fetch_array($run)){
			$vehicle_model = $row_vehicle['vehicle_model'];
			$vehicle_city = $row_vehicle['vehicle_city'];
			$vehicle_country = $row_vehicle['vehicle_country'];
			$vehicle_clearance = $row_vehicle['vehicle_clearance'];
		}
  ?>
  
  <form action="submit1.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
      <label>Registration Number:</label>
      <input type="varchar" class="form-control" value="<?php echo $vehicle_reg_num;?> placeholder="Enter Registration Number" name="vehicle_reg_num">
    </div>
	<div class="form-group">
      <label>Vehicle Model</label>
      <input type="varchar" class="form-control" value="<?php echo $vehicle_model;?> placeholder="Enter Vehicle Model" name="vehicle_model">
    </div>
    <div class="form-group">
      <label>City</label>
      <input type="varchar" class="form-control" value="<?php echo $vehicle_city;?> placeholder="Enter City" name="vehicle_city">
    </div>
    <div class="form-group">
      <label>Country</label>
      <input type="varchar" class="form-control" value="<?php echo $vehicle_country;?> placeholder="Enter Country" name="vehicle_country">
    </div>
	<div class="form-group">
      <label>Clearance</label>
      <input type="varchar" class="form-control" value="<?php echo $vehicle_clearance;?> placeholder="Is this vehicle clear?" name="vehicle_clearance">
    </div>
    
    <input type="submit" name="insert-btn" class="btn btn-primary" />
  </form>
  

  
  <a class = "btn btn-primary" href= "view_vehicle.php">View Vehicle</a>
 
</div> 
</body>
</html>
