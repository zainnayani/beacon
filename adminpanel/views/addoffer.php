
<!DOCTYPE html>
<html>
<head>
	<title>Shop - Admin Panel</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
	
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1> Shop Admin </h1>
			</div>
			<div class="col-md-6">
				<a href="<?= base_url('shop/index') ?>" class="btn btn-primary" style="height: 50px; float: right;    margin: 10px 0 0 10px;"> View Offer </a>
				<a href="<?= base_url('auth/logout') ?>" class="btn btn-secondary" style="height: 50px; float: right;    margin: 10px 0 0 0;"> Logout </a>
			</div>		
			<div class="col-md-12">
				<form action="<?=base_url('shop/add_shop_offer')?>" method="POST" enctype="multipart/form-data">
					  <input type="hidden" name="user_id" value="<?=$this->session->userdata('user_id')?>">
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="">Shop Name</label>
					      <input type="text" name="shop_name" class="form-control" id="" placeholder="Shop Name">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="">Shop Number</label>
					      <input type="text" name="shop_no" class="form-control" id="" placeholder="Shop Number">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="">Brand Name</label>
					    <input type="text" name="brand_name" class="form-control" id="" placeholder="Brand Name">
					  </div>
					  <div class="form-group">
					    <label for="inputAddress2">Product Name</label>
					    <input type="text" name="product_name" class="form-control" id="" placeholder="Product Name">
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-12">
					      <label for="">Enter Offer Title</label>
					      <input type="text" name="offer_title" class="form-control" id="">
					    </div>
					  </div>  
					  <div class="form-row">
					  	<div class="form-group col-md-12">
					    <label for="">Enter Offer Description</label>
					    <textarea class="form-control" name="offer_description" id="" rows="3"></textarea>
					  </div>
					</div>
				  	<div class="form-row">
					  	<div class="form-group col-md-12">
					  
						    <div class="btn btn-primary btn-sm float-left">
						      <span>Choose file</span>
						      <input type="file" name="offer_img" id="offer_img" class="form-control">
						    </div>
						  
					    <!-- <textarea class="form-control" name="offer_description" id="" rows="3"></textarea> -->
					  </div>
					</div>
					

					  <button type="submit" class="btn btn-primary">Add Offer</button>
				</form>
			</div>
		</div>
	</div>



	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6	Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>