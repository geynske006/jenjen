<?php 
	include_once '../templates/header.php';
	$page = 'contact';
	include_once '../templates/menu.php';
?>
	
<!-- Body comes here -->
<div id="contact">
	<div id="openingsuren">
		<h2>openingsuren:</h2>
		<div class="dagen">
			maandag <br>
			dinsdag <br>
			woensdag <br>
			donderdag <br>
			vrijdag <br>
			zaterdag <br>
			zondag <br>
		</div>
		<div class="uren">
			10-18u op afspraak, 14-18 open <br>
			<div class="gesloten">gesloten <br></div> 
			10-18u open <br>
			10-18u open, 14-18 open <br>
			10-18u open <br>
			10-17u open <br>
			<div class="gesloten">gesloten <br></div> 
		</div>
	</div>
	<?php 
		include_once '../templates/maps.php';
	 ?>
	<div id="winkelgegevens">
		<div id="titelGegevens"><img src="../img/logo.png" alt="logo bedrijf">interiordesign</div>
		<div id="andereGegevens">
			<div>Mechelsesteenweg 145</div>
			<div>1933 Sterrebeek</div>
			<div>02/687 64 93</div>
			<div>info@blitzinteriordesign.be</div>
			<div>BTW: 0832 349 179</div>		
		</div>
	</div>
</div>
<div id="info">
	<h2>info</h2>
	<div id="infoActueel">
		<div class="dot"></div> <div class="infoTekst">Braderiedagen 19 - 22 juni! Zeker komen!
		 20% op alle b&#233;c&#233; raamdecoratie
		</div>
		<div class="dot"></div> <div class="infoTekst">Opgelet: werken mechelsesteenweg omleiding via de oude keulseweg</div>
		<div class="dot"></div> <div class="infoTekstLast">Hups hups hups</div>
	</div>
</div>

<?php 
	include_once '../templates/footer.php';
?>