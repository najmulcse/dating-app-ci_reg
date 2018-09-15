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
	<link href="<?php echo base_url('uploads/plugin/datepicker/css/dcalendar.picker.css'); ?>" rel="stylesheet">
</head>
<body>
	<div class="container-fluid" id="main">
		<div class="row">
			<h1>Welcome to Dating App Registration</h1>
			<p></p>
		</div>
	</div>

	<section id="body">
		<div class="container-fluid" id="body-content">
			<div class="row">
				<div class="col-sm-3 col-sm-offset-1" id="talks">


				</div>

				<div class="col-sm-6" id="post-form">
                    <p style="color: green; font-weight: bold;">
                        <?php
                        if($this->session->flashdata('success')) {
                            echo $this->session->flashdata('success');
                        }
                        ?>
                    </p>
                    <h3>Sign up</h3>
					<form action="<?php echo base_url('homeController/registration_form_action'); ?>" method="POST" enctype='multipart/form-data'>
						<div class="form-group">
							<label>Your Name</label>
							<input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo set_value('name'); ?>">
							<span style="color: red;"><?php echo form_error('name'); ?></span>
						</div>

						<div class="form-group">
							<label>Email Address</label>
							<input type="email" class="form-control" name="email" placeholder="email@some.com" value="<?php echo set_value('email'); ?>">
							<span style="color: red;"><?php echo form_error('email'); ?></span>
						</div>

						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password" placeholder="password">
                            <span style="color: red;"><?php echo form_error('password'); ?></span>

                        </div>
						<div class="form-group">
							<label>Gender</label>
							<select name="gender" id="gender" class="form-control">
								<option selected disabled>Select</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
							<span style="color: red;"><?php echo form_error('gender'); ?></span>
						</div>
						<div class="form-group">
							<label>Date of Birth</label>
							<input type="date" class="form-control" name="date_of_birth" placeholder="birth date" id="dob" value="<?php echo set_value('date_of_birth'); ?>">
							<span style="color: red;"><?php echo form_error('date_of_birth'); ?></span>
						</div>

						<div class="form-group">
							<label>photo</label>
							<input type="file" class="form-control" name="avatar">
							<span style="color: red;"><?php echo form_error('avatar'); ?></span>
							<span style="color: red;"><?php if(isset($error)) echo $error; ?></span>
						</div>

                        <input type="hidden" name="latitude" value="12.33332">
                        <input type="hidden" name="longitude" value="67.55534">
						<button type="submit" class="btn btn-primary btn-lg">Register</button>

					</form>
				</div>
			</div>
		</div>
	</section>

	<section id="foot">
		<div class="container-fluid">
			<div class="footer">
				<p>&copy;dating app</p>
			</div>
		</div>
	</section>


<script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>myAsset/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('uploads/plugin/datepicker/js/dcalendar.picker.js') ?>"></script>
<script>
	// $(document).ready(function($) {
	// 	$('#dob').dcalendarpicker();
	// });
</script>
</body>
</html>