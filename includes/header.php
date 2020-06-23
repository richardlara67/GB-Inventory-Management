<?php
/**
 * The template for displaying the header
 *
 *
**/
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo($title); ?></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<div id="topheader">
		<nav class="navbar navbar-expand-lg navbar-dark primary-color">
			<a class="navbar-brand" href="">GB Inventory Management</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-5">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Use equipment <span class="sr-only">(current)</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="inventory_log.php">View inventory</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="update_log.php">Update inventory</a>
					</li>
				</ul>
			</div>
		</nav>	
	</div>
