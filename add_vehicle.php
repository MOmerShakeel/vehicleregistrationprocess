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
  <h2>Add New Vehicle</h2>
  <form action="submit2.php" method="post" enctype="multipart/form-data"/>
	<div class="form-group">
      <label>Registration Number:</label>
      <input type="varchar" class="form-control" placeholder="Enter Registration Number" name="vehicle_reg_num">
    </div>
	<div class="form-group">
      <label>Vehicle Model</label>
      <input type="varchar" class="form-control" placeholder="Enter Vehicle Model" name="vehicle_model">
    </div>
    <div class="form-group">
      <label>City</label>
      <input type="varchar" class="form-control" placeholder="Enter City" name="vehicle_city">
    </div>
    <div class="form-group">
      <label>Country</label>
      <input type="varchar" class="form-control" placeholder="Enter Country" name="vehicle_country">
    </div>
	<div class="form-group">
      <label>Clearance</label>
      <input type="varchar" class="form-control" placeholder="Is this vehicle clear?" name="vehicle_clearance">
    </div>
    
    <input type="submit" name="insert-btn" class="btn btn-primary" />
  </form>
  <a class = "btn btn-primary" href= "view_vehicle.php">View Vehicle</a>
  
</div>

</body>
</html>
