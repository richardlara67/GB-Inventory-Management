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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<title><?php echo($title); ?></title>
</head>
<body>
	<div class="header-container-wrapper">
		<!-- navigation bar -->
		<nav class="navbar navbar-expand-lg navbar-dark primary-color">
		  <div class="container">
			<a class="navbar-brand" href="index.php">GB Inventory Management</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="main-menu">
			  <ul class="navbar-nav mr-auto">
				  <?php include('includes/navigation.php'); ?>
			  </ul>
			</div>
		   </div>
		</nav>
	</div>
	<!-- end header wrapper -->
	<div class="body-container-wrapper container-fluid">
	
	
	
	
	
	
