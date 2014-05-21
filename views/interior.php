<?php 
	include_once '../templates/header.php';
	$page = 'interior';
	include_once '../templates/menu.php';
?>
	
<!-- Body comes here -->
<div class="pageContent">
	<h3 class="headers">selecteer een afbeelding om onze ontwerpen uitgebreider te bekijken</h3>
	<div class="img-sp">
		<?php 
			$dirB = "../img/sales/"; /*Directory set for bigger pics*/
			$imgB = glob($dirB . "*.jpg"); /*get all the filenames of the pics*/
			$fileCount = count($imgB);/*count all files in the pics-folder for later use*/

			$dirS = "../img/sales/s/"; /*directory for the thumbnails*/
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
		<a class='fancybox-sp' data-fancybox-group='gallery'   href='../img/sales/1.jpg'>
			<img class='afb' src='../img/sales/s/1.jpg' alt=''>
		</a>
	</div>
</div>
	<div class="aanbiedingMerken">
		<h4>Wanneer u voor ons kiest kunnen wij u volgende merken aanbieden:</h4>
		<div class="merknamen">B&#233;c&#233;, Toppoint, ABC rails, ROB, Art&#233;, Masureel, Khr&#244;ma, Daniel Helchter, Rasch, Live in, Berry alloc &#38; Balterio</div>
	</div>
<?php 
	include_once '../templates/fancybox.php';
	include_once '../templates/footer.php';
?>