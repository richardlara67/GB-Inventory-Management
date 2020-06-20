
<?php
	include_once 'dbh.php';

	$eid = $_POST['employeeID'];
	$ename = $_POST['employeeName'];
	$dou = $_POST['date'];
	$ec = $_POST['equipmentCode'];
	$in = $_POST['actionType'];
	$out = $_POST['actionType'];


	$sql = "INSERT INTO inventory (employee_id, employee_name, date_of_use, check_out, check_in) VALUES ('$eid', $ename', '$dou', '$ec', '$in', '$out');";

	mysqli_query($conn, $sql);

	header("Location: ../index.php?inventory_update=success");