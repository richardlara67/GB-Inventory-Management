<?php 
/* get file name and remove '.php' extension (e.g. home instead of home.php) */
$pagename = basename($_SERVER['PHP_SELF']);
$pagename = str_replace('.php', '', $pagename);

/* pages to include in the main menu */
$mainmenu = array(
	'index' => 'Use equipment',
	'inventory-log' => 'View inventory',
	'update-log' => 'Update log'
);

/* Main menu navigation loop */
foreach($mainmenu as $menpage => $menlabel) : ?>

<li class="nav-item">
	<a <?php if($menpage == $pagename) {echo 'class="nav-link active"';} else {echo 'class="nav-link"';} ?> href="<?php echo $menpage; ?>.php"><?php echo $menlabel; ?></a>
</li>

<?php endforeach ?>
		  
