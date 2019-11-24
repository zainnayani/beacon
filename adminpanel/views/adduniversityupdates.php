<!DOCTYPE html>
<html>
<head>
	<title>University - Admin Panel</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1> University Admin </h1>

				<form action="add_university_info" method="POST">
					<input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id') ?>">
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="">University Name</label>
					      <input type="text" name="uni_name" class="form-control" id="" placeholder="Shop Name">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="">Program Name</label>
					      <input type="text" name="prog_name" class="form-control" id="" placeholder="Shop Number">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="">Course Name</label>
					    <input type="text" name="course_name" class="form-control" id="" placeholder="Brand Name">
					  </div>
					  <div class="form-group">
					    <label for="inputAddress2">Enter Information Title</label>
					    <input type="text" name="info_title" class="form-control" id="" placeholder="Product Name">
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-12">
					      <label for="">Enter Information Description</label>
					      <input type="text" name="info_description" class="form-control" id="">
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