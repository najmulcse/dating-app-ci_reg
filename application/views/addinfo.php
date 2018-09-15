<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>myAsset/bootstrap/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="<?php //echo base_url(); ?>myAsset/custom.css"> -->
</head>
<body>
	<div class="container" id="main">	

				<div class="col-sm-4 col-sm-offset-3" id="post-form">
                    <h3>Put Your Information here and save it.</h3>
					<form action="<?php base_url(); ?>homeController/getUserData" method="POST">
						<div class="form-group">
							<label>Your full Name</label>
							<input type="text" class="form-control" name="name" placeholder="full Name" required="required">
						</div>

						<div class="form-group">
							<label>Your Email Address</label>
							<input type="text" class="form-control" name="email" placeholder="email@some.com" required="required">
						</div>

						<div class="form-group">
							<label>Your Address</label>
							<input type="text" class="form-control" name="address" placeholder="address" required="required">
						</div>

						<div class="form-group">
							<label>Your profession</label>
							<input type="text" class="form-control" name="prof" placeholder="your profession" required="required">
						</div>

						<div class="form-group">
							<label>City</label>
							<input type="text" class="form-control" name="city" placeholder="your city" required="required">
						</div>

						<div class="form-group">
							<label>Phone Number</label>
							<input type="text" class="form-control" name="phone" placeholder="phone number" required="required">
						</div>


						<button type="submit" class="btn btn-primary btn-lg">Save</button>

					</form>
				</div>
			</div>
		</div>
	</section>


<script src="<?php echo base_url(); ?>myAsset/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>