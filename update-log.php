<?php 
$title = 'Inventory Update';
include('includes/header.php'); 
?>	
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


<?php
include('includes/footer.php');
?>