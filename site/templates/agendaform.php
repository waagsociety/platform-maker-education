<?php snippet('header') ?>

  <main class="main defaultPage" role="main">
    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>
  </main>

  <section class="contact">
	<div class="inner">
	<h1>Aanmelden voor een kaart</h1>
	<p>Contact Platform Maker Education</p>

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
			<input type="text" id="name" name="name" placeholder="Activiteit" required>
		</div>
		<div class="input_block left">
			<input type="text" id="datum" name="datum" placeholder="Datum">
		</div>
		<div class="input_block left">
			<input type="text" id="adres" name="adres" placeholder="Adres">
		</div>
    <div class="input_block left">
      <input type="text" id="email" name="email" placeholder="E-mailadres">
    </div>
		<div class="input_block left">
			<input type="text" id="website" name="website" placeholder="Website">
		</div>
		<div class="input_block left">
			<textarea type="text" id="bericht" name="bericht" rows="5" placeholder="Omschrijf jouw activiteit(en) maximaal 280 karakters"></textarea>
		</div>

		<button class="btn-2" type="submit" name="submit" value="Submit">Vraag je voucher aan</button>
	</form>
	</div>




</section>
<?php snippet('footer') ?>
