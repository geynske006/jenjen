<div id="menu">
	<div id="logoMenu">
		<a href="../index.php"><img src="../img/logo.png" alt=""></a>
	</div>
	<ul id="menuLinks">	
		<li><a href="../views/sales.php" <?php echo ($page == 'sales') ? "class='selected'" : "class='notSelected'"; ?> >salespoint</a></li>
		<li><a href="../views/interior.php" <?php echo ($page == 'interior') ? "class='selected'" : "class='notSelected'"; ?> >interiordesign</a></li>
		<li><a href="../views/contact.php" <?php echo ($page == 'contact') ? "class='selected'" : "class='notSelected'"; ?> >contact</a></li>
	</ul>	
</div>