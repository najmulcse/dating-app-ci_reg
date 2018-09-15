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
	
	<table class="table table-bordered" style="background: #eee; border: solid 1px black;">
		<caption><h1>Information Book</h1> <a href="<?php echo base_url(); ?>homeController/addpage" class="pull-right btn btn-primary">Add another info</a></caption>
		<thead>
			<tr>
				<th  style="text-align: center;">Name</th>
				<th style="text-align: center;">Email Address</th>
				<th style="text-align: center;">Address</th>
				<th style="text-align: center;">Profession</th>
				<th style="text-align: center;">Phone number</th>
				<th style="text-align: center;">City</th>
				<th class="bg-success" style="text-align: center;">Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($datas as $data) : ?>
			<tr style="text-align: center;">
				<td class="text-success"><?php echo $data->name; ?></td>
				<td><?php echo $data->email; ?></td>
				<td><?php echo $data->address; ?></td>
				<td><?php echo $data->prof; ?></td>
				<td><?php echo $data->city; ?></td>
				<td><?php echo $data->phone; ?></td>
				<td class="bg-success">
					<a href="<?php echo base_url(); ?>homeController/updateData/" class="btn btn-info btn-sm">Edit</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					<a href="<?php echo base_url(); ?>homeController/deleteDataItem" class="btn btn-danger btn-sm">Delete</a>
				</td>
				
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
	</div>


<script src="<?php echo base_url(); ?>myAsset/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>