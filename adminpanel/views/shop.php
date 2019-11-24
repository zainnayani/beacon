<!DOCTYPE html>
<html>
<head>
	<title>Shop - Admin Panel</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<body>
		<div class="container">
			<div class="row">
					<h1> Offer List </h1>
					<a href="<?= base_url('shop/addoffer') ?>" class="btn btn-primary" style="height: 50px; float: right; margin: 1% 0 0 65%;"> Add Offer </a>
					<a href="<?= base_url('auth/logout') ?>" class="btn btn-secondary" style="height: 50px; float: right; margin: 1% 0 0 2%;"> Logout </a>
					<table class="table mt-2">
						<thead class="thead-dark">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Shop name</th>
								<th scope="col">Shop no</th>
								<th scope="col">Brand name</th>
								<th scope="col">Product name</th>
								<th scope="col">Offer title</th>
								<th scope="col">Offer description</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$count = 1;
							foreach ($shopData as $shop ) {
							?>
							<tr>
								<th scope="row"><?=$count?></th>
								<td><?=$shop->shop_name?></td>
								<td><?=$shop->shop_no?></td>
								<td><?=$shop->brand_name?></td>
								<td><?=$shop->product_name?></td>
								<td><?=$shop->offer_title?></td>
								<td><?=$shop->offer_description?></td>
							</tr>
							<?php
							$count++;
							}
							?>
						</tbody>
					</table>	
			</div>
		</div>



		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6	Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</body>
	</html>