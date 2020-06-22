<!DOCTYPE html>
<html>
<?php $title = 'Inventory Update'; ?>
<?php include('includes/head.php'); ?>	
<body>
	<?php include('includes/nav-bar.php'); ?>
	<div class="container text-center pt-5"><h1>Update Inventory Log</h1></div>
	<div class="container py-5">
		<form>
				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Equipment Code</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="inputEmail3" placeholder="Equipment Code">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-2 col-form-label">Quantity</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="inputPassword3" placeholder="Quantity">
					</div>
				</div>
				
			<div class="form-group row">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
			</div>
		</form>
	</div>


</body>
</html>