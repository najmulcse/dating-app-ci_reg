<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>myAsset/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>myAsset/custom.css">
</head>
<body>

	<div class="container">
		<form action="<?php base_url(); ?>homeController/getUserData" method="POST">
						<div class="form-group">
							<label>Your full Name</label>
							<input type="text" class="form-control" name="name" placeholder="full Name" value="<?php echo $info->name; ?>">
						</div>

						<div class="form-group">
							<label>Your Email Address</label>
							<input type="text" class="form-control" name="email" placeholder="email@some.com" value="<?php echo $info->email; ?>">
						</div>

						<div class="form-group">
							<label>Your Address</label>
							<input type="text" class="form-control" name="address" placeholder="address" value="<?php echo $info->address; ?>">
						</div>

						<div class="form-group">
							<label>Your profession</label>
							<input type="text" class="form-control" name="profession" placeholder="your profession" value="<?php echo $info->prof; ?>">
						</div>

						<div class="form-group">
							<label>Phone Number</label>
							<input type="text" class="form-control" name="phone" placeholder="phone number" value="<?php echo $info->phone; ?>">
						</div>

						<div class="form-group">
							<label>City</label>
							<input type="text" class="form-control" name="city" placeholder="your city" value="<?php echo $info->city; ?>">
						</div>

						<button type="submit" class="btn btn-primary btn-lg">Save</button>

					</form>
	</div>

<script src="<?php echo base_url(); ?>myAsset/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>