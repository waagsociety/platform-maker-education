<?php snippet('header') ?>

  <main class="main defaultPage change-color">
    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>
  </main>



  <section class="contact change-color">
	<div class="inner">
	<h1>Aanmelden voor een voucher</h1>

	<form method="post">
		<?php if($alert): ?>
			<div class="alert">
			<ul>
			  <?php foreach($alert as $message): ?>
			  <li><?php echo html($message) ?></li>
			  <?php endforeach ?>
			</ul>
			</div>
		<?php endif ?>
		<div class="input_block left">
			<input type="text" id="name" name="name" placeholder="Naam School" required>
		</div>

		<div class="input_block left">
			<!-- <label class="full-width-label">Type: [PO], [VO], anders</label> -->
			<div class="radio-block left">
				<input id="po" class="left" type="radio" name="type" value="po"> <label class="left" for="po">Primair onderwijs</label>
			</div>
			<div class="radio-block left">
				<input id="vo" class="left" type="radio" name="type" value="po"> <label class="left" for="vo">Voortgezet onderwijs</label>
			</div>
			<div class="radio-block left">
				<input id="anders" class="left" type="radio" name="type" value="po"> <label class="left" for="anders">Anders</label>
			</div>
			<div class="input_block input_anders left">
				<input type="text" id="type" name="type" placeholder="Namelijk">
			</div>
		</div>

		<div class="input_block left">
			<input type="text" id="adres" name="adres" placeholder="Adres">
		</div>
		<div class="input_block left">
			<input type="text" id="website" name="website" placeholder="website">
		</div>
		<div class="input_block left">
			<input type="text" id="brin" name="brin" placeholder="BRIN nummer">
		</div>
		<div class="input_block left">
			<input type="text" id="contactpersoon" name="contactpersoon" placeholder="Contactpersoon">
		</div>
		<div class="input_block left">
			<input type="text" id="email" name="email" placeholder="E-mailadres">
		</div>

    <h3 class="left full-width">Partner</h3>
		<div class="input_block left">
			<input type="text" id="partnername" name="partnername" placeholder="Naam partner">
		</div>
    <div class="input_block left">
      <h6 class="left full-width">Type</h6>
			<!-- <label class="full-width-label">Type: [PO], [VO], anders</label> -->
			<div class="radio-block left">
				<input id="makerspace" class="left" type="radio" name="typepartner" value="Makerspace"> <label class="left" for="makerspace">Makerspace</label>
			</div>
			<div class="radio-block left">
				<input id="maker" class="left" type="radio" name="typepartner" value="Maker"> <label class="left" for="maker">Maker</label>
			</div>
		</div>
		<div class="input_block left">
			<input type="text" id="partneradres" name="partneradres" placeholder="Adres partner">
		</div>
		<div class="input_block left">
			<input type="text" id="partnerwebsite" name="partnerwebsite" placeholder="Website partner">
		</div>
		<div class="input_block left">
			<input type="text" id="partnerkvk" name="partnerkvk" placeholder="KVK partner">
		</div>
		<div class="input_block left">
			<input type="text" id="partnercontact" name="partnercontact" placeholder="Contactpersoon partner">
		</div>
		<div class="input_block left">
			<input type="text" id="partneremail" name="partneremail" placeholder="E-mail partner">
		</div>



    <h3 class="left full-width">Activiteit</h3>
    <div class="input_block left">
      <h6 class="left full-width">Gewenste activiteit</h6>
			<!-- <label class="full-width-label">Type: [PO], [VO], anders</label> -->
			<div class="radio-block left">
				<input id="workshop" class="left" type="radio" name="typeactiviteit" value="workshop"> <label class="left" for="workshop">Workshop €500,-</label>
			</div>
			<div class="radio-block left">
				<input id="presentatie" class="left" type="radio" name="typeactiviteit" value="presentatie"> <label class="left" for="presentatie">Presentatie €250,-</label>
			</div>
		</div>
		<div class="input_block left">
			<input type="text" id="activiteitbijdrage" name="activiteitbijdrage" placeholder="Eigen bijdrage">
		</div>
    <div class="input_block left voor-wie">
      <h6 class="left full-width">Voor wie?</h6>
			<!-- <label class="full-width-label">Type: [PO], [VO], anders</label> -->
			<div class="radio-block left">
				<input id="leerkrachten" class="left" type="radio" name="voorwie" value="leerkrachten"> <label class="left" for="leerkrachten">Leerkrachten / Docenten</label>
			</div>
			<div class="radio-block left">
				<input id="leerlingen" class="left" type="radio" name="voorwie" value="leerlingen"> <label class="left" for="leerlingen">Leerlingen</label>
			</div>
		</div>
		<div class="input_block left">
			<input type="text" id="activiteitbeschrijving" name="activiteitbeschrijving" placeholder="Wat gaan jullie doen? maximaal 200 woorden">
		</div>

		<button class="btn-2" type="submit" name="submit" value="Submit">Vraag je voucher aan</button>
	</form>
	</div>




</section>
<?php snippet('footer') ?>
