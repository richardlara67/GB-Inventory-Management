<?php 
$title = 'Inventory Log';
include('includes/header.php'); 
?>	

	<div class="container py-5">
		<table class="table table-striped">
		  <thead>
			<tr>
				<th scope="col">Employee ID</th>
				<th scope="col">Employee Name</th>
				<th scope="col">Date</th>
				<th scope="col">Equipment Code</th>
				<th scope="col">Equipment Description</th>
				<th scope="col">Check In</th>
				<th scope="col">Check out</th>
			</tr>
		  </thead>
		  <tbody>
		<?php 
			include_once 'dbh.php';
			$conn = openConn();
			$query = "SELECT * FROM inventory";
			$result = mysqli_query($conn, $query);

			while($row = mysqli_fetch_array($result)) 
			{ 
		?>
			<tr>
				<th scope="row"><?php echo $row['employee_id']; ?></th>
				<td><?php echo $row['employee_name']; ?></td>
				<td><?php echo $row['date_of_use']; ?></td>
				<td><?php echo $row['equip_code']; ?></td>
				<td><?php echo $row['equip_desc']; ?></td>
				<td><?php echo $row['check_in']; ?></td>
				<td><?php echo $row['check_out']; ?></td>
			</tr>

		<?php
			} 

		closeConn($conn);	  
		?>
		  </tbody>
		</table>
	</div>

<?php
include('includes/footer.php');
?>

