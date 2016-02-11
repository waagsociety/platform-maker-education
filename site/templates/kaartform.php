<?php snippet('header') ?>

  <main class="main defaultPage change-color" role="main">
    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>
  </main>

  <section class="contact">
	<div class="inner">
	<h1>Meld jouw activiteit aan</h1>

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
			<div class="radio-block left">
				<input id="school" class="left" type="radio" name="type" value="school"> <label class="left" for="school">School</label>
			</div>
			<div class="radio-block left">
				<input id="makerspace" class="left" type="radio" name="type" value="makerspace"> <label class="left" for="makerspace">Makerspace</label>
			</div>
			<div class="radio-block left">
				<input id="maker" class="left" type="radio" name="type" value="maker"> <label class="left" for="maker">Maker</label>
			</div>
		</div>

		<div class="input_block left">
			<input type="text" id="name" name="name" placeholder="Naam" required>
		</div>
		<div class="input_block left">
			<input type="text" id="contactpersoon" name="contactpersoon" placeholder="Contactpersoon">
		</div>
    <div class="input_block left">
      <input type="text" id="email" name="email" placeholder="E-mailadres">
    </div>
		<div class="input_block left">
			<input type="text" id="adres" name="adres" placeholder="Adres">
		</div>
		<div class="input_block left">
			<input type="text" id="website" name="website" placeholder="Website">
		</div>
		<div class="input_block left">
			<textarea type="text" id="bericht" name="bericht" rows="5" placeholder="Omschrijf jouw activiteit(en) maximaal 280 karakters"></textarea>
		</div>

		<button class="btn-2" type="submit" name="submit" value="Submit">Zet jezelf op de kaart</button>
	</form>
	</div>




</section>
<?php snippet('footer') ?>
