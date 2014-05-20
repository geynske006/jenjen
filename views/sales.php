<?php 
	include_once '../templates/header.php';
	$page = 'sales';
	include_once '../templates/menu.php';
?>
	
<!-- Body comes here -->
<div id="sales">
	<h2>Op ons verkooppunt kan u volgende merken terugvinden</h2>
	<div id="merkenOpsomming">
		<h4>Salt &#38; Pepper</h4>
			<div class="img-sp">
				<?php 
					$dirB = "../img/interior/sp/"; /*Directory set for bigger pics*/
					$imgB = glob($dirB . "*.png"); /*get all the filenames of the pics*/
					$fileCount = count($imgB);/*count all files in the pics-folder for later use*/

					$dirS = "../img/interior/sp/"; /*directory for the thumbnails*/
					$imgS = glob($dirS . "*.png"); /*get all filenames. NOTE: needs to be exactly 
					the same as in the big folder or loop will not work correctly*/

					for ($i=0; $i < $fileCount; $i++) { /*Loop @ times the total of the files in folder*/
						$b = $imgB[$i]; /*put big pic name in var to use it in linking for gallery*/
						$s = $imgS[$i]; /*the same shizzle as above*/
						echo 	"<a class='fancybox-sp' data-fancybox-group='gallery' href='$b'>
									<img class='afb' src='$s' alt=''>
				    			</a>";
					}
				?>
			</div>
		<h4>Angelo rugs</h4>
			<div class="img-sp">
				<?php 
					$dirB = "../img/interior/angrug/"; /*Directory set for bigger pics*/
					$imgB = glob($dirB . "*.png"); /*get all the filenames of the pics*/
					$fileCount = count($imgB);/*count all files in the pics-folder for later use*/

					$dirS = "../img/interior/angrug/"; /*directory for the thumbnails*/
					$imgS = glob($dirS . "*.png"); /*get all filenames. NOTE: needs to be exactly 
					the same as in the big folder or loop will not work correctly*/

					for ($i=0; $i < $fileCount; $i++) { /*Loop @ times the total of the files in folder*/
						$b = $imgB[$i]; /*put big pic name in var to use it in linking for gallery*/
						$s = $imgS[$i]; /*the same shizzle as above*/
						echo 	"<a class='fancybox-angrug' data-fancybox-group='gallery'   href='$b'>
								<img class='afb' src='$s' alt=''/>
				    			</a>";
					}
				?>
			</div>
		<!-- <h4>Puylaert</h4> -->
		<!-- <h4>B&#233;c&#233;</h4> -->
		<h4>Eva Solo</h4>
			<div class="img-sp">
				<?php 
					$dirB = "../img/interior/esolo/"; /*Directory set for bigger pics*/
					$imgB = glob($dirB . "*.png"); /*get all the filenames of the pics*/
					$fileCount = count($imgB);/*count all files in the pics-folder for later use*/

					$dirS = "../img/interior/esolo/"; /*directory for the thumbnails*/
					$imgS = glob($dirS . "*.png"); /*get all filenames. NOTE: needs to be exactly 
					the same as in the big folder or loop will not work correctly*/

					for ($i=0; $i < $fileCount; $i++) { /*Loop @ times the total of the files in folder*/
						$b = $imgB[$i]; /*put big pic name in var to use it in linking for gallery*/
						$s = $imgS[$i]; /*the same shizzle as above*/
						echo 	"<a class='fancybox-esolo' data-fancybox-group='gallery'   href='$b'>
								<img class='afb' src='$s' alt=''/>
				    			</a>";
					}
				?>
			</div>
		<h4>Millefiori</h4>		
			<div class="img-sp">
				<?php 
					$dirB = "../img/interior/milfi/"; /*Directory set for bigger pics*/
					$imgB = glob($dirB . "*.png"); /*get all the filenames of the pics*/
					$fileCount = count($imgB);/*count all files in the pics-folder for later use*/

					$dirS = "../img/interior/milfi/"; /*directory for the thumbnails*/
					$imgS = glob($dirS . "*.png"); /*get all filenames. NOTE: needs to be exactly 
					the same as in the big folder or loop will not work correctly*/

					for ($i=0; $i < $fileCount; $i++) { /*Loop @ times the total of the files in folder*/
						$b = $imgB[$i]; /*put big pic name in var to use it in linking for gallery*/
						$s = $imgS[$i]; /*the same shizzle as above*/
						echo 	"<a class='fancybox-milfi' data-fancybox-group='gallery'   href='$b'>
								<img class='afb' src='$s' alt=''/>
				    			</a>";
					}
				?>
			</div>
	</div>
</div>
<?php 
	include_once '../templates/fancybox.php';
	include_once '../templates/footer.php';
?>