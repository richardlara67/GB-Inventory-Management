<?php 
$pagename = basename($_SERVER['PHP_SELF']);

$mainmenu = array(
	'index' => 'Use equipment',
	'inventory_log' => 'View inventory',
	'update_log' => 'Update log'
);

$pagename = str_replace('.php', '', $pagename);
?>

<div class="topheader">
	<nav class="navbar navbar-expand-lg navbar-dark primary-color">
	  <div class="container">
		<a class="navbar-brand" href="index.php">GB Inventory Management</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="main-menu">
		  <ul class="navbar-nav mr-auto">
			  <?php
			  foreach($mainmenu as $menpage => $menlabel) : ?>
			  <li class="nav-item">
				  <a <?php if($menpage == $pagename) {echo 'class="nav-link active"';} else {echo 'class="nav-link"';} ?> href="<?php echo $menpage; ?>.php"><?php echo $menlabel; ?></a>
			  </li>
			  <?php endforeach ?>
		  </ul>
		</div>
	   </div>
	</nav>
</div>

