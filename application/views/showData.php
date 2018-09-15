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

<div class="container">
	
	<table class="table table-bordered">
		<caption class="page-header"><h1>Information Book</h1> <a href="" class="pull-right btn btn-primary">Add another info</a></caption>
		<thead class="">
			<tr>
				<th>Name</th>
				<th>Email Address</th>
				<th>Address</th>
				<th>Profession</th>
				<th>Phone number</th>
				<th>City</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($datas as $data) : ?>
			<tr>
				<td class="text-success bg-success"><?php echo $data->name; ?></td>
				<td><?php echo $data->email; ?></td>
				<td><?php echo $data->address; ?></td>
				<td><?php echo $data->prof; ?></td>
				<td><?php echo $data->city; ?></td>
				<td><?php echo $data->phone; ?></td>
				<td><a href="<?php echo base_url(); ?>homeController/editData" class="btn btn-info btn-sm">Edit</a>&nbsp;<a href="" class="btn btn-danger btn-sm">Delete</a></td>
				
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
	</div>


<script src="<?php echo base_url(); ?>myAsset/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>