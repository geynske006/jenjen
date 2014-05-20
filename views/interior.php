<?php 
	include_once '../templates/header.php';
	$page = 'interior';
	include_once '../templates/menu.php';
?>
	
<!-- Body comes here -->
	<h3>selecteer een afbeelding om onze ontwerpen uitgebreider te bekijken</h3>
	<div class="img-sp">
		<a class='fancybox-sp' data-fancybox-group='gallery'   href='../img/sales/buitenvlag.jpg'>
			<img class='afb' src='../img/sales/buitenvlag.jpg' alt=''>
		</a>
		<?php 
			$dirB = "../img/sales/"; /*Directory set for bigger pics*/
			$imgB = glob($dirB . "*.jpg"); /*get all the filenames of the pics*/
			$fileCount = count($imgB);/*count all files in the pics-folder for later use*/

			$dirS = "../img/sales/"; /*directory for the thumbnails*/
			$imgS = glob($dirS . "*.jpg"); /*get all filenames. NOTE: needs to be exactly 
			the same as in the big folder or loop will not work correctly*/

			for ($i=0; $i < $fileCount; $i++) { /*Loop @ times the total of the files in folder*/
				$b = $imgB[$i]; /*put big pic name in var to use it in linking for gallery*/
				$s = $imgS[$i]; /*the same shizzle as above*/
				echo 	"<a class='fancybox-sp noShow' data-fancybox-group='gallery'   href='$b'>
							<img class='afb' src='$s' alt=''>
		    			</a>";
				}
		?>
	</div>
<?php 
	include_once '../templates/fancybox.php';
	include_once '../templates/footer.php';
?>