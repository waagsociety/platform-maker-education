<?php snippet('header') ?>

  <main class="main defaultPage" role="main">
    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>
  </main>



    <section class="contact">
	<div class="inner">
	<h1>Aanmelden voor een voucher</h1>
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

		<button class="btn-2" type="submit" name="submit" value="Submit">Vraag je voucher aan</button>
	</form>
	</div>



	
</section>
<?php snippet('footer') ?>